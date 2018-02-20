<?php

/**
 * PHP version 5.4
 *
 * References
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
 * References class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait References
{
    /**
     * Returns available county list
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function countriesList()
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/reference/countries',
            "GET"
        );
    }

    /**
     * Returns deliveryServices list
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function deliveryServicesList()
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/reference/delivery-services',
            "GET"
        );
    }

    /**
     * Edit deliveryService
     *
     * @param array $data delivery service data
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function deliveryServicesEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/reference/delivery-services/%s/edit', $data['code']),
            "POST",
            ['deliveryService' => json_encode($data)]
        );
    }

    /**
     * Returns deliveryTypes list
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function deliveryTypesList()
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/reference/delivery-types',
            "GET"
        );
    }

    /**
     * Edit deliveryType
     *
     * @param array $data delivery type data
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function deliveryTypesEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/reference/delivery-types/%s/edit', $data['code']),
            "POST",
            ['deliveryType' => json_encode($data)]
        );
    }

    /**
     * Returns orderMethods list
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function orderMethodsList()
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/reference/order-methods',
            "GET"
        );
    }

    /**
     * Edit orderMethod
     *
     * @param array $data order method data
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function orderMethodsEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/reference/order-methods/%s/edit', $data['code']),
            "POST",
            ['orderMethod' => json_encode($data)]
        );
    }

    /**
     * Returns orderTypes list
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function orderTypesList()
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/reference/order-types',
            "GET"
        );
    }

    /**
     * Edit orderType
     *
     * @param array $data order type data
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function orderTypesEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/reference/order-types/%s/edit', $data['code']),
            "POST",
            ['orderType' => json_encode($data)]
        );
    }

    /**
     * Returns paymentStatuses list
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function paymentStatusesList()
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/reference/payment-statuses',
            "GET"
        );
    }

    /**
     * Edit paymentStatus
     *
     * @param array $data payment status data
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function paymentStatusesEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/reference/payment-statuses/%s/edit', $data['code']),
            "POST",
            ['paymentStatus' => json_encode($data)]
        );
    }

    /**
     * Returns paymentTypes list
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function paymentTypesList()
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/reference/payment-types',
            "GET"
        );
    }

    /**
     * Edit paymentType
     *
     * @param array $data payment type data
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function paymentTypesEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/reference/payment-types/%s/edit', $data['code']),
            "POST",
            ['paymentType' => json_encode($data)]
        );
    }

    /**
     * Returns productStatuses list
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function productStatusesList()
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/reference/product-statuses',
            "GET"
        );
    }

    /**
     * Edit productStatus
     *
     * @param array $data product status data
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function productStatusesEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/reference/product-statuses/%s/edit', $data['code']),
            "POST",
            ['productStatus' => json_encode($data)]
        );
    }

    /**
     * Returns sites list
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function sitesList()
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/reference/sites',
            "GET"
        );
    }

    /**
     * Edit site
     *
     * @param array $data site data
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function sitesEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/reference/sites/%s/edit', $data['code']),
            "POST",
            ['site' => json_encode($data)]
        );
    }

    /**
     * Returns statusGroups list
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function statusGroupsList()
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/reference/status-groups',
            "GET"
        );
    }

    /**
     * Returns statuses list
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function statusesList()
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/reference/statuses',
            "GET"
        );
    }

    /**
     * Edit order status
     *
     * @param array $data status data
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function statusesEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/reference/statuses/%s/edit', $data['code']),
            "POST",
            ['status' => json_encode($data)]
        );
    }

    /**
     * Returns stores list
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function storesList()
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/reference/stores',
            "GET"
        );
    }

    /**
     * Edit store
     *
     * @param array $data site data
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function storesEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "name" parameter.'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/reference/stores/%s/edit', $data['code']),
            "POST",
            ['store' => json_encode($data)]
        );
    }
}
