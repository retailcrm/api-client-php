<?php

/**
 * PHP version 7.3
 *
 * @category Currency
 * @package  RetailCrm\Api\Model\Entity\References
 */

namespace RetailCrm\Api\Model\Entity\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Currency
 *
 * @category Currency
 * @package  RetailCrm\Api\Model\Entity\References
 */
class Currency
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
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isBase")
     */
    public $isBase;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isAutoConvert")
     */
    public $isAutoConvert;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("autoConvertExtraPercent")
     */
    public $autoConvertExtraPercent;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("manualConvertNominal")
     */
    public $manualConvertNominal;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("manualConvertValue")
     */
    public $manualConvertValue;
}
