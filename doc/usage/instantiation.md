## Instantiation

There are several ways to instantiate the Client. Let's take look at them: from the simplest one to the most complex.

* [Instantiation via `SimpleClientFactory`](#instantiation-via-simpleclientfactory)
* [Instantiation via `ClientFactory`](#instantiation-via-clientfactory)
  + [Simple example](#simple-example)
  + [Abstract example](#abstract-example)
  + [Real-world example (Symfony)](#real-world-example-symfony)
* [Instantiation via `ClientBuilder`](#instantiation-via-clientbuilder)

### Instantiation via `SimpleClientFactory`

It's the easiest way to instantiate an API client. You can use this method if you just want to use API client without 
thinking much about integration with the app or framework.

Example:

```php
use RetailCrm\Api\Factory\SimpleClientFactory;

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'key');
```

That's it. You can use `$client` to make requests. However, even this simple method allows you to pass the `CacheItemPoolInterface` instance 
(`symfony/cache` is being used by default) or path to the cache directory. The cache is being used by the client to store 
annotations which omits the necessity to parse them each time you send a request.

Example with the `CacheItemPoolInterface` instance (we're using Redis as cache here):

```php
use Symfony\Component\Cache\Adapter\RedisAdapter;
use RetailCrm\Api\Enum\CacheDirectories;
use RetailCrm\Api\Factory\SimpleClientFactory;

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

$client = SimpleClientFactory::createWithCache(
    'https://test.retailcrm.pro',
    'key',
    new RedisAdapter($redis, CacheDirectories::DIR_NAME)
);
```

`CacheDirectories::DIR_NAME` is optional here. You can use any other namespace you want. By default, `CacheDirectories::DIR_NAME` 
will be used as a namespace by default if the cache instance was created by the client automatically.

It's easier to use `SimpleClientFactory::createWithCacheDir` if you just want to specify your directory for cache instead of 
default temporary directory:

```php
use RetailCrm\Api\Factory\SimpleClientFactory;

$client = SimpleClientFactory::createWithCacheDir('https://test.retailcrm.pro', 'key', __DIR__ . '/cache');
```

You can find more details about `SimpleClientFactory` in the documentation:
* [`SimpleClientFactory`](https://retailcrm.github.io/api-client-php/classes/RetailCrm-Api-Factory-SimpleClientFactory.html)

### Instantiation via `ClientFactory`

The main difference between `SimpleClientFactory` and `ClientFactory` is the fact that the second factory is stateful. 
It allows you to better integrate this client with your application. Consider the following: you may just set all global client 
dependencies into the `ClientFactory` during the dependency container instantiation, and use the factory after that 
to instantiate any number of clients you want.

#### Simple example

Here's an example of `ClientFactory` usage without any integration with the framework or the app:

```php
use RetailCrm\Api\Factory\ClientFactory;
use League\Event\EventDispatcher;

$eventDispatcher = new EventDispatcher();
$factory = new ClientFactory();
$factory
    ->setCacheDir('/tmp/retailcrm_cache')
    ->setEventDispatcher($eventDispatcher);

$client = $factory->createClient('https://test.retailcrm.pro', 'key');
```

Doesn't look that impressive, right? That's because `ClientFactory` is not supposed to be used just like that. 
It won't give you any benefits in comparison to `SimpleClientFactory` with such usage.

Let's take a look at the more complex example. We'll use `league/container` here to demonstrate how you can integrate 
`ClientFactory` with the DI you're using.

#### Abstract example

Let's assume that you have a specific service that should instantiate a Client for some internal purposes.
Here it is:

```php
namespace App\Services;

use RetailCrm\Api\Interfaces\ClientFactoryInterface;
use Throwable;

class ClientFactoryDependentService
{
    /** @var ClientFactoryInterface */
    private $clientFactory;

    public function __construct(ClientFactoryInterface $clientFactory)
    {
        $this->clientFactory = $clientFactory;
    }

    public function isApiAccessible(string $apiUrl, string $apiKey): bool
    {
        try {
            $client = $this->clientFactory->createClient($apiUrl, $apiKey);
            $client->api->apiVersions();

            return true;
        } catch (Throwable $throwable) {
            return false;
        }
    }
}
```

And you have a controller which returns a JSON response with the API availability flag. It requires the service above.

```php
namespace App\Controller;

use Some\Framework\Specific\Annotations\Route;
use Some\Framework\Specific\Controller;
use Some\Framework\Specific\Response;

class HealthCheckController extends Controller
{
    /** @var ClientFactoryDependentService */
    private $service;

    public function __construct(ClientFactoryDependentService $service)
    {
        $this->service = $service;
    }

    /**
     * @Route("/healthcheck")
     */
    public function healthCheckAction(): Response
    {
        return $this->responseJson([
            'is_api_accessible' => $this->service->isApiAccessible($_GET['apiUrl'], $_GET['apiKey'])
        ]);
    }
}
```

During the container configuration you configure the container to instantiate proper `ClientFactory` once. After that 
you can use the factory in any service you want. Here's an example with the `league/container`:

```php
use RetailCrm\Api\Factory\ClientFactory;
use RetailCrm\Api\Interfaces\ClientFactoryInterface;
use League\Container\Container;
use League\Event\EventDispatcher;
use Psr\Cache\CacheItemPoolInterface;
use Psr\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use App\Services\ClientFactoryDependentService;
use App\Controller\HealthCheckController;

$container = new Container();

$container->add(CacheItemPoolInterface::class, new FilesystemAdapter('test_app'));
$container->add(EventDispatcherInterface::class, EventDispatcher::class);
$container->add(ClientFactoryInterface::class, ClientFactory::class)
    ->addMethodCalls([
        'setCache' => [CacheItemPoolInterface::class],
        'setEventDispatcher' => [EventDispatcherInterface::class],
    ]);
$container->add(ClientFactoryDependentService::class)->addArgument(ClientFactoryInterface::class);
$container->add(HealthCheckController::class)->addArgument(ClientFactoryDependentService::class);
```

That's it! Now your controller is using the underlying service to form a response. The service is using `ClientFactory` 
which is being instantiated only once by the container. `ClientFactory` can be injected into other services as well, and it 
will be the same instance.

#### Real-world example (Symfony)

You can use this exact service definition to instantiate a `ClientFactory` instance:

```yaml
RetailCrm\Api\Interfaces\ClientFactoryInterface:
  class: 'RetailCrm\Api\Factory\ClientFactory'
  calls:
    - setCacheDir: ['%kernel.cache_dir%']
    - setEventDispatcher: ['@event_dispatcher']
```

That's it. Now you can autowire `ClientFactoryInterface` in your services. It also allows you to mock the factory itself 
in the tests using `services_test.yml`.

You can find more details about `ClientFactory` in the documentation:
* [`ClientFactory`](https://retailcrm.github.io/api-client-php/classes/RetailCrm-Api-Factory-ClientFactory.html)

### Instantiation via `ClientBuilder`

`ClientBuilder` is the most powerful, and most complex method of client instantiation. It allows you to replace any client's 
external dependencies with your own implementations. Here's an example of `ClientBuilder` usage:

```php
use Http\Client\Curl\Client as CurlClient;
use League\Event\EventDispatcher;
use Nyholm\Psr7\Factory\Psr17Factory;
use RetailCrm\Api\Builder\ClientBuilder;
use RetailCrm\Api\Builder\FormEncoderBuilder;
use RetailCrm\Api\Component\Transformer\RequestTransformer;
use RetailCrm\Api\Component\Transformer\ResponseTransformer;
use RetailCrm\Api\Factory\ApiExceptionFactory;
use RetailCrm\Api\Factory\RequestPipelineFactory;
use RetailCrm\Api\Factory\ResponsePipelineFactory;
use RetailCrm\Api\Handler\Request\HeaderAuthenticatorHandler;

$eventDispatcher = new EventDispatcher();
$psr17Factory = new Psr17Factory();
$httpClient = new CurlClient();

$builder = new ClientBuilder();
$formEncoder = (new FormEncoderBuilder())->setCacheDir('cache')->build();
$client = $builder->setApiUrl('https://test.retailcrm.pro')
    ->setAuthenticatorHandler(new HeaderAuthenticatorHandler('apiKey'))
    ->setFormEncoder($formEncoder)
    ->setHttpClient($httpClient)
    ->setRequestTransformer(new RequestTransformer(
        RequestPipelineFactory::createDefaultPipeline(
            $formEncoder,
            $psr17Factory, // PSR-17 UriFactoryInterface
            $psr17Factory, // PSR-17 RequestFactoryInterface
            $psr17Factory  // PSR-17 StreamFactoryInterface
        )
    ))
    ->setResponseTransformer(new ResponseTransformer(
        ResponsePipelineFactory::createDefaultPipeline(
            $formEncoder->getSerializer(),
            new ApiExceptionFactory(),
            $eventDispatcher
        )
    ))->build();
```

You can find more details about this in the documentation:
* [`ClientBuilder`](https://retailcrm.github.io/api-client-php/classes/RetailCrm-Api-Builder-ClientBuilder.html)
* [`FormEncoderBuilder`](https://retailcrm.github.io/api-client-php/classes/RetailCrm-Api-Builder-FormEncoderBuilder.html)
* [`RequestPipelineFactory`](https://retailcrm.github.io/api-client-php/classes/RetailCrm-Api-Factory-RequestPipelineFactory.html)
* [`ResponsePipelineFactory`](https://retailcrm.github.io/api-client-php/classes/RetailCrm-Api-Factory-ResponsePipelineFactory.html)
