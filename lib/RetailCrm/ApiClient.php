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