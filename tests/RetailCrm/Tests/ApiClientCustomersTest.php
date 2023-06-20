<?php

/**
 * PHP version 5.3
 *
 * API client customers test class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Tests;

use RetailCrm\Test\TestCase;
use function var_dump;

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
     * @group customers
     */
    public function testCustomersCreate()
    {
        $client = static::getApiClient();

        $externalId = 'c-create-' . time();

        $response = $client->request->customersCreate(array(
            'firstName' => self::FIRST_NAME,
            'externalId' => $externalId,
        ));

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(201, $response->getStatusCode());
        static::assertTrue(is_int($response['id']));

        return array(
            'id' => $response['id'],
            'externalId' => $externalId,
        );
    }

    /**
     * @group customers
     * @expectedException \InvalidArgumentException
     */
    public function testCreateExceptionEmpty()
    {
        $client = static::getApiClient();
        $client->request->customersCreate(array());
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
     * @group customers
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersGetException()
    {
        $client = static::getApiClient();
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
        $client = static::getApiClient();

        $response = $client->request->customersEdit(
            array(
                'id' => 22342134,
                'lastName' => '12345',
            ),
            'id'
        );
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(404, $response->getStatusCode());

        $response = $client->request->customersEdit(array(
            'externalId' => $ids['externalId'],
            'lastName' => '12345',
        ));
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group customers
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersEditExceptionEmpty()
    {
        $client = static::getApiClient();
        $client->request->customersEdit(array(), 'asdf');
    }

    /**
     * @group customers
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersEditException()
    {
        $client = static::getApiClient();
        $client->request->customersEdit(array('id' => 678678678), 'asdf');
    }

    /**
     * @group customers
     */
    public function testCustomersList()
    {
        $client = static::getApiClient();

        $response = $client->request->customersList();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue($response->isSuccessful());
        static::assertTrue(isset($response['customers']));

        $response = $client->request->customersList(array(), 1, 300);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertFalse(
            $response->isSuccessful(),
            'Pagination error'
        );

        $response = $client->request->customersList(array('maxOrdersCount' => 10), 1);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(
            $response->isSuccessful(),
            'API returns customers list'
        );
    }

    /**
     * @group customers
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersFixExternalIdsException()
    {
        $client = static::getApiClient();
        $client->request->customersFixExternalIds(array());
    }

    /**
     * @group customers
     */
    public function testCustomersFixExternalIds()
    {
        $client = static::getApiClient();

        $response = $client->request->ordersCreate(array(
            'firstName' => 'Aaa111',
        ));

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

        $response = $client->request->customersFixExternalIds(array(
            array('id' => $id, 'externalId' => $externalId)
        ));

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
     * @group customers
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersUploadExceptionEmpty()
    {
        $client = static::getApiClient();
        $client->request->customersUpload(array());
    }

    /**
     * @group customers
     */
    public function testCustomersUpload()
    {
        $client = static::getApiClient();

        $externalIdA = 'upload-a-' . time();
        $externalIdB = 'upload-b-' . time();

        $response = $client->request->customersUpload(array(
            array(
                'externalId' => $externalIdA,
                'firstName' => 'Aaa',
            ),
            array(
                'externalId' => $externalIdB,
                'lastName' => 'Bbb',
            ),
        ));
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
     * @group customers
     */
    public function testCustomersCombine()
    {
        $client = static::getApiClient();

        $responseCreateFirst = $client->request->customersCreate(array(
            'firstName' => 'Aaa111',
            'externalId' => 'AA-' . time(),
            'phones' => array(
                array(
                    'number' => '+79999999990'
                )
            )
        ));

        static::assertTrue(
            $responseCreateFirst->isSuccessful(),
            'Got customer'
        );

        $responseCreateSecond = $client->request->customersCreate(array(
            'firstName' => 'Aaa222',
            'externalId' => 'BB-' . time(),
            'phones' => array(
                array(
                    'number' => '+79999999991'
                )
            )
        ));

        static::assertTrue(
            $responseCreateSecond->isSuccessful(),
            'Got customer'
        );

        $customers = array(
            array('id' => $responseCreateFirst['id'])
        );

        $resultCustomer = array('id' => $responseCreateSecond['id']);

        $response = $client->request->customersCombine($customers, $resultCustomer);

        static::assertTrue(
            $response->isSuccessful(),
            'Customers combined'
        );
    }
}
