<?php

/**
 * PHP version 7.3
 *
 * @category UsersRequest
 * @package  RetailCrm\Api\Model\Request\Users
 */

namespace RetailCrm\Api\Model\Request\Users;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class UsersRequest
 *
 * @category UsersRequest
 * @package  RetailCrm\Api\Model\Request\Users
 */
class UsersRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Users\ApiUserFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Users\ApiUserFilter")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
