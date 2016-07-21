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
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion4
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
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion4
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
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertTrue(in_array($response->getStatusCode(), array(200, 201)));
        $this->assertTrue($response->isSuccessful());
    }

    /**
     * @group users
     */
    public function testUsersGet()
    {
        $client = static::getApiClient();

        $response = $client->usersGet($_SERVER["CRM_USER_ID"]);
        $this->assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        $this->assertTrue(in_array($response->getStatusCode(), array(200, 201)));
        $this->assertTrue($response->isSuccessful());
    }
}
