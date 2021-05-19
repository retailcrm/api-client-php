<?php

/**
 * PHP version 7.3
 *
 * @category AbstractDiscount
 * @package  RetailCrm\Api\Model\Entity\Orders\Items
 */

namespace RetailCrm\Api\Model\Entity\Orders\Items;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class AbstractDiscount
 *
 * @category AbstractDiscount
 * @package  RetailCrm\Api\Model\Entity\Orders\Items
 */
class AbstractDiscount
{
    /**
     * @var string|null
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;

    /**
     * @var float|null
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("amount")
     */
    public $amount;

    /**
     * AbstractDiscount constructor.
     *
     * @param string|null $type
     * @param float|null  $amount
     */
    public function __construct(?string $type = null, ?float $amount = null)
    {
        $this->type = $type;
        $this->amount = $amount;
    }
}
