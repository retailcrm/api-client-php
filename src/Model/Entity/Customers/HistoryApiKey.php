<?php

/**
 * PHP version 7.3
 *
 * @category HistoryApiKey
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use JMS\Serializer\Annotation as JMS;

/**
 * Class HistoryApiKey
 *
 * @category HistoryApiKey
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class HistoryApiKey
{
    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("current")
     */
    public $current;
}
