<?php

/**
 * PHP version 7.3
 *
 * @category CustomerAddressFilter
 * @package  RetailCrm\Api\Model\Filter\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Filter\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CustomerAddressFilter
 *
 * @category CustomerAddressFilter
 * @package  RetailCrm\Api\Model\Filter\CustomersCorporate
 */
class CustomerAddressFilter
{
    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("ids")
     */
    public $ids;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("city")
     */
    public $city;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("region")
     */
    public $region;
}
