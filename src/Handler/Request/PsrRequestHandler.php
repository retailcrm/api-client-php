<?php

/**
 * PHP version 7.3
 *
 * @category PsrRequestHandler
 * @package  RetailCrm\Api\Handler\Request
 */

namespace RetailCrm\Api\Handler\Request;

use InvalidArgumentException;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use RetailCrm\Api\Exception\HandlerException;
use RetailCrm\Api\Handler\AbstractHandler;
use RetailCrm\Api\Model\RequestData;

/**
 * Class PsrRequestHandler
 *
 * @category PsrRequestHandler
 * @package  RetailCrm\Api\Handler\Request
 */
class PsrRequestHandler extends AbstractHandler
{
    /**
     * @var \Psr\Http\Message\UriFactoryInterface $uriFactory
     */
    private $uriFactory;

    /**
     * @var \Psr\Http\Message\RequestFactoryInterface $requestFactory
     */
    private $requestFactory;

    /**
     * PsrRequestHandler constructor.
     *
     * @param \Psr\Http\Message\UriFactoryInterface     $uriFactory
     * @param \Psr\Http\Message\RequestFactoryInterface $requestFactory
     */
    public function __construct(UriFactoryInterface $uriFactory, RequestFactoryInterface $requestFactory)
    {
        $this->uriFactory = $uriFactory;
        $this->requestFactory = $requestFactory;
    }

    /**
     * Creates base PSR-7 request model with URI and method.
     *
     * @param mixed $item
     *
     * @return mixed|null
     * @throws \RetailCrm\Api\Exception\HandlerException
     */
    public function handle($item)
    {
        if ($item instanceof RequestData) {
            try {
                $uri = $this->uriFactory->createUri($item->uri);
            } catch (InvalidArgumentException $exception) {
                throw new HandlerException("Cannot parse URI", 0, $exception);
            }

            $item->request = $this->requestFactory->createRequest(strtoupper($item->method), $uri);
        }

        return parent::handle($item);
    }
}
