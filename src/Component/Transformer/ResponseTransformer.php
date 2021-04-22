<?php

/**
 * PHP version 7.3
 *
 * @category ResponseTransformer
 * @package  RetailCrm\Api\Component\Transformer
 */

namespace RetailCrm\Api\Component\Transformer;

use Psr\Http\Message\UriInterface;
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
     * @param string                              $method
     * @param \Psr\Http\Message\UriInterface      $uri
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param string                              $type
     *
     * @return RetailCrmResponse
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     */
    public function createResponse(
        string $method,
        UriInterface $uri,
        ResponseInterface $response,
        string $type
    ): RetailCrmResponse {
        $responseData = new ResponseData($method, $uri, $response, $type);
        $this->handler->handle($responseData);

        return $responseData->responseModel;
    }
}
