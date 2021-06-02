<?php

/**
 * PHP version 7.3
 *
 * @category EventDispatcherAwareTrait
 * @package  RetailCrm\Api\Traits
 */

namespace RetailCrm\Api\Traits;

use Psr\EventDispatcher\EventDispatcherInterface;

/**
 * Trait EventDispatcherAwareTrait
 *
 * @category EventDispatcherAwareTrait
 * @package  RetailCrm\Api\Traits
 */
trait EventDispatcherAwareTrait
{
    /** @var EventDispatcherInterface|null */
    protected $eventDispatcher;

    /**
     * Sets PSR-14 compatible event dispatcher. Useful if you want to handle specific errors in one place.
     *
     * @param \Psr\EventDispatcher\EventDispatcherInterface|null $eventDispatcher
     *
     * @return object
     */
    public function setEventDispatcher(?EventDispatcherInterface $eventDispatcher): object
    {
        $this->eventDispatcher = $eventDispatcher;
        return $this;
    }

    /**
     * Dispatch an event.
     *
     * @param object $event
     */
    protected function dispatch(object $event): void
    {
        if (null !== $this->eventDispatcher) {
            $this->eventDispatcher->dispatch($event);
        }
    }
}
