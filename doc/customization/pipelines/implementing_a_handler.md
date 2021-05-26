## Implementing a handler

You can implement your own handler using the `RetailCrm\Api\Interfaces\HandlerInterface`. 
`RetailCrm\Api\Handler\AbstractHandler` provides boilerplate code for the chain of responsibility. 
`AbstractHandler::next` method will call next handler in the chain. You can safely use `return parent::next()` in your code 
while using `AbstractHandler`.

Most of the information about how handlers operate can be found in the [chain of responsibility](https://refactoring.guru/design-patterns/chain-of-responsibility) 
pattern explanation. There are some specific details about handlers in the client. Client will pass desired dependencies to 
the handler if handler implements one of those interfaces:

* Any request handler
    + `RetailCrm\Api\Interfaces\PsrFactoriesAwareInterface` will inject PSR-17 factories into the handler.
* Any response handler
    + `RetailCrm\Api\Interfaces\SerializerAwareInterface` will inject a `liip/serializer` instance into the handler.
    + `RetailCrm\Api\Interfaces\ApiExceptionFactoryAwareInterface` will inject a `Liip\Serializer\SerializerInterface` instance into the handler.
    + `RetailCrm\Api\Interfaces\EventDispatcherAwareInterface` will inject a `Psr\EventDispatcher\EventDispatcherInterface` instance into the handler.

All of those interfaces above have the corresponding implementation traits in the `RetailCrm\Api\Traits` namespace. 
For example, `RetailCrm\Api\Interfaces\EventDispatcherAwareInterface` implementation can be found in the 
`RetailCrm\Api\Traits\EventDispatcherAwareTrait` trait.

Handlers can be used in the both chains just like callback handlers (see ["using a predefined hander"](using_a_predefined_handler.md)).
