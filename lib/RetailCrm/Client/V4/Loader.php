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

namespace RetailCrm\Client\V4;

use RetailCrm\Http\Client;
use RetailCrm\Traits\V4;

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
class Loader
{
    protected $siteCode;
    protected $client;

    /**
     * Init version based client
     *
     * @param string $url     api url
     * @param string $apiKey  api key
     * @param string $site    site code
     *
     */
    public function __construct($url, $apiKey, $site = null)
    {
        if ('/' !== $url[strlen($url) - 1]) {
            $url .= '/';
        }

        $url = $url . 'api/v4';

        $this->client = new Client($url, ['apiKey' => $apiKey]);
        $this->siteCode = $site;
    }

    use V4\CustomersTrait;
    use V4\DeliveryTrait;
    use V4\MarketplaceTrait;
    use V4\OrdersTrait;
    use V4\PacksTrait;
    use V4\ReferencesTrait;
    use V4\StoresTrait;
    use V4\TelephonyTrait;
    use V4\UsersTrait;
}
