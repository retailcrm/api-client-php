<?php

/**
 * PHP version 7.3
 *
 * @category CartOrder
 * @package  RetailCrm\Api\Model\Entity\CustomerInteraction
 */

namespace RetailCrm\Api\Model\Entity\CustomerInteraction;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CartOrder
 *
 * @category CartOrder
 * @package  RetailCrm\Api\Model\Entity\CustomerInteraction
 */
class CartOrder
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("number")
     */
    public $number;
}
