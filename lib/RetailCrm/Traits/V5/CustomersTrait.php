<?php

/**
 * PHP version 5.4
 *
 * TaskTrait
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Traits\V5;

use RetailCrm\Traits\V4\CustomersTrait as Previous;

/**
 * PHP version 5.4
 *
 * TaskTrait class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait CustomersTrait
{
    use Previous;

    /**
     * Combine customers
     *
     * @param array $customers
     * @param array $resultCustomer
     *
     * @return ApiResponse
     */
    public function customersCombine(array $customers, $resultCustomer)
    {

        if (!count($customers) || !count($resultCustomer)) {
            throw new \InvalidArgumentException(
                'Parameters `customers` & `resultCustomer` must contains a data'
            );
        }

        return $this->client->makeRequest(
            '/customers/combine',
            $this->client::METHOD_POST,
            [
                'customers' => json_encode($customers),
                'resultCustomer' => json_encode($resultCustomer)
            ]
        );
    }
}
