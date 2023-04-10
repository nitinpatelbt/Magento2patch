<?php
namespace Lof\Faq\Block\Adminhtml\Tag\Edit\Tab\Main;

/**
 * Interceptor class for @see \Lof\Faq\Block\Adminhtml\Tag\Edit\Tab\Main
 */
class Interceptor extends \Lof\Faq\Block\Adminhtml\Tag\Edit\Tab\Main implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig, \Magento\Store\Model\System\Store $systemStore, \Magento\Framework\View\Model\PageLayout\Config\BuilderInterface $pageLayoutBuilder, \Lof\Faq\Model\ResourceModel\Tag\Collection $categoryCollection, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $wysiwygConfig, $systemStore, $pageLayoutBuilder, $categoryCollection, $data);
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
