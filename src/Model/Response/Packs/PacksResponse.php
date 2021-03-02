<?php

/**
 * PHP version 7.3
 *
 * @category PacksResponse
 * @package  RetailCrm\Api\Model\Response\Packs
 */

namespace RetailCrm\Api\Model\Response\Packs;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class PacksResponse
 *
 * @category PacksResponse
 * @package  RetailCrm\Api\Model\Response\Packs
 */
class PacksResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Packs\OrderProductPack[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Packs\OrderProductPack>")
     * @JMS\SerializedName("packs")
     */
    public $packs;
}
