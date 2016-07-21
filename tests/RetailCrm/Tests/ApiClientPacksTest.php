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
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion4
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
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion4
 */
class ApiClientPacksTest extends TestCase
{
    /**
     * Test packs history
     *
     * @group  packs
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
     * Test packs failed create
     *
     * @group  packs
     * @return void
     */
    public function testOrdersPacksCreateFailed()
    {
        $client = static::getApiClient();
        $pack = array(
            'itemId' => 12,
            'store' => 'test',
            'quantity' => 2
        );

        $response = $client->ordersPacksCreate($pack);
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(400, $response->getStatusCode());
        $this->assertFalse($response->success);
    }
}
