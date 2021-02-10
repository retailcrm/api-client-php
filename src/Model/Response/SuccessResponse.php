<?php

/**
 * PHP version 7.3
 *
 * @category SuccessResponse
 * @package  RetailCrm\Api\Model\Response
 */

namespace RetailCrm\Api\Model\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SuccessResponse
 *
 * @category SuccessResponse
 * @package  RetailCrm\Api\Model\Response
 */
class SuccessResponse
{
    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("success")
     */
    public $success;
}
