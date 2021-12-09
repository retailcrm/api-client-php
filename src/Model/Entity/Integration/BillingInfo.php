<?php

namespace RetailCrm\Api\Model\Entity\Integration;

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
     * @var \RetailCrm\Api\Model\Entity\Integration\Currency
     *
     * @JMS\Type("\RetailCrm\Api\Model\Entity\Integration\Currency")
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
