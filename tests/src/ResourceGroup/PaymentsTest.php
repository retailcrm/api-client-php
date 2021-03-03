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
use RetailCrm\Dev\TestUtils\Factory\TestClientFactory;
use RetailCrm\Dev\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

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

        $request              = new ApiCheckRequest();
        $request->invoiceUuid = '5b1b2e9d-b7f1-48f4-acb9-4bfce04b30cf';
        $request->currency    = Currency::RUB;
        $request->amount      = .5;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('payment/check')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm(new PaymentCheckRequest($request))),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
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

        $request            = new ApiCreateInvoiceRequest();
        $request->paymentId = 4571;
        $request->returnUrl = 'https://example.com';

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('payment/create-invoice')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm(new PaymentCreateInvoiceRequest($request))),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
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

        $request              = new ApiUpdateInvoiceRequest();
        $request->paymentId   = 'd6458333-fff3-4fd0-9b23-4e6344451f8e';
        $request->invoiceUuid = '5b1b2e9d-b7f1-48f4-acb9-4bfce04b30cf';
        $request->invoiceUrl  = 'https://example.com/newUrl';

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('payment/update-invoice')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm(new PaymentUpdateInvoiceRequest($request))),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->payments->updateInvoice($request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
