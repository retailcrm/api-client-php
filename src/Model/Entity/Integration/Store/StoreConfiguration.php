<?php

/**
 * PHP version 7.3
 *
 * @category StoreConfiguration
 * @package  RetailCrm\Api\Model\Entity\Integration\Store
 */

namespace RetailCrm\Api\Model\Entity\Integration\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class StoreConfiguration
 *
 * @category StoreConfiguration
 * @package  RetailCrm\Api\Model\Entity\Integration\Store
 */
class StoreConfiguration
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Store\Action[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Integration\Store\Action>")
     * @JMS\SerializedName("actions")
     */
    public $actions;
}
