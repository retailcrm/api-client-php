<?php

/**
 * PHP version 7.3
 *
 * @category SerializedOrderDelivery
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Delivery;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedOrderDelivery
 *
 * @category SerializedOrderDelivery
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */
class SerializedOrderDelivery
{
    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("date")
     */
    public $date;

    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\TimeInterval
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Delivery\TimeInterval")
     * @JMS\SerializedName("time")
     */
    public $time;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Delivery\OrderDeliveryAddress
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Delivery\OrderDeliveryAddress")
     * @JMS\SerializedName("address")
     */
    public $address;
}
