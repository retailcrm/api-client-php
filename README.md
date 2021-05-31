[![Build Status](https://github.com/retailcrm/api-client-php/workflows/CI/badge.svg)](https://github.com/retailcrm/api-client-php/actions)
[![Coverage](https://img.shields.io/codecov/c/gh/retailcrm/api-client-php/master.svg?logo=codecov&logoColor=white)](https://codecov.io/gh/retailcrm/api-client-php)
[![Latest stable](https://img.shields.io/packagist/v/retailcrm/api-client-php.svg)](https://packagist.org/packages/retailcrm/api-client-php)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/retailcrm/api-client-php.svg?logo=php&logoColor=white)](https://packagist.org/packages/retailcrm/api-client-php)


# RetailCRM API PHP client

This is the PHP RetailCRM API client. This library allows using of the actual API version.  
You can find more info in the [documentation](doc/index.md).

# Table of contents

* [Requirements](#requirements)
* [Installation](#installation)
* [Usage](#usage)
* [Examples](#examples)
* [Notes](#notes)
* [Documentation](doc/index.md)

## Requirements

* PHP 7.3 and above
* PHP's cURL support
* PHP's JSON support
* Any HTTP client compatible with PSR-18 (covered by the installation instructions).
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

If you skipped the compilation task - don't worry, it can be executed manually at any time with this command:
```sh
composer compile --all
```

3. **Optional.** Disable compilation prompt that you have seen in the previous step. Run this command to do that:

```sh
./vendor/bin/retailcrm-client compiler:prompt
```

Replace `vendor/bin` with your bin directory path if it's different from the default. You can find more information about this step in the [documentation](doc/compilation_prompt.md).

**Note:** You should not skip this step if your application is using CI/CD pipeline because the interactive terminal is not available
in that environment which will result in failure during the dependencies installation.

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

More information about that can be found in the [documentation](doc/customization/different_psr_implementations.md).

## Usage

Firstly, you should initialize the Client. The easiest way to do this is to use the `SimpleClientFactory`:

```php
$client = \RetailCrm\Api\Factory\SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
```

The client is separated into several resource groups, all of which are accessible through the Client's public properties.
You can call API methods from those groups like this:

```php
$client->api->credentials();
```

For example, you can retrieve the customers list:

```php
$client = \RetailCrm\Api\Factory\SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
$response = $client->customers->list();
```

Or the orders list:

```php
$client = \RetailCrm\Api\Factory\SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
$response = $client->orders->list();
```

To handle errors you must use two types of exceptions:
* `RetailCrm\Api\Interfaces\ClientExceptionInterface` for the network or other runtime errors.
* `RetailCrm\Api\Interfaces\ApiExceptionInterface` for the errors from the API.

An example of error handling can be found in the next section of this document.

Each resource group is responsible for the corresponding API section. For example, `costs` resource group provide methods
for costs manipulation and `loyalty` resource group allows interacting with loyalty programs, accounts, bonuses, etc.

Use annotations to determine which DTOs you need for sending the requests. If annotations are not provided by your IDE - you'll
need to look up how to configure it. It'll ease your work with this (and any other) library a lot.

More information about the usage including examples can be found in the [documentation](doc/usage/usage.md).

## Examples

Listing orders:

```php
<?php

use RetailCrm\Api\Interfaces\ClientExceptionInterface;
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate;

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');

try {
    $response = $client->orders->list();
} catch (ApiExceptionInterface $exception) {
    echo $exception; // Every ApiExceptionInterface instance should implement __toString() method.
    exit(-1);
} catch (ClientExceptionInterface $exception) {
    echo 'Client error: ' . $exception->getMessage() . PHP_EOL;
    echo $exception->getTraceAsString();
    exit(-1);
}

foreach ($response->orders as $order) {
    printf("Order ID: %d\n", $order->id);
    printf("First name: %s\n", $order->firstName);
    printf("Last name: %s\n", $order->lastName);
    printf("Patronymic: %s\n", $order->patronymic);
    printf("Phone #1: %s\n", $order->phone);
    printf("Phone #2: %s\n", $order->additionalPhone);
    printf("E-Mail: %s\n", $order->email);

    if ($order->customer instanceof CustomerCorporate) {
        echo "Customer type: corporate\n";
    } else {
        echo "Customer type: individual\n";
    }

    foreach ($order->items as $item) {
        echo PHP_EOL;

        printf("Product name: %s\n", $item->productName);
        printf("Quantity: %d\n", $item->quantity);
        printf("Initial price: %f\n", $item->initialPrice);
    }

    echo PHP_EOL;

    printf("Discount: %f\n", $order->discountManualAmount);
    printf("Total: %f\n", $order->totalSumm);

    echo PHP_EOL;
}
```

Fetching a specific order by it's ID:

```php
<?php

use RetailCrm\Api\Interfaces\ClientExceptionInterface;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Enum\ByIdentifier;
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Model\Request\BySiteRequest;

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');

try {
    $response = $client->orders->get(1234, new BySiteRequest(ByIdentifier::ID, 'site'));
} catch (ApiExceptionInterface $exception) {
    echo $exception; // Every ApiExceptionInterface instance should implement __toString() method.
    exit(-1);
} catch (ClientExceptionInterface $exception) {
    echo 'Client error: ' . $exception->getMessage() . PHP_EOL;
    echo $exception->getTraceAsString();
    exit(-1);
}

echo 'Order: ' . print_r($response->order, true);
```

Creating a new customer:

```php
<?php

use RetailCrm\Api\Interfaces\ClientExceptionInterface;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Model\Entity\Customers\Customer;
use RetailCrm\Api\Model\Request\Customers\CustomersCreateRequest;

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');

$request = new CustomersCreateRequest();
$request->customer = new Customer();

$request->site = 'aliexpress';
$request->customer->email = 'john.doe@example.com';
$request->customer->firstName = 'John';
$request->customer->lastName = 'Doe';

try {
    $response = $client->customers->create($request);
} catch (ApiExceptionInterface $exception) {
    echo $exception; // Every ApiExceptionInterface instance should implement __toString() method.
    exit(-1);
} catch (ClientExceptionInterface $exception) {
    echo 'Client error: ' . $exception->getMessage() . PHP_EOL;
    echo $exception->getTraceAsString();
    exit(-1);
}

echo 'Customer ID: ' . $response->id;
```

Creating a task for the user with specific email:

```php
<?php

use RetailCrm\Api\Interfaces\ClientExceptionInterface;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Model\Entity\Tasks\Task;use RetailCrm\Api\Model\Filter\Users\ApiUserFilter;
use RetailCrm\Api\Model\Request\Tasks\TasksCreateRequest;
use RetailCrm\Api\Model\Request\Users\UsersRequest;

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');

$usersRequest = new UsersRequest();
$usersRequest->filter = new ApiUserFilter();
$usersRequest->filter->email = 'john.doe@example.com';

try {
    $usersResponse = $client->users->list($usersRequest);
} catch (ApiExceptionInterface $exception) {
    echo $exception; // Every ApiExceptionInterface instance should implement __toString() method.
    exit(-1);
} catch (ClientExceptionInterface $exception) {
    echo 'Client error: ' . $exception->getMessage() . PHP_EOL;
    echo $exception->getTraceAsString();
    exit(-1);
}

if (0 === count($usersResponse->users)) {
    echo 'User is not found.';
    exit(-1);
}

$tasksRequest = new TasksCreateRequest();
$tasksRequest->task = new Task();
$tasksRequest->task->performerId = $usersResponse->users[0]->id;
$tasksRequest->task->text = 'Do something!';
$tasksRequest->site = 'site';

try {
    $tasksResponse = $client->tasks->create($tasksRequest);
} catch (ApiExceptionInterface $exception) {
    echo $exception; // Every ApiExceptionInterface instance should implement __toString() method.
    exit(-1);
} catch (ClientExceptionInterface $exception) {
    echo 'Client error: ' . $exception->getMessage() . PHP_EOL;
    echo $exception->getTraceAsString();
    exit(-1);
}

echo 'Created task with ID: ' . $tasksResponse->id;
```


The error handling in the examples above is good enough for real production usage.
You can safely assume that `ApiExceptionInterface` is an error from the API, and `ClientExceptionInterface` is a client error
(e.g. network error or any runtime error, use `HttpClientException` to catch only PSR-18 client errors).
However, you can implement more complex error handling if you want.

More examples can be found in the [documentation](doc/usage/examples/index.md).

You can use a PSR-14 compatible event dispatcher to receive events from the client. See [documentation](doc/index.md) for details.

## Notes

This library uses HTTPlug abstractions. Visit [official documentation](http://docs.php-http.org/en/latest/httplug/users.html) to learn more about it.
