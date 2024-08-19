<?php

/**
 * PHP version 7.3
 *
 * @category OffersResponse
 * @package  RetailCrm\Api\Model\Response\Store
 */

namespace RetailCrm\Api\Model\Response\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class OffersResponse
 *
 * @category OffersResponse
 * @package  RetailCrm\Api\Model\Response\Store
 */
class OffersResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Store\StoreOffer[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Store\StoreOffer>")
     * @JMS\SerializedName("offers")
     */
    public $offers;
}
