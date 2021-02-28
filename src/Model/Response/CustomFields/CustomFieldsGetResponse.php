<?php

/**
 * PHP version 7.3
 *
 * @category CustomFieldsGetResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */

namespace RetailCrm\Api\Model\Response\CustomFields;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CustomFieldsGetResponse
 *
 * @category CustomFieldsGetResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */
class CustomFieldsGetResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomFields\CustomField
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomFields\CustomField")
     * @JMS\SerializedName("customField")
     */
    public $customField;
}
