<?php

/**
 * PHP version 7.3
 *
 * @category SmsVerificationConfirmRequest
 * @package  RetailCrm\Api\Model\Request\Verification
 */

namespace RetailCrm\Api\Model\Request\Verification;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Model\Entity\Verification\SmsVerificationConfirm;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class SmsVerificationConfirmRequest
 *
 * @category SmsVerificationConfirmRequest
 * @package  RetailCrm\Api\Model\Request\Verification
 */
class SmsVerificationConfirmRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Verification\SmsVerificationConfirm
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Verification\SmsVerificationConfirm")
     * @Form\SerializedName("verification")
     * @Form\JsonField()
     */
    public $verification;

    /**
     * SmsVerificationConfirmRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\Verification\SmsVerificationConfirm|null $verification
     */
    public function __construct(?SmsVerificationConfirm $verification = null)
    {
        if (null !== $verification) {
            $this->verification = $verification;
        }
    }
}
