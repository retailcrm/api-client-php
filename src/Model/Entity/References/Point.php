<?php

/**
 * PHP version 7.3
 *
 * @category Point
 * @package  RetailCrm\Api\Model\Entity\References
 */

namespace RetailCrm\Api\Model\Entity\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Point
 *
 * @category Point
 * @package  RetailCrm\Api\Model\Entity\References
 */
class Point
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
