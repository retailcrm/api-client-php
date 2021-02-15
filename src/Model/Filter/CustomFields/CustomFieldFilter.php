<?php

/**
 * PHP version 7.3
 *
 * @category CustomFieldFilter
 * @package  RetailCrm\Api\Model\Filter\CustomFields
 */

namespace RetailCrm\Api\Model\Filter\CustomFields;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CustomFieldFilter
 *
 * @category CustomFieldFilter
 * @package  RetailCrm\Api\Model\Filter\CustomFields
 */
class CustomFieldFilter
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

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("type")
     */
    public $type;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("viewMode")
     */
    public $viewMode;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("displayArea")
     */
    public $displayArea;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("entity")
     */
    public $entity;
}
