<?php

/**
 * PHP version 7.3
 *
 * @category SmsVerification
 * @package  RetailCrm\Api\Model\Entity\Verification
 */

namespace RetailCrm\Api\Model\Entity\Verification;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SmsVerification
 *
 * @category SmsVerification
 * @package  RetailCrm\Api\Model\Entity\Verification
 */
class SmsVerification
{
    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("expiredAt")
     */
    public $expiredAt;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("verifiedAt")
     */
    public $verifiedAt;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("checkId")
     */
    public $checkId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("actionType")
     */
    public $actionType;
}
