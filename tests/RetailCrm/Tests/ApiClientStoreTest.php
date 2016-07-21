<?php

namespace RetailCrm\Tests;

use RetailCrm\Test\TestCase;

/**
 * Class ApiClientStoreTest
 * @package RetailCrm\Tests
 */
class ApiClientStoreTest extends TestCase
{
    const SNAME = 'Test Store';
    const SCODE = 'test-store';

    /**
     * @group integration
     */
    public function testStoreCreate()
    {
        $client = static::getApiClient();

        $response = $client->storesEdit(array('name' => self::SNAME, 'code' => self::SCODE));
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertTrue(in_array($response->getStatusCode(), array(200, 201)));
        $this->assertTrue($response->success);
    }

    /**
     * @group integration
     */
    public function testStoreInventories()
    {
        $client = static::getApiClient();

        $response = $client->storeInventories();
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->success);
        $this->assertTrue(
            isset($response['offers']),
            'API returns orders assembly history'
        );
    }

    /**
     * @group unit
     * @expectedException \InvalidArgumentException
     */
    public function testStoreInventoriesUploadExceptionEmpty()
    {
        $client = static::getApiClient();
        $client->storeInventoriesUpload(array());
    }

    /**
     * @group integration
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
