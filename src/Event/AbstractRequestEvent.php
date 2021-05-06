<?php

/**
 * PHP version 7.3
 *
 * @category AbstractRequestEvent
 * @package  RetailCrm\Api\Event
 */

namespace RetailCrm\Api\Event;

use Psr\Http\Message\ResponseInterface;

/**
 * Class AbstractRequestEvent
 *
 * @category AbstractRequestEvent
 * @package  RetailCrm\Api\Event
 */
abstract class AbstractRequestEvent
{
    /** @var \Psr\Http\Message\ResponseInterface|null */
    private $response;

    /**
     * AbstractRequestEvent constructor.
     *
     * @param \Psr\Http\Message\ResponseInterface|null $response
     */
    public function __construct(?ResponseInterface $response = null)
    {
        $this->response = $response;
    }

    /**
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
