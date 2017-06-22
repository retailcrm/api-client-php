<?php

/**
 * PHP version 5.4
 *
 * Users
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Methods\V4;

/**
 * PHP version 5.4
 *
 * Users class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait Users
{
    /**
     * Returns users list
     *
     * @param array $filter
     * @param null  $page
     * @param null  $limit
     *
     * @throws \RetailCrm\Exception\InvalidJsonException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \InvalidArgumentException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function usersList(array $filter = [], $page = null, $limit = null)
    {
        $parameters = [];

        if (count($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int)$page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int)$limit;
        }

        /** @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/users',
            "GET",
            $parameters
        );
    }

    /**
     * Get user groups
     *
     * @param null $page
     * @param null $limit
     *
     * @throws \RetailCrm\Exception\InvalidJsonException
     * @throws \RetailCrm\Exception\CurlException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function usersGroups($page = null, $limit = null)
    {
        $parameters = [];

        if (null !== $page) {
            $parameters['page'] = (int)$page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int)$limit;
        }

        /** @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/user-groups',
            "GET",
            $parameters
        );
    }

    /**
     * Returns user data
     *
     * @param integer $id user ID
     *
     * @throws \RetailCrm\Exception\InvalidJsonException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \InvalidArgumentException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function usersGet($id)
    {
        /** @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest("/users/$id", "GET");
    }
}
