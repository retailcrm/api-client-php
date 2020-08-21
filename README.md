[![Build Status](https://img.shields.io/travis/retailcrm/api-client-php/master.svg?style=flat-square)](https://travis-ci.org/retailcrm/api-client-php)
[![Covarage](https://img.shields.io/codecov/c/gh/retailcrm/api-client-php/master.svg?style=flat-square)](https://codecov.io/gh/retailcrm/api-client-php)
[![Latest stable](https://img.shields.io/packagist/v/retailcrm/api-client-php.svg?style=flat-square)](https://packagist.org/packages/retailcrm/api-client-php)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/retailcrm/api-client-php.svg?style=flat-square)](https://packagist.org/packages/retailcrm/api-client-php)


# retailCRM API PHP client

This is php retailCRM API client. This library allows to use all available API versions. [API documentation](http://retailcrm.github.io/api-client-php)

## Requirements

* PHP 5.4 and above
* PHP's cURL support
* PHP's JSON support
* PHP's Fileinfo support

## Install

1) Get [composer](https://getcomposer.org/download/)

2) Run into your project directory:
```bash
composer require retailcrm/api-client-php ~5.0
```

If you have not used `composer` before, include autoloader into your project.
```php
require 'path/to/vendor/autoload.php';
```

## Usage

### Get order
```php
$client = new \RetailCrm\ApiClient(
    'https://demo.retailcrm.ru',
    'T9DMPvuNt7FQJMszHUdG8Fkt6xHsqngH',
    \RetailCrm\ApiClient::V5
);

try {
    $response = $client->request->ordersGet('M-2342');
} catch (\RetailCrm\Exception\CurlException $e) {
    echo "Connection error: " . $e->getMessage();
}

if ($response->isSuccessful()) {
    echo $response->order['totalSumm'];
    // or $response['order']['totalSumm'];
    // or
    //    $order = $response->getOrder();
    //    $order['totalSumm'];
} else {
    echo sprintf(
        "Error: [HTTP-code %s] %s",
        $response->getStatusCode(),
        $response->getErrorMsg()
    );

    // error details
    //if (isset($response['errors'])) {
    //    print_r($response['errors']);
    //}
}
```

### Create order
```php

$client = new \RetailCrm\ApiClient(
    'https://demo.retailcrm.ru',
    'T9DMPvuNt7FQJMszHUdG8Fkt6xHsqngH',
    \RetailCrm\ApiClient::V4
);

try {
    $response = $client->request->ordersCreate(array(
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
    echo "Connection error: " . $e->getMessage();
}

if ($response->isSuccessful() && 201 === $response->getStatusCode()) {
    echo 'Order successfully created. Order ID into retailCRM = ' . $response->id;
        // or $response['id'];
        // or $response->getId();
} else {
    echo sprintf(
        "Error: [HTTP-code %s] %s",
        $response->getStatusCode(),
        $response->getErrorMsg()
    );

    // error details
    //if (isset($response['errors'])) {
    //    print_r($response['errors']);
    //}
}
```

### Set custom headers and client timeout
```php
$client = new \RetailCrm\ApiClient(
    'https://demo.retailcrm.ru',
    'T9DMPvuNt7FQJMszHUdG8Fkt6xHsqngH',
    \RetailCrm\ApiClient::V4
);

$options = new \RetailCrm\Http\RequestOptions(
    ['X-Rlimit-Token' => 'example_token'], // array of custom headers
    10 // client timeout (in seconds)
);

$client->request->setOptions($options);
```


### Documentation

* [English](https://help.retailcrm.pro/Developers)
* [Russian](https://help.retailcrm.ru/Developers)
