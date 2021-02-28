<?php

/**
 * PHP version 7.3
 *
 * @category OrdersCombineResponse
 * @package  RetailCrm\Api\Model\Response\Orders
 */

namespace RetailCrm\Api\Model\Response\Orders;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class OrdersCombineResponse
 *
 * @category OrdersCombineResponse
 * @package  RetailCrm\Api\Model\Response\Orders
 */
class OrdersCombineResponse extends SuccessResponse
{
    /**
     * @var array<string, string>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("errors")
     */
    public $errors;
}
