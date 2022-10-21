<?php

/**
 * PHP version 7.3
 *
 * @category MGCustomer
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class MGCustomer
 *
 * @category MGCustomer
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class MGCustomer
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\MGChannel
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Customers\MGChannel")
     * @JMS\SerializedName("mgChannel")
     */
    public $mgChannel;
}
