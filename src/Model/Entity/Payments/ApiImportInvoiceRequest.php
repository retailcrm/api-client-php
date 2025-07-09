<?php

/**
 * PHP version 7.3
 *
 * @category ApiImportInvoiceRequest
 * @package  RetailCrm\Api\Model\Entity\Payments
 */

namespace RetailCrm\Api\Model\Entity\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ApiImportInvoiceRequest
 *
 * @category ApiImportInvoiceRequest
 * @package  RetailCrm\Api\Model\Entity\Payments
 */
class ApiImportInvoiceRequest
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("paymentId")
     */
    public $paymentId;

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
     * @JMS\SerializedName("amount")
     */
    public $amount;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("currency")
     */
    public $currency;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("status")
     */
    public $status;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("paidAt")
     */
    public $paidAt;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("discountAmount")
     */
    public $discountAmount;

    /**
     * @var \RetailCrm\Api\Model\Entity\Payments\ApiImportInvoicePaymentRefund[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Payments\ApiImportInvoicePaymentRefund>")
     * @JMS\SerializedName("refunds")
     */
    public $refunds;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("refundable")
     */
    public $refundable;
}
