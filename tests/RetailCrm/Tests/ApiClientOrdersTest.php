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

namespace RetailCrm\Tests;

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
     * @group orders
     */
    public function testOrdersCreate()
    {
        $client = static::getApiClient();

        $externalId = 'o-create-' . time();

        $response = $client->ordersCreate([
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
     * @group orders
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersCreateExceptionEmpty()
    {
        $client = static::getApiClient();
        $client->ordersCreate([]);
    }

    /**
     * @group   orders
     * @depends testOrdersCreate
     *
     * @param array $ids
     */
    public function testOrdersStatuses(array $ids)
    {
        $client = static::getApiClient();

        $response = $client->ordersStatuses();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(400, $response->getStatusCode());
        static::assertFalse($response->isSuccessful());

        $response = $client->ordersStatuses([], ['asdf']);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
        $orders = $response['orders'];
        static::assertEquals(0, sizeof($orders));

        $response = $client->ordersStatuses([], [$ids['externalId']]);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
        $orders = $response['orders'];
        static::assertEquals(1, sizeof($orders));
        static::assertEquals('new', $orders[0]['status']);

        $response = $client->ordersStatuses([$ids['id']], [$ids['externalId']]);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
        $orders = $response['orders'];
        static::assertEquals(1, sizeof($orders));

        $response = $client->ordersStatuses([$ids['id']]);
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
        $client = static::getApiClient();

        $response = $client->ordersGet(678678678);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(404, $response->getStatusCode());
        static::assertFalse($response->isSuccessful());

        $response = $client->ordersGet($ids['id'], 'id');
        $orderById = $response['order'];
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
        static::assertEquals(self::FIRST_NAME, $response['order']['firstName']);

        $response = $client->ordersGet($ids['externalId'], 'externalId');
        static::assertEquals($orderById['id'], $response['order']['id']);

        return $ids;
    }

    /**
     * @group orders
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersGetException()
    {
        $client = static::getApiClient();
        $client->ordersGet(678678678, 'asdf');
    }

    /**
     * @group   orders
     * @depends testOrdersGet
     *
     * @param array $ids
     */
    public function testOrdersEdit(array $ids)
    {
        $client = static::getApiClient();

        $response = $client->ordersEdit(
            [
                'id' => 22342134,
                'lastName' => '12345',
            ],
            'id'
        );
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(404, $response->getStatusCode());

        $response = $client->ordersEdit([
            'externalId' => $ids['externalId'],
            'lastName' => '12345',
        ]);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group orders
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersEditExceptionEmpty()
    {
        $client = static::getApiClient();
        $client->ordersEdit([], 'asdf');
    }

    /**
     * @group orders
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersEditException()
    {
        $client = static::getApiClient();
        $client->ordersEdit(['id' => 678678678], 'asdf');
    }

    /**
     * @group orders
     */
    public function testOrdersHistory()
    {
        $client = static::getApiClient();

        $response = $client->ordersHistory();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group orders
     */
    public function testOrdersList()
    {
        $client = static::getApiClient();

        $response = $client->ordersList();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue($response->isSuccessful());
        static::assertTrue(isset($response['orders']));

        $response = $client->ordersList([], 1, 300);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertFalse(
            $response->isSuccessful(),
            'Pagination error'
        );

        $response = $client->ordersList(['paymentStatus' => 'paid'], 1);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
    }

    /**
     * @group orders
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersFixExternalIdsException()
    {
        $client = static::getApiClient();
        $client->ordersFixExternalIds([]);
    }

    /**
     * @group orders
     */
    public function testOrdersFixExternalIds()
    {
        $client = static::getApiClient();

        $response = $client->ordersCreate([
            'firstName' => 'Aaa',
        ]);
        static::assertTrue(
            $response->isSuccessful(),
            'Order created'
        );

        $id = $response['id'];
        $externalId = 'asdf' . time();

        $response = $client->ordersFixExternalIds([
            ['id' => $id, 'externalId' => $externalId]
        ]);

        static::assertTrue(
            $response->isSuccessful(),
            'Fixed order ids'
        );

        $response = $client->ordersGet($externalId);
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
     * @group orders
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersUploadExceptionEmpty()
    {
        $client = static::getApiClient();
        $client->ordersUpload([]);
    }

    /**
     * @group orders
     */
    public function testOrdersUpload()
    {
        $client = static::getApiClient();

        $externalIdA = 'upload-a-' . time();
        $externalIdB = 'upload-b-' . time();

        $response = $client->ordersUpload([
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

    /**
     * @group orders
     */
    public function testOrdersCombine()
    {
        $client = static::getApiClient();

        $responseCreateFirst = $client->ordersCreate([
            'firstName'  => 'Aaa111',
            'externalId' => 'AA-' . time(),
            'phone'      => '+79999999990'
        ]);

        static::assertTrue(
            $responseCreateFirst->isSuccessful(),
            'Got order'
        );

        $responseCreateSecond = $client->ordersCreate([
            'firstName'  => 'Aaa222',
            'externalId' => 'BB-' . time(),
            'phone'      => '+79999999991'
        ]);

        static::assertTrue(
            $responseCreateSecond->isSuccessful(),
            'Got order'
        );

        $order = ['id' => $responseCreateFirst['id']];
        $resultOrder = ['id' => $responseCreateSecond['id']];

        $response = $client->ordersCombine($order, $resultOrder, 'ours');

        static::assertTrue(
            $response->isSuccessful(),
            'Orders combined'
        );
    }

    public function testOrdersPayment()
    {
        $client = static::getApiClient();
        $externalId = 'AA-' . time();

        $responseCreateFirst = $client->ordersCreate([
            'firstName'  => 'Aaa111aaA',
            'phone'      => '+79999999990'
        ]);

        static::assertTrue(
            $responseCreateFirst->isSuccessful(),
            'Got order'
        );

        $payment = [
            'externalId' => $externalId,
            'order' => ['id' => $responseCreateFirst['id']],
            'amount' => 1200,
            'comment' => 'test payment',
            'type' => 'cash',
            'status' => 'paid'
        ];

        $response = $client->ordersPaymentCreate($payment);

        static::assertTrue(
            $response->isSuccessful(),
            'Got payment'
        );

        $paymentEdit = [
            'id' => $response['id'],
            'externalId' => $externalId,
            'amount' => 1500,
            'comment' => 'test payment!',
            'type' => 'cash',
            'status' => 'paid'
        ];

        $responseAgain = $client->ordersPaymentEdit($paymentEdit);

        static::assertTrue(
            $responseAgain->isSuccessful(),
            'Got payment'
        );
    }
}
