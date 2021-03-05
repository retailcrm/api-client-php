<?php

/**
 * PHP version 7.3
 *
 * @category TelephonyCallsUploadRequest
 * @package  RetailCrm\Api\Model\Request\Telephony
 */

namespace RetailCrm\Api\Model\Request\Telephony;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class TelephonyCallsUploadRequest
 *
 * @category TelephonyCallsUploadRequest
 * @package  RetailCrm\Api\Model\Request\Telephony
 */
class TelephonyCallsUploadRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Telephony\Call[]
     *
     * @Form\Type("array<RetailCrm\Api\Model\Entity\Telephony\Call>")
     * @Form\SerializedName("calls")
     * @Form\JsonField()
     */
    public $calls;

    /**
     * TelephonyCallsUploadRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\Telephony\Call[]|null $calls
     */
    public function __construct(?array $calls = null)
    {
        if (null !== $calls) {
            $this->calls = $calls;
        }
    }
}
