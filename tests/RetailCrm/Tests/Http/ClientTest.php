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
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
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
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
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
        static::assertEquals(200, $response->getStatusCode());
    }
}
