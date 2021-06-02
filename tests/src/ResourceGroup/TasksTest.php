<?php

/**
 * PHP version 7.3
 *
 * @category TasksTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Enum\Tasks\TaskStatus;
use RetailCrm\Api\Model\Entity\Tasks\AbstractCustomer;
use RetailCrm\Api\Model\Entity\Tasks\Task;
use RetailCrm\Api\Model\Filter\Tasks\TaskFilter;
use RetailCrm\Api\Model\Request\Tasks\TasksCreateRequest;
use RetailCrm\Api\Model\Request\Tasks\TasksRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class TasksTest
 *
 * @category TasksTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class TasksTest extends AbstractApiResourceGroupTestCase
{
    public function testList(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "pagination": {
    "limit": 20,
    "totalCount": 3,
    "currentPage": 1,
    "totalPageCount": 1
  },
  "tasks": [
    {
      "id": 220,
      "text": "Test task #1",
      "datetime": "2020-10-20 11:40",
      "createdAt": "2020-10-16 12:40:49",
      "complete": true,
      "performer": 27,
      "performerType": "user",
      "completedAt": "2020-11-05 07:34:54"
    },
    {
      "id": 218,
      "text": "Test task #2",
      "datetime": "2020-10-19 15:01",
      "createdAt": "2020-10-15 16:01:19",
      "complete": true,
      "performer": 27,
      "performerType": "user",
      "completedAt": "2020-11-05 07:34:56"
    },
    {
      "id": 212,
      "text": "Test task #3",
      "datetime": "2020-10-18 08:36",
      "createdAt": "2020-10-15 10:50:15",
      "complete": true,
      "performer": 27,
      "performerType": "user",
      "completedAt": "2020-11-05 07:34:56"
    }
  ]
}
EOF;

        $request                     = new TasksRequest();
        $request->filter             = new TaskFilter();
        $request->filter->performers = [27];
        $request->filter->status     = TaskStatus::COMPLETED;

        $mock = static::createApiMockBuilder('tasks');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(self::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->tasks->list($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCreate(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 1
}
EOF;

        $request                    = new TasksCreateRequest();
        $request->task              = new Task();
        $request->task->text        = 'Test task #1';
        $request->task->performerId = 27;
        $request->task->customer    = new AbstractCustomer(null, 'ru1067815391', 'aliexpress');
        $request->site              = 'aliexpress';

        $mock = static::createApiMockBuilder('tasks/create');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->tasks->create($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testGet(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "task": {
    "id": 1,
    "text": "Test task #1",
    "createdAt": "2021-03-05 12:35:29",
    "complete": false,
    "performer": 27,
    "performerType": "user",
    "customer": {
      "type": "customer",
      "id": 4976,
      "externalId": "ru1067815391",
      "site": "aliexpress"
    }
  }
}
EOF;

        $mock = static::createApiMockBuilder('tasks/1');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->tasks->get(1);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $request                    = new TasksCreateRequest();
        $request->task              = new Task();
        $request->task->text        = 'Test task #1 (edited)';
        $request->site              = 'aliexpress';

        $mock = static::createApiMockBuilder('tasks/1/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->tasks->edit(1, $request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
