<?php

/**
 * PHP version 7.3
 *
 * @category PriceUploadPricesInput
 * @package  RetailCrm\Api\Model\Entity\Store
 */

namespace RetailCrm\Api\Model\Entity\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class PriceUploadPricesInput
 *
 * @category PriceUploadPricesInput
 * @package  RetailCrm\Api\Model\Entity\Store
 */
class PriceUploadPricesInput
{
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
     * @JMS\SerializedName("price")
     */
    public $price;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("remove")
     */
    public $remove;

    /**
     * PriceUploadPricesInput constructor.
     *
     * @param string     $code
     * @param float|null $price
     * @param bool|null  $remove
     */
    public function __construct(string $code = '', ?float $price = null, ?bool $remove = null)
    {
        if ('' !== $code) {
            $this->code = $code;
        }

        if (null !== $price) {
            $this->price = $price;
        }

        if (null !== $remove) {
            $this->remove = $remove;
        }
    }
}
