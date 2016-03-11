<?php

namespace RetailCrm\Tests;

use RetailCrm\Test\TestCase;

class ApiClientPacksTest extends TestCase
{
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
    public function testOrdersPacksCreate()
    {
        $client = static::getApiClient();
        $pack = array(
            'itemId' => $_SERVER['CRM_PACK_ITEM'],
            'quantity' => $_SERVER['CRM_PACK_QUANTITY'],
            'store' => $_SERVER['CRM_STORE']
        );

        $response = $client->ordersPacksCreate($pack);
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(201, $response->getStatusCode());
        $this->assertTrue($response->success);
    }

    /**
     * @group integration
     */
    public function testOrdersPacksCreateFailed()
    {
        $client = static::getApiClient();
        $pack = array(
            'itemId' => 12,
            'store' => $_SERVER['CRM_STORE'],
            'quantity' => 2
        );

        $response = $client->ordersPacksCreate($pack);
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(400, $response->getStatusCode());
        $this->assertFalse($response->success);
    }

    /**
     * @group integration
     */
    public function testOrdersPacksGet()
    {
        $client = static::getApiClient();

        $response = $client->ordersPacksGet(1);
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->success);
    }

    /**
     * @group integration
     */
    public function testOrdersPacksDelete()
    {
        $client = static::getApiClient();

        $response = $client->ordersPacksDelete(1);
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->success);
    }
}
