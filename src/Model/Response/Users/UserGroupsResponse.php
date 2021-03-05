<?php

/**
 * PHP version 7.3
 *
 * @category UserGroupsResponse
 * @package  RetailCrm\Api\Model\Response\Users
 */

namespace RetailCrm\Api\Model\Response\Users;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class UserGroupsResponse
 *
 * @category UserGroupsResponse
 * @package  RetailCrm\Api\Model\Response\Users
 */
class UserGroupsResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Users\Group[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Users\Group>")
     * @JMS\SerializedName("groups")
     */
    public $groups;
}
