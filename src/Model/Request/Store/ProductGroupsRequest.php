<?php

/**
 * PHP version 7.3
 *
 * @category ProductGroupsRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */

namespace RetailCrm\Api\Model\Request\Store;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class ProductGroupsRequest
 *
 * @category ProductGroupsRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */
class ProductGroupsRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Store\ProductGroupFilterType
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Store\ProductGroupFilterType")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
