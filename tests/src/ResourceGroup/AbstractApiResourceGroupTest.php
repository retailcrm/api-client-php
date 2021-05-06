<?php

/**
 * PHP version 7.3
 *
 * @category AbstractApiResourceGroupTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use League\Event\EventDispatcher;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Event\FailureRequestEvent;
use RetailCrm\Api\Event\SuccessRequestEvent;
use RetailCrm\Api\Exception\Api\AccessDeniedException;
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
        $mock = static::getMockClient();
        $mock->on(
            static::createUnversionedRequestMatcher('api-versions')->setMethod(RequestMethod::GET),
            static::responseJson(200, $json)
        );

        $client = TestClientFactory::createClient($mock, $logger);
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

        $mock = static::getMockClient();
        $mock->on(
            static::createUnversionedRequestMatcher('api-versions')->setMethod(RequestMethod::GET),
            static::responseJson(200, $json)
        );

        $client = TestClientFactory::createClient($mock, null, $dispatcher);
        $client->api->apiVersions();

        self::assertInstanceOf(SuccessRequestEvent::class, $event);
        self::assertNotNull($event->getResponse());
        self::assertNotEmpty($event->getResponse()->getBody()->__toString());
        self::assertInstanceOf(ApiVersionsResponse::class, $event->getResponseModel());
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

        $mock = static::getMockClient();
        $mock->on(
            static::createUnversionedRequestMatcher('api-versions')->setMethod(RequestMethod::GET),
            static::responseJson(403, $json)
        );

        $client = TestClientFactory::createClient($mock, null, $dispatcher);

        try {
            $client->api->apiVersions();
        } catch (AccessDeniedException $exception) {}

        self::assertInstanceOf(FailureRequestEvent::class, $event);
        self::assertNotNull($event->getResponse());
        self::assertNotEmpty($event->getResponse()->getBody()->__toString());
        self::assertInstanceOf(AccessDeniedException::class, $event->getException());
        self::assertEquals('Access denied.', $event->getException()->getErrorResponse()->errorMsg);
        self::assertEquals(403, $event->getException()->getStatusCode());
    }
}
