<?php

/**
 * PHP version 7.3
 *
 * @category JmsHandlersRegisterMiddleware
 * @package  RetailCrm\Api\Component\Serializer
 */

namespace RetailCrm\Api\Component\Serializer;

use JMS\Serializer\Handler\HandlerRegistry;

/**
 * Class JmsHandlersRegisterMiddleware
 *
 * @category JmsHandlersRegisterMiddleware
 * @package  RetailCrm\Api\Component\Serializer
 */
class JmsHandlersRegisterMiddleware
{
    /**
     * This method will register library handlers in provided JMS HandlerRegistry.
     * It should be used if you want to use your own JMS\Serializer instance.
     *
     * @param \JMS\Serializer\Handler\HandlerRegistry $registry
     */
    public static function registerLibraryHandlers(HandlerRegistry $registry): void
    {
        $registry->registerSubscribingHandler(new CustomerTagHandler());
        $registry->registerSubscribingHandler(new MixedHandler());
    }
}
