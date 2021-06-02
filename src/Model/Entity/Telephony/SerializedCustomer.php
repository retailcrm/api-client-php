<?php

/**
 * PHP version 7.3
 *
 * @category SerializedCustomer
 * @package  RetailCrm\Api\Model\Entity\Telephony
 */

namespace RetailCrm\Api\Model\Entity\Telephony;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedCustomer
 *
 * @category SerializedCustomer
 * @package  RetailCrm\Api\Model\Entity\Telephony
 */
class SerializedCustomer
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("id")
     */
    public $id;

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
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("email")
     */
    public $email;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerPhone[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Customers\CustomerPhone>")
     * @JMS\SerializedName("phones")
     */
    public $phones;
}
