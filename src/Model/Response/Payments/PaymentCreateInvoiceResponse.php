<?php

/**
 * PHP version 7.3
 *
 * @category PaymentCreateInvoiceResponse
 * @package  RetailCrm\Api\Model\Response\Payments
 */

namespace RetailCrm\Api\Model\Response\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class PaymentCreateInvoiceResponse
 *
 * @category PaymentCreateInvoiceResponse
 * @package  RetailCrm\Api\Model\Response\Payments
 */
class PaymentCreateInvoiceResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Payments\ApiCreateInvoiceResponseResult
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Payments\ApiCreateInvoiceResponseResult")
     * @JMS\SerializedName("result")
     */
    public $result;
}
