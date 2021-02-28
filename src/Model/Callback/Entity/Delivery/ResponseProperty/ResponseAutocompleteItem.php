<?php

/**
 * PHP version 7.3
 *
 * @category ResponseAutocompleteItem
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ResponseAutocompleteItem
 *
 * @category ResponseAutocompleteItem
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty
 */
class ResponseAutocompleteItem
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("value")
     */
    public $value;

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
     * @JMS\SerializedName("description")
     */
    public $description;
}
