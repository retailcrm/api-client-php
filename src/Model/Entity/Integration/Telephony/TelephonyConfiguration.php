<?php

/**
 * PHP version 7.3
 *
 * @category TelephonyConfiguration
 * @package  RetailCrm\Api\Model\Entity\Integration\Telephony
 */

namespace RetailCrm\Api\Model\Entity\Integration\Telephony;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class TelephonyConfiguration
 *
 * @category TelephonyConfiguration
 * @package  RetailCrm\Api\Model\Entity\Integration\Telephony
 */
class TelephonyConfiguration
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("makeCallUrl")
     */
    public $makeCallUrl;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("allowEdit")
     */
    public $allowEdit;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("inputEventSupported")
     */
    public $inputEventSupported;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("outputEventSupported")
     */
    public $outputEventSupported;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("hangupEventSupported")
     */
    public $hangupEventSupported;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("changeUserStatusUrl")
     */
    public $changeUserStatusUrl;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedAdditionalCodes[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedAdditionalCodes>")
     * @JMS\SerializedName("additionalCodes")
     */
    public $additionalCodes;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedExternalPhones[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedExternalPhones>")
     * @JMS\SerializedName("externalPhones")
     */
    public $externalPhones;
}
