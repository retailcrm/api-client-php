<?php

/**
 * PHP version 7.3
 *
 * @category Orders
 * @package  RetailCrm\Api\Model\Entity\Orders
 */

namespace RetailCrm\Api\Model\Entity\Orders;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Orders
 *
 * @category Orders
 * @package  RetailCrm\Api\Model\Entity\Orders
 *
 * @SuppressWarnings(PHPMD.LongVariables)
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 */
class Order
{
    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("bonusesCreditTotal")
     */
    public $bonusesCreditTotal;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("bonusesChargeTotal")
     */
    public $bonusesChargeTotal;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("summ")
     */
    public $summ;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("slug")
     */
    public $slug;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("number")
     */
    public $number;

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
     * @JMS\SerializedName("orderType")
     */
    public $orderType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("orderMethod")
     */
    public $orderMethod;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("privilegeType")
     */
    public $privilegeType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("countryIso")
     */
    public $countryIso;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("statusUpdatedAt")
     */
    public $statusUpdatedAt;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("discountManualAmount")
     */
    public $discountManualAmount;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("discountManualPercent")
     */
    public $discountManualPercent;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("totalSumm")
     */
    public $totalSumm;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("prepaySum")
     */
    public $prepaySum;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("purchaseSumm")
     */
    public $purchaseSumm;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("personalDiscountPercent")
     */
    public $personalDiscountPercent;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\OrderLoyaltyAccount
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\OrderLoyaltyAccount")
     * @JMS\SerializedName("loyaltyAccount")
     */
    public $loyaltyAccount;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel")
     * @JMS\SerializedName("loyaltyLevel")
     */
    public $loyaltyLevel;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyEventDiscount
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\LoyaltyEventDiscount")
     * @JMS\SerializedName("loyaltyEventDiscount")
     */
    public $loyaltyEventDiscount;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("mark")
     */
    public $mark;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("markDatetime")
     */
    public $markDatetime;

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
     * @JMS\SerializedName("firstName")
     */
    public $firstName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("patronymic")
     */
    public $patronymic;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phone")
     */
    public $phone;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("additionalPhone")
     */
    public $additionalPhone;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("email")
     */
    public $email;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("call")
     */
    public $call;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("expired")
     */
    public $expired;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("customerComment")
     */
    public $customerComment;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("managerComment")
     */
    public $managerComment;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("managerId")
     */
    public $managerId;

    /**
     * @var \RetailCrm\Api\Interfaces\Orders\CustomerInterface
     *
     * @JMS\Type("RetailCrm\Api\Interfaces\Orders\CustomerInterface")
     * @JMS\SerializedName("customer")
     */
    public $customer;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Customer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Customers\Customer")
     * @JMS\SerializedName("contact")
     */
    public $contact;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\Company
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\Company")
     * @JMS\SerializedName("company")
     */
    public $company;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\OrderContragent
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\OrderContragent")
     * @JMS\SerializedName("contragent")
     */
    public $contragent;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedOrderDelivery
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedOrderDelivery")
     * @JMS\SerializedName("delivery")
     */
    public $delivery;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\MarketplaceData
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\MarketplaceData")
     * @JMS\SerializedName("marketplace")
     */
    public $marketplace;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("status")
     */
    public $status;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("statusComment")
     */
    public $statusComment;

    /**
     * @var \RetailCrm\Api\Model\Entity\Source
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Source")
     * @JMS\SerializedName("source")
     */
    public $source;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct>")
     * @JMS\SerializedName("items")
     */
    public $items;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("fullPaidAt")
     */
    public $fullPaidAt;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Payment[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Orders\Payment>")
     * @JMS\SerializedName("payments")
     */
    public $payments;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("fromApi")
     */
    public $fromApi;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("weight")
     */
    public $weight;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("length")
     */
    public $length;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("width")
     */
    public $width;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("height")
     */
    public $height;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("shipmentStore")
     */
    public $shipmentStore;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("shipmentDate")
     */
    public $shipmentDate;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("shipped")
     */
    public $shipped;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("dialogId")
     */
    public $dialogId;

    /**
     * @var array<string, mixed>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("customFields")
     */
    public $customFields;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("clientId")
     */
    public $clientId;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("loyaltyEventId")
     */
    public $loyaltyEventId;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("applyRound")
     */
    public $applyRound;
}
