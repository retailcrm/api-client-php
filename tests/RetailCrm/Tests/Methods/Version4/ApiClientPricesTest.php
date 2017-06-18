<?php

/**
 * PHP version 5.4
 *
 * API client prices test class
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

    /**
     * @group prices_v4
     */
    public function testPricesEdit()
    {

        $client = static::getApiClient(null, null, "v4");

        $response = $client->request->pricesTypesEdit(
            [
                'code' => 'sample_v4_price_code',
                'name' => 'Sample v4 price type',
                'ordering' => 500,
                'active' => true
            ]
        );

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @depends testPricesEdit
     * @group prices_v4
     */
    public function testPricesGet()
    {
        $client = static::getApiClient(null, null, "v4");

        $response = $client->request->pricesTypes();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }



    /**
     * @group prices_v4
     * @expectedException \InvalidArgumentException
     */
    public function testPricesUploadExceptionEmpty()
    {
        $client = static::getApiClient(null, null, "v4");
        $client->request->storePricesUpload([]);
    }

    /**
     * @depends testPricesEdit
     * @group prices_v4
     */
    public function testPricesUpload()
    {
        $client = static::getApiClient(null, null, "v4");

        $xmlIdA = 'upload-a-' . time();
        $xmlIdB = 'upload-b-' . time();

        $response = $client->request->storePricesUpload([
            [
                'xmlId' => $xmlIdA,
                'prices' => [
                    [
                        'code' => 'sample_v4_price_code',
                        'price' => 1700
                    ]
                ]
            ],
            [
                'xmlId' => $xmlIdB,
                'prices' => [
                    [
                        'code' => 'sample_v4_price_code',
                        'price' => 1500
                    ]
                ]
            ],
        ]);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
    }
}
