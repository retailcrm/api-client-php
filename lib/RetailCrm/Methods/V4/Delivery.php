<?php

/**
 * PHP version 5.4
 *
 * Delivery
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
 * Delivery class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait Delivery
{
    /**
     * Get delivery settings
     *
     * @param string $code
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function deliverySettingsGet($code)
    {
        if (empty($code)) {
            throw new \InvalidArgumentException('Parameter `code` must be set');
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/delivery/generic/setting/$code",
            "GET"
        );
    }

    /**
     * Delivery tracking update
     *
     * @param string $code
     * @param array  $statusUpdate
     *
     * @throws \RetailCrm\Exception\InvalidJsonException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \InvalidArgumentException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function deliveryTracking($code, array $statusUpdate)
    {
        if (empty($code)) {
            throw new \InvalidArgumentException('Parameter `code` must be set');
        }

        if (!count($statusUpdate)) {
            throw new \InvalidArgumentException(
                'Parameter `statusUpdate` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/delivery/generic/%s/tracking', $code),
            "POST",
            ['statusUpdate' => json_encode($statusUpdate)]
        );
    }
}
