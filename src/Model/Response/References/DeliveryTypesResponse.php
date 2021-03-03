<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryTypesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class DeliveryTypesResponse
 *
 * @category DeliveryTypesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class DeliveryTypesResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\DeliveryType[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\DeliveryType>")
     * @JMS\SerializedName("deliveryTypes")
     */
    public $deliveryTypes;
}
