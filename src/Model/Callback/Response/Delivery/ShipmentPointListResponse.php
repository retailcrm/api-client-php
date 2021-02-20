<?php

/**
 * PHP version 7.3
 *
 * @category ShipmentPointListResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Response\Delivery;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ShipmentPointListResponse
 *
 * @category ShipmentPointListResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Delivery
 */
class ShipmentPointListResponse
{
    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal>")
     * @JMS\SerializedName("result")
     */
    public $result;
}
