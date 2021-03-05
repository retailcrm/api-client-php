<?php

/**
 * PHP version 7.3
 *
 * @category Call
 * @package  RetailCrm\Api\Model\Entity\Telephony
 */

namespace RetailCrm\Api\Model\Entity\Telephony;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Call
 *
 * @category Call
 * @package  RetailCrm\Api\Model\Entity\Telephony
 */
class Call
{
    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("date")
     */
    public $date;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;

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
     * @JMS\SerializedName("code")
     */
    public $code;

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
     * @JMS\SerializedName("result")
     */
    public $result;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("duration")
     */
    public $duration;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("durationWaiting")
     */
    public $durationWaiting;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("recordUrl")
     */
    public $recordUrl;

    /**
     * @var \RetailCrm\Api\Model\Entity\Source
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Source")
     * @JMS\SerializedName("source")
     */
    public $source;

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
     * @JMS\SerializedName("site")
     */
    public $site;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("clientId")
     */
    public $clientId;
}
