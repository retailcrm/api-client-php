<?php

/**
 * PHP version 7.3
 *
 * @category PaymentType
 * @package  RetailCrm\Api\Model\Entity\References
 */

namespace RetailCrm\Api\Model\Entity\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class PaymentType
 *
 * @category PaymentType
 * @package  RetailCrm\Api\Model\Entity\References
 */
class PaymentType
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
     * @JMS\SerializedName("deliveryTypes")
     */
    public $deliveryTypes;

    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("paymentStatuses")
     */
    public $paymentStatuses;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\IntegrationModule
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\IntegrationModule")
     * @JMS\SerializedName("integrationModule")
     */
    public $integrationModule;
}
