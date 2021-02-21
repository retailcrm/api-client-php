<?php

/**
 * PHP version 7.3
 *
 * @category ShipmentPoint
 * @package  RetailCrm\Api\Model\Entity\Integration\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Integration\Delivery;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ShipmentPoint
 *
 * @category ShipmentPoint
 * @package  RetailCrm\Api\Model\Entity\Integration\Delivery
 */
class ShipmentPoint
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("shipmentPointId")
     */
    public $shipmentPointId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("shipmentPointLabel")
     */
    public $shipmentPointLabel;
}
