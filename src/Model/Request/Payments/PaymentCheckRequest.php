<?php

/**
 * PHP version 7.3
 *
 * @category PaymentCheckRequest
 * @package  RetailCrm\Api\Model\Request\Payments
 */

namespace RetailCrm\Api\Model\Request\Payments;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\Payments\ApiCheckRequest;

/**
 * Class PaymentCheckRequest
 *
 * @category PaymentCheckRequest
 * @package  RetailCrm\Api\Model\Request\Payments
 */
class PaymentCheckRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Payments\ApiCheckRequest
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Payments\ApiCheckRequest")
     * @Form\SerializedName("check")
     * @Form\JsonField()
     */
    public $check;

    /**
     * PaymentCheckRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\Payments\ApiCheckRequest|null $check
     */
    public function __construct(?ApiCheckRequest $check = null)
    {
        if (null !== $check) {
            $this->check = $check;
        }
    }
}
