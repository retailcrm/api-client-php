<?php

/**
 * PHP version 7.3
 *
 * @category OrderTypesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class OrderTypesResponse
 *
 * @category OrderTypesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class OrderTypesResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\OrderType[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\OrderType>")
     * @JMS\SerializedName("orderTypes")
     */
    public $orderTypes;
}
