<?php

/**
 * PHP version 7.3
 *
 * @category PacksCreateRequest
 * @package  RetailCrm\Api\Model\Request\Packs
 */

namespace RetailCrm\Api\Model\Request\Packs;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\Packs\OrderProductPack;

/**
 * Class PacksCreateRequest
 *
 * @category PacksCreateRequest
 * @package  RetailCrm\Api\Model\Request\Packs
 */
class PacksCreateRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Packs\OrderProductPack
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Packs\OrderProductPack")
     * @Form\SerializedName("pack")
     * @Form\JsonField()
     */
    public $pack;

    /**
     * PacksCreateRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\Packs\OrderProductPack|null $pack
     */
    public function __construct(?OrderProductPack $pack = null)
    {
        if (null !== $pack) {
            $this->pack = $pack;
        }
    }
}
