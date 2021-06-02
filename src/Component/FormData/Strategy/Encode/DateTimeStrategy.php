<?php

/**
 * PHP version 7.3
 *
 * @category DateTimeStrategy
 * @package  RetailCrm\Api\Component\FormData\Strategy\Encode
 */

namespace RetailCrm\Api\Component\FormData\Strategy\Encode;

use DateTime;
use RetailCrm\Api\Component\FormData\PropertyAnnotations;

/**
 * Class DateTimeStrategy
 *
 * @category DateTimeStrategy
 * @package RetailCrm\Api\Component\FormData\Strategy\Encode
 */
class DateTimeStrategy extends AbstractEncodeStrategy
{
    /**
     * @inheritDoc
     */
    public function encode($value, ?PropertyAnnotations $annotations): ?string
    {
        if ($value instanceof DateTime) {
            return $value->format($this->innerType);
        }

        return null;
    }
}
