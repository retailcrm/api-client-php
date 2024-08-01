<?php

/**
 * PHP version 7.3
 *
 * @category ProductPropertyValuesFilterType
 * @package  RetailCrm\Api\Model\Filter\Store
 */

namespace RetailCrm\Api\Model\Filter\Store;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class ProductPropertyValuesFilterType
 *
 * @category ProductPropertyValuesFilterType
 * @package  RetailCrm\Api\Model\Filter\Store
 */
class ProductPropertyValuesFilterType
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("propertyName")
     */
    public $propertyName;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("propertyCode")
     */
    public $propertyCode;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("groups")
     */
    public $groups;
}
