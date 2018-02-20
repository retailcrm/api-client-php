<?php

/**
 * PHP version 5.4
 *
 * Marketplace
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Methods\V5;

/**
 * PHP version 5.4
 *
 * Module class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait Module
{
    /**
     * Get module configuration
     *
     * @param string $code
     *
     * @throws \RetailCrm\Exception\InvalidJsonException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \InvalidArgumentException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function integrationModulesGet($code)
    {
        if (empty($code)) {
            throw new \InvalidArgumentException(
                'Parameter `code` must be set'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/integration-modules/%s', $code),
            "GET"
        );
    }

    /**
     * Edit module configuration
     *
     * @param array $configuration
     *
     * @throws \RetailCrm\Exception\InvalidJsonException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \InvalidArgumentException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function integrationModulesEdit(array $configuration)
    {
        if (!count($configuration) || empty($configuration['code'])) {
            throw new \InvalidArgumentException(
                'Parameter `configuration` must contains a data & configuration `code` must be set'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/integration-modules/%s/edit', $configuration['code']),
            "POST",
            ['integrationModule' => json_encode($configuration)]
        );
    }
}
