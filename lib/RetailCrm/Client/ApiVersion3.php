<?php

/**
 * PHP version 5.4
 *
 * API client v3
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */

namespace RetailCrm\Client;

use RetailCrm\Methods\V3;

/**
 * PHP version 5.4
 *
 * API client v3 class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */
class ApiVersion3 extends AbstractLoader
{
    /**
     * Init version based client
     *
     * @param string $url     api url
     * @param string $apiKey  api key
     * @param string $version api version
     * @param string $site    site code
     * @param bool   $debug   debug mode
     */
    public function __construct($url, $apiKey, $version, $site, $debug = false)
    {
        parent::__construct($url, $apiKey, $version, $site, $debug);
    }

    use V3\Customers;
    use V3\Orders;
    use V3\Packs;
    use V3\References;
    use V3\Statistic;
    use V3\Stores;
    use V3\Telephony;
}
