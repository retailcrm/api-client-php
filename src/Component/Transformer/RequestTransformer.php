<?php

/**
 * PHP version 7.3
 *
 * @category RequestTransformer
 * @package  RetailCrm\Api\Component\Transformer
 */

namespace RetailCrm\Api\Component\Transformer;

use Psr\Http\Message\RequestInterface as PsrRequestInterface;
use RetailCrm\Api\Exception\HandlerException;
use RetailCrm\Api\Interfaces\HandlerInterface;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\RequestData;

/**
 * Class RequestTransformer
 *
 * @category RequestTransformer
 * @package  RetailCrm\Api\Component\Transformer
 */
class RequestTransformer
{
    /**
     * @var HandlerInterface
     */
    private $handler;

    /**
     * RequestTransformer constructor.
     *
     * @param \RetailCrm\Api\Interfaces\HandlerInterface $handler
     */
    public function __construct(HandlerInterface $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @param string                                          $method
     * @param string                                          $uri
     * @param \RetailCrm\Api\Interfaces\RequestInterface|null $request
     *
     * @return \Psr\Http\Message\RequestInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     */
    public function createPsrRequest(
        string $method,
        string $uri,
        ?RequestInterface $request = null
    ): PsrRequestInterface {
        $requestData = new RequestData($method, $uri, $request);
        $this->handler->handle($requestData);

        if (null === $requestData->request) {
            throw new HandlerException('Handlers should instantiate request in the ResponseData.');
        }

        return $requestData->request;
    }

    /**
     * @return \RetailCrm\Api\Interfaces\HandlerInterface
     */
    public function getHandler(): HandlerInterface
    {
        return $this->handler;
    }
}
