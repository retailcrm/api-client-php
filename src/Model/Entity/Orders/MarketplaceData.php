<?php

/**
 * PHP version 7.3
 *
 * @category MarketplaceData
 * @package  RetailCrm\Api\Model\Entity\Orders
 */

namespace RetailCrm\Api\Model\Entity\Orders;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class MarketplaceData
 *
 * @category MarketplaceData
 * @package  RetailCrm\Api\Model\Entity\Orders
 */
class MarketplaceData
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("orderId")
     */
    public $orderId;
}
