<?php

/**
 * PHP version 7.3
 *
 * @category IntegrationModuleEditInfo
 * @package  RetailCrm\Api\Model\Entity\Integration
 */

namespace RetailCrm\Api\Model\Entity\Integration;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class IntegrationModuleEditInfo
 *
 * @category IntegrationModuleEditInfo
 * @package  RetailCrm\Api\Model\Entity\Integration
 */
class IntegrationModuleEditInfo
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration")
     * @JMS\SerializedName("mgTransport")
     */
    public $mgTransport;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Bot\BotConfiguration
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\Bot\BotConfiguration")
     * @JMS\SerializedName("mgBot")
     */
    public $mgBot;

    /**
     * @var int[]
     *
     * @JMS\Type("array<int>")
     * @JMS\SerializedName("notExistUsersIds")
     */
    public $notExistUsersIds;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("notExistSiteCodes")
     */
    public $notExistSiteCodes;
}
