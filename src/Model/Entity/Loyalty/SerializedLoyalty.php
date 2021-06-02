<?php

/**
 * PHP version 7.3
 *
 * @category SerializedLoyalty
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedLoyalty
 *
 * @category SerializedLoyalty
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class SerializedLoyalty
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("chargeRate")
     */
    public $chargeRate;
}
