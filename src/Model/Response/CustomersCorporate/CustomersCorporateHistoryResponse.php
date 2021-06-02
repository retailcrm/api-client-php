<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateHistoryResponse
 * @package  RetailCrm\Api\Model\Response\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Response\CustomersCorporate;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class CustomersCorporateHistoryResponse
 *
 * @category CustomersCorporateHistoryResponse
 * @package  RetailCrm\Api\Model\Response\CustomersCorporate
 */
class CustomersCorporateHistoryResponse extends AbstractPaginatedResponse
{
    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("generatedAt")
     */
    public $generatedAt;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporateHistory[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporateHistory>")
     * @JMS\SerializedName("history")
     */
    public $history;
}
