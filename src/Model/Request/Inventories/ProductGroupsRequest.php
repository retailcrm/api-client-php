<?php

/**
 * PHP version 7.3
 *
 * @category ProductGroupsRequest
 * @package  RetailCrm\Api\Model\Request\Inventories
 */

namespace RetailCrm\Api\Model\Request\Inventories;

use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class ProductGroupsRequest
 *
 * @category ProductGroupsRequest
 * @package  RetailCrm\Api\Model\Request\Inventories
 */
class ProductGroupsRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Inventories\ProductGroupFilterType
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Inventories\ProductGroupFilterType")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
