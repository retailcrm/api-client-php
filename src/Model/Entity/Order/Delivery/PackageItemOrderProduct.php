<?php

/**
 * PHP version 7.3
 *
 * @category PackageItemOrderProduct
 * @package  RetailCrm\Api\Model\Entity\Order\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Order\Delivery;

use JMS\Serializer\Annotation as JMS;

/**
 * Class PackageItemOrderProduct
 *
 * @category PackageItemOrderProduct
 * @package  RetailCrm\Api\Model\Entity\Order\Delivery
 */
class PackageItemOrderProduct
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var \RetailCrm\Api\Model\Entity\CodeValueModel[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\CodeValueModel>")
     * @JMS\SerializedName("externalIds")
     */
    public $externalIds;
}