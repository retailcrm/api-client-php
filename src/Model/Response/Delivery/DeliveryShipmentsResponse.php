<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryShipmentsResponse
 * @package  RetailCrm\Api\Model\Response\Delivery
 */

namespace RetailCrm\Api\Model\Response\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class DeliveryShipmentsResponse
 *
 * @category DeliveryShipmentsResponse
 * @package  RetailCrm\Api\Model\Response\Delivery
 */
class DeliveryShipmentsResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\DeliveryShipment[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Delivery\DeliveryShipment>")
     * @JMS\SerializedName("deliveryShipments")
     */
    public $deliveryShipments;
}
