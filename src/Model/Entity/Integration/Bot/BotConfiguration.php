<?php

/**
 * PHP version 7.3
 *
 * @category BotConfiguration
 * @package  RetailCrm\Api\Model\Entity\Integration\Bot
 */

namespace RetailCrm\Api\Model\Entity\Integration\Bot;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class BotConfiguration
 *
 * @category BotConfiguration
 * @package  RetailCrm\Api\Model\Entity\Integration\Bot
 */
class BotConfiguration
{
    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isActive")
     */
    public $isActive;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("logo")
     */
    public $logo;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("token")
     */
    public $token;

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
     * @JMS\SerializedName("endpointUrl")
     */
    public $endpointUrl;
}
