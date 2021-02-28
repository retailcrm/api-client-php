<?php

/**
 * PHP version 7.3
 *
 * @category SerializedOrderProduct
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedOrderProduct
 *
 * @category SerializedOrderProduct
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 *
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class SerializedOrderProduct
{
    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("initialPrice")
     */
    public $initialPrice;

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
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("quantity")
     */
    public $quantity;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderProductOffer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderProductOffer")
     * @JMS\SerializedName("offer")
     */
    public $offer;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\PriceType
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\PriceType")
     * @JMS\SerializedName("priceType")
     */
    public $priceType;
}
