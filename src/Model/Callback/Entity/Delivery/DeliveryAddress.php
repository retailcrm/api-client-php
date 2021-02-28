<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryAddress
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class DeliveryAddress
 *
 * @category DeliveryAddress
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */
class DeliveryAddress
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("index")
     */
    public $index;

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
     * @JMS\SerializedName("region")
     */
    public $region;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("regionId")
     */
    public $regionId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("city")
     */
    public $city;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("cityId")
     */
    public $cityId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("cityType")
     */
    public $cityType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("street")
     */
    public $street;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("streetId")
     */
    public $streetId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("streetType")
     */
    public $streetType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("building")
     */
    public $building;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("flat")
     */
    public $flat;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("floor")
     */
    public $floor;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("block")
     */
    public $block;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("house")
     */
    public $house;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("housing")
     */
    public $housing;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("metro")
     */
    public $metro;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("notes")
     */
    public $notes;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("text")
     */
    public $text;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("terminal")
     */
    public $terminal;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal")
     * @JMS\SerializedName("terminalData")
     */
    public $terminalData;
}
