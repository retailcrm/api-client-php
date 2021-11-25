<?php

/**
 * PHP version 7.3
 *
 * @category RequestTransformerInterface
 * @package  RetailCrm\Api\Interfaces
 */

namespace RetailCrm\Api\Interfaces;

/**
 * Interface RequestSenderInterface
 *
 * @category RequestTransformerInterface
 * @package  RetailCrm\Api\Interfaces
 */
interface RequestSenderInterface
{
    /**
     * Sends request to provided route with provided method and body, returns array response.
     * Request will be put into GET parameters or into POST form-data (depends on method).
     *
     * Note: do not remove "useless" exceptions which are marked as "never thrown" by IDE.
     * PSR-18's ClientInterface doesn't have them in the DocBlock, but, according to PSR-18,
     * they can be thrown by clients, and therefore should be present here.
     *
     * @see https://www.php-fig.org/psr/psr-18/#error-handling
     *
     * @param string                   $method
     * @param string                   $route
     * @param array<int|string, mixed> $requestForm
     *
     * @return array<int|string, mixed>
     * @throws \RetailCrm\Api\Exception\ApiException
     * @throws \RetailCrm\Api\Exception\ClientException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function send(
        string $method,
        string $route,
        array $requestForm = []
    ): array;

    /**
     * Returns API routes with base URI prepended.
     *
     * @param string $route
     *
     * @return string
     */
    public function route(string $route): string;

    /**
     * Returns host from the base URL.
     *
     * @return string
     */
    public function host(): string;
}
