<?php

/**
 * PHP version 7.3
 *
 * @category ApiUserFilter
 * @package  RetailCrm\Api\Model\Filter\Users
 */

namespace RetailCrm\Api\Model\Filter\Users;

use DateTime;
use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class ApiUserFilter
 *
 * @category ApiUserFilter
 * @package  RetailCrm\Api\Model\Filter\Users
 */
class ApiUserFilter
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("email")
     */
    public $email;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("status")
     */
    public $status;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("online")
     */
    public $online;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("active")
     */
    public $active;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("isManager")
     */
    public $isManager;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("isPosManager")
     */
    public $isPosManager;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("isAdmin")
     */
    public $isAdmin;

    /**
     * @var string[]
     *
     * @Form\Type("array")
     * @Form\SerializedName("groups")
     */
    public $groups;

    /**
     * @var DateTime
     *
     * @Form\Type("DateTime<'Y-m-d H:i:s'>")
     * @Form\SerializedName("createdAtFrom")
     */
    public $createdAtFrom;

    /**
     * @var DateTime
     *
     * @Form\Type("DateTime<'Y-m-d H:i:s'>")
     * @Form\SerializedName("createdAtTo")
     */
    public $createdAtTo;
}
