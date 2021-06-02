<?php

/**
 * PHP version 7.3
 *
 * @category PaymentUpdateInvoiceRequest
 * @package  RetailCrm\Api\Model\Request\Payments
 */

namespace RetailCrm\Api\Model\Request\Payments;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\Payments\ApiUpdateInvoiceRequest;

/**
 * Class PaymentUpdateInvoiceRequest
 *
 * @category PaymentUpdateInvoiceRequest
 * @package  RetailCrm\Api\Model\Request\Payments
 */
class PaymentUpdateInvoiceRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Payments\ApiUpdateInvoiceRequest
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Payments\ApiUpdateInvoiceRequest")
     * @Form\SerializedName("updateInvoice")
     * @Form\JsonField()
     */
    public $updateInvoice;

    /**
     * PaymentUpdateInvoiceRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\Payments\ApiUpdateInvoiceRequest|null $updateInvoice
     */
    public function __construct(?ApiUpdateInvoiceRequest $updateInvoice = null)
    {
        if (null !== $updateInvoice) {
            $this->updateInvoice = $updateInvoice;
        }
    }
}
