<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryTypesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\DeliveryType;

/**
 * Class DeliveryTypesEditRequest
 *
 * @category DeliveryTypesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class DeliveryTypesEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\DeliveryType
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\References\DeliveryType")
     * @Form\SerializedName("deliveryType")
     * @Form\JsonField()
     */
    public $deliveryType;

    /**
     * DeliveryTypesEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\References\DeliveryType|null $deliveryType
     */
    public function __construct(?DeliveryType $deliveryType = null)
    {
        if (null !== $deliveryType) {
            $this->deliveryType = $deliveryType;
        }
    }
}
