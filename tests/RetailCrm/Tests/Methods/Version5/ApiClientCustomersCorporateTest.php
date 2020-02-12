<?php

/**
 * PHP version 5.4
 *
 * API client corporate customers test class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */

namespace RetailCrm\Tests\Methods\Version5;

use RetailCrm\Test\TestCase;

/**
 * Class ApiClientCustomersCorporateTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */
class ApiClientCustomersCorporateTest extends TestCase
{
    const NICK_NAME = 'ООО "Чем-то Пахнет"';

    /**
     * @group customers_corporate_v5
     */
    public function testCustomersCorporateCreate()
    {
        $client = static::getApiClient();

        $externalId = 'c-create-' . time();

        $response = $client->request->customersCorporateCreate([
            'nickName' => self::NICK_NAME,
            'externalId' => $externalId
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
     * @group customers_corporate_v5
     * @expectedException \InvalidArgumentException
     */
    public function testCreateExceptionEmpty()
    {
        $client = static::getApiClient();
        $client->request->customersCorporateCreate([]);
    }

    /**
     * @group customers_corporate_v5
     * @depends testCustomersCorporateCreate
     *
     * @param array $ids
     *
     * @return array
     */
    public function testCustomersCorporateGet(array $ids)
    {
        $client = static::getApiClient();

        $response = $client->request->customersCorporateGet(678678678);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(404, $response->getStatusCode());
        static::assertFalse($response->isSuccessful());

        $response = $client->request->customersCorporateGet($ids['id'], 'id');
        $customerById = $response['customerCorporate'];
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
        static::assertEquals(self::NICK_NAME, $response['customerCorporate']['nickName']);

        $response = $client->request->customersCorporateGet($ids['externalId'], 'externalId');
        static::assertEquals($customerById['id'], $response['customerCorporate']['id']);

        return $ids;
    }

    /**
     * @group customers_corporate_v5
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersCorporateGetException()
    {
        $client = static::getApiClient();
        $client->request->customersCorporateGet(678678678, 'asdf');
    }

    /**
     * @group   customers_corporate_v5
     * @depends testCustomersCorporateGet
     *
     * @param array $ids
     *
     * @return array
     */
    public function testCustomersCorporateEdit(array $ids)
    {
        $client = static::getApiClient();

        $response = $client->request->customersCorporateEdit(
            [
                'id' => 22342134,
                'nickName' => '12345',
            ],
            'id'
        );
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(404, $response->getStatusCode());

        $response = $client->request->customersCorporateEdit([
            'externalId' => $ids['externalId'],
            'mainAddress' => ['name' => '12345'],
        ]);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());

        return $ids;
    }

    /**
     * testCustomersCorporateEditException
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersCorporateEditExceptionNoExternalId()
    {
        $client = static::getApiClient();
        $client->request->customersCorporateEdit(['id' => 0]);
    }

    /**
     * @group customers_corporate_v5
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersCorporateEditExceptionEmpty()
    {
        $client = static::getApiClient();
        $client->request->customersCorporateEdit([], 'asdf');
    }

    /**
     * @group customers_corporate_v5
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersCorporateEditException()
    {
        $client = static::getApiClient();
        $client->request->customersCorporateEdit(['id' => 678678678], 'asdf');
    }

    /**
     * @group customers_corporate_v5
     */
    public function testCustomersCorporateList()
    {
        $client = static::getApiClient();

        $response = $client->request->customersCorporateList();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue($response->isSuccessful());
        static::assertTrue(isset($response['customersCorporate']));

        $response = $client->request->customersCorporateList([], 1, 300);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertFalse(
            $response->isSuccessful(),
            'Pagination error'
        );

        $response = $client->request->customersCorporateList(['maxOrdersCount' => 10], 1);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(
            $response->isSuccessful(),
            'API returns customers list'
        );
    }

    /**
     * @group customers_corporate_v5
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersCorporateFixExternalIdsException()
    {
        $client = static::getApiClient();
        $client->request->customersCorporateFixExternalIds([]);
    }

    /**
     * @group customers_corporate_v5
     */
    public function testCustomersCorporateFixExternalIds()
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

        $response = $client->request->customersCorporateFixExternalIds([
            ['id' => $id, 'externalId' => $externalId]
        ]);

        static::assertTrue(
            $response->isSuccessful(),
            'Fixed customer ids'
        );

        $response = $client->request->customersCorporateGet($externalId);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
    }

    /**
     * @group customers_corporate_v5
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersCorporateUploadExceptionEmpty()
    {
        $client = static::getApiClient();
        $client->request->customersCorporateUpload([]);
    }

    /**
     * @group customers_corporate_v5
     */
    public function testCustomersCorporateUpload()
    {
        $client = static::getApiClient();

        $externalIdA = 'upload-a-' . time();
        $externalIdB = 'upload-b-' . time();

        $response = $client->request->customersCorporateUpload([
            [
                'externalId' => $externalIdA,
                'nickName' => 'Aaa',
            ],
            [
                'externalId' => $externalIdB,
                'nickName' => 'Bbb',
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
     * testCustomersCorporateAddressesException
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersCorporateAddressesException()
    {
        $client = static::getApiClient();
        $client->request->customersCorporateAddresses('', [], [], [], 'uid');
    }

    /**
     * testCustomersCorporateAddresses
     *
     * @param array $ids
     *
     * @group   customers_corporate_v5
     * @depends testCustomersCorporateEdit
     * @return array
     */
    public function testCustomersCorporateAddresses(array $ids)
    {
        $client = static::getApiClient();
        $response = $client->request->customersCorporateAddresses($ids['externalId'], ['name' => 'name'], 1, 20);
        
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(
            $response->isSuccessful(),
            'API returns addresses list'
        );

        return $ids;
    }

    /**
     * @group customers_corporate_v5
     */
    public function testCustomersCorporateHistory()
    {
        $client = static::getApiClient();
        $response = $client->request->customersCorporateHistory(['sinceId' => 1], 1, 20);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(
            $response->isSuccessful(),
            'API returns history list'
        );
    }

    /**
     * @group customers_corporate_v5
     */
    public function testCustomersCorporateNotesList()
    {
        $client = static::getApiClient();
        $response = $client->request->customersCorporateNotesList(['text' => 'text'], 1, 20);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(
            $response->isSuccessful(),
            'API returns notes list'
        );
    }

    /**
     * @group   customers_corporate_v5
     * @depends testCustomersCorporateAddresses
     *
     * @param array $ids
     *
     * @return array
     */
    public function testCustomersCorporateCompaniesList(array $ids)
    {
        $client = static::getApiClient();
        $response = $client->request->customersCorporateCompanies($ids['externalId'], ['ids' => [1]], 1, 20);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(
            $response->isSuccessful(),
            'API returns companies list'
        );

        return $ids;
    }

    /**
     * @group customers_corporate_v5
     *
     * @param array $ids
     * @depends testCustomersCorporateCompaniesList
     *
     * @return array
     */
    public function testCustomersCorporateContactsList(array $ids)
    {
        $client = static::getApiClient();
        $response = $client->request->customersCorporateContacts($ids['externalId'], ['ids' => [1]], 1, 20);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(
            $response->isSuccessful(),
            'API returns contacts list'
        );

        return $ids;
    }

    /**
     * testCustomersCorporateNotesCreate
     *
     * @param array $ids
     *
     * @depends testCustomersCorporateContactsList
     * @return array
     */
    public function testCustomersCorporateNotesCreate(array $ids)
    {
        $client = static::getApiClient();
        $response = $client->request->customersCorporateNotesCreate([
            'text' => 'test note',
            'customer' => [
                'externalId' => $ids['externalId']
            ]
        ]);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(201, $response->getStatusCode());
        static::assertArrayHasKey('id', $response->getResponse());

        return array_merge($response->getResponse(), ['customer' => $ids]);
    }

    /**
     * testCustomersCorporateNotesCreateException
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersCorporateNotesCreateException()
    {
        $client = static::getApiClient();
        $client->request->customersCorporateNotesCreate([
            'text' => 'test note',
            'customer' => []
        ]);
    }

    /**
     * testCustomersCorporateNotesDelete
     *
     * @param array $noteResponse
     *
     * @depends testCustomersCorporateNotesCreate
     * @return mixed
     */
    public function testCustomersCorporateNotesDelete(array $noteResponse)
    {
        $client = static::getApiClient();
        $response = $client->request->customersCorporateNotesDelete($noteResponse['id']);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());

        return $noteResponse['customer'];
    }

    /**
     * testCustomersCorporateNotesDeleteException
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersCorporateNotesDeleteException()
    {
        $client = static::getApiClient();
        $client->request->customersCorporateNotesDelete(null);
    }

    /**
     * testCustomersCorporateAddressCreate
     *
     * @param array $ids
     * @depends testCustomersCorporateNotesDelete
     *
     * @return array
     */
    public function testCustomersCorporateAddressCreate(array $ids)
    {
        $client = static::getApiClient();
        $response = $client->request->customersCorporateAddressesCreate(
            $ids['externalId'],
            ['text' => 'Boldovo, Ruzayevsky District, Respublika Mordoviya']
        );

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue($response->isSuccessful(), 'Address is created');
        static::assertArrayHasKey('id', $response->getResponse());

        return array_merge($response->getResponse(), ['customer' => $ids]);
    }

    /**
     * testCustomersCorporateAddressEdit
     *
     * @param array $createResponse
     * @depends testCustomersCorporateAddressCreate
     *
     * @return array
     */
    public function testCustomersCorporateAddressEdit(array $createResponse)
    {
        $client = static::getApiClient();
        $response = $client->request->customersCorporateAddressesEdit(
            $createResponse['customer']['externalId'],
            $createResponse['id'],
            ['text' => '648593, Evenkiysky District, Krasnoyarsk Krai'],
            'externalId',
            'id'
        );

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue($response->isSuccessful(), 'Address is edited');

        return $createResponse['customer'];
    }

    /**
     * testCustomersCorporateAddressesEditException
     * @expectedException \InvalidArgumentException
     */
    public function testCustomersCorporateAddressesEditException()
    {
        $client = static::getApiClient();
        $client->request->customersCorporateAddressesEdit(0, 0, []);
    }

    /**
     * testCustomersCorporateCompaniesCreate
     *
     * @param array $ids
     * @depends testCustomersCorporateAddressEdit
     *
     * @return array
     */
    public function testCustomersCorporateCompaniesCreate(array $ids)
    {
        $client = static::getApiClient();
        $response = $client->request->customersCorporateCompaniesCreate(
            $ids['externalId'],
            [
                'active' => true,
                'name' => 'Company name',
                'brand' => 'company brand',
                'contragent' => [
                    'contragentType' => 'legal-entity',
                    'legalName' => 'Company Name',
                    'legalAddress' => '648593, Evenkiysky District, Krasnoyarsk Krai',
                    'INN' => '000000000',
                    'OKPO' => '000000000',
                    'KPP' => '000000000',
                    'OGRN' => '000000000',
                    'BIK' => '000000000',
                    'bank' => 'bank',
                    'bankAddress' => 'bank address',
                    'corrAccount' => 'correspondent account',
                    'bankAccount' => 'bank account'
                ]
            ]
        );

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue($response->isSuccessful(), 'Company is created');
        static::assertArrayHasKey('id', $response->getResponse());

        return array_merge($response->getResponse(), ['customer' => $ids]);
    }

    /**
     * testCustomersCorporateCompaniesEdit
     *
     * @depends testCustomersCorporateCompaniesCreate
     *
     * @param array $createResp
     *
     * @return mixed
     */
    public function testCustomersCorporateCompaniesEdit(array $createResp)
    {
        $client = static::getApiClient();
        $response = $client->request->customersCorporateCompaniesEdit(
            $createResp['customer']['externalId'],
            $createResp['id'],
            ['name' => 'Company Name 2'],
            'externalId',
            'id'
        );

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue($response->isSuccessful(), 'Company is edited');
        static::assertArrayHasKey('id', $response->getResponse());

        return $createResp['customer'];
    }

    /**
     * testCustomersCorporateContactsCreate
     *
     * @param array $ids
     * @depends testCustomersCorporateCompaniesEdit
     *
     * @return array
     */
    public function testCustomersCorporateContactsCreate(array $ids)
    {
        $client = static::getApiClient();
        $testCustomerExternalId = sprintf('test-customer-external-id-%d', time());
        $customerResponse = $client->request->customersCreate([
            'firstName' => 'Test Customer',
            'externalId' => $testCustomerExternalId,
        ]);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $customerResponse);
        static::assertTrue($customerResponse->isSuccessful(), 'Test customer is created');

        $response = $client->request->customersCorporateContactsCreate(
            $ids['externalId'],
            [
                'customer' => [
                    'externalId' => $testCustomerExternalId,
                    'browserId' => 'ca205b35862546758218cac776355f32',
                    'site' => static::getSite()
                ]
            ]
        );

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue($response->isSuccessful(), 'Contact person is created');
        static::assertArrayHasKey('id', $response->getResponse());

        return [
            'contact' => $customerResponse->getResponse(),
            'customer' => $ids
        ];
    }

    /**
     * testCustomersCorporateContactsEdit
     *
     * @depends testCustomersCorporateContactsCreate
     *
     * @param array $createResp
     *
     * @return mixed
     */
    public function testCustomersCorporateContactsEdit(array $createResp)
    {
        $client = static::getApiClient();
        $response = $client->request->customersCorporateContactsEdit(
            $createResp['customer']['externalId'],
            $createResp['contact']['id'],
            [
                'id' => $createResp['contact']['id'],
                'customer' => [
                    'browserId' => '73997eedbdaf4c0991b1a5511aeae407',
                    'site' => static::getSite()
                ]
            ],
            'externalId',
            'id',
            static::getSite()
        );

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue($response->isSuccessful(), 'Contact person is edited');
        static::assertArrayHasKey('id', $response->getResponse());

        return $createResp['customer'];
    }

    /**
     * getSite
     *
     * @return string
     */
    private static function getSite()
    {
        return getenv('RETAILCRM_SITE') ?: $_SERVER['RETAILCRM_SITE'];
    }
}
