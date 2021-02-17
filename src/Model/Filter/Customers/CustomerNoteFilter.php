<?php

/**
 * PHP version 7.3
 *
 * @category CustomerNoteFilter
 * @package  RetailCrm\Api\Model\Filter\Customers
 */

namespace RetailCrm\Api\Model\Filter\Customers;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CustomerNoteFilter
 *
 * @category CustomerNoteFilter
 * @package  RetailCrm\Api\Model\Filter\Customers
 */
class CustomerNoteFilter
{
    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("ids")
     */
    public $ids;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("customerIds")
     */
    public $customerIds;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("customerExternalIds")
     */
    public $customerExternalIds;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("managerIds")
     */
    public $managerIds;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("text")
     */
    public $text;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("createdAtFrom")
     */
    public $createdAtFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("createdAtTo")
     */
    public $createdAtTo;
}
