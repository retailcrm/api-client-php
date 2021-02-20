<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryShipmentsCreateRequest
 * @package  RetailCrm\Api\Model\Request\Delivery
 */

namespace RetailCrm\Api\Model\Request\Delivery;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class DeliveryShipmentsCreateRequest
 *
 * @category DeliveryShipmentsCreateRequest
 * @package  RetailCrm\Api\Model\Request\Delivery
 */
class DeliveryShipmentsCreateRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("deliveryType")
     */
    public $deliveryType;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\DeliveryShipment
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Delivery\DeliveryShipment")
     * @Form\SerializedName("deliveryShipment")
     * @Form\JsonField()
     */
    public $deliveryShipment;
}
