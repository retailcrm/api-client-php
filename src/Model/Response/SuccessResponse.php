<?php

/**
 * PHP version 7.3
 *
 * @category SuccessResponse
 * @package  RetailCrm\Api\Model\Response
 */

namespace RetailCrm\Api\Model\Response;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Interfaces\ResponseInterface;

/**
 * Class SuccessResponse
 *
 * @category SuccessResponse
 * @package  RetailCrm\Api\Model\Response
 *
 * @SuppressWarnings(PHPMD.NumberOfChildren)
 */
class SuccessResponse implements ResponseInterface
{
    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("success")
     */
    public $success = true;
}
