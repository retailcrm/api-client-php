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

namespace RetailCrm\Tests\Methods\Version4;

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
     * @group users_v4
     */
    public function testUsersGroups()
    {
        $client = static::getApiClient(null, null, "v4");

        $response = $client->request->usersGroups();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group users_v4
     */
    public function testUsersList()
    {
        $client = static::getApiClient(null, null, "v4");

        $response = $client->request->usersList();
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group users_v4
     */
    public function testUsersGet()
    {
        $client = static::getApiClient(null, null, "v4");
        $user = getenv('RETAILCRM_USER') ?: $_SERVER['RETAILCRM_USER'];

        $response = $client->request->usersGet($user);
        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
        static::assertTrue($response->isSuccessful());
    }
}
