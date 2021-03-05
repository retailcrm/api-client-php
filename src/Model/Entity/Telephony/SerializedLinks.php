<?php

/**
 * PHP version 7.3
 *
 * @category SerializedLinks
 * @package  RetailCrm\Api\Model\Entity\Telephony
 */

namespace RetailCrm\Api\Model\Entity\Telephony;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedLinks
 *
 * @category SerializedLinks
 * @package  RetailCrm\Api\Model\Entity\Telephony
 */
class SerializedLinks
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("newOrderLink")
     */
    public $newOrderLink;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("lastOrderLink")
     */
    public $lastOrderLink;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("newCustomerLink")
     */
    public $newCustomerLink;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("customerLink")
     */
    public $customerLink;
}
