<?php

/**
 * PHP version 7.3
 *
 * @category EventDispatcherAwareInterface
 * @package  RetailCrm\Api\Interfaces
 */

namespace RetailCrm\Api\Interfaces;

use Psr\EventDispatcher\EventDispatcherInterface;

/**
 * Interface EventDispatcherAwareInterface
 *
 * @category EventDispatcherAwareInterface
 * @package  RetailCrm\Api\Interfaces
 */
interface EventDispatcherAwareInterface
{
    /**
     * Sets PSR-14 compatible event dispatcher. Useful if you want to handle specific errors in one place.
     *
     * @param \Psr\EventDispatcher\EventDispatcherInterface|null $eventDispatcher
     */
    public function setEventDispatcher(?EventDispatcherInterface $eventDispatcher); // @phpstan-ignore-line
}
