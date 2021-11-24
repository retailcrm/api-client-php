<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCreateRequest
 * @package  Retailcrm\Examples\CustomMethodsDto\Dto\Request
 */

namespace Retailcrm\Examples\CustomMethodsDto\Dto\Request;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CustomersCreateRequest
 *
 * @category CustomersCreateRequest
 * @package  Retailcrm\Examples\CustomMethodsDto\Dto\Request
 */
class CustomersCreateRequest
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \Retailcrm\Examples\CustomMethodsDto\Dto\Customer
     *
     * @Form\Type("Retailcrm\Examples\CustomMethodsDto\Dto\Customer")
     * @Form\SerializedName("customer")
     * @Form\JsonField()
     */
    public $customer;
}
