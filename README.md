# order-number-service
* 一个简单示例。从 composer 包到单元测试，到 CI

## install
* `composer require 'suhanyujie/order-number-service':'dev-master'`

## API
### 获取订单号
```php
$orderNumber = (new Order)->getOrderNumber();
$this->assertTrue(strpos($orderNumber, date('Ymd')) !== false);
```
