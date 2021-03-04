<?php

/**
 * PHP version 7.3
 *
 * @category InventoriesRequest
 * @package  RetailCrm\Api\Model\Request\Inventories
 */

namespace RetailCrm\Api\Model\Request\Inventories;

use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class InventoriesRequest
 *
 * @category InventoriesRequest
 * @package  RetailCrm\Api\Model\Request\Inventories
 */
class InventoriesRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Inventories\InventoryFilterType
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Inventories\InventoryFilterType")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
