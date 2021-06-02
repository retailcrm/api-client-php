<?php

/**
 * PHP version 7.3
 *
 * @category PaymentStatusesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\PaymentStatus;

/**
 * Class PaymentStatusesEditRequest
 *
 * @category PaymentStatusesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class PaymentStatusesEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\PaymentStatus
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\References\PaymentStatus")
     * @Form\SerializedName("paymentStatus")
     * @Form\JsonField()
     */
    public $paymentStatus;

    /**
     * PaymentStatusesEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\References\PaymentStatus|null $paymentStatus
     */
    public function __construct(?PaymentStatus $paymentStatus = null)
    {
        if (null !== $paymentStatus) {
            $this->paymentStatus = $paymentStatus;
        }
    }
}
