<?php

/**
 * PHP version 7.3
 *
 * @category PriceTypesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class PriceTypesResponse
 *
 * @category PriceTypesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class PriceTypesResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\PriceType[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\PriceType>")
     * @JMS\SerializedName("priceTypes")
     */
    public $priceTypes;
}
