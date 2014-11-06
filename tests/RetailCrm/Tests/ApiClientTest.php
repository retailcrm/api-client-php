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
}
