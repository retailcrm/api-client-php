<?php

/**
 * PHP version 7.3
 *
 * @category HandlerInterface
 * @package  RetailCrm\Api\Interfaces
 */

namespace RetailCrm\Api\Interfaces;

/**
 * Interface HandlerInterface
 *
 * @category HandlerInterface
 * @package  RetailCrm\Api\Interfaces
 */
interface HandlerInterface
{
    /**
     * Handle some generic item.
     *
     * @param mixed $item
     *
     * @return mixed
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function handle($item);

    /**
     * Sets next handler in the chain.
     *
     * @param \RetailCrm\Api\Interfaces\HandlerInterface $handler
     *
     * @return \RetailCrm\Api\Interfaces\HandlerInterface
     */
    public function setNext(HandlerInterface $handler): HandlerInterface;

    /**
     * Returns next handler or null if it's not present.
     *
     * @return \RetailCrm\Api\Interfaces\HandlerInterface|null
     */
    public function getNext(): ?HandlerInterface;

    /**
     * Appends handler to the end of the chain. Returns handler which was used.
     *
     * @param \RetailCrm\Api\Interfaces\HandlerInterface $handler
     *
     * @return HandlerInterface
     */
    public function append(HandlerInterface $handler): HandlerInterface;

    /**
     * Returns last handler in the chain. Returns current handler if this chain consist of only this handler.
     *
     * @return \RetailCrm\Api\Interfaces\HandlerInterface
     */
    public function getLastHandler(): HandlerInterface;
}
