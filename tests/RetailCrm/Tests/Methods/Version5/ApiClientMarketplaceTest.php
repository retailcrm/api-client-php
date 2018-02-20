<?php

/**
 * PHP version 5.4
 *
 * API client marketplace test class
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
 * Class ApiClientMarketplaceTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
class ApiClientMarketplaceTest extends TestCase
{
    const SERVICE_NAME = 'Marketplace integration v5';
    const SERVICE_CODE = 'integration_v5';

    /**
     * Test configuration
     *
     * @group marketplace_v5
     *
     * @return void
     */
    public function testConfigurationEdit()
    {
        $client = static::getApiClient();

        /**
         * Response
         *
         * @var \RetailCrm\Response\ApiResponse $response
         */
        $response = $client->request->integrationModulesEdit(
            [
                'name' => self::SERVICE_NAME,
                'code' => self::SERVICE_CODE,
                'clientId' => uniqid(),
                'logo' => 'http://download.retailcrm.pro/logos/setup.svg',
                'active' => 'true'
            ]
        );

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals($response->getStatusCode(), 200);
        static::assertTrue($response->isSuccessful());
    }
}
