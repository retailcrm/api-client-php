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

namespace RetailCrm\Tests\Methods\Version4;

use RetailCrm\ApiClient;
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
class ApiClientOrdersTest extends TestCase
{
    const FIRST_NAME = 'Иннокентий';

    /**
     * @group orders_v4
     */
    public function testOrdersCreate()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);

        $externalId = 'o-create-' . time();

        $response = $client->request->ordersCreate([
            'firstName' => self::FIRST_NAME,
            'externalId' => $externalId,
        ]);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(201, $response->getStatusCode());
        static::assertTrue(is_int($response['id']));

        return [
            'id' => $response['id'],
            'externalId' => $externalId,
        ];
    }

    /**
     * @group orders_v4
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersCreateExceptionEmpty()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);
        $client->request->ordersCreate([]);
    }

    /**
     * @group   orders
     * @depends testOrdersCreate
     *
     * @param array $ids
     */
    public function testOrdersStatuses(array $ids)
    {
        $client = static::getApiClient(null, null, ApiClient::V4);

        $response = $client->request->ordersStatuses();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(400, $response->getStatusCode());
        static::assertFalse($response->isSuccessful());

        $response = $client->request->ordersStatuses([], ['asdf']);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
        $orders = $response['orders'];
        static::assertEquals(0, sizeof($orders));

        $response = $client->request->ordersStatuses([], [$ids['externalId']]);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
        $orders = $response['orders'];
        static::assertEquals(1, sizeof($orders));
        static::assertEquals('new', $orders[0]['status']);

        $response = $client->request->ordersStatuses([$ids['id']], [$ids['externalId']]);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
        $orders = $response['orders'];
        static::assertEquals(1, sizeof($orders));

        $response = $client->request->ordersStatuses([$ids['id']]);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
        $orders = $response['orders'];
        static::assertEquals(1, sizeof($orders));
    }

    /**
     * @group   orders
     * @depends testOrdersCreate
     *
     * @param array $ids
     *
     * @return array
     */
    public function testOrdersGet(array $ids)
    {
        $client = static::getApiClient(null, null, ApiClient::V4);

        $response = $client->request->ordersGet(678678678);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(404, $response->getStatusCode());
        static::assertFalse($response->isSuccessful());

        $response = $client->request->ordersGet($ids['id'], 'id');
        $orderById = $response['order'];
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
        static::assertEquals(self::FIRST_NAME, $response['order']['firstName']);

        $response = $client->request->ordersGet($ids['externalId'], 'externalId');
        static::assertEquals($orderById['id'], $response['order']['id']);

        return $ids;
    }

    /**
     * @group orders_v4
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersGetException()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);
        $client->request->ordersGet(678678678, 'asdf');
    }

    /**
     * @group   orders
     * @depends testOrdersGet
     *
     * @param array $ids
     */
    public function testOrdersEdit(array $ids)
    {
        $client = static::getApiClient(null, null, ApiClient::V4);

        $response = $client->request->ordersEdit(
            [
                'id' => 22342134,
                'lastName' => '12345',
            ],
            'id'
        );
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(404, $response->getStatusCode());

        $response = $client->request->ordersEdit([
            'externalId' => $ids['externalId'],
            'lastName' => '12345',
        ]);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group orders_v4
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersEditExceptionEmpty()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);
        $client->request->ordersEdit([], 'asdf');
    }

    /**
     * @group orders_v4
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersEditException()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);
        $client->request->ordersEdit(['id' => 678678678], 'asdf');
    }

    /**
     * @group orders_v4
     */
    public function testOrdersHistory()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);

        $response = $client->request->ordersHistory();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group orders_v4
     */
    public function testOrdersList()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);

        $response = $client->request->ordersList();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue($response->isSuccessful());
        static::assertTrue(isset($response['orders']));

        $response = $client->request->ordersList([], 1, 300);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertFalse(
            $response->isSuccessful(),
            'Pagination error'
        );

        $response = $client->request->ordersList(['paymentStatus' => 'paid'], 1);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
    }

    /**
     * @group orders_v4
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersFixExternalIdsException()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);
        $client->request->ordersFixExternalIds([]);
    }

    /**
     * @group orders_v4
     */
    public function testOrdersFixExternalIds()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);

        $response = $client->request->ordersCreate([
            'firstName' => 'Aaa',
        ]);
        static::assertTrue(
            $response->isSuccessful(),
            'Order created'
        );

        $id = $response['id'];
        $externalId = 'asdf' . time();

        $response = $client->request->ordersFixExternalIds([
            ['id' => $id, 'externalId' => $externalId]
        ]);

        static::assertTrue(
            $response->isSuccessful(),
            'Fixed order ids'
        );

        $response = $client->request->ordersGet($externalId);
        static::assertTrue(
            $response->isSuccessful(),
            'Got order'
        );
        static::assertEquals(
            $id,
            $response['order']['id'],
            'Fixing of order ids were right'
        );
        static::assertEquals(
            $externalId,
            $response['order']['externalId'],
            'Fixing of order ids were right'
        );
    }

    /**
     * @group orders_v4
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersUploadExceptionEmpty()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);
        $client->request->ordersUpload([]);
    }

    /**
     * @group orders_v4
     */
    public function testOrdersUpload()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);

        $externalIdA = 'upload-a-' . time();
        $externalIdB = 'upload-b-' . time();

        $response = $client->request->ordersUpload([
            [
                'externalId' => $externalIdA,
                'firstName' => 'Aaa',
            ],
            [
                'externalId' => $externalIdB,
                'lastName' => 'Bbb',
            ],
        ]);
        static::assertTrue(
            $response->isSuccessful(),
            'Got order'
        );
        static::assertEquals(
            $externalIdA,
            $response['uploadedOrders'][0]['externalId']
        );
        static::assertEquals(
            $externalIdB,
            $response['uploadedOrders'][1]['externalId']
        );
    }
}
