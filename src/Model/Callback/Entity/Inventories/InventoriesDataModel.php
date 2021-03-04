<?php

/**
 * PHP version 7.3
 *
 * @category InventoriesDataModel
 * @package  RetailCrm\Api\Model\Callback\Entity\Inventories
 */

namespace RetailCrm\Api\Model\Callback\Entity\Inventories;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class InventoriesDataModel
 *
 * @category InventoriesDataModel
 * @package  RetailCrm\Api\Model\Callback\Entity\Inventories
 */
class InventoriesDataModel
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Inventories\Offer[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Inventories\Offer>")
     * @JMS\SerializedName("offers")
     */
    public $offers;
}
