<?php

/**
 * PHP version 7.3
 *
 * @category CallsUploadResponse
 * @package  RetailCrm\Api\Model\Response\Telephony
 */

namespace RetailCrm\Api\Model\Response\Telephony;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CallsUploadResponse
 *
 * @category CallsUploadResponse
 * @package  RetailCrm\Api\Model\Response\Telephony
 */
class CallsUploadResponse extends SuccessResponse
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("processedCallsCount")
     */
    public $processedCallsCount;

    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("duplicateCalls")
     */
    public $duplicateCalls;
}
