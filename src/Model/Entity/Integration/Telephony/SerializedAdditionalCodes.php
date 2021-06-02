<?php

/**
 * PHP version 7.3
 *
 * @category SerializedAdditionalCodes
 * @package  RetailCrm\Api\Model\Entity\Integration\Telephony
 */

namespace RetailCrm\Api\Model\Entity\Integration\Telephony;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedAdditionalCodes
 *
 * @category SerializedAdditionalCodes
 * @package  RetailCrm\Api\Model\Entity\Integration\Telephony
 */
class SerializedAdditionalCodes
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("userId")
     */
    public $userId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;
}
