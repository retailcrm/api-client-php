<?php

/**
 * PHP version 7.3
 *
 * @category SerializedRelationAbstractCustomer
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Entity\CustomersCorporate;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Interfaces\Orders\CustomerInterface;

/**
 * Class SerializedRelationAbstractCustomer
 *
 * @category SerializedRelationAbstractCustomer
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */
class SerializedRelationAbstractCustomer implements CustomerInterface
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

    /**
     * Returns customer with provided ID.
     *
     * @param int $id
     *
     * @return self
     */
    public static function withId(int $id): self
    {
        $customer = new self();
        $customer->id = $id;

        return $customer;
    }

    /**
     * Returns customer with provided external ID and site.
     *
     * @param string $externalId
     * @param string $site
     *
     * @return self
     */
    public static function withExternalId(string $externalId, string $site): self
    {
        $customer = new self();
        $customer->externalId = $externalId;
        $customer->site = $site;

        return $customer;
    }
}
