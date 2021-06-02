<?php

/**
 * PHP version 7.3
 *
 * @category TelephonyManagerRequest
 * @package  RetailCrm\Api\Model\Request\Telephony
 */

namespace RetailCrm\Api\Model\Request\Telephony;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class TelephonyManagerRequest
 *
 * @category TelephonyManagerRequest
 * @package  RetailCrm\Api\Model\Request\Telephony
 */
class TelephonyManagerRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("phone")
     */
    public $phone;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("details")
     */
    public $details;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("ignoreStatus")
     */
    public $ignoreStatus;
}
