[![Build Status](https://github.com/retailcrm/api-client-php/workflows/CI/badge.svg)](https://github.com/retailcrm/api-client-php/actions)
[![Coverage](https://img.shields.io/codecov/c/gh/retailcrm/api-client-php/master.svg?logo=codecov&logoColor=white)](https://codecov.io/gh/retailcrm/api-client-php)
[![Latest stable](https://img.shields.io/packagist/v/retailcrm/api-client-php.svg)](https://packagist.org/packages/retailcrm/api-client-php)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/retailcrm/api-client-php.svg?logo=php&logoColor=white)](https://packagist.org/packages/retailcrm/api-client-php)


# RetailCRM API PHP client

This is the PHP RetailCRM API client. This library allows using of the actual API version. [API documentation](http://retailcrm.github.io/api-client-php)

# Table of contents

* [Requirements](#requirements)
* [Installation](#installation)
* [Client structure](doc/structure.md)
    + [Design principles](doc/structure.md#design-principles)
    + [Resource groups](doc/structure.md#resource-groups)
* [Usage](doc/usage/usage.md)
    + [Instantiation](doc/usage/instantiation.md)
    + [Sending a request](doc/usage/sending_a_request.md)
        + [Choosing correct resource group, DTOs, and method](doc/usage/sending_a_request.md#choosing-correct-resource-group-dtos-and-method)
        + [Sending a request](doc/usage/sending_a_request.md#sending-a-request)
        + [Dealing with exceptions](doc/usage/sending_a_request.md#dealing-with-exceptions)
    + [Error handling](doc/usage/error_handling.md)
    + [Examples](doc/usage/examples)
        + [How to create an order](doc/usage/examples/create_order.md)
        + [How to receive the list of orders](doc/usage/examples/fetch_orders.md)
        + [How to handle all Client's exceptions](doc/usage/examples/complete_error_handling_example.md)
    + [Event handling](doc/usage/event_handing.md)
* [Troubleshooting](doc/troubleshooting.md)
* [Notes](#notes)

## Requirements

* PHP 7.3 and above
* PHP's cURL support
* PHP's JSON support
* Any HTTP-client compatible with PSR-18 (covered by the installation instructions).
* Any HTTP factories implementation compatible with PSR-17 (covered by the installation instructions).
* Any HTTP messages implementation compatible with PSR-7 (covered by the installation instructions).
* Other dependencies listed in the `composer.json` (covered by the installation instructions)

## Installation

Follow those steps to install the library:

1. Download and install [Composer](https://getcomposer.org/download/) package manager.
2. Install the library from the Packagist by executing this command:
```bash
composer require retailcrm/api-client-php:"~6.0"
```
During the installation, you'll see a message which will look like this:
```sh
The following packages have new compilation tasks:
 - retailcrm/api-client-php has 1 task

Allow these packages to compile? ([y]es, [a]lways, [n]o, [l]ist, [h]elp)
```
That's because the Client uses code generation to speed up serialization and deserialization of models in production. This code should be generated during installation or update. Without that code, the library itself will not work at all.

Just type `y` here and press Enter. The DTO cache will be generated after that.

3. **Optional.** Add these params into the `extra` segment of your `composer.json` if you want to execute code generation automatically after library installation or update. This step is not optional if you have configured CI/CD pipeline for your project.
```json
"compile-mode": "whitelist",
"compile-whitelist": ["retailcrm/api-client-php"]
```

Your `composer.json` file will look like this:
```json
{
    "name": "author/some-project",
    "description": "Description of the project.",
    "type": "project",
    "license": "MIT",
    "require": {
        "php": ">=7.3.0",
        "symfony/http-client": "^5.2",
        "nyholm/psr7": "^1.4",
        "retailcrm/api-client-php": "~6.0"
    },
    "extra": {
        "compile-mode": "whitelist",
        "compile-whitelist": ["retailcrm/api-client-php"]
    }
}
```

4. Include the autoloader if it's not included, or you didn't use Composer before.
```php
require 'path/to/vendor/autoload.php';
```

Replace `path/to/vendor/autoload.php` with the correct path to Composer's `autoload.php`.

**Note:** API client uses `php-http/curl-client` and `nyholm/psr7` as a PSR-18, PSR-17 and PSR-7 implementation.
You can replace those implementations during installation by installing this library with the implementation of your choice, like this:
```sh
composer require symfony/http-client guzzlehttp/psr7 retailcrm/api-client-php:"~6.0"
```

## Notes

This library uses HTTPlug abstractions. Visit [official documentation](http://docs.php-http.org/en/latest/httplug/users.html) to learn more about it.
