<?php

/**
 * PHP version 7.3
 *
 * @category CustomerCorporateAddressesEditRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Request\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CustomerCorporateAddressesEditRequest
 *
 * @category CustomerCorporateAddressesEditRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */
class CustomersCorporateAddressesEditRequest extends CustomersCorporateAddressesCreateRequest
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("entityBy")
     */
    public $entityBy;
}
