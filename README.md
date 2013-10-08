IntaroCRM REST API client
=================

PHP Client for [IntaroCRM REST API](http://docs.intarocrm.ru/rest-api/).

Requirements
------------

* PHP version 5.3 and above
* PHP-extension CURL

Installation
------------

Add IntaroCRM REST API client in your composer.json:

```js
{
    "require": {
        "intarocrm/rest-api-client": "dev-master"
    }
}
```
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

$orderTypes = $crmApiClient->orderTypesList();

if (!is_null($crmApiClient->getLastError()))
    return $crmApiClient->getLastError();
```
