<?php

/**
 * PHP version 5.4
 *
 * Customers
 *
 * @category RetailCrm
 * @package  RetailCrm
 */

namespace RetailCrm\Methods\V5;

use RetailCrm\Methods\V4\Customers as Previous;

/**
 * PHP version 5.4
 *
 * Customers class
 *
 * @category RetailCrm
 * @package  RetailCrm
 */
trait Customers
{
    use Previous;

    /**
     * Combine customers
     *
     * @param array $customers
     * @param array $resultCustomer
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersCombine(array $customers, $resultCustomer)
    {

        if (!count($customers) || !count($resultCustomer)) {
            throw new \InvalidArgumentException(
                'Parameters `customers` & `resultCustomer` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/customers/combine',
            "POST",
            [
                'customers' => json_encode($customers),
                'resultCustomer' => json_encode($resultCustomer)
            ]
        );
    }

    /**
     * Returns filtered customers notes list
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
    public function customersNotesList(array $filter = [], $page = null, $limit = null)
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
            '/customers/notes',
            "GET",
            $parameters
        );
    }

    /**
     * Create customer note
     *
     * @param array $note (default: array())
     * @param string $site     (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersNotesCreate($note, $site = null)
    {
        if (empty($note['customer']['id']) && empty($note['customer']['externalId'])) {
            throw new \InvalidArgumentException(
                'Customer identifier must be set'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/customers/notes/create',
            "POST",
            $this->fillSite($site, ['note' => json_encode($note)])
        );
    }

    /**
     * Delete customer note
     *
     * @param integer $id
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersNotesDelete($id)
    {
        if (empty($id)) {
            throw new \InvalidArgumentException(
                'Note id must be set'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/customers/notes/$id/delete",
            "POST"
        );
    }

    /**
     * Update subscriptions a customer
     *
     * @param array $subscriptions subscriptions data
     * @param integer $customerId identifier customer
     * @param string $by (default: 'externalId')
     * @param string|null $site (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\InvalidJsonException
     * @throws \RetailCrm\Exception\CurlException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customerSubscriptionsUpdate(array $subscriptions, $customerId, $by = 'externalId', $site = null)
    {
        if (!count($subscriptions)) {
            throw new \InvalidArgumentException(
                'Parameter `subscriptions` must contains a data'
            );
        }

        if ($customerId === null || $customerId === '') {
            throw new \InvalidArgumentException(
                'Parameter `customerId` is empty'
            );
        }

        $this->checkIdParameter($by);

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/customers/%s/subscriptions', $customerId),
            'POST',
            $this->fillSite(
                $site,
                ['subscriptions' => json_encode($subscriptions), 'by' => $by]
            )
        );
    }
}
