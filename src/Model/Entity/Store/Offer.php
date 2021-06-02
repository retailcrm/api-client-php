<?php

/**
 * PHP version 7.3
 *
 * @category Offer
 * @package  RetailCrm\Api\Model\Entity\Store
 */

namespace RetailCrm\Api\Model\Entity\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Entity\Orders\Items\Offer as BaseOffer;

/**
 * Class Offer
 *
 * @category Offer
 * @package  RetailCrm\Api\Model\Entity\Store
 */
class Offer extends BaseOffer
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("purchasePrice")
     */
    public $purchasePrice;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("quantity")
     */
    public $quantity;

    /**
     * @var \RetailCrm\Api\Model\Entity\Store\Inventory[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Store\Inventory>")
     * @JMS\SerializedName("stores")
     */
    public $stores;
}
