<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryDataField
 * @package  RetailCrm\Api\Model\Entity\Integration\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Integration\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class DeliveryDataField
 *
 * @category DeliveryDataField
 * @package  RetailCrm\Api\Model\Entity\Integration\Delivery
 */
class DeliveryDataField
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("label")
     */
    public $label;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("hint")
     */
    public $hint;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("multiple")
     */
    public $multiple;

    /**
     * @var array<string, string>
     *
     * @JMS\Type("array<string, string>")
     * @JMS\SerializedName("choices")
     */
    public $choices;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("autocompleteUrl")
     */
    public $autocompleteUrl;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("visible")
     */
    public $visible;

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
     * @JMS\SerializedName("affectsCost")
     */
    public $affectsCost;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("editable")
     */
    public $editable;
}
