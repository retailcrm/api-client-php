<?php

/**
 * PHP version 7.3
 *
 * @category CustomDictionaryGetResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */

namespace RetailCrm\Api\Model\Response\CustomFields;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CustomDictionaryGetResponse
 *
 * @category CustomDictionaryGetResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */
class CustomDictionaryGetResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary")
     * @JMS\SerializedName("customDictionary")
     */
    public $customDictionary;
}
