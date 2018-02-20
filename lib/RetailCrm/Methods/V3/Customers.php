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

namespace RetailCrm\Methods\V3;

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
    /**
     * Returns filtered customers list
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
    public function customersList(array $filter = [], $page = null, $limit = null)
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
            '/customers',
            "GET",
            $parameters
        );
    }

    /**
     * Create a customer
     *
     * @param array  $customer customer data
     * @param string $site     (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersCreate(array $customer, $site = null)
    {
        if (! count($customer)) {
            throw new \InvalidArgumentException(
                'Parameter `customer` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/customers/create',
            "POST",
            $this->fillSite($site, ['customer' => json_encode($customer)])
        );
    }

    /**
     * Save customer IDs' (id and externalId) association in the CRM
     *
     * @param array $ids ids mapping
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersFixExternalIds(array $ids)
    {
        if (! count($ids)) {
            throw new \InvalidArgumentException(
                'Method parameter must contains at least one IDs pair'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/customers/fix-external-ids',
            "POST",
            ['customers' => json_encode($ids)]
        );
    }

    /**
     * Upload array of the customers
     *
     * @param array  $customers array of customers
     * @param string $site      (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersUpload(array $customers, $site = null)
    {
        if (! count($customers)) {
            throw new \InvalidArgumentException(
                'Parameter `customers` must contains array of the customers'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/customers/upload',
            "POST",
            $this->fillSite($site, ['customers' => json_encode($customers)])
        );
    }

    /**
     * Get customer by id or externalId
     *
     * @param string $id   customer identificator
     * @param string $by   (default: 'externalId')
     * @param string $site (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersGet($id, $by = 'externalId', $site = null)
    {
        $this->checkIdParameter($by);

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/customers/$id",
            "GET",
            $this->fillSite($site, ['by' => $by])
        );
    }

    /**
     * Edit a customer
     *
     * @param array  $customer customer data
     * @param string $by       (default: 'externalId')
     * @param string $site     (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersEdit(array $customer, $by = 'externalId', $site = null)
    {
        if (!count($customer)) {
            throw new \InvalidArgumentException(
                'Parameter `customer` must contains a data'
            );
        }

        $this->checkIdParameter($by);

        if (!array_key_exists($by, $customer)) {
            throw new \InvalidArgumentException(
                sprintf('Customer array must contain the "%s" parameter.', $by)
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/customers/%s/edit', $customer[$by]),
            "POST",
            $this->fillSite(
                $site,
                ['customer' => json_encode($customer), 'by' => $by]
            )
        );
    }
}
