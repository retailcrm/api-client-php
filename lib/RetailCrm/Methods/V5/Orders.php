<?php

/**
 * PHP version 5.4
 *
 * Orders
 *
 * @category RetailCrm
 * @package  RetailCrm
 */

namespace RetailCrm\Methods\V5;

use RetailCrm\Methods\V4\Orders as Previous;
use RetailCrm\Response\ApiResponse;

/**
 * PHP version 5.4
 *
 * Orders class
 *
 * @category RetailCrm
 * @package  RetailCrm
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
     * @return ApiResponse
     */
    public function ordersCombine($order, $resultOrder, $technique = 'ours')
    {
        $techniques = ['ours', 'summ', 'theirs', 'merge'];

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
     * @return ApiResponse
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
     * @return ApiResponse
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

    /**
     * Application of loyalty program bonuses
     *
     * @param array $payment order data
     * @param float $bonuses bonuses count
     * @param null  $site    site code
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return ApiResponse
     */
    public function ordersLoyaltyApply(array $order, float $bonuses, $site = null)
    {
        if (!count($order)) {
            throw new \InvalidArgumentException(
                'Parameter `order` must contains a data'
            );
        }

        if (empty($order['id']) && empty($order['externalId'])) {
            throw new \InvalidArgumentException(
                'Parameter `order` must contain an identifier: `id` or `externalId`'
            );
        }

        if (empty($bonuses)) {
            throw new \InvalidArgumentException(
                'Specify a different amount of bonuses'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/orders/loyalty/apply',
            "POST",
            $this->fillSite(
                $site,
                [
                    'order' => json_encode($order),
                    'bonuses' => $bonuses,
                ]
            )
        );
    }

    /**
     * Create links between orders
     *
     * @param array $links links data
     * @param null $site site code
     *
     * @return ApiResponse
     */
    public function ordersLinksCreate(array $links, $site = null)
    {
        if (!count($links)) {
            throw new \InvalidArgumentException(
                'Parameters `links` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/orders/links/create',
            'POST',
            $this->fillSite(
                $site,
                ['links' => json_encode($links)]
            )
        );
    }
}
