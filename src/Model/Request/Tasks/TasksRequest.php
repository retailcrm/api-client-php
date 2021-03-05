<?php

/**
 * PHP version 7.3
 *
 * @category TasksRequest
 * @package  RetailCrm\Api\Model\Request\Tasks
 */

namespace RetailCrm\Api\Model\Request\Tasks;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class TasksRequest
 *
 * @category TasksRequest
 * @package  RetailCrm\Api\Model\Request\Tasks
 */
class TasksRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Tasks\TaskFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Tasks\TaskFilter")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
