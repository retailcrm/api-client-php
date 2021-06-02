<?php

/**
 * PHP version 7.3
 *
 * @category PaymentConfiguration
 * @package  RetailCrm\Api\Model\Entity\Integration\Payment
 */

namespace RetailCrm\Api\Model\Entity\Integration\Payment;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class PaymentConfiguration
 *
 * @category PaymentConfiguration
 * @package  RetailCrm\Api\Model\Entity\Integration\Payment
 */
class PaymentConfiguration
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Payment\Actions
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\Payment\Actions")
     * @JMS\SerializedName("actions")
     */
    public $actions;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("currencies")
     */
    public $currencies;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("invoiceTypes")
     */
    public $invoiceTypes;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Payment\Shop[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Integration\Payment\Shop>")
     * @JMS\SerializedName("shops")
     */
    public $shops;
}
