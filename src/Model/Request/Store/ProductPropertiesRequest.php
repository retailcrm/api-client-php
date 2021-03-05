<?php

/**
 * PHP version 7.3
 *
 * @category ProductPropertiesRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */

namespace RetailCrm\Api\Model\Request\Store;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class ProductPropertiesRequest
 *
 * @category ProductPropertiesRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */
class ProductPropertiesRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Filter\Store\ProductPropertiesFilterType
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Store\ProductPropertiesFilterType")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
