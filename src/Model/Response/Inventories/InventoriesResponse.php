<?php

/**
 * PHP version 7.3
 *
 * @category InventoriesResponse
 * @package  RetailCrm\Api\Model\Response\Inventories
 */

namespace RetailCrm\Api\Model\Response\Inventories;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class InventoriesResponse
 *
 * @category InventoriesResponse
 * @package  RetailCrm\Api\Model\Response\Inventories
 */
class InventoriesResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Inventories\Offer[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Inventories\Offer>")
     * @JMS\SerializedName("offers")
     */
    public $offers;
}
