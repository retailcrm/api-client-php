<?php

/**
 * PHP version 7.3
 *
 * @category RequestTransformerInterface
 * @package  RetailCrm\Api\Interfaces
 */

namespace RetailCrm\Api\Interfaces;

use Psr\Http\Message\RequestInterface as PsrRequestInterface;

/**
 * Interface RequestTransformerInterface
 *
 * @category RequestTransformerInterface
 * @package  RetailCrm\Api\Interfaces
 */
interface RequestTransformerInterface
{
    /**
     * Transforms provided request data into PSR-7 request model.
     *
     * This method should perform the following operations:
     *  - Transform request model into PSR-7 request.
     *  - Throw `HandlerException` instance if necessary.
     *
     * @param string                                          $method
     * @param string                                          $uri
     * @param \RetailCrm\Api\Interfaces\RequestInterface|null $request
     *
     * @return \Psr\Http\Message\RequestInterface
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     */
    public function createPsrRequest(
        string $method,
        string $uri,
        ?RequestInterface $request = null
    ): PsrRequestInterface;

    /**
     * Transforms provided custom request data into PSR-7 request model.
     *
     * This method should perform the following operations:
     *  - Transform request model into PSR-7 request.
     *  - Throw `HandlerException` instance if necessary.
     *
     * @param string                   $method
     * @param string                   $uri
     * @param array<int|string, mixed> $requestForm
     *
     * @return \Psr\Http\Message\RequestInterface
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     */
    public function createCustomPsrRequest(
        string $method,
        string $uri,
        array $requestForm = []
    ): PsrRequestInterface;

    /**
     * Returns HandlerInterface.
     *
     * This method can return `null`. `ClientBuilder` won't inject authenticator or additional handlers
     * into the handlers chain if this method returns `null`. No error or exception will be raised.
     *
     * @return \RetailCrm\Api\Interfaces\HandlerInterface|null
     */
    public function getHandler(): ?HandlerInterface;
}
