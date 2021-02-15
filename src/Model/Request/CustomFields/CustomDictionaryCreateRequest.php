<?php

/**
 * PHP version 7.3
 *
 * @category CustomDictionaryCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomFields
 */

namespace RetailCrm\Api\Model\Request\CustomFields;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomDictionaryCreateRequest
 *
 * @category CustomDictionaryCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomFields
 */
class CustomDictionaryCreateRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary")
     * @Form\SerializedName("customDictionary")
     * @Form\JsonField()
     */
    public $customDictionary;
}
