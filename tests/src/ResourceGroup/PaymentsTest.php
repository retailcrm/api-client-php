<?php

/**
 * PHP version 7.3
 *
 * @category PaymentsTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\Currency;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\Payments\ApiCheckRequest;
use RetailCrm\Api\Model\Entity\Payments\ApiCreateInvoiceRequest;
use RetailCrm\Api\Model\Entity\Payments\ApiUpdateInvoiceRequest;
use RetailCrm\Api\Model\Request\Payments\PaymentCheckRequest;
use RetailCrm\Api\Model\Request\Payments\PaymentCreateInvoiceRequest;
use RetailCrm\Api\Model\Request\Payments\PaymentUpdateInvoiceRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class PaymentsTest
 *
 * @category PaymentsTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class PaymentsTest extends AbstractApiResourceGroupTestCase
{
    public function testCheck(): void
    {
        $json = <<<'EOF'
{
    "success": true,
    "result": {
        "success": true
    }
}
EOF;

        $checkRequest              = new ApiCheckRequest();
        $checkRequest->invoiceUuid = '5b1b2e9d-b7f1-48f4-acb9-4bfce04b30cf';
        $checkRequest->currency    = Currency::RUB;
        $checkRequest->amount      = .5;

        $request = new PaymentCheckRequest($checkRequest);

        $mock = static::createApiMockBuilder('payment/check');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->payments->check($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCreateInvoice(): void
    {
        $json = <<<'EOF'
{
    "success": true,
    "result": {
        "link": "https:\/\/example.com"
    }
}
EOF;

        $invoiceRequest            = new ApiCreateInvoiceRequest();
        $invoiceRequest->paymentId = 4571;
        $invoiceRequest->returnUrl = 'https://example.com';

        $request = new PaymentCreateInvoiceRequest($invoiceRequest);

        $mock = static::createApiMockBuilder('payment/create-invoice');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->payments->createInvoice($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testUpdateInvoice(): void
    {
        $json = <<<'EOF'
{
    "success": true
}
EOF;

        $invoiceRequest              = new ApiUpdateInvoiceRequest();
        $invoiceRequest->paymentId   = 'd6458333-fff3-4fd0-9b23-4e6344451f8e';
        $invoiceRequest->invoiceUuid = '5b1b2e9d-b7f1-48f4-acb9-4bfce04b30cf';
        $invoiceRequest->invoiceUrl  = 'https://example.com/newUrl';

        $request = new PaymentUpdateInvoiceRequest($invoiceRequest);

        $mock = static::createApiMockBuilder('payment/update-invoice');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->payments->updateInvoice($request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
