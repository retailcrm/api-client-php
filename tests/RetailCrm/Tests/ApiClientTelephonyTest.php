<?php

namespace RetailCrm\Tests;

use RetailCrm\Test\TestCase;

/**
 * Class ApiClientTelephonyTest
 * @category RetailCrm
 * @package RetailCrm\Tests
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion3
 */
class ApiClientTelephonyTest extends TestCase
{
    /**
     * Settings test
     *
     * @group integration
     *
     * @return void
     */
    public function testTelephonySettings()
    {
        $client = static::getApiClient();

        $code = 'telphin';
        $clientId = '1';
        $active = true;

        $response = $client->telephonySettings(
            $code,
            $clientId,
            $active
        );

        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->success);
    }
}
