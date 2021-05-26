## Using a predefined handler

* [Built-in handlers](#built-in-handlers)
* [Modifying the default pipeline](#modifying-the-default-pipeline)
* [Constructing the pipeline from scratch](#constructing-the-pipeline-from-scratch)

### Built-in handlers

You can use a predefined handler to modify the process of request or response processing. Most of the predefined handlers are
already in use by the client, except for the `CallbackRequestHandler` and `CallbackResponseHandler`.

Those are handlers that are present in the client and can be used for request processing:
* `CallbackRequestHandler` - processes a request using provided callback.
* `GetParameterAuthenticatorHandler` - appends a GET `apiKey` parameter with the API key.
* `HeaderAuthenticatorHandler` - appends `X-Api-Key` header with the API key.
* `PsrRequestHandler` - constructs base PSR-7 request with method and URI.
* `RequestDataHandler` - fills base PSR-7 request with the data from the DTO.

Request handlers are using `RetailCrm\Api\Model\RequestData` DTO to share state between handlers.

Those are handlers that can be used for response processing:
* `AccountNotFoundHandler` - detects when RetailCRM with specified API URL is not exist and throws specified exception.
* `CallbackResponseHandler` - processes a response using provided callback.
* `ErrorResponseHandler` - detects an error response, throws correct exception.
* `FilesDownloadResponseHandler` - handles `/api/v5/files/download` response.
* `UnmarshalResponseHandler` - unmarshals response body into response DTO.

Response handlers are using `RetailCrm\Api\Model\ResponseData` DTO to share state between handlers.

There are two built-in handlers which are most useful to users who want to modify the processing pipelines: `CallbackRequestHandler` and 
`CallbackResponseHandler`. Both handlers use provided callbacks to modify a request or response. You can initialize those 
with the examples below:

```php
use RetailCrm\Api\Handler\Request\CallbackRequestHandler;
use RetailCrm\Api\Model\RequestData;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;

$handler = new CallbackRequestHandler(
    static function (
        RequestData $requestData,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
        UriFactoryInterface $uriFactory
    ) {
        if (null !== $requestData->request) {
            $requestData->request = $requestData->request->withHeader('X-Rlimit-Token', 'example_token');
        }
    }
);
```

```php
use RetailCrm\Api\Exception\Api\MissingParameterException;
use RetailCrm\Api\Factory\ApiExceptionFactory;
use RetailCrm\Api\Handler\Response\CallbackResponseHandler;
use RetailCrm\Api\Model\Response\Api\Credentials;
use RetailCrm\Api\Model\Response\ErrorResponse;
use RetailCrm\Api\Model\ResponseData;
use Liip\Serializer\SerializerInterface;
use Psr\EventDispatcher\EventDispatcherInterface;

$handler = new CallbackResponseHandler(
    static function (
        ResponseData $data,
        SerializerInterface $serializer,
        EventDispatcherInterface $eventDispatcher,
        ApiExceptionFactory $apiExceptionFactory
    ) {
        if (
            $data->responseModel instanceof Credentials &&
            !in_array('/api/customers/create', $data->responseModel->credentials)
        ) {
            $data->responseModel = new ErrorResponse();
            $data->responseModel->errorMsg = 'Parameter "/api/customers/create" is missing';
            
            throw new MissingParameterException($data->responseModel, 400);
        }
    }
);
```

Both handlers above can be appended to request and response pipelines. Let's move on to the next part to learn how
you can append handlers to the chain using `ClientFactory` or `ClientBuilder`.

### Modifying the default pipeline

Two limitations apply to default pipeline modifying:
1. Chain ordering cannot be changed. Your handler will always be at the end of the default chain.
1. Callback handlers will always call the next handler. There is no way to stop the next handlers in the chain.

However, you can construct your own pipeline which won't be bound by the first limitation. And the second limitation can be
circumvented by [implementing your own handler](implementing_a_handler.md).

Both `ClientFactory` and `ClientBuilder` allow you to append your own handlers to the processing pipeline. They provide 
those methods:

```php
/**
 * Appends an additional request handler into the request processing chain.
 *
 * @param \RetailCrm\Api\Interfaces\HandlerInterface $handler
 */
public function appendRequestHandler(HandlerInterface $handler);

/**
 * Appends an additional handler into the response processing chain.
 *
 * @param \RetailCrm\Api\Interfaces\HandlerInterface $handler
 */
public function appendResponseHandler(HandlerInterface $handler);

/**
 * Appends an additional request handlers into the request processing chain.
 *
 * @param \RetailCrm\Api\Interfaces\HandlerInterface[] $handlers
 */
public function appendRequestHandlers(array $handlers);

/**
 * Appends an additional response handlers into the response processing chain.
 *
 * @param \RetailCrm\Api\Interfaces\HandlerInterface[] $handlers
 */
public function appendResponseHandlers(array $handlers);
```

You can use those methods to pass the handler into desired chain. Take a look at the examples. This code will initialize the client 
with provided `CallbackRequestHandler`. Instantiation will be done via `ClientFactory`:

```php
use RetailCrm\Api\Factory\ClientFactory;
use RetailCrm\Api\Handler\Request\CallbackRequestHandler;
use RetailCrm\Api\Model\RequestData;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;

$handler = new CallbackRequestHandler(
    static function (
        RequestData $requestData,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
        UriFactoryInterface $uriFactory
    ) {
        if (null !== $requestData->request) {
            $requestData->request = $requestData->request->withHeader('X-Rlimit-Token', 'example_token');
        }
    }
);

$factory = new ClientFactory();
$client = $factory->appendRequestHandler($handler)->createClient('https://test.retailcrm.pro', 'apiKey');
```

And this code will instantiate a client using `ClientBuilder`. But this time we're modifying response pipeline:

```php
use RetailCrm\Api\Builder\ClientBuilder;
use RetailCrm\Api\Builder\FormEncoderBuilder;
use RetailCrm\Api\Exception\Api\MissingParameterException;
use RetailCrm\Api\Factory\ApiExceptionFactory;
use RetailCrm\Api\Handler\Request\HeaderAuthenticatorHandler;
use RetailCrm\Api\Handler\Response\CallbackResponseHandler;
use RetailCrm\Api\Model\Response\Api\Credentials;
use RetailCrm\Api\Model\Response\ErrorResponse;
use RetailCrm\Api\Model\ResponseData;
use Liip\Serializer\SerializerInterface;
use Psr\EventDispatcher\EventDispatcherInterface;

$handler = new CallbackResponseHandler(
    static function (
        ResponseData $data,
        SerializerInterface $serializer,
        EventDispatcherInterface $eventDispatcher,
        ApiExceptionFactory $apiExceptionFactory
    ) {
        if (
            $data->responseModel instanceof Credentials &&
            !in_array('/api/customers/create', $data->responseModel->credentials)
        ) {
            $data->responseModel = new ErrorResponse();
            $data->responseModel->errorMsg = 'Parameter "/api/customers/create" is missing';
            
            throw new MissingParameterException($data->responseModel, 400);
        }
    }
);

$formEncoder = (new FormEncoderBuilder())->setCacheDir('cache')->build();
$builder = new ClientBuilder();
$client = $builder->setApiUrl('https://test.retailcrm.pro')
    ->setAuthenticatorHandler(new HeaderAuthenticatorHandler('apiKey'))
    ->setFormEncoder($formEncoder)
    ->appendRequestHandler($handler)
    ->build();
```

That's how you can modify request and response processing chains. However, you also can use the default pipeline factory 
to pass desired handlers into the chain. Default request and response pipelines are constructed by those static factories:
```php
RetailCrm\Api\Factory\RequestPipelineFactory::createDefaultPipeline()
RetailCrm\Api\Factory\ResponsePipelineFactory::createDefaultPipeline()
```

Look at the example below to learn how to use those static factories. In this example we will modify both the request 
and response pipelines:

```php
use Liip\Serializer\SerializerInterface;
use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use RetailCrm\Api\Builder\ClientBuilder;
use RetailCrm\Api\Builder\FormEncoderBuilder;
use RetailCrm\Api\Component\Transformer\RequestTransformer;
use RetailCrm\Api\Component\Transformer\ResponseTransformer;
use RetailCrm\Api\Exception\Api\MissingParameterException;
use RetailCrm\Api\Factory\ApiExceptionFactory;
use RetailCrm\Api\Factory\RequestPipelineFactory;
use RetailCrm\Api\Factory\ResponsePipelineFactory;
use RetailCrm\Api\Handler\Request\CallbackRequestHandler;
use RetailCrm\Api\Handler\Request\HeaderAuthenticatorHandler;
use RetailCrm\Api\Handler\Response\CallbackResponseHandler;
use RetailCrm\Api\Model\RequestData;
use RetailCrm\Api\Model\Response\Api\Credentials;
use RetailCrm\Api\Model\Response\ErrorResponse;
use RetailCrm\Api\Model\ResponseData;

$requestHandler = new CallbackRequestHandler(
    static function (
        RequestData $requestData,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
        UriFactoryInterface $uriFactory
    ) {
        if (null !== $requestData->request) {
            $requestData->request = $requestData->request->withHeader('X-Rlimit-Token', 'example_token');
        }
    }
);

$responseHandler = new CallbackResponseHandler(
    static function (
        ResponseData $data,
        SerializerInterface $serializer,
        EventDispatcherInterface $eventDispatcher,
        ApiExceptionFactory $apiExceptionFactory
    ) {
        if (
            $data->responseModel instanceof Credentials &&
            !in_array('/api/customers/create', $data->responseModel->credentials)
        ) {
            $data->responseModel = new ErrorResponse();
            $data->responseModel->errorMsg = 'Parameter "/api/customers/create" is missing';
            
            throw new MissingParameterException($data->responseModel, 400);
        }
    }
);

$builder = new ClientBuilder();
$formEncoder = (new FormEncoderBuilder())->setCacheDir('cache')->build();
$client = $builder->setApiUrl('https://test.retailcrm.pro')
    ->setAuthenticatorHandler(new HeaderAuthenticatorHandler('apiKey'))
    ->setRequestTransformer(new RequestTransformer(
        RequestPipelineFactory::createDefaultPipeline(
            $formEncoder,
            null, // PSR factories will be found by the service discovery.
            null,
            null,
            $requestHandler
        )
    ))
    ->setResponseTransformer(new ResponseTransformer(
        ResponsePipelineFactory::createDefaultPipeline(
            $formEncoder->getSerializer(),
            new ApiExceptionFactory(),
            null, // No EventDispatcherInterface was provided
            $responseHandler
        )
    ))->build();
```

### Constructing the pipeline from scratch

Both `RequestTransformer` and `ResponseTransformer` accept the `HandlerInterface` instance as the first argument. You can
look into `RequestPipelineFactory` and `ResponsePipelineFactory` source code to learn how to build your own pipeline from 
scratch. This is, however, is discouraged.
