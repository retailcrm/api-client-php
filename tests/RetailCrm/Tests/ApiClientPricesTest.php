<?php

/**
 * PHP version 5.3
 *
 * API client prices test class
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
 * Class ApiClientPricesTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
class ApiClientPricesTest extends TestCase
{

    protected $code;

    /**
     * ApiClientPricesTest constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->code = 'price-code-a-' . time();
    }

    /**
     * @group prices
     */
    public function testUsersGroups()
    {
        $client = static::getApiClient();

        $response = $client->usersGroups();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group prices
     */
    public function testPricesGet()
    {
        $client = static::getApiClient();

        $response = $client->pricesTypes();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group prices
     */
    public function testPricesEdit()
    {

        $client = static::getApiClient();

        $response = $client->pricesEdit(
            array(
                'code' => $this->code,
                'name' => $this->code,
                'ordering' => 500,
                'active' => true
            )
        );

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(201, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group prices
     * @expectedException \InvalidArgumentException
     */
    public function testPricesUploadExceptionEmpty()
    {
        $client = static::getApiClient();
        $client->storePricesUpload(array());
    }

    /**
     * @group prices
     */
    public function testPricesUpload()
    {
        $client = static::getApiClient();

        $xmlIdA = 'upload-a-' . time();
        $xmlIdB = 'upload-b-' . time();

        $response = $client->storePricesUpload(array(
            array(
                'xmlId' => $xmlIdA,
                'prices' => array(
                    array(
                        'code' => $this->code,
                        'price' => 1700
                    )
                )
            ),
            array(
                'xmlId' => $xmlIdB,
                'prices' => array(
                    array(
                        'code' => $this->code,
                        'price' => 1500
                    )
                )
            ),
        ));

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
    }
}
