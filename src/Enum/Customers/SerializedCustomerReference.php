<?php

/**
 * PHP version 7.3
 *
 * @category SerializedCustomerReference
 * @package  RetailCrm\Api\Enum\Customers
 */

namespace RetailCrm\Api\Enum\Customers;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class SerializedCustomerReference
 *
 * @category SerializedCustomerReference
 * @package  RetailCrm\Api\Enum\Customers
 */
class SerializedCustomerReference
{
    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("id")
     */
    public $id;

    /**
     * SerializedCustomerReference constructor.
     *
     * @param int $id Customer ID
     */
    public function __construct(int $id = 0)
    {
        $this->id = $id;
    }
}
