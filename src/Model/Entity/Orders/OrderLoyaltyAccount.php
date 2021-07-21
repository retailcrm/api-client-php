<?php

/**
 * PHP version 7.3
 *
 * @category OrderLoyaltyAccount
 * @package  RetailCrm\Api\Model\Entity\Orders
 */

namespace RetailCrm\Api\Model\Entity\Orders;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class OrderLoyaltyAccount
 *
 * @category OrderLoyaltyAccount
 * @package  RetailCrm\Api\Model\Entity\Orders
 */
class OrderLoyaltyAccount
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("amount")
     */
    public $amount;
}
