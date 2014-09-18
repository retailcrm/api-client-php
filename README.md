IntaroCRM REST API client
=================

PHP Client for [IntaroCRM REST API](http://docs.intarocrm.ru/rest-api/).

Requirements
------------

* PHP version 5.3 and above
* PHP-extension CURL

Installation
------------

1) Install [composer](https://getcomposer.org/download/) into the project directory.

2) Add IntaroCRM REST API client in your composer.json:
```js
{
    "require": {
        "intarocrm/rest-api-client": "1.3.*"
    }
}
```
3) Use command `php composer.phar update intarocrm/rest-api-client` to install new vendor into `vendor/` folder.



Usage
------------

### Create API clent class

``` php

$crmApiClient = new \IntaroCrm\RestApi(
    'https://demo.intarocrm.ru',
    'T9DMPvuNt7FQJMszHUdG8Fkt6xHsqngH'
);
```
Constructor arguments are:

1. Your IntaroCRM acount URL-address
2. Your site API Token

### Example: get order types list

``` php

try {
    $orderTypes = $crmApiClient->orderTypesList();
}
catch (\IntaroCrm\Exception\CurlException $e) {
    //$logger->addError('orderTypesList: connection error');
}
catch (\IntaroCrm\Exception\ApiException $e) {
    //$logger->addError('orderTypesList: ' . $e->getMessage());
}

```
