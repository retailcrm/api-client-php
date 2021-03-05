<?php

/**
 * PHP version 7.3
 *
 * @category Inventory
 * @package  RetailCrm\Api\Model\Entity\Store
 */

namespace RetailCrm\Api\Model\Entity\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Inventory
 *
 * @category Inventory
 * @package  RetailCrm\Api\Model\Entity\Store
 */
class Inventory
{
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
     * @JMS\SerializedName("purchasePrice")
     */
    public $purchasePrice;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("store")
     */
    public $store;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("available")
     */
    public $available;

    /**
     * Inventory constructor.
     *
     * @param string     $code
     * @param float|null $available
     * @param float|null $purchasePrice
     */
    public function __construct(string $code = '', ?float $available = null, ?float $purchasePrice = null)
    {
        if ('' !== $code) {
            $this->code = $code;
        }

        if (null !== $available) {
            $this->available = $available;
        }

        if (null !== $purchasePrice) {
            $this->purchasePrice = $purchasePrice;
        }
    }
}
