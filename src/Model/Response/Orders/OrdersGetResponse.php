<?php

/**
 * PHP version 7.3
 *
 * @category OrdersGetResponse
 * @package  RetailCrm\Api\Model\Response\Orders
 */

namespace RetailCrm\Api\Model\Response\Orders;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class OrdersGetResponse
 *
 * @category OrdersGetResponse
 * @package  RetailCrm\Api\Model\Response\Orders
 */
class OrdersGetResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Order
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Order")
     * @JMS\SerializedName("order")
     */
    public $order;
}
