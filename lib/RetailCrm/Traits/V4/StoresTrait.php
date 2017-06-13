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

namespace RetailCrm\Traits\V4;

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
trait StoresTrait
{
    /**
     * Get purchace prices & stock balance
     *
     * @param array $filter (default: array())
     * @param int   $page   (default: null)
     * @param int   $limit  (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return ApiResponse
     */
    public function storeInventories(array $filter = [], $page = null, $limit = null)
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

        return $this->client->makeRequest(
            '/store/inventories',
            $this->client::METHOD_GET,
            $parameters
        );
    }

    /**
     * Get store settings
     *
     * @param string $code get settings code
     *
     * @return ApiResponse
     * @throws \RetailCrm\Exception\InvalidJsonException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \InvalidArgumentException
     *
     * @return ApiResponse
     */
    public function storeSettingsGet($code)
    {
        if (empty($code)) {
            throw new \InvalidArgumentException('Parameter `code` must be set');
        }

        return $this->client->makeRequest(
            "/store/setting/$code",
            $this->client::METHOD_GET
        );
    }

    /**
     * Edit store configuration
     *
     * @param array $configuration
     *
     * @throws \RetailCrm\Exception\InvalidJsonException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \InvalidArgumentException
     *
     * @return ApiResponse
     */
    public function storeSettingsEdit(array $configuration)
    {
        if (!count($configuration) || empty($configuration['code'])) {
            throw new \InvalidArgumentException(
                'Parameter `configuration` must contains a data & configuration `code` must be set'
            );
        }

        return $this->client->makeRequest(
            sprintf('/store/setting/%s/edit', $configuration['code']),
            $this->client::METHOD_POST,
            ['configuration' => json_encode($configuration)]
        );
    }

    /**
     * Upload store inventories
     *
     * @param array  $offers offers data
     * @param string $site   (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return ApiResponse
     */
    public function storeInventoriesUpload(array $offers, $site = null)
    {
        if (!count($offers)) {
            throw new \InvalidArgumentException(
                'Parameter `offers` must contains array of the offers'
            );
        }

        return $this->client->makeRequest(
            '/store/inventories/upload',
            $this->client::METHOD_POST,
            $this->fillSite($site, ['offers' => json_encode($offers)])
        );
    }

    /**
     * Upload store prices
     *
     * @param array  $prices prices data
     * @param string $site   default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return ApiResponse
     */
    public function storePricesUpload(array $prices, $site = null)
    {
        if (!count($prices)) {
            throw new \InvalidArgumentException(
                'Parameter `prices` must contains array of the prices'
            );
        }

        return $this->client->makeRequest(
            '/store/prices/upload',
            $this->client::METHOD_POST,
            $this->fillSite($site, ['prices' => json_encode($prices)])
        );
    }

    /**
     * Get products
     *
     * @param array $filter (default: array())
     * @param int   $page   (default: null)
     * @param int   $limit  (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return ApiResponse
     */
    public function storeProducts(array $filter = [], $page = null, $limit = null)
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

        return $this->client->makeRequest(
            '/store/products',
            $this->client::METHOD_GET,
            $parameters
        );
    }
}
