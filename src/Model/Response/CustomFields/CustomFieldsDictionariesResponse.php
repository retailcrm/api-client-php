<?php

/**
 * PHP version 7.3
 *
 * @category CustomFieldsDictionariesResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */

namespace RetailCrm\Api\Model\Response\CustomFields;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class CustomFieldsDictionariesResponse
 *
 * @category CustomFieldsDictionariesResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */
class CustomFieldsDictionariesResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary>")
     * @JMS\SerializedName("customDictionaries")
     */
    public $customDictionaries;
}
