<?php

/**
 * PHP version 5.3
 *
 * API client users test class
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
 * Class ApiClientUsersTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
class ApiClientUsersTest extends TestCase
{
    /**
     * @group users
     */
    public function testUsersList()
    {
        $client = static::getApiClient();

        $response = $client->usersList();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(in_array($response->getStatusCode(), array(200, 201)));
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group users
     */
    public function testUsersGet()
    {
        $client = static::getApiClient();

        $response = $client->usersGet($_SERVER["CRM_USER_ID"]);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(in_array($response->getStatusCode(), array(200, 201)));
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group users
     */
    public function testUsersStatus()
    {
        $client = static::getApiClient();

        $response = $client->usersStatus($_SERVER["CRM_USER_ID"], 'dinner');
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(in_array($response->getStatusCode(), array(200, 201)));
        static::assertTrue($response->isSuccessful());
    }
}
