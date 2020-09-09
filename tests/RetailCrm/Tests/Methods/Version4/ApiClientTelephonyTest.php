<?php

/**
 * PHP version 5.4
 *
 * API client telephony test class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */

namespace RetailCrm\Tests\Methods\Version4;

use RetailCrm\ApiClient;
use RetailCrm\Response\ApiResponse;
use RetailCrm\Test\TestCase;

/**
 * Class ApiClientTelephonyTest
 * @category RetailCrm
 * @package RetailCrm\Tests
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */
class ApiClientTelephonyTest extends TestCase
{

    const TEL_CODE = 'telephony-code-v4';
    const TEL_CLIENT = '123';
    const TEL_IMAGE = 'http://www.mec.ph/horizon/wp-content/uploads/2011/11/telephony.svg';

    /**
     * Settings Edit test
     *
     * @group telephony
     *
     * @return void
     */
    public function testTelephonySettingsEdit()
    {
        self::markTestSkipped('Should be fixed.');
        $client = static::getApiClient(null, null, ApiClient::V4);
        $user = getenv('RETAILCRM_USER') ?: $_SERVER['RETAILCRM_USER'];

        /* @var \RetailCrm\Response\ApiResponse $response */
        $response = $client->request->telephonySettingsEdit(
            self::TEL_CODE,
            self::TEL_CLIENT,
            true,
            'TestTelephonyV4',
            false,
            self::TEL_IMAGE,
            [['userId' => $user, 'code' => '101']],
            [['siteCode' => 'api-client-php', 'externalPhone' => '+74950000000']]
        );

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
        static::assertTrue($response->isSuccessful());
    }

    /**
     * Settings Get test
     *
     * @group telephony
     *
     * @return void
     */
    public function testTelephonySettingsGet()
    {
        self::markTestSkipped('Should be fixed.');
        $client = static::getApiClient(null, null, ApiClient::V4);

        /* @var \RetailCrm\Response\ApiResponse $response */
        $response = $client->request->telephonySettingsGet(self::TEL_CODE);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }

    /**
     * Event test
     *
     * @group telephony
     *
     * @return void
     */
    public function testTelephonyEvent()
    {
        $stub = $this->getMockBuilder(\RetailCrm\Http\Client::class)
            ->disableOriginalConstructor()
            ->setMethods(['makeRequest'])
            ->getMock();

        $parameters = [
            'phone' => '+79999999999',
            'type' => 'in',
            'codes' => ['101'],
            'userIds' => [2],
            'hangupStatus' => 'failed',
            'callExternalId' => '+74950000000',
            'externalPhone' => '123456789',
            'webAnalyticsData' => [],
            'site' => 'retailcrm-ru'
        ];

        $stub->expects(self::once())->method('makeRequest')->with(
            '/telephony/call/event',
            "POST",
            ['event' => json_encode($parameters)]
        )->willReturn((new ApiResponse(200, json_encode(['success' => true])))->asJsonResponse());

        $client = static::getMockedApiClient($stub);

        $response = $client->request->telephonyCallEvent(
            '+79999999999',
            'in',
            ['101'],
            [2],
            'failed',
            '123456789',
            '+74950000000',
            []
        );

        static::assertTrue($response->isSuccessful());
    }

    /**
     * Upload test
     *
     * @group telephony
     *
     * @return void
     */
    public function testTelephonyUpload()
    {
        self::markTestSkipped('Should be fixed.');
        $client = static::getApiClient(null, null, ApiClient::V4);

        $response = $client->request->telephonyCallsUpload(
            [
                [
                    'date' => '2016-07-22 00:18:00',
                    'type' => 'in',
                    'phone' => '+79999999999',
                    'code' => '101',
                    'result' => 'answered',
                    'externalId' => rand(10, 100),
                    'recordUrl' => 'http://download.retailcrm.pro/api-client-files/beep1.mp3'
                ],
                [
                    'date' => '2016-07-22 00:24:00',
                    'type' => 'in',
                    'phone' => '+79999999999',
                    'code' => '101',
                    'result' => 'answered',
                    'externalId' => rand(10, 100),
                    'recordUrl' => 'http://download.retailcrm.pro/api-client-files/beep2.mp3'
                ]
            ]
        );

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }

    /**
     * Manager test
     *
     * @group telephony
     *
     * @return void
     */
    public function testTelephonyManager()
    {
        self::markTestSkipped('Should be fixed.');
        $client = static::getApiClient(null, null, ApiClient::V4);

        $response = $client->request->telephonyCallManager('+79999999999', 1);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }
}
