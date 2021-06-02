<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateAddressesResponse
 * @package  RetailCrm\Api\Model\Response\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Response\CustomersCorporate;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class CustomersCorporateAddressesResponse
 *
 * @category CustomersCorporateAddressesResponse
 * @package  RetailCrm\Api\Model\Response\CustomersCorporate
 */
class CustomersCorporateAddressesResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerAddress[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Customers\CustomerAddress>")
     * @JMS\SerializedName("addresses")
     */
    public $addresses;
}
