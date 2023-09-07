<?php

/**
 * PHP version 7.3
 *
 * @category OrderLink
 * @package  RetailCrm\Api\Model\Entity\Orders
 */

namespace RetailCrm\Api\Model\Entity\Orders;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

class OrderLink
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("comment")
     */
    public $comment;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\LinkedOrder
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder>")
     * @JMS\SerializedName("order")
     */
    public $order;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;
}
