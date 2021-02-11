<?php

/**
 * PHP version 7.3
 *
 * @category ResponseFactory
 * @package  RetailCrm\Api\Factory
 */

namespace RetailCrm\Api\Factory;

use JMS\Serializer\SerializerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use RetailCrm\Api\Component\Exception\ApiException;
use RetailCrm\Api\Model\Response\ErrorResponse;
use RetailCrm\Api\Model\Response\ResponseInterface as RetailcrmResponse;

/**
 * Class ResponseFactory
 *
 * @category ResponseFactory
 * @package  RetailCrm\Api\Factory
 */
class ResponseFactory
{
    /**
     * @var \JMS\Serializer\SerializerInterface
     */
    private $serializer;

    /**
     * ResponseFactory constructor.
     *
     * @param \JMS\Serializer\SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param string                              $type
     *
     * @return RetailcrmResponse
     * @throws \RetailCrm\Api\Component\Exception\ApiException
     */
    public function createResponse(ResponseInterface $response, string $type): RetailcrmResponse
    {
        if ($response->getStatusCode() >= 400) {
            throw new ApiException($this->unmarshalBody($response, ErrorResponse::class));
        }

        return $this->unmarshalBody($response, $type);
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param string                              $type
     *
     * @return RetailcrmResponse
     */
    private function unmarshalBody(ResponseInterface $response, string $type): RetailcrmResponse
    {
        /** @phpstan-ignore-next-line */
        return $this->serializer->deserialize(static::getBodyContents($response->getBody()), $type, 'json');
    }

    /**
     * Returns body stream data (it should work like that in order to keep compatibility with some implementations).
     *
     * @param \Psr\Http\Message\StreamInterface $stream
     *
     * @return string
     */
    protected static function getBodyContents(StreamInterface $stream): string
    {
        return $stream->isSeekable() ? $stream->__toString() : $stream->getContents();
    }
}
