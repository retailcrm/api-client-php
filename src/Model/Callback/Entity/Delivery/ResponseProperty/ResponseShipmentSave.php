<?php

/**
 * PHP version 7.3
 *
 * @category ResponseShipmentSave
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ResponseShipmentSave
 *
 * @category ResponseShipmentSave
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty
 */
class ResponseShipmentSave
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("shipmentId")
     */
    public $shipmentId;

    /**
     * @var mixed[][]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("extraData")
     */
    public $extraData;
}
