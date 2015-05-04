<?php

namespace RetailCrm\Tests\Http;

use RetailCrm\Test\TestCase;
use RetailCrm\ApiClient;
use RetailCrm\Http\Client;

class ClientTest extends TestCase
{
    /**
     * @group unit
     */
    public function testConstruct()
    {
        $client = new Client('https://asdf.df', array());

        $this->assertInstanceOf('RetailCrm\Http\Client', $client);
    }

    /**
     * @group unit
     * @expectedException \InvalidArgumentException
     */
    public function testHttpRequiring()
    {
        $client = new Client('http://demo.retailcrm.ru/api/' . ApiClient::VERSION, array('apiKey' => '123'));
    }

    /**
     * @group unit
     * @expectedException \InvalidArgumentException
     */
    public function testMakeRequestWrongMethod()
    {
        $client = static::getClient();
        $client->makeRequest('/a', 'adsf');
    }

    /**
     * @group integration
     * @expectedException \RetailCrm\Exception\CurlException
     */
    public function testMakeRequestWrongUrl()
    {
        $client = new Client('https://asdf.df', array());
        $client->makeRequest('/a', Client::METHOD_GET, array(), 1);
    }

    /**
     * @group integration
     */
    public function testMakeRequestSuccess()
    {
        $client = static::getClient();
        $response = $client->makeRequest('/orders', Client::METHOD_GET);

        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(200, $response->getStatusCode());
    }
    
    /**
     * @group integration
     * @expectedException \RetailCrm\Exception\CurlException
     */
    public function testMakeRequestTimeout()
    {
        $client = static::getClient();
        $client->makeRequest('/orders', Client::METHOD_GET, array(), 1, false, true);
    }
}
