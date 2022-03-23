<?php

/**
 * PHP version 7.3
 *
 * @category Store
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Store
 *
 * @category Store
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */
class Store extends BaseStore
{
    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\SerializedStoreWeekOpeningHours
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\SerializedStoreWeekOpeningHours")
     * @JMS\SerializedName("workTime")
     */
    public $workTime;
}
