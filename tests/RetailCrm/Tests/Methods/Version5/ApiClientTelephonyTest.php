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
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Tests\Methods\Version5;

use RetailCrm\Test\TestCase;

/**
 * Class ApiClientTelephonyTest
 * @category RetailCrm
 * @package RetailCrm\Tests
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
class ApiClientTelephonyTest extends TestCase
{

    const TEL_CODE = 'telephony-code-v5';
    const TEL_CLIENT = '456';
    const TEL_IMAGE = 'http://www.mec.ph/horizon/wp-content/uploads/2011/11/telephony.svg';

    /**
     * Event test
     *
     * @group telephony
     *
     * @return void
     */
    public function testTelephonyEvent()
    {
        $client = static::getApiClient();
        $response = $client->request->telephonyCallEvent(
            '+79999999999',
            'in',
            ['101'],
            'failed',
            '+74950000000'
        );

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
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
        $client = static::getApiClient();
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
        $client = static::getApiClient();
        $response = $client->request->telephonyCallManager('+79999999999', 1);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group telephony_v5
     * @expectedException \InvalidArgumentException
     */
    public function testTelephonySettingsGet()
    {
        $client = static::getApiClient();
        $client->request->telephonySettingsGet(self::TEL_CODE);
    }
}
