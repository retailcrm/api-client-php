<?php

/**
 * PHP version 7.3
 *
 * @category OrderProductStatus
 * @package  RetailCrm\Api\Model\Entity\References
 */

namespace RetailCrm\Api\Model\Entity\References;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class OrderProductStatus
 *
 * @category OrderProductStatus
 * @package  RetailCrm\Api\Model\Entity\References
 *
 * @SuppressWarnings(PHPMD.LongVariables)
 */
class OrderProductStatus
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("ordering")
     */
    public $ordering;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("orderStatusByProductStatus")
     */
    public $orderStatusByProductStatus;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("orderStatusForProductStatus")
     */
    public $orderStatusForProductStatus;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("cancelStatus")
     */
    public $cancelStatus;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;
}
