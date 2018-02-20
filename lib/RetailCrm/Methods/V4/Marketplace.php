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

namespace RetailCrm\Methods\V4;

/**
 * PHP version 5.4
 *
 * Marketplace class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait Marketplace
{

    /**
     * Edit marketplace configuration
     *
     * @param array $configuration
     *
     * @throws \RetailCrm\Exception\InvalidJsonException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \InvalidArgumentException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function marketplaceSettingsEdit(array $configuration)
    {
        if (!count($configuration) || empty($configuration['code'])) {
            throw new \InvalidArgumentException(
                'Parameter `configuration` must contains a data & configuration `code` must be set'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/marketplace/external/setting/%s/edit', $configuration['code']),
            "POST",
            ['configuration' => json_encode($configuration)]
        );
    }
}
