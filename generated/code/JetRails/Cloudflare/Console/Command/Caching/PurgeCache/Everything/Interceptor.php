<?php
namespace JetRails\Cloudflare\Console\Command\Caching\PurgeCache\Everything;

/**
 * Interceptor class for @see \JetRails\Cloudflare\Console\Command\Caching\PurgeCache\Everything
 */
class Interceptor extends \JetRails\Cloudflare\Console\Command\Caching\PurgeCache\Everything implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\StoreManagerInterface $storeManager, \JetRails\Cloudflare\Model\Adminhtml\Api\Caching\PurgeCache $model)
    {
        $this->___init();
        parent::__construct($storeManager, $model);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
