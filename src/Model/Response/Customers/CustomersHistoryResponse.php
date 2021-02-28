<?php

/**
 * PHP version 7.3
 *
 * @category CustomersHistoryResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */

namespace RetailCrm\Api\Model\Response\Customers;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class CustomersHistoryResponse
 *
 * @category CustomersHistoryResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */
class CustomersHistoryResponse extends AbstractPaginatedResponse
{
    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("generatedAt")
     */
    public $generatedAt;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerHistory[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Customers\CustomerHistory>")
     * @JMS\SerializedName("history")
     */
    public $history;
}
