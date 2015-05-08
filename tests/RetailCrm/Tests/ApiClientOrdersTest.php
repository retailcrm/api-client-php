<?php

namespace RetailCrm\Tests;

use RetailCrm\Test\TestCase;

class ApiClientOrdersTest extends TestCase
{
    const FIRST_NAME = 'Иннокентий';

    /**
     * @group integration
     */
    public function testOrdersCreate()
    {
        $client = static::getApiClient();

        $externalId = 'o-create-' . time();

        $response = $client->ordersCreate(array(
            'firstName' => self::FIRST_NAME,
            'externalId' => $externalId,
        ));
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(201, $response->getStatusCode());
        $this->assertTrue(is_int($response->getId()));

        return array(
            'id' => $response->getId(),
            'externalId' => $externalId,
        );
    }

    /**
     * @group unit
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersCreateExceptionEmpty()
    {
        $client = static::getApiClient();

        $response = $client->ordersCreate(array());
    }

    /**
     * @group integration
     * @depends testOrdersCreate
     */
    public function testOrdersStatuses(array $ids)
    {
        $client = static::getApiClient();

        $response = $client->ordersStatuses();
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(400, $response->getStatusCode());
        $this->assertFalse($response->success);

        $response = $client->ordersStatuses(array(), array('asdf'));
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->success);
        $orders = $response->orders;
        $this->assertEquals(0, sizeof($orders));

        $response = $client->ordersStatuses(array(), array($ids['externalId']));
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->success);
        $orders = $response->orders;
        $this->assertEquals(1, sizeof($orders));
        $this->assertEquals('new', $orders[0]['status']);

        $response = $client->ordersStatuses(array($ids['id']), array($ids['externalId']));
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->success);
        $orders = $response->orders;
        $this->assertEquals(1, sizeof($orders));

        $response = $client->ordersStatuses(array($ids['id']));
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->success);
        $orders = $response->orders;
        $this->assertEquals(1, sizeof($orders));
    }

    /**
     * @group integration
     * @depends testOrdersCreate
     */
    public function testOrdersGet(array $ids)
    {
        $client = static::getApiClient();

        $response = $client->ordersGet(678678678);
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(404, $response->getStatusCode());
        $this->assertFalse($response->success);

        $response = $client->ordersGet($ids['id'], 'id');
        $orderById = $response->order;
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->success);
        $this->assertEquals(self::FIRST_NAME, $response->order['firstName']);

        $response = $client->ordersGet($ids['externalId'], 'externalId');
        $this->assertEquals($orderById['id'], $response->order['id']);

        return $ids;
    }

    /**
     * @group unit
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersGetException()
    {
        $client = static::getApiClient();

        $response = $client->ordersGet(678678678, 'asdf');
    }

    /**
     * @group integration
     * @depends testOrdersGet
     */
    public function testOrdersEdit(array $ids)
    {
        $client = static::getApiClient();

        $response = $client->ordersEdit(
            array(
                'id' => 22342134,
                'lastName' => '12345',
            ),
            'id'
        );
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(404, $response->getStatusCode());

        $response = $client->ordersEdit(array(
            'externalId' => $ids['externalId'],
            'lastName' => '12345',
        ));
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->success);

        $response = $client->ordersEdit(array(
            'externalId' => time(),
            'lastName' => '12345',
        ));
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(201, $response->getStatusCode());
        $this->assertTrue($response->success);
    }

    /**
     * @group unit
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersEditExceptionEmpty()
    {
        $client = static::getApiClient();

        $response = $client->ordersEdit(array(), 'asdf');
    }

    /**
     * @group unit
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersEditException()
    {
        $client = static::getApiClient();

        $response = $client->ordersEdit(array('id' => 678678678), 'asdf');
    }

    /**
     * @group integration
     */
    public function testOrdersHistory()
    {
        $client = static::getApiClient();

        $response = $client->ordersHistory();
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->success);
        $this->assertTrue(
            isset($response['orders']),
            'API returns orders history'
        );
        $this->assertTrue(
            isset($response['generatedAt']),
            'API returns generatedAt in orders history'
        );
    }
    
    /**
     * @group integration
     */
    public function testOrdersPacksHistory()
    {
        $client = static::getApiClient();

        $response = $client->ordersPacksHistory();
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->success);
        $this->assertTrue(
            isset($response['history']),
            'API returns orders assembly history'
        );
        $this->assertTrue(
            isset($response['generatedAt']),
            'API returns generatedAt in orders assembly history'
        );
    }

    /**
     * @group integration
     */
    public function testOrdersList()
    {
        $client = static::getApiClient();

        $response = $client->ordersList();
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertTrue($response->isSuccessful());
        $this->assertTrue(isset($response['orders']));

        $response = $client->ordersList(array(), 1, 300);
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertFalse(
            $response->isSuccessful(),
            'Pagination error'
        );

        $response = $client->ordersList(array('paymentStatus' => 'paid'), 1);
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertTrue(
            $response->isSuccessful(),
            'API returns orders list'
        );
    }

    /**
     * @group unit
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersFixExternalIdsException()
    {
        $client = static::getApiClient();

        $response = $client->ordersFixExternalIds(array());
    }

    /**
     * @group integration
]     */
    public function testOrdersFixExternalIds()
    {
        $client = static::getApiClient();

        $response = $client->ordersCreate(array(
            'firstName' => 'Aaa',
        ));
        $this->assertTrue(
            $response->isSuccessful(),
            'Order created'
        );

        $id = $response->id;
        $externalId = 'asdf' . time();

        $response = $client->ordersFixExternalIds(array(
            array('id' => $id, 'externalId' => $externalId)
        ));

        $this->assertTrue(
            $response->isSuccessful(),
            'Fixed order ids'
        );

        $response = $client->ordersGet($externalId);
        $this->assertTrue(
            $response->isSuccessful(),
            'Got order'
        );
        $this->assertEquals(
            $id,
            $response->order['id'],
            'Fixing of order ids were right'
        );
        $this->assertEquals(
            $externalId,
            $response->order['externalId'],
            'Fixing of order ids were right'
        );
    }

    /**
     * @group unit
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersUploadExceptionEmpty()
    {
        $client = static::getApiClient();

        $response = $client->ordersUpload(array());
    }

    /**
     * @group integration
     */
    public function testOrdersUpload()
    {
        $client = static::getApiClient();

        $externalIdA = 'upload-a-' . time();
        $externalIdB = 'upload-b-' . time();

        $response = $client->ordersUpload(array(
            array(
                'externalId' => $externalIdA,
                'firstName' => 'Aaa',
            ),
            array(
                'externalId' => $externalIdB,
                'lastName' => 'Bbb',
            ),
        ));
        $this->assertTrue(
            $response->isSuccessful(),
            'Got order'
        );
        $this->assertEquals(
            $externalIdA,
            $response->uploadedOrders[0]['externalId']
        );
        $this->assertEquals(
            $externalIdB,
            $response->uploadedOrders[1]['externalId']
        );
    }
}
