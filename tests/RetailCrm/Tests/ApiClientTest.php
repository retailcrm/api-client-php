<?php

namespace RetailCrm\Tests;

use RetailCrm\Test\TestCase;

class ApiClientTest extends TestCase
{
    const FIRST_NAME = 'Иннокентий';

    /**
     * @group unit
     */
    public function testConstruct()
    {
        $client = static::getApiClient();

        $this->assertInstanceOf('RetailCrm\ApiClient', $client);
    }

    /**
     * @group integration
     */
    public function testOrdersCreate()
    {
        $client = static::getApiClient();

        $externalId = time();

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
    public function testOrdersEditException()
    {
        $client = static::getApiClient();

        $response = $client->ordersEdit(array('id' => 678678678), 'asdf');
    }
}
