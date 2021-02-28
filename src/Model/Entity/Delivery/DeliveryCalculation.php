<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryCalculation
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class DeliveryCalculation
 *
 * @category DeliveryCalculation
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */
class DeliveryCalculation
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("available")
     */
    public $available;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("vatRate")
     */
    public $vatRate;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("cost")
     */
    public $cost;
}
