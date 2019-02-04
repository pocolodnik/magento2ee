<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 30.01.19
 * Time: 19:50
 */

namespace Alex\ModuleA\Block;


use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    public function getHello()
    {
        return __("Hi, I am Module A!!!");
    }
    public function getChildHello()
    {
        return __("Hi, I am Child of Module A!!!");
    }
}