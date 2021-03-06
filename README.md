[![Build Status](https://github.com/retailcrm/api-client-php/workflows/CI/badge.svg)](https://github.com/retailcrm/api-client-php/actions)
[![Coverage](https://img.shields.io/codecov/c/gh/retailcrm/api-client-php/master.svg?logo=codecov&logoColor=white)](https://codecov.io/gh/retailcrm/api-client-php)
[![Latest stable](https://img.shields.io/packagist/v/retailcrm/api-client-php.svg)](https://packagist.org/packages/retailcrm/api-client-php)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/retailcrm/api-client-php.svg?logo=php&logoColor=white)](https://packagist.org/packages/retailcrm/api-client-php)


# RetailCRM API PHP client

This is the PHP RetailCRM API client. This library allows using of the actual API version. [API documentation](http://retailcrm.github.io/api-client-php)

## Requirements

* PHP 7.3 and above
* PHP's cURL support
* PHP's JSON support
* Any HTTP-client compatible with PSR-18 (covered by the installation instructions).
* Any HTTP factories implementation compatible with PSR-17 (covered by the installation instructions).
* Any HTTP messages implementation compatible with PSR-7 (covered by the installation instructions).
* Other dependencies listed in the `composer.json` (covered by the installation instructions)

## Install

Follow those steps to install the library:

1. Download and install [Composer](https://getcomposer.org/download/) package manager.
2. Install the library from the Packagist by executing this command:
```bash
composer require symfony/http-client nyholm/psr7 retailcrm/api-client-php:"~6.0"
```
During the installation, you'll see a message which will look like this:
```sh
The following packages have new compilation tasks:
 - retailcrm/api-client-php has 1 task

Allow these packages to compile? ([y]es, [a]lways, [n]o, [l]ist, [h]elp)
```
That's because the Client uses code generation to speed up serialization and deserialization of models in production. This code should be generated during installation or update. Without that code, the library itself will not work at all.

Just type `y` here and press Enter. The DTO cache will be generated after that.

3. **Optional.** Add these params into the `extra` segment of your `composer.json` if you want to execute code generation automatically after library installation or update.
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

## Usage

The client is separated into several resource groups, all of which are accessible through the Client's public properties. Each resource group is responsible for the corresponding API section. It is much easier to understand how the Client works by learning its design principles.

The general rules of the Client design are:
1. The Client itself doesn't contain any API methods implementations.
1. ResourceGroups implements all API methods.
1. Every method can accept from zero to several arguments.
1. URI path arguments (not the query string ones) are always passed as separate method arguments.
1. Query parameters are always passed in the form of the Request model. The same principle applies to the POST form data.
1. If the Request contains only one parameter - it'll probably accept it through the constructor. This doesn't apply to the filter requests, which don't have constructors at all.
1. All DTO's you'll ever need can be found in the `RetailCrm\Api\Model` namespace.
1. Every method has an example of the usage in its DocBlock. Yes, all of them. You can learn how to use any of the methods just by looking at the DocBlock help tooltip provided by your IDE. If it's not provided by your IDE - you'll need to look up how to configure it. It'll ease your work with this (and any other) library a lot.

### Examples

Let's take look at a complete example of the Client usage. Here we fetch the filtered orders data and print it out:

```php
<?php

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\NetworkExceptionInterface;
use Psr\Http\Client\RequestExceptionInterface;
use RetailCrm\Api\Exception\HandlerException;
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate;
use RetailCrm\Api\Model\Filter\Orders\OrderFilter;
use RetailCrm\Api\Model\Request\Orders\OrdersRequest;

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');

$request              = new OrdersRequest();
$request->filter      = new OrderFilter();
$request->filter->ids = [7141];

try {
    $response = $client->orders->list($request);
} catch (NetworkExceptionInterface $exception) {
    echo 'Network error: ' . $exception->getMessage();
    exit(-1);
} catch (RequestExceptionInterface $exception) {
    echo 'Attempt to send malformed request: ' . $exception->getMessage();
    exit(-1);
} catch (ClientExceptionInterface $exception) {
    echo 'Unable to send HTTP request or parse response: ' . $exception->getMessage();
    exit(-1);
} catch (HandlerException $exception) {
    echo 'Error while trying to prepare request: ' . $exception->getMessage();
    exit(-1);
} catch (ApiExceptionInterface $exception) {
    echo sprintf(
        'Error from RetailCRM API (status code: %d): %s',
        $exception->getStatusCode(),
        $exception->getMessage()
    );

    if (count($exception->getErrorResponse()->errors) > 0) {
        echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
    }

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

That's how you can create an order:

```php
<?php

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\NetworkExceptionInterface;
use Psr\Http\Client\RequestExceptionInterface;
use RetailCrm\Api\Exception\HandlerException;
use RetailCrm\Api\Enum\CountryCodeIso3166;
use RetailCrm\Api\Enum\Customers\CustomerType;
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Model\Entity\Orders\Delivery\OrderDeliveryAddress;
use RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedOrderDelivery;
use RetailCrm\Api\Model\Entity\Orders\Items\Offer;
use RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct;
use RetailCrm\Api\Model\Entity\Orders\Items\PriceType;
use RetailCrm\Api\Model\Entity\Orders\Items\Unit;
use RetailCrm\Api\Model\Entity\Orders\Order;
use RetailCrm\Api\Model\Entity\Orders\Payment;
use RetailCrm\Api\Model\Entity\Orders\SerializedRelationCustomer;
use RetailCrm\Api\Model\Request\Orders\OrdersCreateRequest;

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');

$request         = new OrdersCreateRequest();
$order           = new Order();
$payment         = new Payment();
$delivery        = new SerializedOrderDelivery();
$deliveryAddress = new OrderDeliveryAddress();
$offer           = new Offer();
$item            = new OrderProduct();

$payment->type   = 'bank-card';
$payment->status = 'paid';
$payment->amount = 1000;
$payment->paidAt = new DateTime();

$deliveryAddress->index      = '344001';
$deliveryAddress->countryIso = CountryCodeIso3166::RUSSIAN_FEDERATION;
$deliveryAddress->region     = 'Region';
$deliveryAddress->city       = 'City';
$deliveryAddress->street     = 'Street';
$deliveryAddress->building   = '10';

$delivery->address = $deliveryAddress;
$delivery->cost    = 0;
$delivery->netCost = 0;

$offer->name        = 'Offer №1445123';
$offer->displayName = 'Offer №1445123';
$offer->xmlId       = 'tGunLo27jlPGmbA8BrHxY2';
$offer->article     = '14451445-14451445';
$offer->unit        = new Unit('796', 'Piece', 'pcs');

$item->offer         = $offer;
$item->priceType     = new PriceType('base');
$item->quantity      = 1;
$item->purchasePrice = 60;

$order->delivery      = $delivery;
$order->items         = [$item];
$order->payments      = [$payment];
$order->orderType     = 'test';
$order->orderMethod   = 'phone';
$order->countryIso    = CountryCodeIso3166::RUSSIAN_FEDERATION;
$order->firstName     = 'Test';
$order->lastName      = 'User';
$order->patronymic    = 'Patronymic';
$order->phone         = '89003005069';
$order->email         = 'testuser12345678901@example.com';
$order->managerId     = 28;
$order->customer      = SerializedRelationCustomer::withIdAndType(
    4924,
    CustomerType::CUSTOMER
);
$order->status        = 'assembling';
$order->statusComment = 'Assembling order';
$order->weight        = 1000;
$order->shipmentStore = 'main12';
$order->shipmentDate  = (new DateTime())->add(new DateInterval('P7D'));
$order->shipped       = false;
$order->customFields  = [
    "galka" => false,
    "test_number" => 0,
    "otpravit_dozakaz" => false,
];

$request->order = $order;
$request->site  = 'moysklad';

try {
    $response = $client->orders->create($request);
} catch (NetworkExceptionInterface $exception) {
    echo 'Network error: ' . $exception->getMessage();
    exit(-1);
} catch (RequestExceptionInterface $exception) {
    echo 'Attempt to send malformed request: ' . $exception->getMessage();
    exit(-1);
} catch (ClientExceptionInterface $exception) {
    echo 'Unable to send HTTP request or parse response: ' . $exception->getMessage();
    exit(-1);
} catch (HandlerException $exception) {
    echo 'Error while trying to prepare request: ' . $exception->getMessage();
    exit(-1);
} catch (ApiExceptionInterface $exception) {
    echo sprintf(
        'Error from RetailCRM API (status code: %d): %s',
        $exception->getStatusCode(),
        $exception->getMessage()
    );

    if (count($exception->getErrorResponse()->errors) > 0) {
        echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
    }

    exit(-1);
}

printf(
    'Created order id = %d with the following data: %s',
    $response->id,
    print_r($response->order, true)
);
```

These examples contain too many exception handlers, but it is intentional (in other words, for academic purposes). You can safely assume that `ApiExceptionInterface` is an error from the API, and any other exception is a runtime one or network one (you can filter out network exceptions by using PSR-18 documentation).

## Notes

This library uses HTTPlug HTTP client abstraction. Visit [official documentation](http://docs.php-http.org/en/latest/httplug/users.html) to learn more about it.
