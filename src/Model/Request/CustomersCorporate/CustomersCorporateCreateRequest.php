<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Request\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersCorporateCreateRequest
 *
 * @category CustomersCorporateCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */
class CustomersCorporateCreateRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Customers\CustomerCorporate")
     * @Form\SerializedName("customerCorporate")
     * @Form\JsonField()
     */
    public $customerCorporate;
}
