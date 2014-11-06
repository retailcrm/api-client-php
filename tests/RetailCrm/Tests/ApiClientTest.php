<?php

namespace RetailCrm\Tests;

use RetailCrm\Test\TestCase;

class ApiClientTest extends TestCase
{
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
    public function testStatisticUpdate()
    {
        $client = static::getApiClient();

        $response = $client->statisticUpdate();
        $this->assertTrue($response->isSuccessful());
    }
}
