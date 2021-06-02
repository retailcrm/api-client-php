<?php

/**
 * PHP version 7.3
 *
 * @category SerializedOrderDelivery
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedOrderDelivery
 *
 * @category SerializedOrderDelivery
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class SerializedOrderDelivery
{
    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("cost")
     */
    public $cost;

    /**
     * SerializedOrderDelivery constructor.
     *
     * @param float $cost
     */
    public function __construct(float $cost = 0)
    {
        if (0 != $cost) {
            $this->cost = $cost;
        }
    }
}
