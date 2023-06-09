<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Smile ElasticSuite to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile\ElasticsuiteVirtualCategory
 * @author    Romain Ruaud <romain.ruaud@smile.fr>
 * @copyright 2021 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */

namespace Smile\ElasticsuiteVirtualCategory\Helper;

use Magento\Catalog\Api\Data\CategoryInterface;

/**
 * Smile Elasticsuite virtual category cache helper.
 *
 * @category Smile
 * @package  Smile\ElasticsuiteVirtualCategory
 * @author   Romain Ruaud <romain.ruaud@smile.fr>
 */
class Rule
{
    /**
     * @var \Magento\Framework\App\CacheInterface
     */
    private $cache;

    /**
     * @var \Magento\Customer\Model\Session
     */
    private $customerSession;

    /**
     * Provider constructor.
     *
     * @param \Magento\Framework\App\CacheInterface $cache           Cache.
     * @param \Magento\Customer\Model\Session       $customerSession Customer session.
     */
    public function __construct(
        \Magento\Framework\App\CacheInterface $cache,
        \Magento\Customer\Model\Session $customerSession
    ) {
        $this->cache = $cache;
        $this->customerSession = $customerSession;
    }

    /**
     * Load data from the cache if exist. Use a callback on the current category if not yet present into the cache.
     * @SuppressWarnings(PHPMD.StaticAccess)
     *
     * @param CategoryInterface $category Category
     * @param string            $callback Name of the virtual rule method to be used for actual loading.
     *
     * @return mixed
     */
    public function loadUsingCache(CategoryInterface $category, $callback)
    {
        \Magento\Framework\Profiler::start('ES:Virtual Rule ' . $callback);
        $cacheKey = implode('|', [$callback, $category->getStoreId(), $category->getId(), $this->customerSession->getCustomerGroupId()]);

        $data = $this->cache->load($cacheKey);

        // Due to the fact we serialize/unserialize completely pre-built queries as object.
        // We cannot use any implementation of SerializerInterface.
        if ($data !== false) {
            $data = unserialize($data);
        }

        if ($data === false) {
            $virtualRule = $category->getVirtualRule();
            $data        = call_user_func_array([$virtualRule, $callback], [$category]);
            $cacheData   = serialize($data);
            $this->cache->save($cacheData, $cacheKey, $category->getCacheTags());
        }
        \Magento\Framework\Profiler::stop('ES:Virtual Rule ' . $callback);

        return $data;
    }
}
