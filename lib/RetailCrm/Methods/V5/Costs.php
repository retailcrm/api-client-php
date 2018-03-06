<?php

/**
 * PHP version 5.4
 *
 * CostsTrait
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
 * CostsTrait class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait Costs
{
    /**
     * Returns filtered costs list
     *
     * @param array $filter (default: array())
     * @param int   $page   (default: null)
     * @param int   $limit  (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function costsList(array $filter = [], $limit = null, $page = null)
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
            '/costs',
            "GET",
            $parameters
        );
    }

    /**
     * Create a cost
     *
     * @param array  $cost cost data
     * @param string $site (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function costsCreate(array $cost, $site = null)
    {
        if (!count($cost)) {
            throw new \InvalidArgumentException(
                'Parameter `cost` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/costs/create',
            "POST",
            $this->fillSite($site, ['cost' => json_encode($cost)])
        );
    }

    /**
     * Delete costs set
     *
     * @param array $ids costs identifiers
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function costsDelete(array $ids)
    {
        if (!count($ids)) {
            throw new \InvalidArgumentException(
                'Parameter `ids` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/costs/delete',
            "POST",
            ['ids' => json_encode($ids)]
        );
    }

    /**
     * Upload costs
     *
     * @param array $costs costs array
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function costsUpload($costs)
    {
        if (!count($costs)) {
            throw new \InvalidArgumentException(
                'Parameter `costs` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/costs/upload',
            "POST",
            ['costs' => json_encode($costs)]
        );
    }

    /**
     * Get cost by id
     *
     * @param string $id   customer identificator
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function costsGet($id)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/costs/$id",
            "GET"
        );
    }

    /**
     * Edit a cost
     *
     * @param array  $cost cost data
     * @param string $site (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function costsEdit(array $cost, $site = null)
    {
        if (!count($cost)) {
            throw new \InvalidArgumentException(
                'Parameter `cost` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/costs/%s/edit', $cost['id']),
            "POST",
            $this->fillSite(
                $site,
                ['cost' => json_encode($cost)]
            )
        );
    }

    /**
     * Delete cost by id
     *
     * @param string $id cost identifier
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function costsDeleteById($id)
    {
        if (!empty($id)) {
            throw new \InvalidArgumentException(
                'Parameter `id` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/costs/%s/delete', $id),
            "POST"
        );
    }
}
