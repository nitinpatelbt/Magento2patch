<?php
namespace Lof\Faq\Block\Adminhtml\Category\Edit\Tab\Design;

/**
 * Interceptor class for @see \Lof\Faq\Block\Adminhtml\Category\Edit\Tab\Design
 */
class Interceptor extends \Lof\Faq\Block\Adminhtml\Category\Edit\Tab\Design implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Lof\Faq\Model\Config\Source\AnimationType $animate, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $animate, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }
}
