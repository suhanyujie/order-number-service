<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 2019/8/12
 * Time: 13:25
 */

namespace ONS;


use ONS\Logic\OrderLogic;

class Order
{
    public function getOrderNumber()
    {
        return OrderLogic::getOrderNumber();
    }
}
