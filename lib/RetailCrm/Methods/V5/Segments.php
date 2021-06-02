<?php

/**
 * PHP version 5.4
 *
 * Segments
 *
 * @category RetailCrm
 * @package  RetailCrm
 */

namespace RetailCrm\Methods\V5;

/**
 * PHP version 5.4
 *
 * Segments class
 *
 * @category RetailCrm
 * @package  RetailCrm
 */
trait Segments
{
    /**
     * Get segments list
     *
     * @param array $filter
     * @param null  $limit
     * @param null  $page
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function segmentsList(array $filter = [], $limit = null, $page = null)
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
            '/segments',
            "GET",
            $parameters
        );
    }
}
