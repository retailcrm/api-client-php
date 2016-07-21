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
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion4
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
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion4
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
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertTrue(in_array($response->getStatusCode(), array(200, 201)));
        $this->assertTrue($response->isSuccessful());
    }

    /**
     * @group store
     */
    public function testStoreInventories()
    {
        $client = static::getApiClient();

        $response = $client->storeInventories();
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->isSuccessful());
        $this->assertTrue(
            isset($response['offers']),
            'API returns orders assembly history'
        );
    }

    /**
     * @group store
     * @expectedException \InvalidArgumentException
     */
    public function testStoreInventoriesUploadExceptionEmpty()
    {
        $client = static::getApiClient();
        $client->storeInventoriesUpload(array());
    }

    /**
     * @group store
     */
    public function testStoreInventoriesUpload()
    {
        $client = static::getApiClient();

        $externalIdA = 'upload-a-' . time();
        $externalIdB = 'upload-b-' . time();

        $response = $client->storeInventoriesUpload(array(
            array(
                'externalId' => $externalIdA,
                'stores' => array(
                    array(
                        'code' => self::SCODE,
                        'available' => 10,
                        'purchasePrice' => 1700
                    )
                )
            ),
            array(
                'externalId' => $externalIdB,
                'stores' => array(
                    array(
                        'code' => self::SCODE,
                        'available' => 20,
                        'purchasePrice' => 1500
                    )
                )
            ),
        ));

        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertTrue($response->isSuccessful());
    }

    /**
     * @group integration
     */
    public function testStoreInventoriesUploadFailed()
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
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(400, $response->getStatusCode());
        $this->assertTrue(isset($response['errorMsg']), $response['errorMsg']);
    }
}
