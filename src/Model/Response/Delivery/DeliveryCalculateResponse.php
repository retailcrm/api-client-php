<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryCalculateResponse
 * @package  RetailCrm\Api\Model\Response\Delivery
 */

namespace RetailCrm\Api\Model\Response\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class DeliveryCalculateResponse
 *
 * @category DeliveryCalculateResponse
 * @package  RetailCrm\Api\Model\Response\Delivery
 */
class DeliveryCalculateResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\DeliveryCalculation[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Delivery\DeliveryCalculation>")
     * @JMS\SerializedName("calculations")
     */
    public $calculations;
}
