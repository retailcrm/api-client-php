<?php

/**
 * PHP version 7.3
 *
 * @category RequestPipelineFactory
 * @package  RetailCrm\Api\Factory
 */

namespace RetailCrm\Api\Factory;

use Http\Discovery\Psr17FactoryDiscovery;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use RetailCrm\Api\Handler\Request\PsrRequestHandler;
use RetailCrm\Api\Handler\Request\RequestDataHandler;
use RetailCrm\Api\Interfaces\FormEncoderInterface;
use RetailCrm\Api\Interfaces\HandlerInterface;

/**
 * Class RequestPipelineFactory
 *
 * @category RequestPipelineFactory
 * @package  RetailCrm\Api\Factory
 */
class RequestPipelineFactory
{
    /**
     * Instantiates default request pipeline with provided FormEncoder.
     * You still need to append your own authenticator handler. Otherwise your requests won't work.
     *
     * @param \RetailCrm\Api\Interfaces\FormEncoderInterface $formEncoder
     * @param \Psr\Http\Message\UriFactoryInterface|null     $uriFactory
     * @param \Psr\Http\Message\RequestFactoryInterface|null $requestFactory
     * @param \Psr\Http\Message\StreamFactoryInterface|null  $streamFactory
     * @param \RetailCrm\Api\Interfaces\HandlerInterface     ...$additionalHandlers
     *
     * @return \RetailCrm\Api\Interfaces\HandlerInterface
     */
    public static function createDefaultPipeline(
        FormEncoderInterface $formEncoder,
        ?UriFactoryInterface $uriFactory,
        ?RequestFactoryInterface $requestFactory,
        ?StreamFactoryInterface $streamFactory,
        HandlerInterface ...$additionalHandlers
    ): HandlerInterface {
        $handler       = new PsrRequestHandler(
            $uriFactory ?: Psr17FactoryDiscovery::findUriFactory(),
            $requestFactory ?: Psr17FactoryDiscovery::findRequestFactory()
        );
        $nextHandler   = $handler->setNext(new RequestDataHandler(
            $formEncoder,
            $streamFactory ?: Psr17FactoryDiscovery::findStreamFactory()
        ));

        if (count($additionalHandlers) > 0) {
            foreach ($additionalHandlers as $additionalHandler) {
                $nextHandler = $nextHandler->setNext($additionalHandler);
            }
        }

        return $handler;
    }
}
