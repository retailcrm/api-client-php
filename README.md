PHP client for retailCRM API
=================

PHP client for [retailCRM API](http://www.retailcrm.ru/docs/Разработчики/Разработчики#api).

Requirements
------------

* PHP version 5.3 and above
* PHP-extension CURL

Installation
------------

1) Install [composer](https://getcomposer.org/download/)

2) Run:
```bash
composer require retailcrm/api-client-php ~3.0.0
```

Usage
-----

Example of the receipt of order:
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
} else {
    echo sprintf(
        "Error of the order receipt: [Code %s] %s", 
        $response->getStatusCode(),
        $response->getErrorMsg()
    );
}
```

Example of the order creating:
```php

$client = new \RetailCrm\ApiClient(
    'https://demo.intarocrm.ru',
    'T9DMPvuNt7FQJMszHUdG8Fkt6xHsqngH'
);

try {
    $response = $client->ordersCreate(array(
        'externalId' => 'some-shop-order-id',
        'firstName' => 'Vasily',
        'lastName' => 'Pupkin',
        'items' => array(
            //...
        ),
        'delivery' => array(
            'code' => 'russian-post',
        )
    ));
} catch (\RetailCrm\Exception\CurlException $e) {
    echo "CRM connection error: " . $e->getMessage();
}

if ($response->isSuccessful() && 201 === $response->getStatusCode()) {
    echo 'Order created successfully! Order ID in CRM = ' . $response->id;
        // or $response['id'];
        // or $response->getId();
} else {
    echo sprintf(
        "Error of the order creating: [Code %s] %s", 
        $response->getStatusCode(),
        $response->getErrorMsg()
    );
}
```
