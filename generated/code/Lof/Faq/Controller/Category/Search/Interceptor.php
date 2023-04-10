<?php
namespace Lof\Faq\Controller\Category\Search;

/**
 * Interceptor class for @see \Lof\Faq\Controller\Category\Search
 */
class Interceptor extends \Lof\Faq\Controller\Category\Search implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Store\Model\StoreManager $storeManager, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Lof\Faq\Helper\Data $faqHelper, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory, \Lof\Faq\Model\Question $questionFactory, \Lof\Faq\Model\Category $categoryFactory, \Magento\Framework\App\ResourceConnection $resource, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $resultPageFactory, $faqHelper, $resultLayoutFactory, $resultForwardFactory, $questionFactory, $categoryFactory, $resource, $registry);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
