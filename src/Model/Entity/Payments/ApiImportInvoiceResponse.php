<?php

/**
 * PHP version 7.3
 *
 * @category ApiImportInvoiceResponse
 * @package  RetailCrm\Api\Model\Entity\Payments
 */

namespace RetailCrm\Api\Model\Entity\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ApiImportInvoiceResponse
 *
 * @category ApiImportInvoiceResponse
 * @package  RetailCrm\Api\Model\Entity\Payments
 */
class ApiImportInvoiceResponse
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("invoiceUuid")
     */
    public $invoiceUuid;
}
