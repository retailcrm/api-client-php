<?php

/**
 * PHP version 7.3
 *
 * @category InventoriesUploadResponse
 * @package  RetailCrm\Api\Model\Response\Inventories
 */

namespace RetailCrm\Api\Model\Response\Inventories;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class InventoriesUploadResponse
 *
 * @category InventoriesUploadResponse
 * @package  RetailCrm\Api\Model\Response\Inventories
 */
class InventoriesUploadResponse extends SuccessResponse
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("processedOffersCount")
     */
    public $processedOffersCount;

    /**
     * @var \RetailCrm\Api\Model\Entity\Inventories\Offer[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Inventories\Offer>")
     * @JMS\SerializedName("notFoundOffers")
     */
    public $notFoundOffers;
}
