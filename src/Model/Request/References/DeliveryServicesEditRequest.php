<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryServicesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\DeliveryService;

/**
 * Class DeliveryServicesEditRequest
 *
 * @category DeliveryServicesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class DeliveryServicesEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\DeliveryService
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\References\DeliveryService")
     * @Form\SerializedName("deliveryService")
     * @Form\JsonField()
     */
    public $deliveryService;

    /**
     * DeliveryServicesEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\References\DeliveryService|null $deliveryService
     */
    public function __construct(?DeliveryService $deliveryService = null)
    {
        if (null !== $deliveryService) {
            $this->deliveryService = $deliveryService;
        }
    }
}
