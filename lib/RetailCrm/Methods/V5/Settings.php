<?php

/**
 * PHP version 5.4
 *
 * Settings
 *
 * @category RetailCrm
 * @package  RetailCrm
 */

namespace RetailCrm\Methods\V5;

/**
 * PHP version 5.4
 *
 * Settings class
 *
 * @category RetailCrm
 * @package  RetailCrm
 */
trait Settings
{
    /**
     * Get settings
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function settings()
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/settings',
            "GET",
            []
        );
    }
}
