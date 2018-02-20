<?php

/**
 * PHP version 5.4
 *
 * Customers
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Methods\V4;

use RetailCrm\Methods\V3\Customers as Previous;

/**
 * PHP version 5.4
 *
 * Customers class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait Customers
{
    use Previous;

    /**
     * Get customers history
     * @param array $filter
     * @param null $page
     * @param null $limit
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersHistory(array $filter = [], $page = null, $limit = null)
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
            '/customers/history',
            "GET",
            $parameters
        );
    }
}
