<?php

/**
 * PHP version 7.3
 *
 * @category TasksCountsStatus
 * @package  RetailCrm\Api\Enum\Customers
 */

namespace RetailCrm\Api\Enum\Customers;

/**
 * Class TasksCountsStatus
 *
 * @category TasksCountsStatus
 * @package  RetailCrm\Api\Enum\Customers
 */
final class TasksCountsStatus
{
    public const NO_UNFINISHED_TASKS = 1;
    public const HAS_UNFINISHED_TASKS = 2;
    public const HAS_UNFINISHED_AND_EXPIRED_TASKS = 3;
}
