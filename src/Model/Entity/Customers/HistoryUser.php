<?php

/**
 * PHP version 7.3
 *
 * @category HistoryUser
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use JMS\Serializer\Annotation as JMS;

/**
 * Class HistoryUser
 *
 * @category HistoryUser
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class HistoryUser
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;
}
