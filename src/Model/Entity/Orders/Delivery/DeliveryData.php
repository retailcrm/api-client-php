<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryData
 * @package  RetailCrm\Api\Model\Entity\Orders\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Orders\Delivery;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class DeliveryData
 *
 * @category DeliveryData
 * @package  RetailCrm\Api\Model\Entity\Orders\Delivery
 *
 * @SuppressWarnings(PHPMD.LongVariables)
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 */
class DeliveryData
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("trackNumber")
     */
    public $trackNumber;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("status")
     */
    public $status;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("locked")
     */
    public $locked;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("pickuppointAddress")
     */
    public $pickuppointAddress;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("days")
     */
    public $days;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("statusText")
     */
    public $statusText;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("statusDate")
     */
    public $statusDate;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("tariff")
     */
    public $tariff;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("tariffName")
     */
    public $tariffName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("pickuppointId")
     */
    public $pickuppointId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("pickuppointSchedule")
     */
    public $pickuppointSchedule;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("pickuppointPhone")
     */
    public $pickuppointPhone;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("payerType")
     */
    public $payerType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("statusComment")
     */
    public $statusComment;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("cost")
     */
    public $cost;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("minTerm")
     */
    public $minTerm;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("maxTerm")
     */
    public $maxTerm;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("shipmentpointId")
     */
    public $shipmentpointId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("shipmentpointName")
     */
    public $shipmentpointName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("shipmentpointAddress")
     */
    public $shipmentpointAddress;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("shipmentpointSchedule")
     */
    public $shipmentpointSchedule;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("shipmentpointPhone")
     */
    public $shipmentpointPhone;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("shipmentpointCoordinateLatitude")
     */
    public $shipmentpointCoordinateLatitude;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("shipmentpointCoordinateLongitude")
     */
    public $shipmentpointCoordinateLongitude;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("pickuppointName")
     */
    public $pickuppointName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("pickuppointCoordinateLatitude")
     */
    public $pickuppointCoordinateLatitude;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("pickuppointCoordinateLongitude")
     */
    public $pickuppointCoordinateLongitude;

    /**
     * @var array<string, mixed>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("extraData")
     */
    public $extraData;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Delivery\Package[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Orders\Delivery\Package>")
     * @JMS\SerializedName("packages")
     */
    public $packages;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("returnExternalId")
     */
    public $returnExternalId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("deliveryName")
     */
    public $deliveryName;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("price")
     */
    public $price;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("insurancePrice")
     */
    public $insurancePrice;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("tariffType")
     */
    public $tariffType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("receiverCity")
     */
    public $receiverCity;

    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("services")
     */
    public $services;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("packageNumber")
     */
    public $packageNumber;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("comment")
     */
    public $comment;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("deliveryCode")
     */
    public $deliveryCode;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("notes")
     */
    public $notes;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("firstName")
     */
    public $firstName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("lastName")
     */
    public $lastName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("patronymic")
     */
    public $patronymic;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("email")
     */
    public $email;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Delivery\CourierPhone
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Delivery\CourierPhone")
     * @JMS\SerializedName("phone")
     */
    public $phone;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("description")
     */
    public $description;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("courierId")
     */
    public $courierId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("serviceType")
     */
    public $serviceType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("pickuppoint")
     */
    public $pickuppoint;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("receiverWarehouseTypeRef")
     */
    public $receiverWarehouseTypeRef;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("statusName")
     */
    public $statusName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("receiverCityRef")
     */
    public $receiverCityRef;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("receiverStreet")
     */
    public $receiverStreet;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("receiverStreetRef")
     */
    public $receiverStreetRef;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("seatsAmount")
     */
    public $seatsAmount;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("cargoType")
     */
    public $cargoType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("cargoDescription")
     */
    public $cargoDescription;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("cashPayerType")
     */
    public $cashPayerType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("paymentForm")
     */
    public $paymentForm;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ownershipForm")
     */
    public $ownershipForm;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("accompanyingDocument")
     */
    public $accompanyingDocument;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("preferredDeliveryDate")
     */
    public $preferredDeliveryDate;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("timeInterval")
     */
    public $timeInterval;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("saturdayDelivery")
     */
    public $saturdayDelivery;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("deliveryDate")
     */
    public $deliveryDate;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("denieReason")
     */
    public $denieReason;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("backwardDelivery")
     */
    public $backwardDelivery;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("backwardDeliveryCargoType")
     */
    public $backwardDeliveryCargoType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("backwardDeliveryPayerType")
     */
    public $backwardDeliveryPayerType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("backwardDeliveryRedeliveryString")
     */
    public $backwardDeliveryRedeliveryString;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("afterpaymentOnGoodsCost")
     */
    public $afterpaymentOnGoodsCost;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("declaredValue")
     */
    public $declaredValue;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("sendDate")
     */
    public $sendDate;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("deliveryType")
     */
    public $deliveryType;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("pickupType")
     */
    public $pickupType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("pickuppointDescription")
     */
    public $pickuppointDescription;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("placesCount")
     */
    public $placesCount;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("service")
     */
    public $service;
}
