<?php

/**
 * PHP version 7.3
 *
 * @category InventoriesResponse
 * @package  RetailCrm\Api\Model\Response\Store
 */

namespace RetailCrm\Api\Model\Response\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class InventoriesResponse
 *
 * @category InventoriesResponse
 * @package  RetailCrm\Api\Model\Response\Store
 */
class InventoriesResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Store\Offer[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Store\Offer>")
     * @JMS\SerializedName("offers")
     */
    public $offers;
}
