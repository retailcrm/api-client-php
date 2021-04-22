<?php

/**
 * PHP version 7.3
 *
 * @category User
 * @package  RetailCrm\Api\Model\Entity\Users
 */

namespace RetailCrm\Api\Model\Entity\Users;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class User
 *
 * @category User
 * @package  RetailCrm\Api\Model\Entity\Users
 */
class User
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("email")
     */
    public $email;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("firstName")
     */
    public $firstName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("lastName")
     */
    public $lastName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("patronymic")
     */
    public $patronymic;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("photoUrl")
     */
    public $photoUrl;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phone")
     */
    public $phone;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("status")
     */
    public $status;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("online")
     */
    public $online;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isAdmin")
     */
    public $isAdmin;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isManager")
     */
    public $isManager;

    /**
     * @var \RetailCrm\Api\Model\Entity\Users\Group[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Users\Group>")
     * @JMS\SerializedName("groups")
     */
    public $groups;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("mgUserId")
     */
    public $mgUserId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("senderEmail")
     */
    public $senderEmail;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("senderName")
     */
    public $senderName;
}
