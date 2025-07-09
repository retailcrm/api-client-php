<?php

/**
 * PHP version 7.3
 *
 * @category PaymentImportInvoiceRequest
 * @package  RetailCrm\Api\Model\Request\Payments
 */

namespace RetailCrm\Api\Model\Request\Payments;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\Payments\ApiImportInvoiceRequest;

/**
 * Class PaymentImportInvoiceRequest
 *
 * @category PaymentImportInvoiceRequest
 * @package  RetailCrm\Api\Model\Request\Payments
 */
class PaymentImportInvoiceRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Payments\ApiImportInvoiceRequest
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Payments\ApiImportInvoiceRequest")
     * @Form\SerializedName("invoice")
     * @Form\JsonField()
     */
    public $invoice;

    /**
     * PaymentImportInvoiceRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\Payments\ApiImportInvoiceRequest|null $importInvoice
     */
    public function __construct(?ApiImportInvoiceRequest $importInvoice = null)
    {
        if (null !== $importInvoice) {
            $this->invoice = $importInvoice;
        }
    }
}
