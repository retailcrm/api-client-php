<?php

/**
 * PHP version 7.3
 *
 * @category ApiGetInvoiceResponse
 * @package  RetailCrm\Api\Model\Entity\Payments
 */

namespace RetailCrm\Api\Model\Entity\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

class ApiGetInvoiceResponse
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("customerId")
     */
    public $customerId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("orderId")
     */
    public $orderId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("paymentId")
     */
    public $paymentId;

    /**
     * @var string
     *
     * @JMS\Type("string")
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
     * @JMS\SerializedName("email")
     */
    public $email;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phone")
     */
    public $phone;

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
     * @JMS\SerializedName("statusMessage")
     */
    public $statusMessage;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("invoiceUuid")
     */
    public $invoiceUuid;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("invoiceType")
     */
    public $invoiceType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("link")
     */
    public $link;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("errorMsg")
     */
    public $errorMsg;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("paidAt")
     */
    public $paidAt;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("expiredAt")
     */
    public $expiredAt;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("cancellationDetails")
     */
    public $cancellationDetails;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("refundable")
     */
    public $refundable;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("cancellable")
     */
    public $cancellable;

    /**
     * @var \RetailCrm\Api\Model\Entity\Payments\PaymentRefund[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Payments\PaymentRefund>")
     * @JMS\SerializedName("refunds")
     */
    public $refunds;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("discountAmount")
     */
    public $discountAmount;
}
