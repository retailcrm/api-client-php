<?php

/**
 * PHP version 5.4
 *
 * Telephony
 *
 * @category RetailCrm
 * @package  RetailCrm
 */

namespace RetailCrm\Methods\V5;

use RetailCrm\Methods\V4\Telephony as Previous;

/**
 * PHP version 5.4
 *
 * Telephony class
 *
 * @category RetailCrm
 * @package  RetailCrm
 */
trait Telephony
{
    use Previous;


    /**
     * @param string $code integration code
     */
    public function telephonySettingsGet($code)
    {
        throw new \InvalidArgumentException("This method is not available, setting code: $code is unnecessary");
    }
}
