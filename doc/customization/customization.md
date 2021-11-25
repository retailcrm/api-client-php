## Customization

* [Controlling HTTP abstraction layer](different_psr_implementations.md)
* [Customizing request and response processing](pipelines/implementing_a_handler.md)  
    + [Using a predefined handler](pipelines/using_a_predefined_handler.md)
        + [Built-in handlers](pipelines/using_a_predefined_handler.md#built-in-handlers)
        + [Modifying the default pipeline](pipelines/using_a_predefined_handler.md#modifying-the-default-pipeline)
        + [Constructing the pipeline from scratch](pipelines/using_a_predefined_handler.md#constructing-the-pipeline-from-scratch)
    + [Implementing a handler](pipelines/implementing_a_handler.md)
* [Implementing custom API methods](implementing_custom_api_methods.md)

Both `ClientFactory` and `ClientBuilder` provide the necessary functionality to replace PSR dependencies with any other compatible implementation.
By default, those dependencies will be detected via service discovery. But service discovery supports a limited amount of implementation.
If your implementation is not supported - the client won't work unless you provide the necessary dependencies manually.
Another case would be testing. You can provide special HTTP client implementation which will return mocked responses instead of making
real requests.

The Client uses [chain of responsibility](https://refactoring.guru/design-patterns/chain-of-responsibility) pattern to process requests.
Each request and response is being processed by the pipeline of handlers. Every handler can apply some mutation to the request or response
and can pass it to the next handler. In fact, API authentication is made possible by using a special handler which appends API key to every request.
