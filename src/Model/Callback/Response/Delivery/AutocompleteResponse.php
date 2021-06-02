<?php

/**
 * PHP version 7.3
 *
 * @category AutocompleteResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Response\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class AutocompleteResponse
 *
 * @category AutocompleteResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Delivery
 */
class AutocompleteResponse extends SuccessResponse
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
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseAutocompleteItem
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseAutocompleteItem")
     * @JMS\SerializedName("result")
     */
    public $result;
}
