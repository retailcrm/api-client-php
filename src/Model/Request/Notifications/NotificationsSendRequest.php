<?php

/**
 * PHP version 7.3
 *
 * @category NotificationsSendRequest
 * @package  RetailCrm\Api\Model\Request\Notifications
 */

namespace RetailCrm\Api\Model\Request\Notifications;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class NotificationsSendRequest
 *
 * @category NotificationsSendRequest
 * @package  RetailCrm\Api\Model\Request\Notifications
 */
class NotificationsSendRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Notifications\Notification
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Notifications\Notification")
     * @Form\SerializedName("notification")
     * @Form\JsonField()
     */
    public $notification;
}
