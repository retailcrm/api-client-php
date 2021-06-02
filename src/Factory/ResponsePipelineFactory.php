<?php

/**
 * PHP version 7.3
 *
 * @category ResponsePipelineFactory
 * @package  RetailCrm\Api\Factory
 */

namespace RetailCrm\Api\Factory;

use Liip\Serializer\SerializerInterface;
use Psr\EventDispatcher\EventDispatcherInterface;
use RetailCrm\Api\Handler\Response\AccountNotFoundHandler;
use RetailCrm\Api\Handler\Response\ErrorResponseHandler;
use RetailCrm\Api\Handler\Response\FilesDownloadResponseHandler;
use RetailCrm\Api\Handler\Response\UnmarshalResponseHandler;
use RetailCrm\Api\Interfaces\ApiExceptionFactoryAwareInterface;
use RetailCrm\Api\Interfaces\EventDispatcherAwareInterface;
use RetailCrm\Api\Interfaces\HandlerInterface;
use RetailCrm\Api\Interfaces\SerializerAwareInterface;

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
     * @param \Liip\Serializer\SerializerInterface               $serializer
     * @param \RetailCrm\Api\Factory\ApiExceptionFactory         $exceptionFactory
     * @param \Psr\EventDispatcher\EventDispatcherInterface|null $eventDispatcher
     * @param \RetailCrm\Api\Interfaces\HandlerInterface         ...$additionalHandlers
     *
     * @return \RetailCrm\Api\Interfaces\HandlerInterface
     */
    public static function createDefaultPipeline(
        SerializerInterface $serializer,
        ApiExceptionFactory $exceptionFactory,
        ?EventDispatcherInterface $eventDispatcher,
        HandlerInterface ...$additionalHandlers
    ): HandlerInterface {
        $handler = new AccountNotFoundHandler($serializer, $exceptionFactory, $eventDispatcher);
        $nextHandler = $handler
            ->setNext(new ErrorResponseHandler($serializer, $exceptionFactory, $eventDispatcher))
            ->setNext(new FilesDownloadResponseHandler($serializer, $exceptionFactory, $eventDispatcher))
            ->setNext(new UnmarshalResponseHandler($serializer, $exceptionFactory, $eventDispatcher));

        if (count($additionalHandlers) > 0) {
            foreach ($additionalHandlers as $additionalHandler) {
                if ($additionalHandler instanceof SerializerAwareInterface) {
                    $additionalHandler->setSerializer($serializer);
                }

                if ($additionalHandler instanceof ApiExceptionFactoryAwareInterface) {
                    $additionalHandler->setApiExceptionFactory($exceptionFactory);
                }

                if ($additionalHandler instanceof EventDispatcherAwareInterface) {
                    $additionalHandler->setEventDispatcher($eventDispatcher);
                }

                $nextHandler = $nextHandler->setNext($additionalHandler);
            }
        }

        return $handler;
    }
}
