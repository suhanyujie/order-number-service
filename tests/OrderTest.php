<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 2019/8/12
 * Time: 14:08
 */

namespace OTest;


use PHPUnit\Framework\TestCase;
use ONS\Order;

class OrderTest extends TestCase
{
    public function testgetOrderNumber()
    {
        $orderNumber = (new Order)->getOrderNumber();
        $this->assertTrue(strpos($orderNumber, date('Ymd')) !== false);
    }
}
