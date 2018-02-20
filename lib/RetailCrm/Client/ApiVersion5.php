<?php

/**
 * PHP version 5.4
 *
 * API client v5
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Client;

use RetailCrm\Methods\V5;

/**
 * PHP version 5.4
 *
 * API client v5 class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
class ApiVersion5 extends AbstractLoader
{
    /**
     * Init version based client
     *
     * @param string $url     api url
     * @param string $apiKey  api key
     * @param string $version api version
     * @param string $site    site code
     *
     */
    public function __construct($url, $apiKey, $version, $site)
    {
        parent::__construct($url, $apiKey, $version, $site);
    }

    use V5\Customers;
    use V5\Costs;
    use V5\CustomFields;
    use V5\Delivery;
    use V5\Module;
    use V5\Orders;
    use V5\Packs;
    use V5\References;
    use V5\Segments;
    use V5\Statistic;
    use V5\Stores;
    use V5\Tasks;
    use V5\Telephony;
    use V5\Users;
}
