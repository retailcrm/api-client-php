<?php

/**
 * PHP version 5.4
 *
 * API client orders test class
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
     * @group tasks_v5
     */
    public function testTasksList()
    {

        $client = static::getApiClient();
        $response = $client->request->tasksList();

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
    }

    /**
     * @group tasks_v5
     * @expectedException \InvalidArgumentException
     */
    public function testTasksCreateExceptionEmpty()
    {
        $client = static::getApiClient();
        $client->request->tasksCreate([]);
    }

    public function testTasksCRU()
    {
        $client = static::getApiClient();
        $user = getenv('RETAILCRM_USER') ?: $_SERVER['RETAILCRM_USER'];
        $task = [
            'text' => 'test task',
            'commentary' => 'test task commentary',
            'performerId' => $user,
            'complete' => false
        ];

        $responseCreate = $client->request->tasksCreate($task);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $responseCreate);
        static::assertEquals(201, $responseCreate->getStatusCode());

        $uid = $responseCreate['id'];

        $responseRead = $client->request->tasksGet($uid);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $responseRead);
        static::assertEquals(200, $responseRead->getStatusCode());

        $task['id'] = $uid;
        $task['complete'] = true;

        $responseUpdate = $client->request->tasksEdit($task);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $responseUpdate);
        static::assertEquals(200, $responseUpdate->getStatusCode());
    }
}
