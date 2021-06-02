<?php

/**
 * PHP version 7.3
 *
 * @category PriceTypesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\PriceType;

/**
 * Class PriceTypesEditRequest
 *
 * @category PriceTypesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class PriceTypesEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\PriceType
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\References\PriceType")
     * @Form\SerializedName("priceType")
     * @Form\JsonField()
     */
    public $priceType;

    /**
     * PriceTypesEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\References\PriceType|null $priceType
     */
    public function __construct(?PriceType $priceType = null)
    {
        if (null !== $priceType) {
            $this->priceType = $priceType;
        }
    }
}
