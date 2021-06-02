<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateCompaniesCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Request\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Model\Request\BySiteRequest;

/**
 * Class CustomersCorporateCompaniesCreateRequest
 *
 * @category CustomersCorporateCompaniesCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */
class CustomersCorporateCompaniesCreateRequest extends BySiteRequest
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\Company
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\Company")
     * @Form\SerializedName("company")
     * @Form\JsonField()
     */
    public $company;
}
