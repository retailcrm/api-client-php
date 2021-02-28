<?php

/**
 * PHP version 7.3
 *
 * @category CustomDictionaryCreateResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */

namespace RetailCrm\Api\Model\Response\CustomFields;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CustomDictionaryCreateResponse
 *
 * @category CustomDictionaryCreateResponse
 * @package  RetailCrm\Api\Model\Response\CustomFields
 */
class CustomDictionaryCreateResponse extends SuccessResponse
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;
}
