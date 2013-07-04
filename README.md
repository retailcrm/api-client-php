IntaroCRM REST API client
=================

PHP Client for [IntaroCRM REST API](http://docs.intarocrm.ru/rest-api/).

Requirements
------------

* PHP version 5.2 and above
* PHP-extension CURL

Installation
------------

Add IntaroCRM REST API client in your composer.json:

```js
{
    "require": {
        "intaro/crm-rest-api": "1.0.*"
    }
}
```
Usage
------------

### Create API clent class

``` php

    $crmApiClient = new \IntaroCrmRestApi('http://demo.intarocrm.ru', 'T9DMPvuNt7FQJMszHUdG8Fkt6xHsqngH');

```
Constructor arguments are:

1. IntaroCRM url address.
2. Your site API Token.

