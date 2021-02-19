<?php

/**
 * PHP version 7.3
 *
 * @category ApiDeliveryShipmentFilterType
 * @package  RetailCrm\Api\Model\Filter\Delivery
 */

namespace RetailCrm\Api\Model\Filter\Delivery;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class ApiDeliveryShipmentFilterType
 *
 * @category ApiDeliveryShipmentFilterType
 * @package  RetailCrm\Api\Model\Filter\Delivery
 */
class ApiDeliveryShipmentFilterType
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("orderNumber")
     */
    public $orderNumber;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("statuses")
     */
    public $statuses;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("ids")
     */
    public $ids;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("deliveryTypes")
     */
    public $deliveryTypes;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("managers")
     */
    public $managers;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("stores")
     */
    public $stores;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("dateFrom")
     */
    public $dateFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("dateTo")
     */
    public $dateTo;
}
