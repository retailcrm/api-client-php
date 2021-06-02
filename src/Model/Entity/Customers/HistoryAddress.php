<?php

/**
 * PHP version 7.3
 *
 * @category HistoryAddress
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class HistoryAddress
 *
 * @category HistoryAddress
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class HistoryAddress
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
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isMain")
     */
    public $isMain;
}
