<?php

/**
 * PHP version 7.3
 *
 * @category AbstractHandler
 * @package  RetailCrm\Api\Handler
 */

namespace RetailCrm\Api\Handler;

use RetailCrm\Api\Interfaces\HandlerInterface;

/**
 * Class AbstractHandler
 *
 * All handlers are modeled as a chain of responsibility.
 *
 * @see https://refactoring.guru/design-patterns/chain-of-responsibility
 *
 * @category AbstractHandler
 * @package  RetailCrm\Api\Handler
 */
abstract class AbstractHandler implements HandlerInterface
{
    /** @var ?HandlerInterface */
    private $next;

    /**
     * @inheritDoc
     */
    public function handle($item)
    {
        if (null !== $this->next) {
            return $this->next->handle($item);
        }

        return null;
    }

    /**
     * @inheritDoc
     */
    public function setNext(HandlerInterface $handler): HandlerInterface
    {
        $this->next = $handler;
        return $handler;
    }

    /**
     * @inheritDoc
     */
    public function getNext(): ?HandlerInterface
    {
        return $this->next;
    }

    /**
     * @inheritDoc
     */
    public function append(HandlerInterface $handler): HandlerInterface
    {
        $this->getLastHandler()->setNext($handler);

        return $handler;
    }

    /**
     * @inheritDoc
     */
    public function getLastHandler(): HandlerInterface
    {
        $lastHandler = $this;

        while (null !== $lastHandler->getNext()) {
            $lastHandler = $lastHandler->getNext();
        }

        return $lastHandler;
    }
}
