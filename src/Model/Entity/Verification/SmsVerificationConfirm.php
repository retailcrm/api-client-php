<?php

/**
 * PHP version 7.3
 *
 * @category SmsVerificationConfirm
 * @package  RetailCrm\Api\Model\Entity\Verification
 */

namespace RetailCrm\Api\Model\Entity\Verification;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SmsVerificationConfirm
 *
 * @category SmsVerificationConfirm
 * @package  RetailCrm\Api\Model\Entity\Verification
 */
class SmsVerificationConfirm
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("checkId")
     */
    public $checkId;
}
