<?php

/**
 * PHP version 5.3
 *
 * API client orders test class
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
 * Class ApiClientTasksTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
class ApiClientTasksTest extends TestCase
{
    /**
     * @group tasks
     */
    public function testTasksList()
    {
        $client = static::getApiClient();

        $response = $client->tasksList();

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
    }

    /**
     * @group tasks
     * @expectedException \InvalidArgumentException
     */
    public function testTasksCreateExceptionEmpty()
    {
        $client = static::getApiClient();
        $client->tasksCreate(array());
    }

    public function testTasksCRU()
    {
        $client = static::getApiClient();

        $task = array(
            'text' => 'test task',
            'commentary' => 'test task commentary',
            'performerId' => $_SERVER['CRM_USER_ID'],
            'complete' => false
        );

        $responseCreate = $client->tasksCreate($task);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $responseCreate);
        static::assertEquals(201, $responseCreate->getStatusCode());

        $uid = $responseCreate['id'];

        $responseRead = $client->tasksGet($uid);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $responseRead);
        static::assertEquals(200, $responseRead->getStatusCode());

        $task['id'] = $uid;
        $task['complete'] = true;

        $responseUpdate = $client->tasksEdit($task);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $responseUpdate);
        static::assertEquals(200, $responseUpdate->getStatusCode());
    }
}
