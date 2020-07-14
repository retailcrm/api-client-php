<?php

/**
 * PHP version 5.4
 *
 * API client customers test class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */

namespace RetailCrm\Tests\Methods;

use RetailCrm\Test\TestCase;

/**
 * Class CommonMethodsTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */
class CommonMethodsTest extends TestCase
{
    /**
     * Available versions
     *
     * @group api_methods
     *
     * @return void
     */
    public function testAvailableVersions()
    {
        $client = static::getApiClient();

        $response = $client->request->availableVersions();

        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
        static::assertGreaterThan(0, count($response['versions']));
    }

    /**
     * Available methods
     *
     * @group api_methods
     *
     * @return void
     */
    public function testCredentials()
    {
        $client = static::getApiClient();

        $response = $client->request->credentials();

        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
        static::assertGreaterThan(0, count($response['credentials']));
    }

    /**
     * System settings
     *
     * @group api_methods
     *
     * @return void
     */
    public function testSettings()
    {
        $client = static::getApiClient();

        $response = $client->request->settings();

        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
        static::assertGreaterThan(0, count($response['settings']));
    }
}
