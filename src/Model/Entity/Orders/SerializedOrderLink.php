<?php

/**
 * PHP version 7.3
 *
 * @category SerializedOrderLink
 * @package  RetailCrm\Api\Model\Entity\Orders
 */

namespace RetailCrm\Api\Model\Entity\Orders;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedOrderLink
 *
 * @category SerializedOrderLink
 * @package  RetailCrm\Api\Model\Entity\Orders
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
