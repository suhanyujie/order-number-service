<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 2019/8/12
 * Time: 13:31
 */

namespace ONS\Logic;


class OrderLogic
{
    public static function getOrderNumber()
    {
        return date('YmdHis').substr(implode(NULL, array_map('ord', str_split(substr(uniqid('',true), 7, 17), 1))), 0, 6);
    }
}
