<?php

/**
 * PHP version 7.3
 *
 * @category LegalEntity
 * @package  RetailCrm\Api\Model\Entity\References
 */

namespace RetailCrm\Api\Model\Entity\References;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class LegalEntity
 *
 * @category LegalEntity
 * @package  RetailCrm\Api\Model\Entity\References
 *
 * @SuppressWarnings(PHPMD.CamelCasePropertyName)
 */
class LegalEntity
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
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
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

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("countryIso")
     */
    public $countryIso;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("vatRate")
     */
    public $vatRate;

    /**
     * LegalEntity constructor.
     *
     * @param string $code
     */
    public function __construct(string $code = '')
    {
        if ('' !== $code) {
            $this->code = $code;
        }
    }
}
