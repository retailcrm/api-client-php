<?php

/**
 * PHP version 7.3
 *
 * @category ApiUpdateInvoiceRequest
 * @package  RetailCrm\Api\Model\Entity\Payments
 */

namespace RetailCrm\Api\Model\Entity\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ApiUpdateInvoiceRequest
 *
 * @category ApiUpdateInvoiceRequest
 * @package  RetailCrm\Api\Model\Entity\Payments
 */
class ApiUpdateInvoiceRequest
{
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
     * @JMS\SerializedName("paymentId")
     */
    public $paymentId;

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
     * @JMS\SerializedName("status")
     */
    public $status;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("cancellationDetails")
     */
    public $cancellationDetails;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("invoiceUrl")
     */
    public $invoiceUrl;

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
     * @var \RetailCrm\Api\Model\Entity\Payments\ModuleRefund
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Payments\ModuleRefund")
     * @JMS\SerializedName("refund")
     */
    public $refund;

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
}
