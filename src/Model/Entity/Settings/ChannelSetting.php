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
 * Class ChannelSetting
 *
 * @category ChannelSetting
 * @package  RetailCrm\Api\Model\Entity\Settings
 */
class ChannelSetting
{
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
     * @JMS\SerializedName("order_type")
     */
    public $orderType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("order_method")
     */
    public $orderMethod;
}
