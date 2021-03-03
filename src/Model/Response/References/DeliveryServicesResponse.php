<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryServicesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class DeliveryServicesResponse
 *
 * @category DeliveryServicesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class DeliveryServicesResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\DeliveryService[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\DeliveryService>")
     * @JMS\SerializedName("deliveryServices")
     */
    public $deliveryServices;
}
