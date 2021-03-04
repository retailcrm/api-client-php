<?php

/**
 * PHP version 7.3
 *
 * @category ProductGroupFilterType
 * @package  RetailCrm\Api\Model\Filter\Inventories
 */

namespace RetailCrm\Api\Model\Filter\Inventories;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class ProductGroupFilterType
 *
 * @category ProductGroupFilterType
 * @package  RetailCrm\Api\Model\Filter\Inventories
 */
class ProductGroupFilterType
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("active")
     */
    public $active;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("parentGroupId")
     */
    public $parentGroupId;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("ids")
     */
    public $ids;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("sites")
     */
    public $sites;
}
