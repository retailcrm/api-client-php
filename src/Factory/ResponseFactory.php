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
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Exception\ApiException;
use RetailCrm\Api\Model\Response\ErrorResponse;
use RetailCrm\Api\Interfaces\ResponseInterface as RetailcrmResponse;

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
     * @throws \RetailCrm\Api\Exception\ApiException
     */
    public function createResponse(ResponseInterface $response, string $type): RetailcrmResponse
    {
        if ($response->getStatusCode() >= 400) {
            throw new ApiException(
                $this->unmarshalBody($response, ErrorResponse::class),
                $response->getStatusCode()
            );
        }

        return $this->unmarshalBody($response, $type);
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param string                              $type
     *
     * @return RetailcrmResponse
     * @SuppressWarnings(PHPMD.StaticAccess)
     */
    private function unmarshalBody(ResponseInterface $response, string $type): RetailcrmResponse
    {
        /** @phpstan-ignore-next-line */
        return $this->serializer->deserialize(Utils::getBodyContents($response->getBody()), $type, 'json');
    }
}
