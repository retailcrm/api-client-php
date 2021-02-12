<?php

/**
 * PHP version 7.3
 *
 * @category RequestPipelineFactory
 * @package  RetailCrm\Api\Factory
 */

namespace RetailCrm\Api\Factory;

use Http\Discovery\Psr17FactoryDiscovery;
use RetailCrm\Api\Component\FormData\FormEncoder;
use RetailCrm\Api\Handler\Request\ModelDataHandler;
use RetailCrm\Api\Handler\Request\PsrRequestHandler;
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
     * @param \RetailCrm\Api\Component\FormData\FormEncoder $formEncoder
     * @param \RetailCrm\Api\Interfaces\HandlerInterface    ...$additionalHandlers
     *
     * @return \RetailCrm\Api\Interfaces\HandlerInterface
     */
    public static function createDefaultPipeline(
        FormEncoder $formEncoder,
        HandlerInterface ...$additionalHandlers
    ): HandlerInterface {
        $handler = new PsrRequestHandler(
            Psr17FactoryDiscovery::findUriFactory(),
            Psr17FactoryDiscovery::findRequestFactory()
        );
        $nextHandler = $handler->setNext(
            new ModelDataHandler($formEncoder, Psr17FactoryDiscovery::findStreamFactory())
        );

        if (count($additionalHandlers) > 0) {
            foreach ($additionalHandlers as $additionalHandler) {
                $nextHandler = $nextHandler->setNext($additionalHandler);
            }
        }

        return $handler;
    }
}
