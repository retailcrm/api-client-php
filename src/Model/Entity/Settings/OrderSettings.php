<?php

/**
 * PHP version 7.3
 *
 * @category OrderSettings
 * @package  RetailCrm\Api\Model\Entity\Settings
 */

namespace RetailCrm\Api\Model\Entity\Settings;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class OrderSettings
 *
 * @category OrderSettings
 * @package  RetailCrm\Api\Model\Entity\Settings
 */
class OrderSettings
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Settings\BooleanValue
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Settings\BooleanValue")
     * @JMS\SerializedName("allow_duplicate_order_product")
     */
    public $allowDuplicateOrderProduct;
}
