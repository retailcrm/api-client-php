<?php

/**
 * PHP version 5.3
 *
 * API client store test class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Tests;

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
    const SNAME = 'Test Store';
    const SCODE = 'test-store';

    /**
     * @group store
     */
    public function testStoreCreate()
    {
        $client = static::getApiClient();

        $response = $client->storesEdit(array('name' => self::SNAME, 'code' => self::SCODE));
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(in_array($response->getStatusCode(), array(200, 201)));
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group store
     */
    public function testStoreInventories()
    {
        $client = static::getApiClient();

        $response = $client->storeInventories();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
        static::assertTrue(
            isset($response['offers']),
            'API returns orders assembly history'
        );
    }

    /**
     * @group store
     * @expectedException \InvalidArgumentException
     */
    public function testInventoriesException()
    {
        $client = static::getApiClient();
        $client->storeInventoriesUpload(array());
    }

    /**
     * @group store
     */
    public function testInventoriesUpload()
    {
        $client = static::getApiClient();

        $response = $client->storeInventoriesUpload(array(
            array(
                'externalId' => 'pTKIKAeghYzX21HTdzFCe1',
                'stores' => array(
                    array(
                        'code' => self::SCODE,
                        'available' => 10,
                        'purchasePrice' => 1700
                    )
                )
            ),
            array(
                'externalId' => 'JQIvcrCtiSpOV3AAfMiQB3',
                'stores' => array(
                    array(
                        'code' => self::SCODE,
                        'available' => 20,
                        'purchasePrice' => 1500
                    )
                )
            ),
        ));

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group integration
     */
    public function testInventoriesFailed()
    {
        $client = static::getApiClient();

        $externalIdA = 'upload-a-' . time();
        $externalIdB = 'upload-b-' . time();

        $response = $client->storeInventoriesUpload(array(
            array(
                'externalId' => $externalIdA,
                'available' => 10,
                'purchasePrice' => 1700
            ),
            array(
                'externalId' => $externalIdB,
                'available' => 20,
                'purchasePrice' => 1500
            ),
        ));
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(400, $response->getStatusCode());
        static::assertTrue(isset($response['errorMsg']), $response['errorMsg']);
    }

    /**
     * @group store
     */
    public function testStoreProducts()
    {
        $client = static::getApiClient();

        $response = $client->storeProducts();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group store
     */
    public function testStoreProductsGroups()
    {
        $client = static::getApiClient();

        $response = $client->storeProductsGroups();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }
}
