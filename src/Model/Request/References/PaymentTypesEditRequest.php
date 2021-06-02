<?php

/**
 * PHP version 7.3
 *
 * @category PaymentTypesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\PaymentType;

/**
 * Class PaymentTypesEditRequest
 *
 * @category PaymentTypesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class PaymentTypesEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\PaymentType
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\References\PaymentType")
     * @Form\SerializedName("paymentType")
     * @Form\JsonField()
     */
    public $paymentType;

    /**
     * PaymentTypesEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\References\PaymentType|null $paymentType
     */
    public function __construct(?PaymentType $paymentType = null)
    {
        if (null !== $paymentType) {
            $this->paymentType = $paymentType;
        }
    }
}
