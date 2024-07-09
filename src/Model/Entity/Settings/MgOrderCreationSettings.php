<?php

/**
 * PHP version 7.3
 *
 * @category Feature
 * @package  RetailCrm\Api\Model\Entity\Settings
 */

namespace RetailCrm\Api\Model\Entity\Settings;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class MgOrderCreationSettings
 *
 * @category MgOrderCreationSettings
 * @package  RetailCrm\Api\Model\Entity\Settings
 */
class MgOrderCreationSettings
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Settings\ChannelSetting
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Settings\ChannelSetting")
     * @JMS\SerializedName("default")
     */
    public $default;

    /**
     * @var array<int, \RetailCrm\Api\Model\Entity\Settings\ChannelSetting>
     *
     * @JMS\Type("array<int, RetailCrm\Api\Model\Entity\Settings\ChannelSetting>")
     * @JMS\SerializedName("channels")
     */
    public $channels;
}
