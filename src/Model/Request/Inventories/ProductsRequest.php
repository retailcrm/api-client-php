<?php

/**
 * PHP version 7.3
 *
 * @category ProductsRequest
 * @package  RetailCrm\Api\Model\Request\Inventories
 */

namespace RetailCrm\Api\Model\Request\Inventories;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class ProductsRequest
 *
 * @category ProductsRequest
 * @package  RetailCrm\Api\Model\Request\Inventories
 */
class ProductsRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Inventories\ProductFilterType
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Inventories\ProductFilterType")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
