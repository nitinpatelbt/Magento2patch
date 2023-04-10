<?php
namespace Lof\Faq\Controller\Router;

/**
 * Interceptor class for @see \Lof\Faq\Controller\Router
 */
class Interceptor extends \Lof\Faq\Controller\Router implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory, \Magento\Framework\App\ResponseInterface $response, \Magento\Framework\Event\ManagerInterface $eventManager, \Lof\Faq\Model\Question $questionFactory, \Lof\Faq\Model\Category $categoryFactory, \Lof\Faq\Helper\Data $faqHelper, \Lof\Faq\Model\Tag $tag, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($actionFactory, $response, $eventManager, $questionFactory, $categoryFactory, $faqHelper, $tag, $storeManager, $registry);
    }

    /**
     * {@inheritdoc}
     */
    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'match');
        return $pluginInfo ? $this->___callPlugins('match', func_get_args(), $pluginInfo) : parent::match($request);
    }
}
