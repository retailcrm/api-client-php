## Controlling HTTP abstraction layer

You can replace default PSR dependencies in the client while using `ClientFactory` or `ClientBuilder`. It can be useful for tests 
or if you want to use a specific implementation that is not supported by the service discovery.

Both `ClientFactory` and `ClientBuilder` provide those methods:

```php
/**
 * Set your PSR-18 HTTP client.
 *
 * Service discovery will be used if no client has been provided.
 *
 * @param \Psr\Http\Client\ClientInterface $httpClient
 */
public function setHttpClient(\Psr\Http\Client\ClientInterface $httpClient);

/**
 * Sets PSR-17 compatible stream factory. You can skip this step if you want to use service discovery.
 *
 * @param \Psr\Http\Message\StreamFactoryInterface|null $streamFactory
 */
public function setStreamFactory(?\Psr\Http\Message\StreamFactoryInterface $streamFactory);

/**
 * Sets PSR-17 compatible request factory. You can skip this step if you want to use service discovery.
 *
 * @param \Psr\Http\Message\RequestFactoryInterface|null $requestFactory
 */
public function setRequestFactory(?\Psr\Http\Message\RequestFactoryInterface $requestFactory);

/**
 * Sets PSR-17 compatible URI factory. You can skip this step if you want to use service discovery.
 *
 * @param \Psr\Http\Message\UriFactoryInterface|null $uriFactory
 */
public function setUriFactory(?\Psr\Http\Message\UriFactoryInterface $uriFactory);
```

They can be used to specify PSR dependencies like this:

```php
$psr17Factory = new \Nyholm\Psr7\Factory\Psr17Factory();
$factory = new \RetailCrm\Api\Factory\ClientFactory();
$factory->setHttpClient(new \Http\Client\Curl\Client())
    ->setRequestFactory($psr17Factory)
    ->setStreamFactory($psr17Factory)
    ->setUriFactory($psr17Factory);

$client = $factory->createClient('https://test.retailcrm.pro', 'apiKey');
```

Or like this:

```php
$psr17Factory = new \Nyholm\Psr7\Factory\Psr17Factory();
$builder = new \RetailCrm\Api\Builder\ClientBuilder();
$client = $builder
    ->setApiUrl('https://test.retailcrm.pro')
    ->setAuthenticatorHandler(new \RetailCrm\Api\Handler\Request\HeaderAuthenticatorHandler('apiKey'))
    ->setHttpClient(new \Http\Client\Curl\Client())
    ->setRequestFactory($psr17Factory)
    ->setStreamFactory($psr17Factory)
    ->setUriFactory($psr17Factory)
    ->build();
```

By replacing the HTTP client in the test environment you can easily mock requests and responses via libraries like 
[`neur0toxine/pock`](https://packagist.org/packages/neur0toxine/pock) or [`php-http/mock-client`](https://packagist.org/packages/php-http/mock-client).
