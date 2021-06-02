<?php

/**
 * PHP version 7.3
 *
 * @category IdResponse
 * @package  RetailCrm\Api\Model\Response
 */

namespace RetailCrm\Api\Model\Response;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class IdResponse
 *
 * @category IdResponse
 * @package  RetailCrm\Api\Model\Response
 */
class IdResponse extends SuccessResponse
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;
}
