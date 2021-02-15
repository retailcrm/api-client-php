<?php

/**
 * PHP version 7.3
 *
 * @category CustomDictionaryFilter
 * @package  RetailCrm\Api\Model\Filter\CustomFields
 */

namespace RetailCrm\Api\Model\Filter\CustomFields;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CustomDictionaryFilter
 *
 * @category CustomDictionaryFilter
 * @package  RetailCrm\Api\Model\Filter\CustomFields
 */
class CustomDictionaryFilter
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("code")
     */
    public $code;
}
