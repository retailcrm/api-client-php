<?php

/**
 * PHP version 7.3
 *
 * @category SerializedManager
 * @package  RetailCrm\Api\Model\Entity\Telephony
 */

namespace RetailCrm\Api\Model\Entity\Telephony;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedManager
 *
 * @category SerializedManager
 * @package  RetailCrm\Api\Model\Entity\Telephony
 */
class SerializedManager
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
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;
}
