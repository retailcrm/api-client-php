<?php

/**
 * PHP version 5.4
 *
 * StatisticTrait class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Traits;

use RetailCrm\Response\ApiResponse;

/**
 * PHP version 5.4
 *
 * StatisticTrait class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait StatisticTrait
{
    /**
     * Update CRM basic statistic
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return ApiResponse
     */
    public function statisticUpdate()
    {
        return $this->client->makeRequest(
            '/statistic/update',
            $this->client::METHOD_GET
        );
    }
}
