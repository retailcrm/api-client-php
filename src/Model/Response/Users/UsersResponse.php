<?php

/**
 * PHP version 7.3
 *
 * @category UsersResponse
 * @package  RetailCrm\Api\Model\Response\Users
 */

namespace RetailCrm\Api\Model\Response\Users;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class UsersResponse
 *
 * @category UsersResponse
 * @package  RetailCrm\Api\Model\Response\Users
 */
class UsersResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Users\User[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Users\User>")
     * @JMS\SerializedName("users")
     */
    public $users;
}
