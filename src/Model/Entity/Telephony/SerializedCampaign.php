<?php

/**
 * PHP version 7.3
 *
 * @category SerializedCampaign
 * @package  RetailCrm\Api\Model\Entity\Telephony
 */

namespace RetailCrm\Api\Model\Entity\Telephony;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedCampaign
 *
 * @category SerializedCampaign
 * @package  RetailCrm\Api\Model\Entity\Telephony
 */
class SerializedCampaign
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;
}
