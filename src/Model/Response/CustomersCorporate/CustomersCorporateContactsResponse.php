<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateContactsResponse
 * @package  RetailCrm\Api\Model\Response\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Response\CustomersCorporate;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class CustomersCorporateContactsResponse
 *
 * @category CustomersCorporateContactsResponse
 * @package  RetailCrm\Api\Model\Response\CustomersCorporate
 */
class CustomersCorporateContactsResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact>")
     * @JMS\SerializedName("contacts")
     */
    public $contacts;
}
