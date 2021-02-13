<?php

/**
 * PHP version 7.3
 *
 * @category ResponsePipelineFactory
 * @package  RetailCrm\Api\Factory
 */

namespace RetailCrm\Api\Factory;

use JMS\Serializer\SerializerInterface;
use RetailCrm\Api\Handler\Response\AccountNotFoundHandler;
use RetailCrm\Api\Handler\Response\ErrorResponseHandler;
use RetailCrm\Api\Handler\Response\UnmarshalResponseHandler;
use RetailCrm\Api\Interfaces\HandlerInterface;

/**
 * Class ResponsePipelineFactory
 *
 * @category ResponsePipelineFactory
 * @package  RetailCrm\Api\Factory
 */
class ResponsePipelineFactory
{
    /**
     * Creates default response pipeline.
     *
     * @param \JMS\Serializer\SerializerInterface        $serializer
     * @param \RetailCrm\Api\Interfaces\HandlerInterface ...$additionalHandlers
     *
     * @return \RetailCrm\Api\Interfaces\HandlerInterface
     */
    public static function createDefaultPipeline(
        SerializerInterface $serializer,
        HandlerInterface ...$additionalHandlers
    ): HandlerInterface {
        $handler = new AccountNotFoundHandler($serializer);
        $nextHandler = $handler
            ->setNext(new ErrorResponseHandler($serializer))
            ->setNext(new UnmarshalResponseHandler($serializer));

        if (count($additionalHandlers) > 0) {
            foreach ($additionalHandlers as $additionalHandler) {
                $nextHandler = $nextHandler->setNext($additionalHandler);
            }
        }

        return $handler;
    }
}
