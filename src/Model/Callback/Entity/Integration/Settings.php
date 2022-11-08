<?php

/**
 * PHP version 7.3
 *
 * @category Settings
 * @package  RetailCrm\Api\Model\Callback\Entity\Integration
 */

namespace RetailCrm\Api\Model\Callback\Entity\Integration;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Settings
 *
 * @category Settings
 * @package  RetailCrm\Api\Model\Callback\Entity\Integration
 */
class Settings
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("clientId")
     */
    public $clientId;

    /**
     * @var \RetailCrm\Api\Model\Entity\Settings\Settings
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Settings\Settings")
     * @JMS\SerializedName("settings")
     */
    public $settings;
}
