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

namespace RetailCrm\Tests;

use RetailCrm\Test\TestCase;

/**
 * Class ApiClientMarketplaceTest
 *
 * @package RetailCrm\Tests
 */
class ApiClientMarketplaceTest extends TestCase
{
    const SNAME = 'Marketplace integration';
    const SCODE = 'integration';

    /**
     * @group marketplace
     */
    public function testConfigurationEdit()
    {
        $client = static::getApiClient();

        $response = $client->marketplaceSettingsEdit(
            [
                'name' => self::SNAME,
                'code' => self::SCODE,
                'logo' => 'http://download.retailcrm.pro/logos/setup.svg',
                'active' => 'true'
            ]
        );

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
        static::assertTrue($response->isSuccessful());
    }
}
