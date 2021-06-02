<?php

/**
 * PHP version 7.3
 *
 * @category CountriesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CountriesResponse
 *
 * @category CountriesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class CountriesResponse extends SuccessResponse
{
    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("countriesIso")
     */
    public $countriesIso;
}
