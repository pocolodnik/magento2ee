<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 30.01.19
 * Time: 19:50
 */

namespace Alex\ModuleFirst\Block;


use Magento\Framework\View\Element\Template;

class Hellopeople extends Template
{
    public function getHelloWorld()
    {
        return __("Hello people!!!");
    }
}