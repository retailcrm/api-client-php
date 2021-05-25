## Customization

* [Using different PSR-18, PSR-17 and PSR-7 implementations](different_psr_implementations.md)
* [Customizing request and response processing](pipelines/implementing_a_handler.md)  
    + [Implementing a handler](pipelines/implementing_a_handler.md)
    + [Customizing a request pipeline](pipelines/customizing_request_pipeline.md)
    + [Customizing a response pipeline](pipelines/customizing_response_pipeline.md)

Both `ClientFactory` and `ClientBuilder` provide the necessary functionality to replace PSR dependencies with any other compatible implementation.
By default, those dependencies will be detected via service discovery. But service discovery supports a limited amount of implementation.
If your implementation is not supported - the client won't work unless you provide the necessary dependencies manually.
Another case would be testing. You can provide special HTTP client implementation which will return mocked responses instead of making
real requests.

The Client uses [chain of responsibility](https://refactoring.guru/design-patterns/chain-of-responsibility) pattern to process requests.
Each request and response is being processed by the pipeline of handlers. Every handler can apply some mutation to the request or response
and can pass it to the next handler. In fact, API authentication is made possible by using a special handler which appends API key to every request.
