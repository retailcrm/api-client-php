<?php

/**
 * PHP version 7.3
 *
 * @category Plate
 * @package  RetailCrm\Api\Model\Entity\Integration\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Integration\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Plate
 *
 * @category Plate
 * @package  RetailCrm\Api\Model\Entity\Integration\Delivery
 */
class Plate
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("label")
     */
    public $label;
}
