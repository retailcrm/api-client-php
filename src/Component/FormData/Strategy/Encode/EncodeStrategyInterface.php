<?php

/**
 * PHP version 7.3
 *
 * @category Integration
 * @package  RetailCrm\Api\Component\FormData\Strategy\Encode
 * @author   RetailCRM <integration@retailcrm.ru>
 * @license  MIT
 * @link     http://retailcrm.ru
 * @see      http://retailcrm.ru/docs
 */

namespace RetailCrm\Api\Component\FormData\Strategy\Encode;

use RetailCrm\Api\Component\FormData\PropertyAnnotations;

/**
 * Interface EncodeStrategyInterface
 *
 * @internal
 * @package RetailCrm\Api\Component\FormData\Strategy\Encode
 */
interface EncodeStrategyInterface
{
    /**
     * Serialize value
     *
     * @param mixed                                                      $value
     * @param \RetailCrm\Api\Component\FormData\PropertyAnnotations|null $annotations
     *
     * @return mixed
     */
    public function encode($value, ?PropertyAnnotations $annotations);

    /**
     * Sets inner type for types like array<key, value> and \DateTime<format>
     *
     * @param string $type
     *
     * @return \RetailCrm\Api\Component\FormData\Strategy\Encode\EncodeStrategyInterface
     */
    public function setInnerType(string $type): EncodeStrategyInterface;
}
