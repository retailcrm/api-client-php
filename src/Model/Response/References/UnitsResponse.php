<?php

/**
 * PHP version 7.3
 *
 * @category UnitsResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class UnitsResponse
 *
 * @category UnitsResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class UnitsResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\SerializedUnit[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\SerializedUnit>")
     * @JMS\SerializedName("units")
     */
    public $units;
}
