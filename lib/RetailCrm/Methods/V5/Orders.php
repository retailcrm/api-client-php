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
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Methods\V5;

use RetailCrm\Methods\V4\Orders as Previous;

/**
 * PHP version 5.4
 *
 * Orders class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait Orders
{
    use Previous;

    /**
     * Combine orders
     *
     * @param array  $order       orgin order
     * @param array  $resultOrder result order
     * @param string $technique   combining technique
     *
     * @return \RetailCrm\Response\ApiResponse
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

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/orders/combine',
            "POST",
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
     * @param null  $site    site code
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function ordersPaymentCreate(array $payment, $site = null)
    {
        if (!count($payment)) {
            throw new \InvalidArgumentException(
                'Parameter `payment` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/orders/payments/create',
            "POST",
            $this->fillSite(
                $site,
                ['payment' => json_encode($payment)]
            )
        );
    }

    /**
     * Edit an order payment
     *
     * @param array  $payment order data
     * @param string $by      by key
     * @param null   $site    site code
     *
     * @return \RetailCrm\Response\ApiResponse
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

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/orders/payments/%s/edit', $payment[$by]),
            "POST",
            $this->fillSite(
                $site,
                ['payment' => json_encode($payment), 'by' => $by]
            )
        );
    }

    /**
     * Edit an order payment
     *
     * @param string $id payment id
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function ordersPaymentDelete($id)
    {
        if (!$id) {
            throw new \InvalidArgumentException(
                'Parameter `id` must be set'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/orders/payments/%s/delete', $id),
            "POST"
        );
    }
}
