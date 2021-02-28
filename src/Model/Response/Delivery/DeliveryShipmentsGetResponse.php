<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryShipmentsGetResponse
 * @package  RetailCrm\Api\Model\Response\Delivery
 */

namespace RetailCrm\Api\Model\Response\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class DeliveryShipmentsGetResponse
 *
 * @category DeliveryShipmentsGetResponse
 * @package  RetailCrm\Api\Model\Response\Delivery
 */
class DeliveryShipmentsGetResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\DeliveryShipment
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Delivery\DeliveryShipment")
     * @JMS\SerializedName("deliveryShipment")
     */
    public $deliveryShipment;
}
