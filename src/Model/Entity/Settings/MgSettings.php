<?php

/**
 * PHP version 7.3
 *
 * @category Feature
 * @package  RetailCrm\Api\Model\Entity\Settings
 */

namespace RetailCrm\Api\Model\Entity\Settings;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class MgSettings
 *
 * @category MgSettings
 * @package  RetailCrm\Api\Model\Entity\Settings
 */
class MgSettings
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Settings\MgOrderCreationSettings
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Settings\MgOrderCreationSettings")
     * @JMS\SerializedName("order_creation")
     */
    public $orderCreation;
}
