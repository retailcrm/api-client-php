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

namespace RetailCrm\Client\V5;

use RetailCrm\Http\Client;
use RetailCrm\Traits\V5;

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

        $url = $url . 'api/v5';

        $this->client = new Client($url, ['apiKey' => $apiKey]);
        $this->siteCode = $site;
    }


    use V5\CustomersTrait;
    use V5\CustomFieldsTrait;
    use V5\DeliveryTrait;
    use V5\MarketplaceTrait;
    use V5\OrdersTrait;
    use V5\PacksTrait;
    use V5\ReferencesTrait;
    use V5\SegmentsTrait;
    use V5\StoresTrait;
    use V5\TasksTrait;
    use V5\TelephonyTrait;
    use V5\UsersTrait;
}
