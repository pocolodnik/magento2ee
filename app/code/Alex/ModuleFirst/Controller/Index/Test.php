<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 28.01.19
 * Time: 1:23
 */

namespace Alex\ModuleFirst\Controller\Index;

use Magento\Framework\App\Action\Action;


class Test
    extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        echo "Hello world";
    }

}