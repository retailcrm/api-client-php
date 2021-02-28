<?php

/**
 * PHP version 7.3
 *
 * @category CustomField
 * @package  RetailCrm\Api\Model\Entity\CustomFields
 */

namespace RetailCrm\Api\Model\Entity\CustomFields;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CustomField
 *
 * @category CustomField
 * @package  RetailCrm\Api\Model\Entity\CustomFields
 */
class CustomField
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("required")
     */
    public $required;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("inFilter")
     */
    public $inFilter;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("inList")
     */
    public $inList;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("inGroupActions")
     */
    public $inGroupActions;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("entity")
     */
    public $entity;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("default")
     */
    public $default;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("ordering")
     */
    public $ordering;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("displayArea")
     */
    public $displayArea;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("viewMode")
     */
    public $viewMode;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("dictionary")
     */
    public $dictionary;
}
