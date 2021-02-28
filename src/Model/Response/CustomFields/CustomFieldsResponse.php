<?php

/**
 * PHP version 7.3
 *
 * @category CustomFieldsResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */

namespace RetailCrm\Api\Model\Response\CustomFields;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class CustomFieldsResponse
 *
 * @category CustomFieldsResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */
class CustomFieldsResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomFields\CustomField[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\CustomFields\CustomField>")
     * @JMS\SerializedName("customFields")
     */
    public $customFields;
}
