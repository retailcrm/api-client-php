<?php

/**
 * PHP version 7.3
 *
 * @category ShipmentOrder
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ShipmentOrder
 *
 * @category ShipmentOrder
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */
class ShipmentOrder
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("deliveryId")
     */
    public $deliveryId;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\Package[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\Package>")
     * @JMS\SerializedName("packages")
     */
    public $packages;
}
