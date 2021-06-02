<?php

/**
 * PHP version 7.3
 *
 * @category UsersGetResponse
 * @package  RetailCrm\Api\Model\Response\Users
 */

namespace RetailCrm\Api\Model\Response\Users;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class UsersGetResponse
 *
 * @category UsersGetResponse
 * @package  RetailCrm\Api\Model\Response\Users
 */
class UsersGetResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Users\User
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Users\User")
     * @JMS\SerializedName("user")
     */
    public $user;
}
