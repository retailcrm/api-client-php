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
use RetailCrm\Api\Model\Entity\CustomFields\CustomField;

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
     * @Form\JsonField()
     */
    public $customField;

    /**
     * CustomFieldsCreateRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\CustomFields\CustomField|null $customField
     */
    public function __construct(?CustomField $customField = null)
    {
        if (null !== $customField) {
            $this->customField = $customField;
        }
    }
}
