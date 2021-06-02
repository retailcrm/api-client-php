<?php

/**
 * PHP version 7.3
 *
 * @category PaymentCreateInvoiceRequest
 * @package  RetailCrm\Api\Model\Request\Payments
 */

namespace RetailCrm\Api\Model\Request\Payments;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\Payments\ApiCreateInvoiceRequest;

/**
 * Class PaymentCreateInvoiceRequest
 *
 * @category PaymentCreateInvoiceRequest
 * @package  RetailCrm\Api\Model\Request\Payments
 */
class PaymentCreateInvoiceRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Payments\ApiCreateInvoiceRequest
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Payments\ApiCreateInvoiceRequest")
     * @Form\SerializedName("createInvoice")
     * @Form\JsonField()
     */
    public $createInvoice;

    /**
     * PaymentCreateInvoiceRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\Payments\ApiCreateInvoiceRequest|null $createInvoice
     */
    public function __construct(?ApiCreateInvoiceRequest $createInvoice = null)
    {
        if (null !== $createInvoice) {
            $this->createInvoice = $createInvoice;
        }
    }
}
