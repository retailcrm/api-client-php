<?php

/**
 * PHP version 7.3
 *
 * @category Store
 * @package  RetailCrm\Api\Model\Entity\References
 */

namespace RetailCrm\Api\Model\Entity\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Store
 *
 * @category Store
 * @package  RetailCrm\Api\Model\Entity\References
 */
class Store
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
     * @JMS\SerializedName("xmlId")
     */
    public $xmlId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("description")
     */
    public $description;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("email")
     */
    public $email;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("inventoryType")
     */
    public $inventoryType;

    /**
     * @var \RetailCrm\Api\Model\Entity\References\StoreAddress
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\References\StoreAddress")
     * @JMS\SerializedName("address")
     */
    public $address;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var \RetailCrm\Api\Model\Entity\References\StorePhone
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\References\StorePhone")
     * @JMS\SerializedName("phone")
     */
    public $phone;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\SerializedStoreWeekOpeningHours
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\SerializedStoreWeekOpeningHours")
     * @JMS\SerializedName("workTime")
     */
    public $workTime;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;
}
