<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryShipmentsCreateResponse
 * @package  RetailCrm\Api\Model\Response\Delivery
 */

namespace RetailCrm\Api\Model\Response\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\IdResponse;

/**
 * Class DeliveryShipmentsCreateResponse
 *
 * @category DeliveryShipmentsCreateResponse
 * @package  RetailCrm\Api\Model\Response\Delivery
 */
class DeliveryShipmentsCreateResponse extends IdResponse
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("status")
     */
    public $status;
}
