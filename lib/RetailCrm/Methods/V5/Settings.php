<?php

/**
 * PHP version 5.4
 *
 * Settings
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */

namespace RetailCrm\Methods\V5;

/**
 * PHP version 5.4
 *
 * Settings class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
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
