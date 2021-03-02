<?php

/**
 * PHP version 7.3
 *
 * @category SerializedOrderLink
 * @package  RetailCrm\Api\Model\Entity\Order
 */

namespace RetailCrm\Api\Model\Entity\Order;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedOrderLink
 *
 * @category SerializedOrderLink
 * @package  RetailCrm\Api\Model\Entity\Order
 */
class SerializedOrderLink
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("comment")
     */
    public $comment;

    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder>")
     * @JMS\SerializedName("orders")
     */
    public $orders;
}
