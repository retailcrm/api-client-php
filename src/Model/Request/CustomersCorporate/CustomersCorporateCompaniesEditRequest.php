<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateCompaniesEditRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Request\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CustomersCorporateCompaniesEditRequest
 *
 * @category CustomersCorporateCompaniesEditRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */
class CustomersCorporateCompaniesEditRequest extends CustomersCorporateCompaniesCreateRequest
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("entityBy")
     */
    public $entityBy;
}
