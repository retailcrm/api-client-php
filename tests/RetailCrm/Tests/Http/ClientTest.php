<?php

/**
 * PHP version 5.4
 *
 * API client test class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */

namespace RetailCrm\Tests\Http;

use RetailCrm\Test\TestCase;
use RetailCrm\Http\Client;

/**
 * Class ClientTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */
class ClientTest extends TestCase
{
    /**
     * @group client
     */
    public function testConstruct()
    {
        $client = new Client('https://asdf.df', []);

        static::assertInstanceOf('RetailCrm\Http\Client', $client);
    }

    /**
     * @group client
     * @expectedException \InvalidArgumentException
     */
    public function testHttpRequiring()
    {
        $configVersion = getenv('RETAILCRM_VERSION') ?: $_SERVER['RETAILCRM_VERSION'];
        $client = new Client('http://demo.retailcrm.ru/api/' . $configVersion, ['apiKey' => '123']);

        return $client;
    }

    /**
     * @group client
     */
    public function testHttpDebug()
    {
        $client_v3 = new Client('http://demo.retailcrm.ru/api/v3', ['apiKey' => '123'], true);
        $client_v4 = new Client('http://demo.retailcrm.ru/api/v4', ['apiKey' => '123'], true);
        $client_v5 = new Client('http://demo.retailcrm.ru/api/v5', ['apiKey' => '123'], true);

        static::assertInstanceOf('RetailCrm\Http\Client', $client_v3);
        static::assertInstanceOf('RetailCrm\Http\Client', $client_v4);
        static::assertInstanceOf('RetailCrm\Http\Client', $client_v5);
    }

    /**
     * @group client
     * @expectedException \InvalidArgumentException
     */
    public function testRequestWrongMethod()
    {
        $client = static::getClient();
        $client->makeRequest('/a', 'adsf');
    }

    /**
     * @group client
     * @expectedException \RetailCrm\Exception\CurlException
     */
    public function testRequestWrongUrl()
    {
        $client = new Client('https://asdf.df', []);
        $client->makeRequest('/a', Client::METHOD_GET, []);
    }

    /**
     * @group client
     */
    public function testRequestSuccess()
    {
        $client = static::getClient();
        $response = $client->makeRequest('/orders', Client::METHOD_GET);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertNotEmpty($response->getResponseBody());
        static::assertNotEmpty($response->getResponse());
        static::assertEquals(200, $response->getStatusCode());
    }

    /**
     * @group client
     */
    public function testRequestSuccessNoDeserialization()
    {
        $client = static::getClient();
        $response = $client->makeRawRequest('/orders', Client::METHOD_GET);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertNotEmpty($response->getResponseBody());
        static::assertEmpty($response->getResponse());
        static::assertEquals(200, $response->getStatusCode());
    }
}
