<?php

/**
 * PHP version 7.3
 *
 * @category AbstractResponseHandler
 * @package  RetailCrm\Api\Handler\Response
 */

namespace RetailCrm\Api\Handler\Response;

use JMS\Serializer\SerializerInterface;
use Psr\Http\Message\ResponseInterface;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Handler\AbstractHandler;
use RetailCrm\Api\Interfaces\ResponseInterface as RetailcrmResponse;
use RetailCrm\Api\Model\ResponseData;

/**
 * Class AbstractResponseHandler
 *
 * @category AbstractResponseHandler
 * @package  RetailCrm\Api\Handler\Response
 */
abstract class AbstractResponseHandler extends AbstractHandler
{
    /**
     * @var \JMS\Serializer\SerializerInterface
     */
    private $serializer;

    /**
     * ResponseTransformer constructor.
     *
     * @param \JMS\Serializer\SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
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
     * @throws \RetailCrm\Api\Exception\HandlerException
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
     */
    protected function unmarshalBody(ResponseInterface $response, string $type): RetailcrmResponse
    {
        /** @phpstan-ignore-next-line */
        return $this->serializer->deserialize(Utils::getBodyContents($response->getBody()), $type, 'json');
    }

    /**
     * Handle response.
     *
     * @param \RetailCrm\Api\Model\ResponseData $responseData
     *
     * @return mixed
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    abstract protected function handleResponse(ResponseData $responseData);
}
