<?php
namespace Lof\Faq\Controller\Product\Add;

/**
 * Interceptor class for @see \Lof\Faq\Controller\Product\Add
 */
class Interceptor extends \Lof\Faq\Controller\Product\Add implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Store\Model\StoreManager $storeManager, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Lof\Faq\Helper\Data $faqHelper, \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory, \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder, \Magento\Framework\View\LayoutInterface $layout, \Lof\Faq\Model\Question $questionFactory)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $resultPageFactory, $faqHelper, $inlineTranslation, $resultLayoutFactory, $resultForwardFactory, $transportBuilder, $layout, $questionFactory);
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
