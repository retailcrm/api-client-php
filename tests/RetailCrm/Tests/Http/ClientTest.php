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
        $client = new Client('http://a.intarocrm.ru', array('apiKey' => '123'));
    }

    /**
     * @group unit
     * @expectedException \InvalidArgumentException
     */
    public function testMakeRequestWrongMethod()
    {
        $client = new Client('https://asdf.df', array());
        $client->makeRequest('/a', 'adsf');
    }

    /**
     * @group integration
     * @expectedException RetailCrm\Exception\CurlException
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
        $client = new Client('https://demo.intarocrm.ru/api/' . ApiClient::VERSION, array());
        $response = $client->makeRequest('/orders', Client::METHOD_GET);

        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(403, $response->getStatusCode());
    }
}
