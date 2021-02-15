<?php

/**
 * PHP version 7.3
 *
 * @category CustomFieldsCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomFields
 */

namespace RetailCrm\Api\Model\Request\CustomFields;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomFieldsCreateRequest
 *
 * @category CustomFieldsCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomFields
 */
class CustomFieldsCreateRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomFields\CustomField
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\CustomFields\CustomField")
     * @Form\SerializedName("customField")
     */
    public $customField;
}
