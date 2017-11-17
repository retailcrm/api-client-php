<?php

/**
 * PHP version 5.4
 *
 * API client store test class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Tests\Methods\Version5;

use RetailCrm\Test\TestCase;

/**
 * Class ApiClientStoreTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
class ApiClientStoreTest extends TestCase
{
    const SNAME = 'Test Store V5';
    const SCODE = 'test-store-v5';

    /**
     * @group store_v5
     */
    public function testStoreCreate()
    {

        $client = static::getApiClient();

        $response = $client->request->storesEdit(['name' => self::SNAME, 'code' => self::SCODE]);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group store_v5
     */
    public function testStoreInventories()
    {

        $client = static::getApiClient();

        $response = $client->request->storeInventories();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
        static::assertTrue(
            isset($response['offers']),
            'API returns orders assembly history'
        );
    }

    /**
     * @group store_v5
     * @expectedException \InvalidArgumentException
     */
    public function testInventoriesException()
    {

        $client = static::getApiClient();
        $client->request->storeInventoriesUpload([]);
    }

    /**
     * @group store_v5
     */
    public function testInventoriesUpload()
    {

        $client = static::getApiClient();

        $response = $client->request->storeInventoriesUpload([
            [
                'externalId' => 'pTKIKAeghYzX21HTdzFCe1',
                'stores' => [
                    [
                        'code' => self::SCODE,
                        'available' => 10,
                        'purchasePrice' => 1700
                    ]
                ]
            ],
            [
                'externalId' => 'JQIvcrCtiSpOV3AAfMiQB3',
                'stores' => [
                    [
                        'code' => self::SCODE,
                        'available' => 20,
                        'purchasePrice' => 1500
                    ]
                ]
            ],
        ]);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group store_v5
     */
    public function testInventoriesFailed()
    {

        $client = static::getApiClient();

        $externalIdA = 'upload-a-' . time();
        $externalIdB = 'upload-b-' . time();

        $response = $client->request->storeInventoriesUpload([
            [
                'externalId' => $externalIdA,
                'available' => 10,
                'purchasePrice' => 1700
            ],
            [
                'externalId' => $externalIdB,
                'available' => 20,
                'purchasePrice' => 1500
            ],
        ]);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(400, $response->getStatusCode());
        static::assertTrue(isset($response['errorMsg']), $response['errorMsg']);
    }

    /**
     * @group store_v5
     */
    public function testStoreProducts()
    {

        $client = static::getApiClient();

        $response = $client->request->storeProducts();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group store_v5
     */
    public function testStoreProductsGroups()
    {

        $client = static::getApiClient();

        $response = $client->request->storeProductsGroups();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group store_v5
     * @expectedException \InvalidArgumentException
     */
    public function testStoreSettingsGet()
    {
        $client = static::getApiClient();
        $client->request->storeSettingsGet(self::SCODE);
    }
}
