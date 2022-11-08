<?php

/**
 * PHP version 7.3
 *
 * @category ShipmentPointList
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Entity\References\GeoHierarchyRow;

/**
 * Class ShipmentPointList
 *
 * @category ShipmentPointList
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */
class ShipmentPointList extends GeoHierarchyRow
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("clientId")
     */
    public $clientId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;
}
