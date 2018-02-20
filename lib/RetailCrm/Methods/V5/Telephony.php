<?php

/**
 * PHP version 5.4
 *
 * Telephony
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
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
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
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
