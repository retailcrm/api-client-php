<?php

/**
 * PHP version 7.3
 *
 * @category CustomerContact
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Entity\CustomersCorporate;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CustomerContact
 *
 * @category CustomerContact
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */
class CustomerContact
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isMain")
     */
    public $isMain;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer")
     * @JMS\SerializedName("customer")
     */
    public $customer;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany>")
     * @JMS\SerializedName("companies")
     */
    public $companies;
}
