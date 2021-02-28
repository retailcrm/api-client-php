<?php

/**
 * PHP version 7.3
 *
 * @category Customer
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Customer
 *
 * @category Customer
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class Customer
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
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("personalDiscount")
     */
    public $personalDiscount;
}
