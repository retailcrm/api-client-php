<?php

/**
 * PHP version 7.3
 *
 * @category PacksHistoryResponse
 * @package  RetailCrm\Api\Model\Response\Packs
 */

namespace RetailCrm\Api\Model\Response\Packs;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class PacksHistoryResponse
 *
 * @category PacksHistoryResponse
 * @package  RetailCrm\Api\Model\Response\Packs
 */
class PacksHistoryResponse extends AbstractPaginatedResponse
{
    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("generatedAt")
     */
    public $generatedAt;

    /**
     * @var \RetailCrm\Api\Model\Entity\Packs\OrderProductPackHistory[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Packs\OrderProductPackHistory>")
     * @JMS\SerializedName("history")
     */
    public $history;
}
