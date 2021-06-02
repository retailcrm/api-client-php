<?php

/**
 * PHP version 7.3
 *
 * @category Tasks
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Tasks\TasksCreateRequest;
use RetailCrm\Api\Model\Request\Tasks\TasksRequest;
use RetailCrm\Api\Model\Response\IdResponse;
use RetailCrm\Api\Model\Response\SuccessResponse;
use RetailCrm\Api\Model\Response\Tasks\TasksGetResponse;
use RetailCrm\Api\Model\Response\Tasks\TasksResponse;

/**
 * Class Tasks
 *
 * @category Tasks
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Tasks extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/tasks" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\Tasks\TaskStatus;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Tasks\TaskFilter;
     * use RetailCrm\Api\Model\Request\Tasks\TasksRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                     = new TasksRequest();
     * $request->filter             = new TaskFilter();
     * $request->filter->performers = [27];
     * $request->filter->status     = TaskStatus::COMPLETED;
     *
     * try {
     *     $response = $client->tasks->list($request);
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *
     *     return;
     * }
     *
     * echo 'Tasks: ' . print_r($response->tasks, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Tasks\TasksRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Tasks\TasksResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     */
    public function list(?TasksRequest $request = null): TasksResponse
    {
        /** @var TasksResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'tasks',
            $request,
            TasksResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/tasks/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Tasks\AbstractCustomer;
     * use RetailCrm\Api\Model\Entity\Tasks\Task;
     * use RetailCrm\Api\Model\Request\Tasks\TasksCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                    = new TasksCreateRequest();
     * $request->task              = new Task();
     * $request->task->text        = 'Test task #1';
     * $request->task->performerId = 27;
     * $request->task->customer    = new AbstractCustomer(null, 'ru1067815391', 'aliexpress');
     * $request->site              = 'aliexpress';
     *
     * try {
     *     $response = $client->tasks->create($request);
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *
     *     return;
     * }
     *
     * echo 'Created task: ' . $response->id;
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Tasks\TasksCreateRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\IdResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     */
    public function create(TasksCreateRequest $request = null): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'tasks/create',
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/tasks/{id}" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->tasks->get(1);
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *
     *     return;
     * }
     *
     * echo 'Task: ' . print_r($response->task, true);
     * ```
     *
     * @param int $id
     *
     * @return \RetailCrm\Api\Model\Response\Tasks\TasksGetResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     */
    public function get(int $id): TasksGetResponse
    {
        /** @var TasksGetResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'tasks/' . $id,
            null,
            TasksGetResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/tasks/{id}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Tasks\Task;
     * use RetailCrm\Api\Model\Request\Tasks\TasksCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                    = new TasksCreateRequest();
     * $request->task              = new Task();
     * $request->task->text        = 'Test task #1 (edited)';
     * $request->site              = 'aliexpress';
     *
     * try {
     *     $response = $client->tasks->edit(1, $request);
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     * }
     * ```
     *
     * @param int                                                   $id
     * @param \RetailCrm\Api\Model\Request\Tasks\TasksCreateRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     */
    public function edit(int $id, TasksCreateRequest $request): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'tasks/' . $id . '/edit',
            $request,
            SuccessResponse::class
        );
        return $response;
    }
}
