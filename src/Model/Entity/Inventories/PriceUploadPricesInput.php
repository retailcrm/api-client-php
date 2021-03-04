<?php

/**
 * PHP version 7.3
 *
 * @category PriceUploadPricesInput
 * @package  RetailCrm\Api\Model\Entity\Inventories
 */

namespace RetailCrm\Api\Model\Entity\Inventories;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class PriceUploadPricesInput
 *
 * @category PriceUploadPricesInput
 * @package  RetailCrm\Api\Model\Entity\Inventories
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
}
