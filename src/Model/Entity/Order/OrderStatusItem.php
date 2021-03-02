<?php

/**
 * PHP version 7.3
 *
 * @category OrderStatusItem
 * @package  RetailCrm\Api\Model\Entity\Order
 */

namespace RetailCrm\Api\Model\Entity\Order;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class OrderStatusItem
 *
 * @category OrderStatusItem
 * @package  RetailCrm\Api\Model\Entity\Order
 */
class OrderStatusItem
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("status")
     */
    public $status;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("group")
     */
    public $group;
}
