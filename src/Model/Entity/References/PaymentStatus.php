<?php

/**
 * PHP version 7.3
 *
 * @category PaymentStatus
 * @package  RetailCrm\Api\Model\Entity\References
 */

namespace RetailCrm\Api\Model\Entity\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class PaymentStatus
 *
 * @category PaymentStatus
 * @package  RetailCrm\Api\Model\Entity\References
 */
class PaymentStatus
{
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
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("defaultForCrm")
     */
    public $defaultForCrm;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("defaultForApi")
     */
    public $defaultForApi;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("paymentComplete")
     */
    public $paymentComplete;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("ordering")
     */
    public $ordering;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("description")
     */
    public $description;

    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("paymentTypes")
     */
    public $paymentTypes;
}
