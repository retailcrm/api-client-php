<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyEventDiscount
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class LoyaltyEventDiscount
 *
 * @category LoyaltyEventDiscount
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class LoyaltyEventDiscount
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;
}
