<?php

/**
 * PHP version 7.3
 *
 * @category CustomMethodsTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use Psr\Http\Client\ClientInterface;
use RetailCrm\Api\Component\CustomApiMethod;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Exception\Client\HandlerException;
use RetailCrm\Api\Interfaces\RequestSenderInterface;
use RetailCrm\TestUtils\APIVersionsResponse;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\PockBuilder;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class CustomMethodsTest
 *
 * @category CustomMethodsTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class CustomMethodsTest extends AbstractApiResourceGroupTestCase
{
    public function testCall(): void
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

        $mock = static::createUnversionedApiMockBuilder('api-versions');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $client->customMethods->register(
            'apiVersions',
            static function (RequestSenderInterface $sender, array $data, array $context) {
                return $sender->send(
                    RequestMethod::GET,
                    sprintf('https://%s/api/api-versions', $sender->host())
                )['versions'];
            }
        );
        $apiVersions = $client->customMethods->call('apiVersions');

        self::assertEquals(["3.0", "4.0", "5.0"], $apiVersions);
    }

    public function testCallDtos(): void
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

        $mock = static::createUnversionedApiMockBuilder('api-versions');
        $mock->matchMethod(RequestMethod::GET)
            ->matchExactQuery(['param' => 'value'])
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $client->customMethods->register(
            'apiVersions',
            static function (RequestSenderInterface $sender, $data, array $context) {
                $response = $sender->send(
                    RequestMethod::GET,
                    sprintf('https://%s/api/api-versions', $sender->host()),
                    json_decode($data, true, 512, JSON_THROW_ON_ERROR)
                );

                return new APIVersionsResponse(
                    $response['success'] ?? false,
                    $response['versions'] ?? []
                );
            }
        );

        /** @var \RetailCrm\TestUtils\APIVersionsResponse $apiVersions */
        $apiVersions = $client->customMethods->call('apiVersions', '{"param": "value"}');

        self::assertEquals(["3.0", "4.0", "5.0"], $apiVersions->versions);
    }

    public function testCallContext(): void
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

        $mock = static::createUnversionedApiMockBuilder('api-versions/v1');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $client->customMethods->register(
            'apiVersions',
            static function (RequestSenderInterface $sender, array $data, array $context) {
                return $sender->send(
                    RequestMethod::GET,
                    sprintf('https://%s/api/api-versions/v%s', $sender->host(), $context['v'])
                )['versions'];
            }
        );
        $apiVersions = $client->customMethods->call('apiVersions', [], ['v' => '1']);

        self::assertEquals(["3.0", "4.0", "5.0"], $apiVersions);
    }

    public function testCallMagicContext(): void
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

        $mock = static::createUnversionedApiMockBuilder('api-versions/v1');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $client->customMethods->register(
            'apiVersions',
            static function (RequestSenderInterface $sender, array $data, array $context) {
                return $sender->send(
                    RequestMethod::GET,
                    sprintf('https://%s/api/api-versions/v%s', $sender->host(), $context['v'])
                )['versions'];
            }
        );
        $apiVersions = $client->customMethods->apiVersions([], ['v' => '1']);

        self::assertEquals(["3.0", "4.0", "5.0"], $apiVersions);
    }

    public function testCallWithParamsGet(): void
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

        $mock = static::createUnversionedApiMockBuilder('api-versions');
        $mock->matchMethod(RequestMethod::GET)
            ->matchExactQuery(['param' => 'value'])
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $client->customMethods->register(
            'apiVersions',
            static function (RequestSenderInterface $sender, array $data, array $context) {
                return $sender->send(
                    RequestMethod::GET,
                    sprintf('https://%s/api/api-versions', $sender->host()),
                    $data
                )['versions'];
            }
        );
        $apiVersions = $client->customMethods->call('apiVersions', ['param' => 'value']);

        self::assertEquals(["3.0", "4.0", "5.0"], $apiVersions);
    }

    public function testCallWithParamsPost(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $mock = static::createApiMockBuilder('some-method');
        $mock->matchMethod(RequestMethod::POST)
            ->matchExactFormData(['param' => 'value'])
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $client->customMethods->register('someMethod', new CustomApiMethod(RequestMethod::POST, 'some-method'));
        $response = $client->customMethods->call('someMethod', ['param' => 'value']);

        self::assertEquals(['success' => true], $response);
    }

    public function testCallMagic(): void
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

        $mock = static::createUnversionedApiMockBuilder('api-versions');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $client->customMethods->register(
            'apiVersions',
            static function (RequestSenderInterface $sender, array $data, array $context) {
                return $sender->send(
                    RequestMethod::GET,
                    sprintf('https://%s/api/api-versions', $sender->host())
                )['versions'];
            }
        );
        $apiVersions = $client->customMethods->apiVersions();

        self::assertEquals(["3.0", "4.0", "5.0"], $apiVersions);
    }

    public function testCallNoMethod(): void
    {
        $this->expectException(HandlerException::class);
        $client = TestClientFactory::createClient(static::noSendingMock());
        $client->customMethods->call('nonexistent');
    }

    public function testCallMagicNoMethod(): void
    {
        $this->expectException(HandlerException::class);
        $client = TestClientFactory::createClient(static::noSendingMock());
        $client->customMethods->nonexistent();
    }

    public function testCallMagicInvalidData(): void
    {
        $this->expectException(HandlerException::class);
        $client = TestClientFactory::createClient(static::noSendingMock());
        $client->customMethods->register('failure', new CustomApiMethod(RequestMethod::GET, 'failure'));
        $client->customMethods->failure(0, []);
    }

    public function testCallMagicInvalidContext(): void
    {
        $this->expectException(HandlerException::class);
        $client = TestClientFactory::createClient(static::noSendingMock());
        $client->customMethods->register('failure', new CustomApiMethod(RequestMethod::GET, 'failure'));
        $client->customMethods->failure([], 0);
    }

    private static function noSendingMock(): ClientInterface
    {
        return (new PockBuilder())->always()->throwClientException('No requests should be sent.')->getClient();
    }
}
