<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 28.01.19
 * Time: 1:23
 */

namespace Alex\AlexAdminPage\Controller\Adminhtml\HelloWorld;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\Result\Page;


class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $pageFactory;
    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct
    (
        Context $context,
        PageFactory $pageFactory
    )
    {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);

    }

    /**
     * @return Page
     */

    public function execute()
    {
        return $this->pageFactory->create();
    }

}