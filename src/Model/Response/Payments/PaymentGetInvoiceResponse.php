<?php

/**
 * PHP version 7.3
 *
 * @category PaymentGetInvoiceResponse
 * @package  RetailCrm\Api\Model\Response\Payments
 */

namespace RetailCrm\Api\Model\Response\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class PaymentGetInvoiceResponse
 *
 * @category PaymentGetInvoiceResponse
 * @package  RetailCrm\Api\Model\Response\Payments
 */
class PaymentGetInvoiceResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Payments\ApiGetInvoiceResponse
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Payments\ApiGetInvoiceResponse")
     * @JMS\SerializedName("invoice")
     */
    public $invoice;
}
