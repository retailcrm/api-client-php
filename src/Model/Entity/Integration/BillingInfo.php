<?php

/**
 * PHP version 7.3
 *
 * @category BillingInfo
 * @package  RetailCrm\Api\Model\Entity\Integration
 */

namespace RetailCrm\Api\Model\Entity\Integration;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class BillingInfo
 *
 * @category IntegrationModuleEditInfo
 * @package  RetailCrm\Api\Model\Entity\Integration
 */
class BillingInfo
{
    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("price")
     */
    public $price;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("priceWithDiscount")
     */
    public $priceWithDiscount;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Currency
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\Currency")
     * @JMS\SerializedName("currency")
     */
    public $currency;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("billingType")
     */
    public $billingType;
}
