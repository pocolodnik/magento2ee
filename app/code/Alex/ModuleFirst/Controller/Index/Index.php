<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 28.01.19
 * Time: 1:23
 */

namespace Alex\ModuleFirst\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;


class Index extends Action
{
    /**
     * @var PageFactory
     */
    private $pageFactory;
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

    public function execute()
    {
        return $this->pageFactory->create();
    }

}