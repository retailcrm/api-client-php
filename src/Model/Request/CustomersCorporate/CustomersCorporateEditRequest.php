<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateEditRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Request\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CustomersCorporateEditRequest
 *
 * @category CustomersCorporateEditRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */
class CustomersCorporateEditRequest extends CustomersCorporateCreateRequest
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("by")
     */
    public $by;
}
