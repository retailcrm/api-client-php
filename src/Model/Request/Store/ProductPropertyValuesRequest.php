<?php

/**
 * PHP version 7.3
 *
 * @category ProductPropertyValuesRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */

namespace RetailCrm\Api\Model\Request\Store;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class ProductPropertyValuesRequest
 *
 * @category ProductPropertyValuesRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */
class ProductPropertyValuesRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Store\ProductPropertyValuesFilterType
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Store\ProductPropertyValuesFilterType")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
