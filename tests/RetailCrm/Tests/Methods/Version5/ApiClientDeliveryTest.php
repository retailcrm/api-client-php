<?php

/**
 * PHP version 5.4
 *
 * API client marketplace test class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Tests\Methods\Version5;

use RetailCrm\Test\TestCase;

/**
 * Class ApiClientMarketplaceTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
class ApiClientDeliveryTest extends TestCase
{
    /**
     * Test delivery list
     *
     * @group marketplace_v5
     *
     * @return void
     */
    public function testDeliveryShipmentsList()
    {
        $client = static::getApiClient();

        $response = $client->request->deliveryShipmentsList();

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals($response->getStatusCode(), 200);
        static::assertTrue($response->isSuccessful());
    }


    /**
     * Test delivery methods
     *
     * @group marketplace_v5
     *
     * @return void
     */
    public function testDeliveryShipments()
    {
        self::markTestSkipped('Should be fixed.');

        $client = static::getApiClient();

        $deliveryType = 'courier';

        $order = [
            'number' => uniqid(),
            'firstName' => 'Test',
            'lastName' => 'Customer',
            'email' => 'test@example.com',
            'delivery' => ['code' => $deliveryType]
        ];

        $responseOrder = $client->request->ordersCreate($order);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $responseOrder);
        static::assertEquals($responseOrder->getStatusCode(), 201);
        static::assertTrue($responseOrder->isSuccessful());

        $orderid = $responseOrder['id'];

        $shipment = [
            'date' => date('Y-m-d'),
            'orders' => [
                [
                    'id' => $orderid
                ]
            ],
            'comment' => 'test shipment'
        ];

        $responseCreate = $client
            ->request
            ->deliveryShipmentsCreate($shipment, $deliveryType);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $responseCreate);
        static::assertTrue($responseCreate->isSuccessful());

        $responseGet = $client->request->deliveryShipmentGet($responseCreate['id']);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $responseGet);
        static::assertTrue($responseGet->isSuccessful());

        $updateShipment = array_merge($shipment, ['status' => 'cancelled']);

        /* @var \RetailCrm\Response\ApiResponse $responseUpdate */
        $responseUpdate = $client
            ->request
            ->deliveryShipmentsUpdate($updateShipment);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $responseUpdate);
        static::assertTrue($responseUpdate->isSuccessful());
    }
}
