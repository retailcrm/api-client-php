<?php

/**
 * PHP version 5.4
 *
 * Tasks
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Methods\V5;

/**
 * PHP version 5.4
 *
 * Tasks class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait Tasks
{
    /**
     * Get tasks list
     *
     * @param array $filter
     * @param null  $limit
     * @param null  $page
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function tasksList(array $filter = [], $limit = null, $page = null)
    {
        $parameters = [];

        if (count($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int) $page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int) $limit;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/tasks',
            "GET",
            $parameters
        );
    }

    /**
     * Create task
     *
     * @param array $task
     * @param null  $site
     *
     * @return \RetailCrm\Response\ApiResponse
     *
     */
    public function tasksCreate($task, $site = null)
    {
        if (!count($task)) {
            throw new \InvalidArgumentException(
                'Parameter `task` must contain a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/tasks/create",
            "POST",
            $this->fillSite(
                $site,
                ['task' => json_encode($task)]
            )
        );
    }

    /**
     * Edit task
     *
     * @param array $task
     * @param null  $site
     *
     * @return \RetailCrm\Response\ApiResponse
     *
     */
    public function tasksEdit($task, $site = null)
    {
        if (!count($task)) {
            throw new \InvalidArgumentException(
                'Parameter `task` must contain a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/tasks/{$task['id']}/edit",
            "POST",
            $this->fillSite(
                $site,
                ['task' => json_encode($task)]
            )
        );
    }

    /**
     * Get custom dictionary
     *
     * @param $id
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function tasksGet($id)
    {
        if (empty($id)) {
            throw new \InvalidArgumentException(
                'Parameter `id` must be not empty'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/tasks/$id",
            "GET"
        );
    }
}
