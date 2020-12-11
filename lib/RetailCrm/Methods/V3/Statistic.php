<?php

/**
 * PHP version 5.4
 *
 * Statistic
 *
 * @category RetailCrm
 * @package  RetailCrm
 */

namespace RetailCrm\Methods\V3;

/**
 * PHP version 5.4
 *
 * Statistic class
 *
 * @category RetailCrm
 * @package  RetailCrm
 */
trait Statistic
{
    /**
     * Update CRM basic statistic
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function statisticUpdate()
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/statistic/update',
            "GET"
        );
    }
}
