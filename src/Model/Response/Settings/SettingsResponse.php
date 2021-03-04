<?php

/**
 * PHP version 7.3
 *
 * @category SettingsResponse
 * @package  RetailCrm\Api\Model\Response\Settings
 */

namespace RetailCrm\Api\Model\Response\Settings;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class SettingsResponse
 *
 * @category SettingsResponse
 * @package  RetailCrm\Api\Model\Response\Settings
 */
class SettingsResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Settings\Settings
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Settings\Settings")
     * @JMS\SerializedName("settings")
     */
    public $settings;
}
