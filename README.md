[![Build Status](https://github.com/retailcrm/api-client-php/workflows/Continuous+Integration/badge.svg)](https://github.com/retailcrm/api-client-php/actions)
[![Coverage](https://img.shields.io/codecov/c/gh/retailcrm/api-client-php/master.svg?logo=codecov&logoColor=white)](https://codecov.io/gh/retailcrm/api-client-php)
[![Latest stable](https://img.shields.io/packagist/v/retailcrm/api-client-php.svg)](https://packagist.org/packages/retailcrm/api-client-php)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/retailcrm/api-client-php.svg?logo=php&logoColor=white)](https://packagist.org/packages/retailcrm/api-client-php)


# [DRAFT] RetailCRM API PHP client

This is php RetailCRM API client. This library allows to use actual API version. [API documentation](http://retailcrm.github.io/api-client-php)

## Requirements

* PHP 7.3 and above
* PHP's cURL support
* PHP's JSON support
* Any HTTP-client compatible with PSR-18.  
* Any HTTP factories implementation compatible with PSR-17.  
* Any HTTP messages implementation compatible with PSR-7.  
* Other dependencies listed in the `composer.json`

## Install

1) Get [composer](https://getcomposer.org/download/)

2) Run into your project directory:
```bash
composer require php-http/curl-client nyholm/psr7 php-http/message retailcrm/api-client-php:"~6.0"
```

If you have not used `composer` before, include an autoloader into your project.
```php
require 'path/to/vendor/autoload.php';
```

## Usage

> TODO

This library uses HTTPlug HTTP client abstraction. Visit [official documentation](http://docs.php-http.org/en/latest/httplug/users.html) to learn more about it.
