<?php

/**
 * PHP version 5.4
 *
 * API client customers test class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Tests\Methods\Version4;

use RetailCrm\ApiClient;
use RetailCrm\Test\TestCase;

/**
 * Class ApiClientCustomersTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
class ApiClientCustomersTest extends TestCase
{
    const FIRST_NAME = 'Иннокентий';

    /**
     * @group customers_v4
     */
    public function testCustomersCreate()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);

        $externalId = 'c-create-' . time();

        $response = $client->request->customersCreate([
            'firstName' => self::FIRST_NAME,
            'externalId' => $externalId,
        ]);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(201, $response->getStatusCode());
        static::assertTrue(is_int($response['id']));

        return [
            'id' => $response['id'],
            'externalId' => $externalId,
        ];
    }

    /**
     * @group customers_v4
     * @expectedException \InvalidArgumentException
     */
    public function testCreateExceptionEmpty()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);
        $client->request->customersCreate([]);
    }

    /**
     * @group   customers
     * @depends testCustomersCreate
     *
     * @param array $ids
     *
     * @return array
     */
    public function testCustomersGet(array $ids)
    {
        $client = static::getApiClient(null, null, ApiClient::V4);

        $response = $client->request->customersGet(678678678);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(404, $response->getStatusCode());
        static::assertFalse($response->isSuccessful());

        $response = $client->request->customersGet($ids['id'], 'id');
        $customerById = $response['customer'];
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
        static::assertEquals(self::FIRST_NAME, $response['customer']['firstName']);

        $response = $client->request->customersGet($ids['externalId'], 'externalId');
        static::assertEquals($customerById['id'], $response['customer']['id']);

        return $ids;
    }

    /**
     * @group customers_v4
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersGetException()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);
        $client->request->customersGet(678678678, 'asdf');
    }

    /**
     * @group   customers
     * @depends testCustomersGet
     *
     * @param array $ids
     */
    public function testCustomersEdit(array $ids)
    {
        $client = static::getApiClient(null, null, ApiClient::V4);

        $response = $client->request->customersEdit(
            [
                'id' => 22342134,
                'lastName' => '12345',
            ],
            'id'
        );
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(404, $response->getStatusCode());

        $response = $client->request->customersEdit([
            'externalId' => $ids['externalId'],
            'lastName' => '12345',
        ]);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group customers_v4
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersEditExceptionEmpty()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);
        $client->request->customersEdit([], 'asdf');
    }

    /**
     * @group customers_v4
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersEditException()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);
        $client->request->customersEdit(['id' => 678678678], 'asdf');
    }

    /**
     * @group customers_v4
     */
    public function testCustomersList()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);

        $response = $client->request->customersList();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue($response->isSuccessful());
        static::assertTrue(isset($response['customers']));

        $response = $client->request->customersList([], 1, 300);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertFalse(
            $response->isSuccessful(),
            'Pagination error'
        );

        $response = $client->request->customersList(['maxOrdersCount' => 10], 1);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(
            $response->isSuccessful(),
            'API returns customers list'
        );
    }

    /**
     * @group customers_v4
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersFixExternalIdsException()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);
        $client->request->customersFixExternalIds([]);
    }

    /**
     * @group customers_v4
     */
    public function testCustomersFixExternalIds()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);

        $response = $client->request->ordersCreate([
            'firstName' => 'Aaa111',
        ]);

        static::assertTrue(
            $response->isSuccessful(),
            'Order created'
        );

        $response = $client->request->ordersGet($response['id'], 'id');
        static::assertTrue(
            $response->isSuccessful(),
            'Order fetched'
        );

        $id = $response['order']['customer']['id'];
        $externalId = 'asdf' . time();

        $response = $client->request->customersFixExternalIds([
            ['id' => $id, 'externalId' => $externalId]
        ]);

        static::assertTrue(
            $response->isSuccessful(),
            'Fixed customer ids'
        );

        $response = $client->request->customersGet($externalId);
        static::assertTrue(
            $response->isSuccessful(),
            'Got customer'
        );
        static::assertEquals(
            $id,
            $response['customer']['id'],
            'Fixing of customer ids were right'
        );
        static::assertEquals(
            $externalId,
            $response['customer']['externalId'],
            'Fixing of customer ids were right'
        );
    }

    /**
     * @group customers_v4
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersUploadExceptionEmpty()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);
        $client->request->customersUpload([]);
    }

    /**
     * @group customers_v4
     */
    public function testCustomersUpload()
    {
        $client = static::getApiClient(null, null, ApiClient::V4);

        $externalIdA = 'upload-a-' . time();
        $externalIdB = 'upload-b-' . time();

        $response = $client->request->customersUpload([
            [
                'externalId' => $externalIdA,
                'firstName' => 'Aaa',
            ],
            [
                'externalId' => $externalIdB,
                'lastName' => 'Bbb',
            ],
        ]);
        static::assertTrue(
            $response->isSuccessful(),
            'Got customer'
        );
        static::assertEquals(
            $externalIdA,
            $response['uploadedCustomers'][0]['externalId']
        );
        static::assertEquals(
            $externalIdB,
            $response['uploadedCustomers'][1]['externalId']
        );
    }
}
