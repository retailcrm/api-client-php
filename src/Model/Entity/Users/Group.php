<?php

/**
 * PHP version 7.3
 *
 * @category Group
 * @package  RetailCrm\Api\Model\Entity\Users
 */

namespace RetailCrm\Api\Model\Entity\Users;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Group
 *
 * @category Group
 * @package  RetailCrm\Api\Model\Entity\Users
 *
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class Group
{
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
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("signatureTemplate")
     */
    public $signatureTemplate;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isManager")
     */
    public $isManager;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isPosManager")
     */
    public $isPosManager;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isDeliveryMen")
     */
    public $isDeliveryMen;

    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("deliveryTypes")
     */
    public $deliveryTypes;

    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("breakdownOrderTypes")
     */
    public $breakdownOrderTypes;

    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("breakdownSites")
     */
    public $breakdownSites;

    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("breakdownOrderMethods")
     */
    public $breakdownOrderMethods;

    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("grantedOrderTypes")
     */
    public $grantedOrderTypes;

    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("grantedSites")
     */
    public $grantedSites;
}
