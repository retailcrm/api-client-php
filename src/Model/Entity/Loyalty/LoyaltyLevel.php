<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyLevel
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class LoyaltyLevel
 *
 * @category LoyaltyLevel
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class LoyaltyLevel
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;

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
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("sum")
     */
    public $sum;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("privilegeSize")
     */
    public $privilegeSize;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("privilegeSizePromo")
     */
    public $privilegeSizePromo;
}
