<?php

/**
 * PHP 7.3
 *
 * @category SettingsStatus
 * @package  RetailCrm\Api\Model\Entity\Integration\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Integration\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SettingsStatus
 *
 * @category SettingsStatus
 * @package  RetailCrm\Api\Model\Entity\Integration\Delivery
 */
class SettingsStatus
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
     * @JMS\SerializedName("trackingStatusCode")
     */
    public $trackingStatusCode;
}
