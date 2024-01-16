<?php

/**
 * PHP version 7.3
 *
 * @category TaskHistoryRequest
 * @package  RetailCrm\Api\Model\Request\Tasks
 */

namespace RetailCrm\Api\Model\Request\Tasks;

use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Filter\Tasks\TaskHistoryFilter;
use RetailCrm\Api\Model\Request\Traits\HistoryPageLimitTrait;

class TaskHistoryRequest implements RequestInterface
{

    use HistoryPageLimitTrait;

    /**
     * @var TaskHistoryFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Tasks\TaskHistoryFilter")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
