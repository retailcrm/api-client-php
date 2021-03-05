<?php

/**
 * PHP version 7.3
 *
 * @category ProductsRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */

namespace RetailCrm\Api\Model\Request\Store;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class ProductsRequest
 *
 * @category ProductsRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */
class ProductsRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Store\ProductFilterType
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Store\ProductFilterType")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
