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
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class ProductPropertiesSort
 *
 * @category ProductPropertiesRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */
class ProductPropertiesSort implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("offersCount")
     */
    public $offersCount;
}
