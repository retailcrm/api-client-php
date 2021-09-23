<?php

/**
 * PHP version 7.3
 *
 * @category SerializedOrder
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedOrder
 *
 * @category SerializedOrder
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 *
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class SerializedOrder
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("privilegeType")
     */
    public $privilegeType;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("discountManualAmount")
     */
    public $discountManualAmount;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("discountManualPercent")
     */
    public $discountManualPercent;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer")
     * @JMS\SerializedName("customer")
     */
    public $customer;

    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\SerializedOrderProduct[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Delivery\SerializedOrderProduct>")
     * @JMS\SerializedName("items")
     */
    public $items;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderDelivery
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderDelivery")
     * @JMS\SerializedName("delivery")
     */
    public $delivery;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("applyRound")
     */
    public $applyRound;
}
