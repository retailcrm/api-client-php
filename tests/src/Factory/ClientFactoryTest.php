<?php

/**
 * PHP version 7.3
 *
 * @category ClientFactoryTest
 * @package  RetailCrm\Tests\Factory
 */

namespace RetailCrm\Tests\Factory;

use Doctrine\Common\Annotations\PsrCachedReader;
use Http\Discovery\Psr18ClientDiscovery;
use League\Container\Container;
use League\Event\EventDispatcher;
use Nyholm\Psr7\Factory\Psr17Factory;
use RetailCrm\TestUtils\PockBuilder;
use Psr\Cache\CacheItemPoolInterface;
use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Log\NullLogger;
use RetailCrm\Api\Enum\CacheDirectories;
use RetailCrm\Api\Factory\ClientFactory;
use RetailCrm\Api\Handler\Request\CallbackRequestHandler;
use RetailCrm\Api\Handler\Response\CallbackResponseHandler;
use RetailCrm\Api\Interfaces\ClientFactoryInterface;
use RetailCrm\Api\Model\RequestData;
use RetailCrm\Api\Model\ResponseData;
use RetailCrm\TestUtils\ClientFactoryDependentService;
use RetailCrm\TestUtils\ReflectionUtils;
use RetailCrm\TestUtils\TestCase\ClientTestCase;
use RetailCrm\TestUtils\TestConfig;
use Symfony\Component\Cache\Adapter\ArrayAdapter;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

/**
 * Class ClientFactoryTest
 *
 * @category ClientFactoryTest
 * @package  RetailCrm\Tests\Factory
 */
class ClientFactoryTest extends ClientTestCase
{
    public function testDI(): void
    {
        $container = new Container();

        $container->add(CacheItemPoolInterface::class, new FilesystemAdapter('test_app'));
        $container->add(EventDispatcherInterface::class, EventDispatcher::class);
        $container->add(ClientFactoryInterface::class, ClientFactory::class)
            ->addMethodCalls([
                'setCache' => [CacheItemPoolInterface::class],
                'setEventDispatcher' => [EventDispatcherInterface::class],
            ]);
        $container->add(ClientFactoryDependentService::class)->addArgument(ClientFactoryInterface::class);

        /** @var ClientFactoryDependentService $service */
        $service = $container->get(ClientFactoryDependentService::class);
        $service->setHttpClient(
            (new PockBuilder())
                ->matchOrigin(TestConfig::getApiUrl())
                ->throwClientException()
                ->getClient()
        );

        self::assertFalse($service->isApiAccessible(TestConfig::getApiUrl(), TestConfig::getApiKey()));
    }

    public function testCreateClient(): void
    {
        $client = (new ClientFactory())->createClient(TestConfig::getApiUrl(), TestConfig::getApiKey());

        static::assertClientIsValid($client, PsrCachedReader::class, FilesystemAdapter::class);
    }

    public function testCreateWithCache(): void
    {
        $client = (new ClientFactory())
            ->setCache(new ArrayAdapter())
            ->createClient(TestConfig::getApiUrl(), TestConfig::getApiKey());

        static::assertClientIsValid($client, PsrCachedReader::class, ArrayAdapter::class);
    }

    public function testCreateWithCacheDir(): void
    {
        $client = (new ClientFactory())
            ->setCacheDir(sys_get_temp_dir())
            ->createClient(TestConfig::getApiUrl(), TestConfig::getApiKey());
        $cacheDir = implode(
            '',
            [sys_get_temp_dir(), CacheDirectories::MAIN_DIR]
        );

        static::assertDirectoryExists($cacheDir);
        static::assertClientIsValid(
            $client,
            PsrCachedReader::class,
            FilesystemAdapter::class,
            $cacheDir
        );
    }

    public function testCreateWithDebugLogger(): void
    {
        $client = (new ClientFactory())
            ->setDebugLogger(new NullLogger())
            ->createClient(TestConfig::getApiUrl(), TestConfig::getApiKey());

        static::assertClientIsValid($client, PsrCachedReader::class, FilesystemAdapter::class, '', true);
    }

    public function testCreateWithPsrDeps(): void
    {
        $factory = new Psr17Factory();
        $client = (new ClientFactory())
            ->setHttpClient(Psr18ClientDiscovery::find())
            ->setRequestFactory($factory)
            ->setStreamFactory($factory)
            ->setUriFactory($factory)
            ->createClient(TestConfig::getApiUrl(), TestConfig::getApiKey());

        static::assertClientIsValid($client, PsrCachedReader::class, FilesystemAdapter::class);
    }

    public function testAppendRequestHandlers(): void
    {
        $handler = new CallbackRequestHandler(
            static function (
                RequestData $requestData,
                RequestFactoryInterface $requestFactory,
                StreamFactoryInterface $streamFactory,
                UriFactoryInterface $uriFactory
            ) {
                if (null !== $requestData->request) {
                    $requestData->request = $requestData->request
                        ->withHeader('X-Rlimit-Token', 'example_token');
                }
            }
        );
        $mockJson = [
            'success' => true,
            'versions' => ['9.0']
        ];

        $client = (new ClientFactory())
            ->appendRequestHandlers([$handler])
            ->createClient(TestConfig::getApiUrl(), TestConfig::getApiKey());

        static::assertClientIsValid($client, PsrCachedReader::class, FilesystemAdapter::class);

        /** @var \RetailCrm\Api\ResourceGroup\Api $api */
        $api = ReflectionUtils::getProperty($client, 'api');
        $requestTransformer = ReflectionUtils::getProperty($api, 'requestTransformer');

        /** @var \RetailCrm\Api\Interfaces\HandlerInterface $requestHandler */
        $requestHandler = ReflectionUtils::getProperty($requestTransformer, 'handler');

        self::assertInstanceOf(CallbackRequestHandler::class, $requestHandler->getLastHandler());

        $mockBuilder = new PockBuilder();
        $mockBuilder->matchOrigin(TestConfig::getApiUrl())
            ->matchPath('/api/api-versions')
            ->matchHeaders([
                'X-Api-Key' => TestConfig::getApiKey(),
                'X-Rlimit-Token' => 'example_token'
            ])->reply(200)
            ->withJson($mockJson);

        ReflectionUtils::setProperty($api, 'httpClient', $mockBuilder->getClient());

        self::assertEquals($mockJson['versions'], $client->api->apiVersions()->versions);
    }

    public function testAppendResponseHandlers(): void
    {
        $client = (new ClientFactory())
            ->appendResponseHandlers([new CallbackResponseHandler(static function (ResponseData $responseData) {
                return;
            })])
            ->createClient(TestConfig::getApiUrl(), TestConfig::getApiKey());

        static::assertClientIsValid($client, PsrCachedReader::class, FilesystemAdapter::class);

        $api = ReflectionUtils::getProperty($client, 'api');
        $responseTransformer = ReflectionUtils::getProperty($api, 'responseTransformer');

        /** @var \RetailCrm\Api\Interfaces\HandlerInterface $responseHandler */
        $responseHandler = ReflectionUtils::getProperty($responseTransformer, 'handler');

        self::assertInstanceOf(CallbackResponseHandler::class, $responseHandler->getLastHandler());
    }
}
