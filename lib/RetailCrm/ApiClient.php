<?php

/**
 * PHP version 5.4
 *
 * API client class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm;

use RetailCrm\Client\ApiVersion3;
use RetailCrm\Client\ApiVersion4;
use RetailCrm\Client\ApiVersion5;

/**
 * PHP version 5.4
 *
 * API client class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
class ApiClient
{
    public $request;
    public $version;

    /**
     * Init version based client
     *
     * @param string $url     api url
     * @param string $apiKey  api key
     * @param string $version api version
     * @param string $site    site code
     *
     */
    public function __construct($url, $apiKey, $version = 'v5', $site = null)
    {
        $this->version = $version;

        switch ($version) {
            case 'v5':
                $this->request = new ApiVersion5($url, $apiKey, $version, $site);
                break;
            case 'v4':
                $this->request = new ApiVersion4($url, $apiKey, $version, $site);
                break;
            case 'v3':
                $this->request = new ApiVersion3($url, $apiKey, $version, $site);
                break;
        }
    }

    /**
     * Get API version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
}
