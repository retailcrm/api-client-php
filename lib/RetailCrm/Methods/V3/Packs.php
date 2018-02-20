<?php

/**
 * PHP version 5.4
 *
 * Packs
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Methods\V3;

/**
 * PHP version 5.4
 *
 * Packs class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait Packs
{
    /**
     * Get orders assembly list
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
    public function ordersPacksList(array $filter = [], $page = null, $limit = null)
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
            '/orders/packs',
            "GET",
            $parameters
        );
    }

    /**
     * Create orders assembly
     *
     * @param array  $pack pack data
     * @param string $site (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function ordersPacksCreate(array $pack, $site = null)
    {
        if (!count($pack)) {
            throw new \InvalidArgumentException(
                'Parameter `pack` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/orders/packs/create',
            "POST",
            $this->fillSite($site, ['pack' => json_encode($pack)])
        );
    }

    /**
     * Get orders assembly history
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
    public function ordersPacksHistory(array $filter = [], $page = null, $limit = null)
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
            '/orders/packs/history',
            "GET",
            $parameters
        );
    }

    /**
     * Get orders assembly by id
     *
     * @param string $id pack identificator
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function ordersPacksGet($id)
    {
        if (empty($id)) {
            throw new \InvalidArgumentException('Parameter `id` must be set');
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/orders/packs/$id",
            "GET"
        );
    }

    /**
     * Delete orders assembly by id
     *
     * @param string $id pack identificator
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function ordersPacksDelete($id)
    {
        if (empty($id)) {
            throw new \InvalidArgumentException('Parameter `id` must be set');
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/orders/packs/%s/delete', $id),
            "POST"
        );
    }

    /**
     * Edit orders assembly
     *
     * @param array  $pack pack data
     * @param string $site (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function ordersPacksEdit(array $pack, $site = null)
    {
        if (!count($pack) || empty($pack['id'])) {
            throw new \InvalidArgumentException(
                'Parameter `pack` must contains a data & pack `id` must be set'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/orders/packs/%s/edit', $pack['id']),
            "POST",
            $this->fillSite($site, ['pack' => json_encode($pack)])
        );
    }
}
