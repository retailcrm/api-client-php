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
use RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary;

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

    /**
     * CustomDictionaryCreateRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary|null $customDictionary
     */
    public function __construct(?CustomDictionary $customDictionary = null)
    {
        if (null !== $customDictionary) {
            $this->customDictionary = $customDictionary;
        }
    }
}
