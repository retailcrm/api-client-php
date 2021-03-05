<?php

/**
 * PHP version 7.3
 *
 * @category InventoriesRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */

namespace RetailCrm\Api\Model\Request\Store;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class InventoriesRequest
 *
 * @category InventoriesRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */
class InventoriesRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Store\InventoryFilterType
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Store\InventoryFilterType")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
