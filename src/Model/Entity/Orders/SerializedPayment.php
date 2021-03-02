<?php

/**
 * PHP version 7.3
 *
 * @category SerializedPayment
 * @package  RetailCrm\Api\Model\Entity\Orders
 */

namespace RetailCrm\Api\Model\Entity\Orders;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedPayment
 *
 * @category SerializedPayment
 * @package  RetailCrm\Api\Model\Entity\Orders
 */
class SerializedPayment extends Payment
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder")
     * @JMS\SerializedName("order")
     */
    public $order;
}
