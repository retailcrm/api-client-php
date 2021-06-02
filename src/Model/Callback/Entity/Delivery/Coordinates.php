<?php

/**
 * PHP version 7.3
 *
 * @category Coordinates
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Coordinates
 *
 * @category Coordinates
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */
class Coordinates
{
    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("latitude")
     */
    public $latitude;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("longitude")
     */
    public $longitude;
}
