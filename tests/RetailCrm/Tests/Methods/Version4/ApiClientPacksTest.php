<?php

/**
 * PHP version 5.4
 *
 * API client packs test class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Tests\Methods\Version4;

use RetailCrm\Test\TestCase;

/**
 * Class ApiClientPacksTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
class ApiClientPacksTest extends TestCase
{
    /**
     * @group packs_v4
     */
    public function testPacksHistory()
    {
        $client = static::getApiClient(null, null, "v4");

        $response = $client->request->ordersPacksHistory();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->success);
        static::assertTrue(
            isset($response['history']),
            'API returns orders assembly history'
        );
        static::assertTrue(
            isset($response['generatedAt']),
            'API returns generatedAt in orders assembly history'
        );
    }

    /**
     * @group packs_v4
     */
    public function testPacksCreateFailed()
    {
        $client = static::getApiClient(null, null, "v4");
        $pack = [
            'itemId' => 12,
            'store' => 'test',
            'quantity' => 2
        ];

        $response = $client->request->ordersPacksCreate($pack);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(400, $response->getStatusCode());
        static::assertFalse($response->success);
    }
}
