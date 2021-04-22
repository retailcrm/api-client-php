<?php

/**
 * PHP version 7.3
 *
 * @category Users
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Users\UserGroupsRequest;
use RetailCrm\Api\Model\Request\Users\UsersRequest;
use RetailCrm\Api\Model\Request\Users\UsersStatusRequest;
use RetailCrm\Api\Model\Response\SuccessResponse;
use RetailCrm\Api\Model\Response\Users\UserGroupsResponse;
use RetailCrm\Api\Model\Response\Users\UsersGetResponse;
use RetailCrm\Api\Model\Response\Users\UsersResponse;

/**
 * Class Users
 *
 * @category Users
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Users extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/user-groups" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\PaginationLimit;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Request\Users\UserGroupsRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request        = new UserGroupsRequest();
     * $request->page  = 1;
     * $request->limit = PaginationLimit::LIMIT_20;
     *
     * try {
     *     $response = $client->users->userGroups($request);
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
     * echo 'User groups: ' . print_r($response->groups, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Users\UserGroupsRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Users\UserGroupsResponse
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
    public function userGroups(?UserGroupsRequest $request): UserGroupsResponse
    {
        /** @var UserGroupsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'user-groups',
            $request,
            UserGroupsResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/users" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\NumericBoolean;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Users\ApiUserFilter;
     * use RetailCrm\Api\Model\Request\Users\UsersRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                  = new UsersRequest();
     * $request->filter          = new ApiUserFilter();
     * $request->filter->active  = NumericBoolean::TRUE;
     * $request->filter->isAdmin = NumericBoolean::TRUE;
     *
     * try {
     *     $response = $client->users->list($request);
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
     * echo 'Users: ' . print_r($response->users, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Users\UsersRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Users\UsersResponse
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
    public function list(?UsersRequest $request): UsersResponse
    {
        /** @var UsersResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'users',
            $request,
            UsersResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/users/{id}" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->users->get(1);
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
     * echo 'User: ' . print_r($response->user, true);
     * ```
     *
     * @param int $id
     *
     * @return \RetailCrm\Api\Model\Response\Users\UsersGetResponse
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
    public function get(int $id): UsersGetResponse
    {
        /** @var UsersGetResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'users/' . $id,
            null,
            UsersGetResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/users/{id}/status" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\Users\UserStatus;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Request\Users\UsersStatusRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->users->status(1, new UsersStatusRequest(UserStatus::BUSY));
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
     * @param \RetailCrm\Api\Model\Request\Users\UsersStatusRequest $request
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
    public function status(int $id, UsersStatusRequest $request): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'users/' . $id . '/status',
            $request,
            SuccessResponse::class
        );
        return $response;
    }
}
