<?php

/**
 * PHP version 7.3
 *
 * @category ApiImportInvoicePaymentRefund
 * @package  RetailCrm\Api\Model\Entity\Payments
 */

namespace RetailCrm\Api\Model\Entity\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ApiImportInvoicePaymentRefund
 *
 * @category ApiImportInvoicePaymentRefund
 * @package  RetailCrm\Api\Model\Entity\Payments
 */
class ApiImportInvoicePaymentRefund extends PaymentRefund
{
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
     * @JMS\SerializedName("comment")
     */
    public $comment;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("amount")
     */
    public $amount;
}
