<?php

/**
 * PHP version 7.3
 *
 * @category AbstractResponseHandler
 * @package  RetailCrm\Api\Handler\Response
 */

namespace RetailCrm\Api\Handler\Response;

use Liip\Serializer\SerializerInterface;
use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Message\ResponseInterface;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Exception\Client\HandlerException;
use RetailCrm\Api\Factory\ApiExceptionFactory;
use RetailCrm\Api\Handler\AbstractHandler;
use RetailCrm\Api\Interfaces\ResponseInterface as RetailcrmResponse;
use RetailCrm\Api\Model\ResponseData;
use RetailCrm\Api\Traits\EventDispatcherAwareTrait;
use Throwable;

/**
 * Class AbstractResponseHandler
 *
 * @category AbstractResponseHandler
 * @package  RetailCrm\Api\Handler\Response
 */
abstract class AbstractResponseHandler extends AbstractHandler
{
    use EventDispatcherAwareTrait;

    /**
     * @var \Liip\Serializer\SerializerInterface
     */
    private $serializer;

    /**
     * @var \RetailCrm\Api\Factory\ApiExceptionFactory
     */
    protected $apiExceptionFactory;

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
            throw new HandlerException('Cannot deserialize body: ' . $throwable->getMessage(), 0, $throwable);
        }
    }

    /**
     * Handle response.
     *
     * @param \RetailCrm\Api\Model\ResponseData $responseData
     *
     * @return mixed
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    abstract protected function handleResponse(ResponseData $responseData);
}
