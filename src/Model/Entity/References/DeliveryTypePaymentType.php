<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryTypePaymentType
 * @package  RetailCrm\Api\Model\Entity\References
 */

namespace RetailCrm\Api\Model\Entity\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class DeliveryTypePaymentType
 *
 * @category DeliveryTypePaymentType
 * @package  RetailCrm\Api\Model\Entity\References
 */
class DeliveryTypePaymentType
{
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
     * @JMS\SerializedName("cod")
     */
    public $cod;
}
