<?php

/**
 * PHP version 7.3
 *
 * @category InventoriesDataModel
 * @package  RetailCrm\Api\Model\Callback\Entity\Store
 */

namespace RetailCrm\Api\Model\Callback\Entity\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class InventoriesDataModel
 *
 * @category InventoriesDataModel
 * @package  RetailCrm\Api\Model\Callback\Entity\Store
 */
class InventoriesDataModel
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Store\Offer[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Store\Offer>")
     * @JMS\SerializedName("offers")
     */
    public $offers;
}
