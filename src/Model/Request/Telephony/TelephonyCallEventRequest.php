<?php

/**
 * PHP version 7.3
 *
 * @category TelephonyCallEventRequest
 * @package  RetailCrm\Api\Model\Request\Telephony
 */

namespace RetailCrm\Api\Model\Request\Telephony;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\Telephony\CallEvent;

/**
 * Class TelephonyCallEventRequest
 *
 * @category TelephonyCallEventRequest
 * @package  RetailCrm\Api\Model\Request\Telephony
 */
class TelephonyCallEventRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Telephony\CallEvent
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Telephony\CallEvent")
     * @Form\SerializedName("event")
     * @Form\JsonField()
     */
    public $event;

    /**
     * TelephonyCallEventRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\Telephony\CallEvent|null $event
     */
    public function __construct(?CallEvent $event = null)
    {
        if (null !== $event) {
            $this->event = $event;
        }
    }
}
