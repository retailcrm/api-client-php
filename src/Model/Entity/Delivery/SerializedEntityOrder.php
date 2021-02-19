<?php

/**
 * PHP version 7.3
 *
 * @category SerializedEntityOrder
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Delivery;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SerializedEntityOrder
 *
 * @category SerializedEntityOrder
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */
class SerializedEntityOrder
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
