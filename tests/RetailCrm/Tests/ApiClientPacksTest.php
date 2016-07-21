<?php

/**
 * PHP version 5.3
 *
 * API client packs test class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion3
 */

namespace RetailCrm\Tests;

use RetailCrm\Test\TestCase;

/**
 * Class ApiClientPacksTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion3
 */
class ApiClientPacksTest extends TestCase
{
    private $_packId;

    /**
     * ApiClientPacksTest constructor.
     *
     * @param null|string $name     name
     * @param array       $data     data
     * @param string      $dataName dataName
     */
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->_packId = __DIR__ . '/../../../pack.tmp';
    }

    /**
     * Test packs history
     *
     * @group  integration
     * @return void
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
     * Test packs create
     *
     * @group  integration
     * @return void
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
        file_put_contents($this->_packId, $response["id"]);
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(201, $response->getStatusCode());
        $this->assertTrue($response->success);
    }

    /**
     * Test packs failed create
     *
     * @group  integration
     * @return void
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
     * Test packs get
     *
     * @group  integration
     * @return void
     */
    public function testOrdersPacksGet()
    {
        $client = static::getApiClient();

        $packId = file_get_contents($this->_packId);
        $response = $client->ordersPacksGet($packId);
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->success);
    }

    /**
     * Test packs delete
     *
     * @group  integration
     * @return void
     */
    public function testOrdersPacksDelete()
    {
        $client = static::getApiClient();

        $packId = file_get_contents($this->_packId);
        $response = $client->ordersPacksDelete($packId);
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->success);
        unlink($this->_packId);
    }
}
