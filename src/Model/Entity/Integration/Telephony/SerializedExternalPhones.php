<?php

/**
 * PHP version 7.3
 *
 * @category SerializedExternalPhones
 * @package  RetailCrm\Api\Model\Entity\Integration\Telephony
 */

namespace RetailCrm\Api\Model\Entity\Integration\Telephony;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedExternalPhones
 *
 * @category SerializedExternalPhones
 * @package  RetailCrm\Api\Model\Entity\Integration\Telephony
 */
class SerializedExternalPhones
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("siteCode")
     */
    public $siteCode;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalPhone")
     */
    public $externalPhone;
}
