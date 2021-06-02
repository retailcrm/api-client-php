<?php

/**
 * PHP version 7.3
 *
 * @category OrderFilter
 * @package  RetailCrm\Api\Model\Filter\Orders
 */

namespace RetailCrm\Api\Model\Filter\Orders;

use DateTime;
use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class OrderFilter
 *
 * @category OrderFilter
 * @package  RetailCrm\Api\Model\Filter\Orders
 *
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class OrderFilter
{
    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("externalIds")
     */
    public $externalIds;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("numbers")
     */
    public $numbers;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("customer")
     */
    public $customer;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("customerId")
     */
    public $customerId;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("customerExternalId")
     */
    public $customerExternalId;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("countries")
     */
    public $countries;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("city")
     */
    public $city;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("region")
     */
    public $region;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("index")
     */
    public $index;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("metro")
     */
    public $metro;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("email")
     */
    public $email;

    /**
     * @var DateTime
     *
     * @Form\Type("DateTime<'H:i:s'>")
     * @Form\SerializedName("deliveryTimeFrom")
     */
    public $deliveryTimeFrom;

    /**
     * @var DateTime
     *
     * @Form\Type("DateTime<'H:i:s'>")
     * @Form\SerializedName("deliveryTimeTo")
     */
    public $deliveryTimeTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("minPrepaySumm")
     */
    public $minPrepaySumm;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("maxPrepaySumm")
     */
    public $maxPrepaySumm;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("minPrice")
     */
    public $minPrice;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("maxPrice")
     */
    public $maxPrice;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("product")
     */
    public $product;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("vip")
     */
    public $vip;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("bad")
     */
    public $bad;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("expired")
     */
    public $expired;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("call")
     */
    public $call;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("online")
     */
    public $online;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("deliveryStates")
     */
    public $deliveryStates;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("minDeliveryCost")
     */
    public $minDeliveryCost;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("maxDeliveryCost")
     */
    public $maxDeliveryCost;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("minDeliveryNetCost")
     */
    public $minDeliveryNetCost;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("maxDeliveryNetCost")
     */
    public $maxDeliveryNetCost;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("managerComment")
     */
    public $managerComment;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("customerComment")
     */
    public $customerComment;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("minMarginSumm")
     */
    public $minMarginSumm;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("maxMarginSumm")
     */
    public $maxMarginSumm;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("minPurchaseSumm")
     */
    public $minPurchaseSumm;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("maxPurchaseSumm")
     */
    public $maxPurchaseSumm;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("minCostSumm")
     */
    public $minCostSumm;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("maxCostSumm")
     */
    public $maxCostSumm;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("trackNumber")
     */
    public $trackNumber;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("deliveryExternalId")
     */
    public $deliveryExternalId;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("contragentName")
     */
    public $contragentName;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("contragentTypes")
     */
    public $contragentTypes;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("contragentInn")
     */
    public $contragentInn;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("contragentKpp")
     */
    public $contragentKpp;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("contragentBik")
     */
    public $contragentBik;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("contragentCorrAccount")
     */
    public $contragentCorrAccount;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("contragentBankAccount")
     */
    public $contragentBankAccount;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("shipped")
     */
    public $shipped;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("attachments")
     */
    public $attachments;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("receiptFiscalDocumentAttribute")
     */
    public $receiptFiscalDocumentAttribute;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("receiptStatus")
     */
    public $receiptStatus;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("receiptOperation")
     */
    public $receiptOperation;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("receiptOrderStatus")
     */
    public $receiptOrderStatus;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("tasksCounts")
     */
    public $tasksCounts;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("customerType")
     */
    public $customerType;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("companyName")
     */
    public $companyName;

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
     * @Form\SerializedName("orderTypes")
     */
    public $orderTypes;

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
     * @Form\SerializedName("paymentStatuses")
     */
    public $paymentStatuses;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("sites")
     */
    public $sites;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("paymentTypes")
     */
    public $paymentTypes;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("deliveryTypes")
     */
    public $deliveryTypes;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("orderMethods")
     */
    public $orderMethods;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("couriers")
     */
    public $couriers;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("managerGroups")
     */
    public $managerGroups;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("shipmentStores")
     */
    public $shipmentStores;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("mgChannels")
     */
    public $mgChannels;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("createdAtFrom")
     */
    public $createdAtFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("createdAtTo")
     */
    public $createdAtTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("fullPaidAtFrom")
     */
    public $fullPaidAtFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("fullPaidAtTo")
     */
    public $fullPaidAtTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("paidAtFrom")
     */
    public $paidAtFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("paidAtTo")
     */
    public $paidAtTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("deliveryDateFrom")
     */
    public $deliveryDateFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("deliveryDateTo")
     */
    public $deliveryDateTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("statusUpdatedAtFrom")
     */
    public $statusUpdatedAtFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("statusUpdatedAtTo")
     */
    public $statusUpdatedAtTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("firstWebVisitFrom")
     */
    public $firstWebVisitFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("firstWebVisitTo")
     */
    public $firstWebVisitTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("lastWebVisitFrom")
     */
    public $lastWebVisitFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("lastWebVisitTo")
     */
    public $lastWebVisitTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("firstOrderFrom")
     */
    public $firstOrderFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("firstOrderTo")
     */
    public $firstOrderTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("lastOrderFrom")
     */
    public $lastOrderFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("lastOrderTo")
     */
    public $lastOrderTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("shipmentDateFrom")
     */
    public $shipmentDateFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("shipmentDateTo")
     */
    public $shipmentDateTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("dpdParcelDateFrom")
     */
    public $dpdParcelDateFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("dpdParcelDateTo")
     */
    public $dpdParcelDateTo;

    /**
     * @var array<string, mixed>
     *
     * @Form\Type("array")
     * @Form\SerializedName("customFields")
     */
    public $customFields;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("extendedStatus")
     */
    public $extendedStatus;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("sourceName")
     */
    public $sourceName;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("mediumName")
     */
    public $mediumName;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("campaignName")
     */
    public $campaignName;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("keywordName")
     */
    public $keywordName;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("adContentName")
     */
    public $adContentName;
}
