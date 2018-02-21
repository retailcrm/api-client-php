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

namespace RetailCrm\Tests\Methods\Version5;

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
     * @group customers_v5
     */
    public function testCustomersCreate()
    {
        $client = static::getApiClient();

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
     * @group customers_v5
     * @expectedException \InvalidArgumentException
     */
    public function testCreateExceptionEmpty()
    {
        $client = static::getApiClient();
        $client->request->customersCreate([]);
    }

    /**
     * @group customers_v5
     * @depends testCustomersCreate
     *
     * @param array $ids
     *
     * @return array
     */
    public function testCustomersGet(array $ids)
    {
        $client = static::getApiClient();

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
     * @group customers_v5
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersGetException()
    {
        $client = static::getApiClient();
        $client->request->customersGet(678678678, 'asdf');
    }

    /**
     * @group customers_v5
     * @depends testCustomersGet
     *
     * @param array $ids
     */
    public function testCustomersEdit(array $ids)
    {
        $client = static::getApiClient();

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
     * @group customers_v5
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersEditExceptionEmpty()
    {
        $client = static::getApiClient();
        $client->request->customersEdit([], 'asdf');
    }

    /**
     * @group customers_v5
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersEditException()
    {
        $client = static::getApiClient();
        $client->request->customersEdit(['id' => 678678678], 'asdf');
    }

    /**
     * @group customers_v5
     */
    public function testCustomersList()
    {
        $client = static::getApiClient();

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
     * @group customers_v5
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersFixExternalIdsException()
    {
        $client = static::getApiClient();
        $client->request->customersFixExternalIds([]);
    }

    /**
     * @group customers_v5
     */
    public function testCustomersFixExternalIds()
    {
        $client = static::getApiClient();

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
     * @group customers_v5
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersUploadExceptionEmpty()
    {
        $client = static::getApiClient();
        $client->request->customersUpload([]);
    }

    /**
     * @group customers_v5
     */
    public function testCustomersUpload()
    {
        $client = static::getApiClient();

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

    /**
     * @group customers_v5
     */
    public function testCustomersCombine()
    {
        $client = static::getApiClient();

        $responseCreateFirst = $client->request->customersCreate([
            'firstName' => 'Aaa111',
            'externalId' => 'AA-' . time(),
            'phones' => [
                [
                    'number' => '+79999999990'
                ]
            ]
        ]);

        static::assertTrue(
            $responseCreateFirst->isSuccessful(),
            'Got customer'
        );

        $responseCreateSecond = $client->request->customersCreate([
            'firstName' => 'Aaa222',
            'externalId' => 'BB-' . time(),
            'phones' => [
                [
                    'number' => '+79999999991'
                ]
            ]
        ]);

        static::assertTrue(
            $responseCreateSecond->isSuccessful(),
            'Got customer'
        );

        $customers = [
            ['id' => $responseCreateFirst['id']]
        ];

        $resultCustomer = ['id' => $responseCreateSecond['id']];

        $response = $client->request->customersCombine($customers, $resultCustomer);

        static::assertTrue(
            $response->isSuccessful(),
            'Customers combined'
        );
    }

    /**
     * @group customers_v5
     */
    public function testCustomersNotesCreate()
    {
        $client = static::getApiClient();

        $responseCreateFirst = $client->request->customersCreate([
            'firstName' => 'Some',
            'lastName' => 'Test',
            'externalId' => 'AA-' . time(),
            'phones' => [
                [
                    'number' => '+79999999990'
                ]
            ]
        ]);

        static::assertTrue(
            $responseCreateFirst->isSuccessful(),
            'Got customer'
        );

        $note = [
            'managerId' => 6,
            'text' => 'test note',
            'createdAt' => date('Y-m-d H:i:s'),
            'customer' => [
                'id' => $responseCreateFirst['id']
            ]
        ];

        $response = $client->request->customersNotesCreate($note);

        static::assertTrue($response->isSuccessful(), 'Note created');
        static::assertEquals(201, $response->getStatusCode());
    }

    /**
     * @group customers_v5
     */
    public function testCustomersNotesList()
    {
        $client = static::getApiClient();

        $responseCreateFirst = $client->request->customersCreate([
            'firstName' => 'Some',
            'lastName' => 'Test',
            'externalId' => 'AA-' . time(),
            'phones' => [
                [
                    'number' => '+79999999990'
                ]
            ]
        ]);

        static::assertTrue(
            $responseCreateFirst->isSuccessful(),
            'Got customer'
        );

        $response = $client->request->customersNotesList(['customerIds' => [$responseCreateFirst['id']]]);

        static::assertTrue($response->isSuccessful(), 'Got notes list');
        static::assertEquals(200, $response->getStatusCode());
    }

    /**
     * @group customers_v5
     */
    public function testCustomersNotesDelete()
    {
        self::markTestSkipped('Should be fixed.');

        $client = static::getApiClient();

        $responseCreateFirst = $client->request->customersCreate([
            'firstName' => 'Some',
            'lastName' => 'Test',
            'externalId' => 'AA-' . time(),
            'phones' => [
                [
                    'number' => '+79999999990'
                ]
            ]
        ]);

        static::assertTrue(
            $responseCreateFirst->isSuccessful(),
            'Got customer'
        );

        $note = [
            'managerId' => 6,
            'text' => 'test note',
            'createdAt' => date('Y-m-d H:i:s'),
            'customer' => [
                'id' => $responseCreateFirst['id']
            ]
        ];

        $response = $client->request->customersNotesCreate($note);

        static::assertTrue($response->isSuccessful(), 'Note created');
        static::assertEquals(201, $response->getStatusCode());

        $responseDelete =  $client->request->customersNotesDelete($response['id']);

        static::assertTrue($responseDelete->isSuccessful(), 'Note deleted');
        static::assertEquals(200, $responseDelete->getStatusCode());
    }
}
