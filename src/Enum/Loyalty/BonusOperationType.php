<?php

/**
 * PHP version 7.3
 *
 * @category BonusOperationType
 * @package  RetailCrm\Api\Enum\Loyalty
 */

namespace RetailCrm\Api\Enum\Loyalty;

/**
 * Class BonusOperationType
 *
 * @category BonusOperationType
 * @package  RetailCrm\Api\Enum\Loyalty
 */
final class BonusOperationType
{
    public const CREDIT_FOR_ORDER = 'credit_for_order';
    public const BURN = 'burn';
    public const CREDIT_FOR_EVENT = 'credit_for_event';
    public const CHARGE_FOR_ORDER = 'charge_for_order';
    public const CHARGE_MANUAL = 'charge_manual';
    public const CREDIT_MANUAL = 'credit_manual';
    public const CANCEL_OF_CHARGE = 'cancel_of_charge';
    public const CANCEL_OF_CREDIT = 'cancel_of_credit';
}
