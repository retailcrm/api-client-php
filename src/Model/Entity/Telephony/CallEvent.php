<?php

/**
 * PHP version 7.3
 *
 * @category CallEvent
 * @package  RetailCrm\Api\Model\Entity\Telephony
 */

namespace RetailCrm\Api\Model\Entity\Telephony;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CallEvent
 *
 * @category CallEvent
 * @package  RetailCrm\Api\Model\Entity\Telephony
 */
class CallEvent
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phone")
     */
    public $phone;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("codes")
     */
    public $codes;

    /**
     * @var int[]
     *
     * @JMS\Type("array<int>")
     * @JMS\SerializedName("userIds")
     */
    public $userIds;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("hangupStatus")
     */
    public $hangupStatus;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalPhone")
     */
    public $externalPhone;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("callExternalId")
     */
    public $callExternalId;

    /**
     * @var \RetailCrm\Api\Model\Entity\Telephony\SerializedWebAnalyticsData
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Telephony\SerializedWebAnalyticsData")
     * @JMS\SerializedName("webAnalyticsData")
     */
    public $webAnalyticsData;
}
