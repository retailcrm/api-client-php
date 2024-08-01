<?php

/**
 * PHP version 7.3
 *
 * @category CartItem
 * @package  RetailCrm\Api\Model\Entity\CustomerInteraction
 */

namespace RetailCrm\Api\Model\Entity\CustomerInteraction;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CartItem
 *
 * @category CartItem
 * @package  RetailCrm\Api\Model\Entity\CustomerInteraction
 */
class CartItem
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Items\Offer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Items\Offer")
     * @JMS\SerializedName("offer")
     */
    public $offer;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("quantity")
     */
    public $quantity;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("price")
     */
    public $price;
}
