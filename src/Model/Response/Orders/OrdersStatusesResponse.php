<?php

/**
 * PHP version 7.3
 *
 * @category OrdersStatusesResponse
 * @package  RetailCrm\Api\Model\Response\Orders
 */

namespace RetailCrm\Api\Model\Response\Orders;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class OrdersStatusesResponse
 *
 * @category OrdersStatusesResponse
 * @package  RetailCrm\Api\Model\Response\Orders
 */
class OrdersStatusesResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\OrderStatusItem[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Orders\OrderStatusItem>")
     * @JMS\SerializedName("orders")
     */
    public $orders;
}
