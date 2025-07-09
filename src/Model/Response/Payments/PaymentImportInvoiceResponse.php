<?php

/**
 * PHP version 7.3
 *
 * @category PaymentImportInvoiceResponse
 * @package  RetailCrm\Api\Model\Response\Payments
 */

namespace RetailCrm\Api\Model\Response\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class PaymentImportInvoiceResponse
 *
 * @category PaymentImportInvoiceResponse
 * @package  RetailCrm\Api\Model\Response\Payments
 */
class PaymentImportInvoiceResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Payments\ApiImportInvoiceResponse
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Payments\ApiImportInvoiceResponse")
     * @JMS\SerializedName("invoice")
     */
    public $invoice;
}
