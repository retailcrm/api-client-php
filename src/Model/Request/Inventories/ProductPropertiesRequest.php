<?php

/**
 * PHP version 7.3
 *
 * @category ProductPropertiesRequest
 * @package  RetailCrm\Api\Model\Request\Inventories
 */

namespace RetailCrm\Api\Model\Request\Inventories;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class ProductPropertiesRequest
 *
 * @category ProductPropertiesRequest
 * @package  RetailCrm\Api\Model\Request\Inventories
 */
class ProductPropertiesRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Filter\Inventories\ProductPropertiesFilterType
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Inventories\ProductPropertiesFilterType")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
