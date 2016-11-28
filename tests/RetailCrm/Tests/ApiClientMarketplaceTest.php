<?php
/**
 * PHP version 5.3
 *
 * API client marketplace test class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion4
 */

namespace RetailCrm\Tests;

use RetailCrm\Test\TestCase;


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
            array(
                'name' => self::SNAME,
                'code' => self::SCODE,
                'logo' => 'http://download.retailcrm.pro/logos/setup.svg',
                'active' => 'true'
            )
        );

        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertTrue(in_array($response->getStatusCode(), array(200, 201)));
        $this->assertTrue($response->isSuccessful());
    }
}
