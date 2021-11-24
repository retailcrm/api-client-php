<?php

use RetailCrm\Api\Builder\FormEncoderBuilder;
use RetailCrm\Examples\CustomMethodsDto\Dto\Customer;
use RetailCrm\Examples\CustomMethodsDto\Dto\Request\CustomersCreateRequest;
use RetailCrm\Examples\CustomMethodsDto\Factory\ClientFactory;
use RetailCrm\Examples\CustomMethodsDto\Factory\SerializerFactory;

require __DIR__ . '/vendor/autoload.php';

// Three lines below will be usually called during DI container building or hidden by other means.
$serializer = SerializerFactory::create();
$encoder = (new FormEncoderBuilder())->setSerializer($serializer)->build();
$clientFactory = (new ClientFactory())->setCustomEncoder($encoder);

// Replace API URL and API key with your data.
$client = $clientFactory->createClient('https://test.simla.com', 'apiKey');

$request = new CustomersCreateRequest();
$request->customer = new Customer();
$request->customer->firstName = 'Tester';
$request->customer->lastName = 'User';
$request->customer->patronymic = 'Patronymic';
$request->site = 'site';      // Replace site with your data.

/** @var \Retailcrm\Examples\CustomMethodsDto\Dto\Response\CustomersCreateResponse $response */
$response = $client->customMethods->createCustomer($request);

echo 'Created customer using custom methods. ID: ' . $response->id;
