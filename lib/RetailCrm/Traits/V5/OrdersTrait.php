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

use RetailCrm\Response\ApiResponse;
use RetailCrm\Traits\V4\OrdersTrait as Previous;

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
trait OrdersTrait
{
    use Previous;

    /**
     * Combine orders
     *
     * @param string $technique
     * @param array  $order
     * @param array  $resultOrder
     *
     * @return ApiResponse
     */
    public function ordersCombine($order, $resultOrder, $technique = 'ours')
    {
        $techniques = ['ours', 'summ', 'theirs'];

        if (!count($order) || !count($resultOrder)) {
            throw new \InvalidArgumentException(
                'Parameters `order` & `resultOrder` must contains a data'
            );
        }

        if (!in_array($technique, $techniques)) {
            throw new \InvalidArgumentException(
                'Parameter `technique` must be on of ours|summ|theirs'
            );
        }

        return $this->client->makeRequest(
            '/orders/combine',
            $this->client::METHOD_POST,
            [
                'technique' => $technique,
                'order' => json_encode($order),
                'resultOrder' => json_encode($resultOrder)
            ]
        );
    }

    /**
     * Create an order payment
     *
     * @param array $payment order data
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return ApiResponse
     */
    public function ordersPaymentCreate(array $payment)
    {
        if (!count($payment)) {
            throw new \InvalidArgumentException(
                'Parameter `payment` must contains a data'
            );
        }

        return $this->client->makeRequest(
            '/orders/payments/create',
            $this->client::METHOD_POST,
            ['payment' => json_encode($payment)]
        );
    }

    /**
     * Edit an order payment
     *
     * @param array  $payment order data
     * @param string $by      by key
     * @param null   $site    site code
     *
     * @return ApiResponse
     */
    public function ordersPaymentEdit(array $payment, $by = 'id', $site = null)
    {
        if (!count($payment)) {
            throw new \InvalidArgumentException(
                'Parameter `payment` must contains a data'
            );
        }

        $this->checkIdParameter($by);

        if (!array_key_exists($by, $payment)) {
            throw new \InvalidArgumentException(
                sprintf('Order array must contain the "%s" parameter.', $by)
            );
        }

        return $this->client->makeRequest(
            sprintf('/orders/payments/%s/edit', $payment[$by]),
            $this->client::METHOD_POST,
            $this->fillSite(
                $site,
                ['payment' => json_encode($payment), 'by' => $by]
            )
        );
    }
}
