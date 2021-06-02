<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryState
 * @package  RetailCrm\Api\Enum\Orders
 */

namespace RetailCrm\Api\Enum\Order;

/**
 * Class DeliveryState
 *
 * @category DeliveryState
 * @package  RetailCrm\Api\Enum\Orders
 */
final class DeliveryState
{
    public const CANCEL = 'cancel';
    public const CANCEL_FORCE = 'cancel_force';
    public const ERROR = 'error';
    public const NONE = 'none';
    public const PROCESSING = 'processing';
    public const SUCCESS = 'success';
}
