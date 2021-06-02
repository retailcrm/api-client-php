<?php

/**
 * PHP version 7.3
 *
 * @category OrdersCreateResponse
 * @package  RetailCrm\Api\Model\Response\Orders
 */

namespace RetailCrm\Api\Model\Response\Orders;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\IdResponse;

/**
 * Class OrdersCreateResponse
 *
 * @category OrdersCreateResponse
 * @package  RetailCrm\Api\Model\Response\Orders
 */
class OrdersCreateResponse extends IdResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Order
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Order")
     * @JMS\SerializedName("order")
     */
    public $order;
}
