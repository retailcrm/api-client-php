<?php

/**
 * PHP version 7.3
 *
 * @category SerializedRelationCustomer
 * @package  RetailCrm\Api\Model\Entity\Orders
 */

namespace RetailCrm\Api\Model\Entity\Orders;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer;

/**
 * Class SerializedRelationCustomer
 *
 * @category SerializedRelationCustomer
 * @package  RetailCrm\Api\Model\Entity\Orders
 */
class SerializedRelationCustomer extends SerializedRelationAbstractCustomer
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("nickName")
     */
    public $nickName;

    /**
     * Returns customer with provided ID and type.
     *
     * @param int    $id
     * @param string $type
     *
     * @return self
     */
    public static function withIdAndType(int $id, string $type): self
    {
        $customer = new self();
        $customer->id = $id;
        $customer->type = $type;

        return $customer;
    }

    /**
     * Returns customer with provided external ID, site and type.
     *
     * @param string $externalId
     * @param string $type
     * @param string $site
     *
     * @return self
     */
    public static function withExternalIdAndType(string $externalId, string $type, string $site): self
    {
        $customer = new self();
        $customer->externalId = $externalId;
        $customer->type = $type;
        $customer->site = $site;

        return $customer;
    }
}
