<?php

/**
 * PHP version 7.3
 *
 * @category ShipmentSaveResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Response\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class ShipmentSaveResponse
 *
 * @category ShipmentSaveResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Delivery
 */
class ShipmentSaveResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseShipmentSave
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseShipmentSave")
     * @JMS\SerializedName("result")
     */
    public $result;
}
