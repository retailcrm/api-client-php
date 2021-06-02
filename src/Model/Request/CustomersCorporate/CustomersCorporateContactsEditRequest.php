<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateContactsEditRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Request\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CustomersCorporateContactsEditRequest
 *
 * @category CustomersCorporateContactsEditRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */
class CustomersCorporateContactsEditRequest extends CustomersCorporateContactsCreateRequest
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("entityBy")
     */
    public $entityBy;
}
