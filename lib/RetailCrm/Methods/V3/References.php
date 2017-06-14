<?php

/**
 * PHP version 5.4
 *
 * TaskTrait
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
 * TaskTrait class
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
     * @return ApiResponse
     */
    public function countriesList()
    {
        return $this->client->makeRequest(
            '/reference/countries',
            $this->client::METHOD_GET
        );
    }

    /**
     * Returns deliveryServices list
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return ApiResponse
     */
    public function deliveryServicesList()
    {
        return $this->client->makeRequest(
            '/reference/delivery-services',
            $this->client::METHOD_GET
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
     * @return ApiResponse
     */
    public function deliveryServicesEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        return $this->client->makeRequest(
            sprintf('/reference/delivery-services/%s/edit', $data['code']),
            $this->client::METHOD_POST,
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
     * @return ApiResponse
     */
    public function deliveryTypesList()
    {
        return $this->client->makeRequest(
            '/reference/delivery-types',
            $this->client::METHOD_GET
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
     * @return ApiResponse
     */
    public function deliveryTypesEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        return $this->client->makeRequest(
            sprintf('/reference/delivery-types/%s/edit', $data['code']),
            $this->client::METHOD_POST,
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
     * @return ApiResponse
     */
    public function orderMethodsList()
    {
        return $this->client->makeRequest(
            '/reference/order-methods',
            $this->client::METHOD_GET
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
     * @return ApiResponse
     */
    public function orderMethodsEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        return $this->client->makeRequest(
            sprintf('/reference/order-methods/%s/edit', $data['code']),
            $this->client::METHOD_POST,
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
     * @return ApiResponse
     */
    public function orderTypesList()
    {
        return $this->client->makeRequest(
            '/reference/order-types',
            $this->client::METHOD_GET
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
     * @return ApiResponse
     */
    public function orderTypesEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        return $this->client->makeRequest(
            sprintf('/reference/order-types/%s/edit', $data['code']),
            $this->client::METHOD_POST,
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
     * @return ApiResponse
     */
    public function paymentStatusesList()
    {
        return $this->client->makeRequest(
            '/reference/payment-statuses',
            $this->client::METHOD_GET
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
     * @return ApiResponse
     */
    public function paymentStatusesEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        return $this->client->makeRequest(
            sprintf('/reference/payment-statuses/%s/edit', $data['code']),
            $this->client::METHOD_POST,
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
     * @return ApiResponse
     */
    public function paymentTypesList()
    {
        return $this->client->makeRequest(
            '/reference/payment-types',
            $this->client::METHOD_GET
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
     * @return ApiResponse
     */
    public function paymentTypesEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        return $this->client->makeRequest(
            sprintf('/reference/payment-types/%s/edit', $data['code']),
            $this->client::METHOD_POST,
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
     * @return ApiResponse
     */
    public function productStatusesList()
    {
        return $this->client->makeRequest(
            '/reference/product-statuses',
            $this->client::METHOD_GET
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
     * @return ApiResponse
     */
    public function productStatusesEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        return $this->client->makeRequest(
            sprintf('/reference/product-statuses/%s/edit', $data['code']),
            $this->client::METHOD_POST,
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
     * @return ApiResponse
     */
    public function sitesList()
    {
        return $this->client->makeRequest(
            '/reference/sites',
            $this->client::METHOD_GET
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
     * @return ApiResponse
     */
    public function sitesEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        return $this->client->makeRequest(
            sprintf('/reference/sites/%s/edit', $data['code']),
            $this->client::METHOD_POST,
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
     * @return ApiResponse
     */
    public function statusGroupsList()
    {
        return $this->client->makeRequest(
            '/reference/status-groups',
            $this->client::METHOD_GET
        );
    }

    /**
     * Returns statuses list
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return ApiResponse
     */
    public function statusesList()
    {
        return $this->client->makeRequest(
            '/reference/statuses',
            $this->client::METHOD_GET
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
     * @return ApiResponse
     */
    public function statusesEdit(array $data)
    {
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException(
                'Data must contain "code" parameter.'
            );
        }

        return $this->client->makeRequest(
            sprintf('/reference/statuses/%s/edit', $data['code']),
            $this->client::METHOD_POST,
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
     * @return ApiResponse
     */
    public function storesList()
    {
        return $this->client->makeRequest(
            '/reference/stores',
            $this->client::METHOD_GET
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
     * @return ApiResponse
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

        return $this->client->makeRequest(
            sprintf('/reference/stores/%s/edit', $data['code']),
            $this->client::METHOD_POST,
            ['store' => json_encode($data)]
        );
    }
}
