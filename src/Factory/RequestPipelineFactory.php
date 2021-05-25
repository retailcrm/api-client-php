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
use RetailCrm\Api\Interfaces\PsrFactoriesAwareInterface;

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
        $uriFactory = $uriFactory ?: Psr17FactoryDiscovery::findUriFactory();
        $requestFactory = $requestFactory ?: Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = $streamFactory ?: Psr17FactoryDiscovery::findStreamFactory();
        $handler = new PsrRequestHandler($uriFactory, $requestFactory);
        $nextHandler = $handler->setNext(new RequestDataHandler($formEncoder, $streamFactory));

        if (count($additionalHandlers) > 0) {
            foreach ($additionalHandlers as $additionalHandler) {
                if ($additionalHandler instanceof PsrFactoriesAwareInterface) {
                    $additionalHandler->setRequestFactory($requestFactory);
                    $additionalHandler->setStreamFactory($streamFactory);
                    $additionalHandler->setUriFactory($uriFactory);
                }

                $nextHandler = $nextHandler->setNext($additionalHandler);
            }
        }

        return $handler;
    }
}
