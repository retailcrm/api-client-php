<?php

/**
 * PHP version 7.3
 *
 * @category CustomMethodsTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use Psr\Http\Client\ClientInterface;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Exception\Client\HandlerException;
use RetailCrm\Api\Interfaces\RequestSenderInterface;
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

    private static function noSendingMock(): ClientInterface
    {
        return (new PockBuilder())->always()->throwClientException('No requests should be sent.')->getClient();
    }
}
