<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateAddressesCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Request\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersCorporateAddressesCreateRequest
 *
 * @category CustomersCorporateAddressesCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */
class CustomersCorporateAddressesCreateRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("by")
     */
    public $by;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerAddress
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Customers\CustomerAddress")
     * @Form\SerializedName("address")
     * @Form\JsonField()
     */
    public $address;
}
