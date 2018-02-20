<?php

/**
 * PHP version 5.4
 *
 * API client users test class
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
     * @group users_v5
     */
    public function testUsersGroups()
    {
        $client = static::getApiClient();

        $response = $client->request->usersGroups();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group users_v5
     */
    public function testUsersList()
    {
        $client = static::getApiClient();

        $response = $client->request->usersList();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group users_v5
     */
    public function testUsersGet()
    {
        $client = static::getApiClient();
        $user = getenv('RETAILCRM_USER') ?: $_SERVER['RETAILCRM_USER'];
        $response = $client->request->usersGet($user);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group users_v5
     */
    public function testUsersStatus()
    {
        $client = static::getApiClient();
        $user = getenv('RETAILCRM_USER') ?: $_SERVER['RETAILCRM_USER'];
        $response = $client->request->usersStatus($user, 'dinner');
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
        static::assertTrue($response->isSuccessful());
    }
}
