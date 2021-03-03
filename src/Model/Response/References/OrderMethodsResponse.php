<?php

/**
 * PHP version 7.3
 *
 * @category OrderMethodsResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class OrderMethodsResponse
 *
 * @category OrderMethodsResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class OrderMethodsResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\OrderMethod[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\OrderMethod>")
     * @JMS\SerializedName("orderMethods")
     */
    public $orderMethods;
}
