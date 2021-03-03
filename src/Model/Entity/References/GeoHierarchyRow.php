<?php

/**
 * PHP version 7.3
 *
 * @category GeoHierarchyRow
 * @package  RetailCrm\Api\Model\Entity\References
 */

namespace RetailCrm\Api\Model\Entity\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class GeoHierarchyRow
 *
 * @category GeoHierarchyRow
 * @package  RetailCrm\Api\Model\Entity\References
 */
class GeoHierarchyRow
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("country")
     */
    public $country;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("regionId")
     */
    public $regionId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("region")
     */
    public $region;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("cityId")
     */
    public $cityId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("city")
     */
    public $city;
}
