<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryServicesCreateRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\DeliveryService;

/**
 * Class DeliveryServicesCreateRequest
 *
 * @category DeliveryServicesCreateRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class DeliveryServicesCreateRequest implements RequestInterface
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
     * DeliveryServicesCreateRequest constructor.
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
