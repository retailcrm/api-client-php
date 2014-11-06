<?php

namespace RetailCrm;

use RetailCrm\Http\Client;
use RetailCrm\Response\ApiResponse;

/**
 *  retailCRM API client class
 */
class ApiClient
{
    const VERSION = 'v3';

    protected $client;

    /**
     * Client creating
     *
     * @param  string $url
     * @param  string $apiKey
     * @return void
     */
    public function __construct($url, $apiKey)
    {
        if ('/' != substr($url, strlen($url) - 1, 1)) {
            $url .= '/';
        }

        $url = $url . 'api/' . self::VERSION;

        $this->client = new Client($url, array('apiKey' => $apiKey));
    }

    /**
     * Create a order
     *
     * @param  array       $order
     * @return ApiResponse
     */
    public function ordersCreate(array $order)
    {
        return $this->client->makeRequest("/orders/create", Client::METHOD_POST, array(
            'order' => json_encode($order)
        ));
    }

    /**
     * Edit a order
     *
     * @param  array       $order
     * @return ApiResponse
     */
    public function ordersEdit(array $order, $by = 'externalId')
    {
        $this->checkIdParameter($by);

        if (!isset($order[$by])) {
            throw new \InvalidArgumentException(sprintf('Order array must contain the "%s" parameter.', $by));
        }

        return $this->client->makeRequest("/orders/" . $order[$by] . "/edit", Client::METHOD_POST, array(
            'order' => json_encode($order),
            'by' => $by,
        ));
    }

    /**
     * Get order by id or externalId
     *
     * @param  string      $id
     * @param  string      $by (default: 'externalId')
     * @return ApiResponse
     */
    public function ordersGet($id, $by = 'externalId')
    {
        $this->checkIdParameter($by);

        return $this->client->makeRequest("/orders/$id", Client::METHOD_GET, array('by' => $by));
    }

    /**
     * Returns a orders history
     *
     * @param  \DateTime   $startDate (default: null)
     * @param  \DateTime   $endDate (default: null)
     * @param  int         $limit (default: 100)
     * @param  int         $offset (default: 0)
     * @return ApiResponse
     */
    public function ordersHistory(\DateTime $startDate = null, \DateTime $endDate = null, $limit = 100, $offset = 0)
    {
        $parameters = array();

        if ($startDate) {
            $parameters['startDate'] = $startDate->format('Y-m-d H:i:s');
        }
        if ($endDate) {
            $parameters['endDate'] = $endDate->format('Y-m-d H:i:s');
        }
        if ($limit) {
            $parameters['limit'] = (int) $limit;
        }
        if ($offset) {
            $parameters['offset'] = (int) $offset;
        }

        return $this->client->makeRequest('/orders/history', Client::METHOD_GET, $parameters);
    }

    /**
     * Returns filtered orders list
     *
     * @param  array $filter (default: array())
     * @param  int   $page (default: null)
     * @param  int   $limit (default: null)
     * @return void
     */
    public function ordersList(array $filter = array(), $page = null, $limit = null)
    {
        $parameters = array();

        if (sizeof($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int) $page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int) $limit;
        }

        return $this->client->makeRequest('/orders', Client::METHOD_GET, $parameters);
    }

    /**
     * Check ID parameter
     *
     * @param  string $by
     * @return bool
     */
    protected function checkIdParameter($by)
    {
        $allowedForBy = array('externalId', 'id');
        if (!in_array($by, $allowedForBy)) {
            throw new \InvalidArgumentException(sprintf(
                'Value "%s" for parameter "by" is not valid. Allowed values are %s.',
                $by,
                implode(', ', $allowedForBy)
            ));
        }

        return true;
    }
}