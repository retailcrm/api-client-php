<?php

/**
 * PHP version 7.3
 *
 * @category PricesUploadResponse
 * @package  RetailCrm\Api\Model\Response\Inventories
 */

namespace RetailCrm\Api\Model\Response\Inventories;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class PricesUploadResponse
 *
 * @category PricesUploadResponse
 * @package  RetailCrm\Api\Model\Response\Inventories
 */
class PricesUploadResponse extends SuccessResponse
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("processedOffersCount")
     */
    public $processedOffersCount;

    /**
     * @var \RetailCrm\Api\Model\Entity\Inventories\PriceUploadNotFoundResponse[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Inventories\PriceUploadNotFoundResponse>")
     * @JMS\SerializedName("notFoundOffers")
     */
    public $notFoundOffers;
}
