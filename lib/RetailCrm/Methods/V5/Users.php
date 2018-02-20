<?php

/**
 * PHP version 5.4
 *
 * Users
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Methods\V5;

use RetailCrm\Methods\V4\Users as Previous;

/**
 * PHP version 5.4
 *
 * Users class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait Users
{
    use Previous;

    /**
     * Change user status
     *
     * @param integer $id     user ID
     * @param string  $status user status
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function usersStatus($id, $status)
    {
        $statuses = ["free", "busy", "dinner", "break"];

        if (empty($status) || !in_array($status, $statuses)) {
            throw new \InvalidArgumentException(
                'Parameter `status` must be not empty & must be equal one of these values: free|busy|dinner|break'
            );
        }

        /** @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/users/$id/status",
            "POST",
            ['status' => $status]
        );
    }
}
