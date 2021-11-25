<?php

/**
 * PHP version 7.3
 *
 * @category AbstractResponseHandler
 * @package  RetailCrm\Api\Handler\Response
 */

namespace RetailCrm\Api\Handler\Response;

use JsonException;
use Liip\Serializer\SerializerInterface;
use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Message\ResponseInterface;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Exception\Client\HandlerException;
use RetailCrm\Api\Factory\ApiExceptionFactory;
use RetailCrm\Api\Handler\AbstractHandler;
use RetailCrm\Api\Interfaces\ApiExceptionFactoryAwareInterface;
use RetailCrm\Api\Interfaces\EventDispatcherAwareInterface;
use RetailCrm\Api\Interfaces\ResponseInterface as RetailcrmResponse;
use RetailCrm\Api\Interfaces\SerializerAwareInterface;
use RetailCrm\Api\Model\ResponseData;
use RetailCrm\Api\Traits\ApiExceptionFactoryAwareTrait;
use RetailCrm\Api\Traits\EventDispatcherAwareTrait;
use RetailCrm\Api\Traits\SerializerAwareTrait;
use Throwable;

/**
 * Class AbstractResponseHandler
 *
 * @category AbstractResponseHandler
 * @package  RetailCrm\Api\Handler\Response
 */
abstract class AbstractResponseHandler extends AbstractHandler implements
    SerializerAwareInterface,
    EventDispatcherAwareInterface,
    ApiExceptionFactoryAwareInterface
{
    use SerializerAwareTrait;
    use EventDispatcherAwareTrait;
    use ApiExceptionFactoryAwareTrait;

    /**
     * ResponseTransformer constructor.
     *
     * @param \Liip\Serializer\SerializerInterface               $serializer
     * @param \RetailCrm\Api\Factory\ApiExceptionFactory         $exceptionFactory
     * @param \Psr\EventDispatcher\EventDispatcherInterface|null $eventDispatcher
     */
    public function __construct(
        SerializerInterface $serializer,
        ApiExceptionFactory $exceptionFactory,
        ?EventDispatcherInterface $eventDispatcher = null
    ) {
        $this->serializer          = $serializer;
        $this->apiExceptionFactory = $exceptionFactory;
        $this->eventDispatcher     = $eventDispatcher;
    }

    /**
     * @inheritDoc
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    final public function handle($item)
    {
        if ($item instanceof ResponseData) {
            return $this->handleResponse($item);
        }

        return parent::handle($item);
    }

    /**
     * Return to parent.
     *
     * @param mixed $item
     *
     * @return mixed|null
     * @throws \RetailCrm\Api\Exception\Client\HandlerException|\RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    protected function next($item)
    {
        return parent::handle($item);
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param string                              $type
     *
     * @return RetailcrmResponse
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     */
    protected function unmarshalBody(ResponseInterface $response, string $type): RetailcrmResponse
    {
        try {
            return $this->serializer->deserialize(Utils::getBodyContents($response->getBody()), $type, 'json');
        } catch (Throwable $throwable) {
            static::throwUnmarshalError($throwable);
        }

        return new $type();
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     *
     * @return array<int|string, mixed>
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     */
    protected function unmarshalBodyArray(ResponseInterface $response): array
    {
        try {
            return json_decode(Utils::getBodyContents($response->getBody()), true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $exception) {
            static::throwUnmarshalError($exception);
        }

        return [];
    }

    /**
     * Handle response.
     *
     * @param \RetailCrm\Api\Model\ResponseData $responseData
     *
     * @return mixed
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    abstract protected function handleResponse(ResponseData $responseData);

    /**
     * @param \Throwable $throwable
     *
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     */
    private static function throwUnmarshalError(Throwable $throwable): void
    {
        throw new HandlerException(
            'Cannot deserialize body: ' . $throwable->getMessage(),
            0,
            $throwable
        );
    }
}
