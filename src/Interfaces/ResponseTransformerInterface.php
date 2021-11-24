<?php

/**
 * PHP version 7.3
 *
 * @category ResponseTransformerInterface
 * @package  RetailCrm\Api\Interfaces
 */

namespace RetailCrm\Api\Interfaces;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RetailCrm\Api\Interfaces\ResponseInterface as RetailCrmResponse;

/**
 * Interface ResponseTransformerInterface
 *
 * @category ResponseTransformerInterface
 * @package  RetailCrm\Api\Interfaces
 */
interface ResponseTransformerInterface
{
    /**
     * Transforms PSR-7 response into response model.
     *
     * This method should do the following operations:
     * - It should convert PSR-7 response object into the response model of provided type.
     * - It should automatically detect an API error and throw an `ApiExceptionInterface` instance.
     * - It can throw a `HandlerException` instance if necessary.
     *
     * @param string                              $baseUrl
     * @param \Psr\Http\Message\RequestInterface  $request
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param string                              $type
     *
     * @return RetailCrmResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     */
    public function createResponse(
        string $baseUrl,
        RequestInterface $request,
        ResponseInterface $response,
        string $type
    ): RetailCrmResponse;

    /**
     * Transforms PSR-7 response into response array.
     *
     * This method should do the following operations:
     * - It should convert PSR-7 response object into the response model of provided type.
     * - It should automatically detect an API error and throw an `ApiExceptionInterface` instance.
     * - It can throw a `HandlerException` instance if necessary.
     *
     * This method should be used only for custom requests.
     *
     * @param string                              $baseUrl
     * @param \Psr\Http\Message\RequestInterface  $request
     * @param \Psr\Http\Message\ResponseInterface $response
     *
     * @return array<int|string, mixed>
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     */
    public function createCustomResponse(
        string $baseUrl,
        RequestInterface $request,
        ResponseInterface $response
    ): array;

    /**
     * Returns HandlerInterface.
     *
     * This method can return `null`. `ClientBuilder` won't inject additional handlers into the handlers chain if this
     * method returns `null`. No error or exception will be raised.
     *
     * @return \RetailCrm\Api\Interfaces\HandlerInterface|null
     */
    public function getHandler(): ?HandlerInterface;
}
