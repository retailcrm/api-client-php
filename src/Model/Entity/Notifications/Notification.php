<?php

/**
 * PHP version 7.3
 *
 * @category Notification
 * @package  RetailCrm\Api\Model\Entity\Notifications
 */

namespace RetailCrm\Api\Model\Entity\Notifications;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Notification
 *
 * @category Notification
 * @package  RetailCrm\Api\Model\Entity\Notifications
 *
 * @SuppressWarnings(PHPMD.LongVariables)
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 */
class Notification
{
    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("userGroups")
     */
    public $userGroups;

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
     * @JMS\SerializedName("message")
     */
    public $message;

    /**
     * @var int[]
     *
     * @JMS\Type("array<int>")
     * @JMS\SerializedName("userIds")
     */
    public $userIds;
}
