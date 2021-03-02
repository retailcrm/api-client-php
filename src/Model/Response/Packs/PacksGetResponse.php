<?php

/**
 * PHP version 7.3
 *
 * @category PacksGetResponse
 * @package  RetailCrm\Api\Model\Response\Packs
 */

namespace RetailCrm\Api\Model\Response\Packs;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class PacksGetResponse
 *
 * @category PacksGetResponse
 * @package  RetailCrm\Api\Model\Response\Packs
 */
class PacksGetResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Packs\OrderProductPack
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Packs\OrderProductPack")
     * @JMS\SerializedName("pack")
     */
    public $pack;
}
