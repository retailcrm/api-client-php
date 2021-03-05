<?php

/**
 * PHP version 7.3
 *
 * @category CallEventResponse
 * @package  RetailCrm\Api\Model\Response\Telephony
 */

namespace RetailCrm\Api\Model\Response\Telephony;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CallEventResponse
 *
 * @category CallEventResponse
 * @package  RetailCrm\Api\Model\Response\Telephony
 */
class CallEventResponse extends SuccessResponse
{
    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("notExistCodes")
     */
    public $notExistCodes;

    /**
     * @var int[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("notExistUsers")
     */
    public $notExistUsers;
}
