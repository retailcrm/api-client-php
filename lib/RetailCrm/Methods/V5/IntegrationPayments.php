<?php

/**
 * PHP version 5.4
 *
 * Orders
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
 * Orders class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */
trait IntegrationPayments
{
    /**
     * Create Invoice
     *
     * @param array $createInvoice
     * @return \RetailCrm\Response\ApiResponse
     */
    public function paymentCreateInvoice($createInvoice)
    {
        if (!count($createInvoice)) {
            throw new \InvalidArgumentException(
                'Parameters `createInvoice` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/payment/create-invoice',
            'POST',
            [
                'createInvoice' => json_encode($createInvoice)
            ]
        );
    }

    /**
     * Update Invoice
     *
     * @param array $updateInvoice
     * @return \RetailCrm\Response\ApiResponse
     */
    public function paymentUpdateInvoice($updateInvoice)
    {
        if (!count($updateInvoice)) {
            throw new \InvalidArgumentException(
                'Parameters `updateInvoice` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/payment/update-invoice',
            'POST',
            [
                'updateInvoice' => json_encode($updateInvoice)
            ]
        );
    }

    /**
     * Check Invoice
     *
     * @param array $check
     * @return \RetailCrm\Response\ApiResponse
     */
    public function paymentCheckInvoice($check)
    {
        if (!count($check)) {
            throw new \InvalidArgumentException(
                'Parameters `check` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/payment/check',
            'POST',
            [
                'check' => json_encode($check)
            ]
        );
    }
}
