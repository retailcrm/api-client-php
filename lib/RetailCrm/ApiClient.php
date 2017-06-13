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

use RetailCrm\Client\V4\Loader as V4;
use RetailCrm\Client\V5\Loader as V5;
use RetailCrm\Traits\CoreTrait;
use RetailCrm\Traits\StatisticTrait;

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
        switch ($version) {
            case 'v5':
                $this->request = new V5($url, $apiKey, $version, $site);
                break;
            case 'v4':
                $this->request = new V4($url, $apiKey, $version, $site);
                break;
        }
    }

    use CoreTrait;
    use StatisticTrait;
}
