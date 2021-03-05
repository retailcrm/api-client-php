<?php

/**
 * PHP version 7.3
 *
 * @category SmsVerificationConfirmResponse
 * @package  RetailCrm\Api\Model\Response\Verification
 */

namespace RetailCrm\Api\Model\Response\Verification;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class SmsVerificationConfirmResponse
 *
 * @category SmsVerificationConfirmResponse
 * @package  RetailCrm\Api\Model\Response\Verification
 */
class SmsVerificationConfirmResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Verification\SmsVerification
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Verification\SmsVerification")
     * @JMS\SerializedName("verification")
     */
    public $verification;
}
