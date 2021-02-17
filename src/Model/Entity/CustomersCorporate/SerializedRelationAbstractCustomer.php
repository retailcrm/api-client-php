<?php

/**
 * PHP version 7.3
 *
 * @category SerializedRelationAbstractCustomer
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Entity\CustomersCorporate;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SerializedRelationAbstractCustomer
 *
 * @category SerializedRelationAbstractCustomer
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */
class SerializedRelationAbstractCustomer
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
     * @JMS\SerializedName("browserId")
     */
    public $browserId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany>")
     * @JMS\SerializedName("companies")
     */
    public $companies;
}
