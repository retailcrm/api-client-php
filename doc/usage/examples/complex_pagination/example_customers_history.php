<?php

use RetailCrm\Api\Client;
use RetailCrm\Api\Enum\PaginationLimit;
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Model\Filter\Customers\CustomerHistoryFilter;
use RetailCrm\Api\Model\Request\Customers\CustomersHistoryRequest;
use RetailCrm\Api\Model\Response\Customers\CustomersHistoryResponse;

require __DIR__ . '/../../../../vendor/autoload.php';
require __DIR__ . '/PaginatedRequestIterator.php';

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro/', 'apiKey');
$request = new CustomersHistoryRequest();
$request->filter = new CustomerHistoryFilter();
$request->filter->startDate = (new DateTime())->sub(new DateInterval('P7D')); // 7 days
$request->limit = PaginationLimit::LIMIT_100;

$paginator = (new PaginatedRequestIterator($client))
    ->setRequest($request)
    ->setNextPageFunc(static function (CustomersHistoryRequest $request, CustomersHistoryResponse $response, int $page) {
        $request->filter->startDate = null;
        $request->filter->sinceId = end($response->history)->id;
    })
    ->setExtractBatchFunc(static function (CustomersHistoryResponse $response) {
        return $response->history;
    })
    ->setSendResponseFunc(static function (Client $client, CustomersHistoryRequest $request) {
        return $client->customers->history($request);
    });

/** @var \RetailCrm\Api\Model\Entity\Customers\Customer $customer */
foreach ($paginator as $historyEntry) {
    print_r($historyEntry);
}

if ($paginator->isFetchFailed()) {
    echo $paginator->getError();
}
