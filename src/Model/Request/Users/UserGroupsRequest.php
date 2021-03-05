<?php

/**
 * PHP version 7.3
 *
 * @category UserGroupsRequest
 * @package  RetailCrm\Api\Model\Request\Users
 */

namespace RetailCrm\Api\Model\Request\Users;

use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class UserGroupsRequest
 *
 * @category UserGroupsRequest
 * @package  RetailCrm\Api\Model\Request\Users
 */
class UserGroupsRequest implements RequestInterface
{
    use PageLimitTrait;
}
