<?php

/**
 * PHP version 7.3
 *
 * @category SerializedWebAnalyticsData
 * @package  RetailCrm\Api\Model\Entity\Telephony
 */

namespace RetailCrm\Api\Model\Entity\Telephony;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedWebAnalyticsData
 *
 * @category SerializedWebAnalyticsData
 * @package  RetailCrm\Api\Model\Entity\Telephony
 */
class SerializedWebAnalyticsData
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Telephony\SerializedCampaign
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Telephony\SerializedCampaign")
     * @JMS\SerializedName("campaign")
     */
    public $campaign;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("queryString")
     */
    public $queryString;
}
