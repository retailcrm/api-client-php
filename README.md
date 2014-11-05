PHP client for retailCRM API
=================

PHP client for [retailCRM API](http://www.retailcrm.ru/docs/Разработчики/Разработчики#api).

Requirements
------------

* PHP version 5.3 and above
* PHP-extension CURL

Installation
------------

1) Install [composer](https://getcomposer.org/download/) into the project directory.

2) Run:
```bash
composer require retailcrm/api-client-php 3.0
```

Usage
-----

Example of the usage:
```php

$client = new \RetailCrm\ApiClient(
    'https://demo.intarocrm.ru',
    'T9DMPvuNt7FQJMszHUdG8Fkt6xHsqngH'
);

try {
    $response = $client->ordersGet('M-2342');
} catch (\RetailCrm\Exception\CurlException $e) {
    echo "CRM connection error: " . $e->getMessage();
}

if ($response->isSuccessful()) {
    echo $response->order['totalSumm'];
    // or $response['order']['totalSumm'];
    // or 
    //    $order = $response->getOrder();
    //    $order['totalSumm'];
}
```