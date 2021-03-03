<?php

/**
 * PHP version 7.3
 *
 * @category ApiCreateInvoiceRequest
 * @package  RetailCrm\Api\Model\Entity\Payments
 */

namespace RetailCrm\Api\Model\Entity\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ApiCreateInvoiceRequest
 *
 * @category ApiCreateInvoiceRequest
 * @package  RetailCrm\Api\Model\Entity\Payments
 */
class ApiCreateInvoiceRequest
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
     * @JMS\SerializedName("returnUrl")
     */
    public $returnUrl;
}
