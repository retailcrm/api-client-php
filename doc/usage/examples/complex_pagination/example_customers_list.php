<?php

use RetailCrm\Api\Client;
use RetailCrm\Api\Enum\PaginationLimit;
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Model\Entity\Customers\CustomerPhone;
use RetailCrm\Api\Model\Request\Customers\CustomersRequest;
use RetailCrm\Api\Model\Response\Customers\CustomersResponse;

require __DIR__ . '/../../../../vendor/autoload.php';
require __DIR__ . '/PaginatedRequestIterator.php';

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro/', 'apiKey');
$request = new CustomersRequest();
$request->limit = PaginationLimit::LIMIT_100;
$request->page = 1;

$paginator = (new PaginatedRequestIterator($client))
    ->setRequest($request)
    ->setNextPageFunc(static function (CustomersRequest $request, CustomersResponse $response, int $page) {
        $request->page = $page;
    })
    ->setExtractBatchFunc(static function (CustomersResponse $response) {
        return $response->customers;
    })
    ->setSendResponseFunc(static function (Client $client, CustomersRequest $request) {
        return $client->customers->list($request);
    });

/** @var \RetailCrm\Api\Model\Entity\Customers\Customer $customer */
foreach ($paginator as $customer) {
    printf(
        '%d: %s %s %s <%s> (%s) %s',
        $customer->id,
        $customer->firstName,
        $customer->lastName,
        $customer->patronymic,
        implode(', ', array_map(static function (CustomerPhone $phone) {
            return $phone->number;
        }, $customer->phones)),
        $customer->email, PHP_EOL
    );
}

if ($paginator->isFetchFailed()) {
    echo $paginator->getError();
}
