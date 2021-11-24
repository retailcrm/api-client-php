<?php

/**
 * PHP version 7.3
 *
 * @category AbstractApiResourceGroupTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use League\Event\EventDispatcher;
use Psr\Http\Message\RequestInterface;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Event\FailureRequestEvent;
use RetailCrm\Api\Event\SuccessRequestEvent;
use RetailCrm\Api\Exception\Api\AccessDeniedException;
use RetailCrm\Api\Handler\Request\GetParameterAuthenticatorHandler;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Interfaces\ClientExceptionInterface;
use RetailCrm\Api\Interfaces\RequestSenderInterface;
use RetailCrm\Api\Model\Response\Api\ApiVersionsResponse;
use RetailCrm\TestUtils\ArrayLogger;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;
use RetailCrm\TestUtils\TestConfig;

/**
 * Class AbstractApiResourceGroupTest
 *
 * @category AbstractApiResourceGroupTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class AbstractApiResourceGroupTest extends AbstractApiResourceGroupTestCase
{
    public function testLogging(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "versions": [
    "3.0",
    "4.0",
    "5.0"
  ]
}
EOF;
        $host = parse_url(TestConfig::getApiUrl(), PHP_URL_HOST);
        $logs = [
            [
                'level' => 'debug',
                'message' => sprintf('[RetailCRM API Request]: GET URL: "https://%s/api/api-versions", ', $host) .
                    'Headers: "{"Host":["' . $host . '"],' .
                    '"User-Agent":["RetailCRM PHP API Client \/ v6.x"],"Accept":["application\/json"],' .
                    '"X-Api-Key":["' . TestConfig::getApiKey() . '"]}", ' .
                    'Body: ""',
                'context' => []
            ],
            [
                'level' => 'debug',
                'message' => '[RetailCRM API Response]: Status: "200", Body: "{
  "success": true,
  "versions": [
    "3.0",
    "4.0",
    "5.0"
  ]
}"',
                'context' => []
            ],
        ];
        $logger = new ArrayLogger();
        $mock = static::createUnversionedApiMockBuilder('api-versions');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient(), $logger);
        $client->api->apiVersions();

        self::assertEquals($logs, $logger->getMessages());
    }

    public function testSuccessRequestEvent(): void
    {
        /** @var SuccessRequestEvent|null $event */
        $event = null;
        $json = <<<'EOF'
{
  "success": true,
  "versions": [
    "3.0",
    "4.0",
    "5.0"
  ]
}
EOF;
        $dispatcher = new EventDispatcher();
        $dispatcher->subscribeTo(SuccessRequestEvent::class, static function (object $item) use (&$event) {
            $event = $item;
        });

        $mock = static::createUnversionedApiMockBuilder('api-versions');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient(), null, $dispatcher);
        $client->api->apiVersions();

        self::assertInstanceOf(SuccessRequestEvent::class, $event);
        self::assertNotNull($event->getResponse());
        self::assertNotEmpty($event->getResponse()->getBody()->__toString());
        self::assertInstanceOf(ApiVersionsResponse::class, $event->getResponseModel());
        self::assertInstanceOf(RequestInterface::class, $event->getRequest());
        self::assertEmpty($event->getRequest()->getBody()->__toString());
        self::assertStringContainsString(
            parse_url(TestConfig::getApiUrl(), PHP_URL_HOST),
            $event->getApiUrl()
        );
        self::assertStringContainsString(
            parse_url(TestConfig::getApiUrl(), PHP_URL_HOST),
            $event->getApiDomain()
        );
        self::assertEquals(TestConfig::getApiKey(), $event->getApiKey());
    }

    public function testSuccessCustomRequestEvent(): void
    {
        /** @var SuccessRequestEvent|null $event */
        $event = null;
        $json = <<<'EOF'
{
  "success": true,
  "versions": [
    "3.0",
    "4.0",
    "5.0"
  ]
}
EOF;
        $dispatcher = new EventDispatcher();
        $dispatcher->subscribeTo(SuccessRequestEvent::class, static function (object $item) use (&$event) {
            $event = $item;
        });

        $mock = static::createUnversionedApiMockBuilder('api-versions');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient(), null, $dispatcher);
        $client->customMethods->register(
            'apiVersions',
            static function (RequestSenderInterface $sender, array $data, array $context) {
                return $sender->send(
                    RequestMethod::GET,
                    sprintf('https://%s/api/api-versions', $sender->host())
                )['versions'];
            }
        );
        $client->customMethods->call('apiVersions');

        self::assertInstanceOf(SuccessRequestEvent::class, $event);
        self::assertNotNull($event->getResponse());
        self::assertNotEmpty($event->getResponse()->getBody()->__toString());
        self::assertNull($event->getResponseModel());
        self::assertEquals([
            'success' => true,
            'versions' => ["3.0", "4.0", "5.0"]
        ], $event->getResponseArray());
        self::assertInstanceOf(RequestInterface::class, $event->getRequest());
        self::assertEmpty($event->getRequest()->getBody()->__toString());
        self::assertStringContainsString(
            parse_url(TestConfig::getApiUrl(), PHP_URL_HOST),
            $event->getApiUrl()
        );
        self::assertStringContainsString(
            parse_url(TestConfig::getApiUrl(), PHP_URL_HOST),
            $event->getApiDomain()
        );
        self::assertEquals(TestConfig::getApiKey(), $event->getApiKey());
    }

    public function testFailureRequestEvent(): void
    {
        /** @var FailureRequestEvent|null $event */
        $event = null;
        $json = <<<'EOF'
{
  "errorMsg": "Access denied.",
  "success": false
}
EOF;
        $dispatcher = new EventDispatcher();
        $dispatcher->subscribeTo(FailureRequestEvent::class, static function (object $item) use (&$event) {
            $event = $item;
        });

        $mock = static::createUnversionedApiMockBuilder('api-versions');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(403)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient(), null, $dispatcher);

        try {
            $client->api->apiVersions();
        } catch (AccessDeniedException $exception) {
        }

        self::assertInstanceOf(FailureRequestEvent::class, $event);
        self::assertNotNull($event->getResponse());
        self::assertNotEmpty($event->getResponse()->getBody()->__toString());
        self::assertInstanceOf(AccessDeniedException::class, $event->getException());
        self::assertEquals('Access denied.', $event->getException()->getErrorResponse()->errorMsg);
        self::assertEquals(403, $event->getException()->getStatusCode());
        self::assertStringContainsString(
            parse_url(TestConfig::getApiUrl(), PHP_URL_HOST),
            $event->getApiUrl()
        );
        self::assertStringContainsString(
            parse_url(TestConfig::getApiUrl(), PHP_URL_HOST),
            $event->getApiDomain()
        );
        self::assertEquals(TestConfig::getApiKey(), $event->getApiKey());
    }

    /**
     * @dataProvider failureRequestEventSuppressThrow
     */
    public function testFailureRequestEventSuppressThrow(bool $useClientException): void
    {
        /** @var FailureRequestEvent $event */
        $event = null;

        $dispatcher = new EventDispatcher();
        $dispatcher->subscribeTo(
            FailureRequestEvent::class,
            static function (FailureRequestEvent $item) use (&$event) {
                $item->suppressThrow();
                $event = $item;
            }
        );

        $mock = static::createUnversionedApiMockBuilder('api-versions');

        if ($useClientException) {
            $mock->matchMethod(RequestMethod::GET)
                ->throwClientException();
        } else {
            $mock->matchMethod(RequestMethod::GET)
                ->reply(403)
                ->withJson([
                    'success' => false,
                    'errorMsg' => 'Access denied.'
                ]);
        }

        $client = TestClientFactory::createClient($mock->getClient(), null, $dispatcher);
        $client->api->apiVersions();

        self::assertInstanceOf(FailureRequestEvent::class, $event);
        self::assertInstanceOf(
            $useClientException ? ClientExceptionInterface::class : ApiExceptionInterface::class,
            $event->getException()
        );
    }

    public function testFailureCustomRequestEvent(): void
    {
        /** @var FailureRequestEvent|null $event */
        $event = null;
        $json = <<<'EOF'
{
  "errorMsg": "Access denied.",
  "success": false
}
EOF;
        $dispatcher = new EventDispatcher();
        $dispatcher->subscribeTo(FailureRequestEvent::class, static function (object $item) use (&$event) {
            $event = $item;
        });

        $mock = static::createUnversionedApiMockBuilder('api-versions');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(403)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient(), null, $dispatcher);
        $client->customMethods->register(
            'apiVersions',
            static function (RequestSenderInterface $sender, array $data, array $context) {
                return $sender->send(
                    RequestMethod::GET,
                    sprintf('https://%s/api/api-versions', $sender->host())
                )['versions'];
            }
        );

        try {
            $client->customMethods->call('apiVersions');
        } catch (AccessDeniedException $exception) {
        }

        self::assertInstanceOf(FailureRequestEvent::class, $event);
        self::assertNotNull($event->getResponse());
        self::assertNotEmpty($event->getResponse()->getBody()->__toString());
        self::assertInstanceOf(AccessDeniedException::class, $event->getException());
        self::assertEquals('Access denied.', $event->getException()->getErrorResponse()->errorMsg);
        self::assertEquals(403, $event->getException()->getStatusCode());
        self::assertStringContainsString(
            parse_url(TestConfig::getApiUrl(), PHP_URL_HOST),
            $event->getApiUrl()
        );
        self::assertStringContainsString(
            parse_url(TestConfig::getApiUrl(), PHP_URL_HOST),
            $event->getApiDomain()
        );
        self::assertEquals(TestConfig::getApiKey(), $event->getApiKey());
    }

    /**
     * @dataProvider failureRequestEventSuppressThrow
     */
    public function testFailureRequestEventCustomSuppressThrow(bool $useClientException): void
    {
        /** @var FailureRequestEvent $event */
        $event = null;

        $dispatcher = new EventDispatcher();
        $dispatcher->subscribeTo(
            FailureRequestEvent::class,
            static function (FailureRequestEvent $item) use (&$event) {
                $item->suppressThrow();
                $event = $item;
            }
        );

        $mock = static::createUnversionedApiMockBuilder('api-versions');

        if ($useClientException) {
            $mock->matchMethod(RequestMethod::GET)
                ->throwClientException();
        } else {
            $mock->matchMethod(RequestMethod::GET)
                ->reply(403)
                ->withJson([
                    'success' => false,
                    'errorMsg' => 'Access denied.'
                ]);
        }

        $client = TestClientFactory::createClient($mock->getClient(), null, $dispatcher);
        $client->customMethods->register(
            'apiVersions',
            static function (RequestSenderInterface $sender, array $data, array $context) {
                return $sender->send(
                    RequestMethod::GET,
                    sprintf('https://%s/api/api-versions', $sender->host())
                )['versions'] ?? [];
            }
        );
        $client->customMethods->call('apiVersions');

        self::assertInstanceOf(FailureRequestEvent::class, $event);
        self::assertInstanceOf(
            $useClientException ? ClientExceptionInterface::class : ApiExceptionInterface::class,
            $event->getException()
        );
    }

    public function failureRequestEventSuppressThrow(): array
    {
        return [[true], [false]];
    }

    public function testRequestEventGetAuthenticator(): void
    {
        /** @var SuccessRequestEvent|null $event */
        $event = null;
        $json = <<<'EOF'
{
  "success": true,
  "versions": [
    "3.0",
    "4.0",
    "5.0"
  ]
}
EOF;
        $dispatcher = new EventDispatcher();
        $dispatcher->subscribeTo(SuccessRequestEvent::class, static function (object $item) use (&$event) {
            $event = $item;
        });

        $mock = static::createUnversionedApiMockBuilder('api-versions', false);
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient(
            $mock->getClient(),
            null,
            $dispatcher,
            new GetParameterAuthenticatorHandler(TestConfig::getApiKey())
        );
        $client->api->apiVersions();

        self::assertEquals(TestConfig::getApiKey(), $event->getApiKey());
    }
}
