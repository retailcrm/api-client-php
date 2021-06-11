<?php

/**
 * PHP version 7.3
 *
 * @category ShipmentPointListResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Response\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class ShipmentPointListResponse
 *
 * @category ShipmentPointListResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Delivery
 */
class ShipmentPointListResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal>")
     * @JMS\SerializedName("result")
     */
    public $result;
}
