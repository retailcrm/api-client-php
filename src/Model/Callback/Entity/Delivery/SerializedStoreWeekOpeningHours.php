<?php

/**
 * PHP version 7.3
 *
 * @category SerializedStoreWeekOpeningHours
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SerializedStoreWeekOpeningHours
 *
 * @category SerializedStoreWeekOpeningHours
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */
class SerializedStoreWeekOpeningHours
{
    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime>")
     * @JMS\SerializedName("mo")
     */
    public $mo;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime>")
     * @JMS\SerializedName("tu")
     */
    public $tu;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime>")
     * @JMS\SerializedName("we")
     */
    public $we;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime>")
     * @JMS\SerializedName("th")
     */
    public $th;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime>")
     * @JMS\SerializedName("fr")
     */
    public $fr;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime>")
     * @JMS\SerializedName("sa")
     */
    public $sa;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime>")
     * @JMS\SerializedName("su")
     */
    public $su;
}
