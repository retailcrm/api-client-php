<?php

/**
 * PHP version 7.3
 *
 * @category ResponseTransformer
 * @package  RetailCrm\Api\Component\Transformer
 */

namespace RetailCrm\Api\Component\Transformer;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RetailCrm\Api\Interfaces\HandlerInterface;
use RetailCrm\Api\Interfaces\ResponseInterface as RetailCrmResponse;
use RetailCrm\Api\Interfaces\ResponseTransformerInterface;
use RetailCrm\Api\Model\ResponseData;

/**
 * Class ResponseTransformer
 *
 * @category ResponseTransformer
 * @package  RetailCrm\Api\Component\Transformer
 */
class ResponseTransformer implements ResponseTransformerInterface
{
    /**
     * @var HandlerInterface
     */
    private $handler;

    /**
     * ResponseTransformer constructor.
     *
     * @param \RetailCrm\Api\Interfaces\HandlerInterface $handler
     */
    public function __construct(HandlerInterface $handler)
    {
        $this->handler = $handler;
    }

    /**
     * Transforms PSR-7 response into response model.
     *
     * You can alter the results by providing your chain of handlers.
     *
     * @param string                              $baseUrl
     * @param \Psr\Http\Message\RequestInterface  $request
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param string                              $type
     *
     * @return RetailCrmResponse
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function createResponse(
        string $baseUrl,
        RequestInterface $request,
        ResponseInterface $response,
        string $type
    ): RetailCrmResponse {
        $responseData = new ResponseData($baseUrl, $request, $response, $type, false);
        $this->handler->handle($responseData);

        return $responseData->responseModel;
    }

    /**
     * Transforms PSR-7 response into response array.
     *
     * You can alter the results by providing your chain of handlers.
     *
     * @param string                              $baseUrl
     * @param \Psr\Http\Message\RequestInterface  $request
     * @param \Psr\Http\Message\ResponseInterface $response
     *
     * @return array<int|string, mixed>
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function createCustomResponse(
        string $baseUrl,
        RequestInterface $request,
        ResponseInterface $response
    ): array {
        $responseData = new ResponseData($baseUrl, $request, $response, '', true);
        $this->handler->handle($responseData);

        return $responseData->responseArray;
    }

    /**
     * @inheritDoc
     */
    public function getHandler(): ?HandlerInterface
    {
        return $this->handler;
    }
}
