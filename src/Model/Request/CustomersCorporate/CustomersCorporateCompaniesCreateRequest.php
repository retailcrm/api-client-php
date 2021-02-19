<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateCompaniesCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Request\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersCorporateCompaniesCreateRequest
 *
 * @category CustomersCorporateCompaniesCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */
class CustomersCorporateCompaniesCreateRequest implements RequestInterface
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
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\Company
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\Company")
     * @Form\SerializedName("company")
     * @Form\JsonField()
     */
    public $company;
}
