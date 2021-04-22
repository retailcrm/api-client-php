<?php

/**
 * PHP version 7.3
 *
 * @category ResponsePipelineFactory
 * @package  RetailCrm\Api\Factory
 */

namespace RetailCrm\Api\Factory;

use Liip\Serializer\SerializerInterface;
use RetailCrm\Api\Handler\Response\AccountNotFoundHandler;
use RetailCrm\Api\Handler\Response\ErrorResponseHandler;
use RetailCrm\Api\Handler\Response\FilesDownloadResponseHandler;
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
     * @param \Liip\Serializer\SerializerInterface       $serializer
     * @param \RetailCrm\Api\Factory\ApiExceptionFactory $exceptionFactory
     * @param \RetailCrm\Api\Interfaces\HandlerInterface ...$additionalHandlers
     *
     * @return \RetailCrm\Api\Interfaces\HandlerInterface
     */
    public static function createDefaultPipeline(
        SerializerInterface $serializer,
        ApiExceptionFactory $exceptionFactory,
        HandlerInterface ...$additionalHandlers
    ): HandlerInterface {
        $handler = new AccountNotFoundHandler($serializer, $exceptionFactory);
        $nextHandler = $handler
            ->setNext(new ErrorResponseHandler($serializer, $exceptionFactory))
            ->setNext(new FilesDownloadResponseHandler($serializer, $exceptionFactory))
            ->setNext(new UnmarshalResponseHandler($serializer, $exceptionFactory));

        if (count($additionalHandlers) > 0) {
            foreach ($additionalHandlers as $additionalHandler) {
                $nextHandler = $nextHandler->setNext($additionalHandler);
            }
        }

        return $handler;
    }
}
