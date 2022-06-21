<?php

/**
 * PHP version 7.3
 *
 * @category CustomerContragent
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CustomerContragent
 *
 * @category CustomerContragent
 * @package  RetailCrm\Api\Model\Entity\Customers
 *
 * @SuppressWarnings(PHPMD.CamelCasePropertyName)
 */
class CustomerContragent
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("contragentType")
     */
    public $contragentType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("legalName")
     */
    public $legalName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("legalAddress")
     */
    public $legalAddress;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("INN")
     */
    public $INN;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("OKPO")
     */
    public $OKPO;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("KPP")
     */
    public $KPP;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("OGRN")
     */
    public $OGRN;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("OGRNIP")
     */
    public $OGRNIP;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("certificateNumber")
     */
    public $certificateNumber;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("certificateDate")
     */
    public $certificateDate;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("BIK")
     */
    public $BIK;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("bank")
     */
    public $bank;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("bankAddress")
     */
    public $bankAddress;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("corrAccount")
     */
    public $corrAccount;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("bankAccount")
     */
    public $bankAccount;
}
