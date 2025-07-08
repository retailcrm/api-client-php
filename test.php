<?php

require __DIR__ . '/vendor/autoload.php';

use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;

$client = SimpleClientFactory::createClient('https://integrator.retailcrm.ru', '0onTa5Zpaq4mxPRCoJixzoFsMinyhjHg');

try {
    $response = $client->payments->getInvoice('7684160f-5ebe-4787-b031-1fc9e659f6c8');
    dd($response->invoice);
} catch (ApiExceptionInterface $exception) {
    echo sprintf(
        'Error from RetailCRM API (status code: %d): %s',
        $exception->getStatusCode(),
        $exception->getMessage()
    );

    if (count($exception->getErrorResponse()->errors) > 0) {
        echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
    }
}
