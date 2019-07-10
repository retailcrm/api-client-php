<?php

/**
 * PHP version 5.4
 *
 * API client orders test class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Tests\Methods\Version5;

use RetailCrm\Response\ApiResponse;
use RetailCrm\Test\TestCase;

/**
 * Class ApiClientOrdersTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
class ApiClientIntegrationPaymentsTest extends TestCase
{
    /**
     * @group orders_v5
     */
    public function testSuccessPaymentUpdateInvoice()
    {
        $client = static::getApiClient();
        $response = $client->request->paymentUpdateInvoice([
            'invoiceUuid' => '73c1d66f-9707-4a35-b3d0-05ca3c3d41d9',
            'paymentId' => 'a19876b1-a62f-42f4-b2d3-78f0ddb62a3b',
            'status' => 'pending',
            'cancellationDetails' => '',
            'invoiceUrl' => 'https://ya.ru',
            'paidAt' => '2019-07-10T14:27:54.691Z',
            'expiredAt' => '2018-07-10T14:27:54.691Z',
            'refundable' => true,
        ]);
        $this->checkResponse($response, true);
    }

    /**
     * @group orders_v5
     */
    public function testFailedPaymentUpdateInvoice()
    {
        $client = static::getApiClient();
        $response = $client->request->paymentUpdateInvoice([
            'invoiceUuid' => '121', // Не uuid
            'paymentId' => 'a19876b1-a62f-42f4-b2d3-78f0ddb62a3b',
            'status' => 'pending',
            'cancellationDetails' => '',
            'invoiceUrl' => 'https://ya.ru',
            'paidAt' => '2019-07-10T14:27:54.691Z',
            'expiredAt' => '2018-07-10T14:27:54.691Z',
            'refundable' => true,
        ]);
        $this->checkResponse($response, false);
    }

    /**
     * @group orders_v5
     * @expectedException \InvalidArgumentException
     */
    public function testPaymentUpdateInvoiceEmpty()
    {
        $client = static::getApiClient();
        $client->request->paymentUpdateInvoice([]);
    }

    /**
     * @group orders_v5
     */
    public function testSuccessPaymentCheckInvoice()
    {
        $client = static::getApiClient();
        $response = $client->request->paymentCheckInvoice([
            'invoiceUuid' => '73c1d66f-9707-4a35-b3d0-05ca3c3d41d9',
            'amount' => '5000',
            'currency' => 'RUB',
        ]);
        $this->checkResponse($response, true);
    }

    /**
     * @group orders_v5
     */
    public function testFailedPaymentCheckInvoice()
    {
        $client = static::getApiClient();
        $response = $client->request->paymentCheckInvoice([
            'invoiceUuid' => '1221', // Не uuid
            'amount' => '5000',
            'currency' => 'RUB',
        ]);
        $this->checkResponse($response, false);
    }

    /**
     * @group orders_v5
     * @expectedException \InvalidArgumentException
     */
    public function testPaymentCheckInvoiceEmpty()
    {
        $client = static::getApiClient();
        $client->request->paymentCheckInvoice([]);
    }

    /**
     * @param ApiResponse $response
     */
    private function checkResponse($response, $success)
    {
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        if ($success) {
            static::assertTrue((bool)$response['success']);
        } else {
            static::assertFalse((bool)$response['success']);
        }
    }
}
