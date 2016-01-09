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
}