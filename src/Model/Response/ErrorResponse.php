<?php

/**
 * PHP version 7.3
 *
 * @category ErrorResponse
 * @package  RetailCrm\Api\Model\Response
 */

namespace RetailCrm\Api\Model\Response;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ErrorResponse
 *
 * @category ErrorResponse
 * @package  RetailCrm\Api\Model\Response
 */
class ErrorResponse extends SuccessResponse
{
    /**
     * ErrorResponse constructor.
     */
    public function __construct()
    {
        $this->success = false;
    }

    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("errors")
     */
    public $errors;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("errorMsg")
     */
    public $errorMsg;
}
