<?php

/**
 * PHP version 7.3
 *
 * @category ApiTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Enum\SiteAccess;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class ApiTest
 *
 * @category ApiTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class ApiTest extends AbstractApiResourceGroupTestCase
{
    public function testApiVersions(): void
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
        $apiVersions = $client->api->apiVersions();

        self::assertTrue($apiVersions->success);
        self::assertEquals(["3.0", "4.0", "5.0"], $apiVersions->versions);
    }

    public function testCredentials(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "scopes": ["order_read", "customer_read", "reference_read"],
  "credentials": [
    "/api/integration-modules/{code}",
    "/api/integration-modules/{code}/edit"
  ],
  "siteAccess": "access_full"
}
EOF;

        $mock = static::createUnversionedApiMockBuilder('credentials');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client      = TestClientFactory::createClient($mock->getClient());
        $credentials = $client->api->credentials();

        self::assertTrue($credentials->success);
        self::assertEquals(SiteAccess::ACCESS_FULL, $credentials->siteAccess);
        self::assertEquals([
            "/api/integration-modules/{code}",
            "/api/integration-modules/{code}/edit"
        ], $credentials->credentials);
        self::assertEquals(["order_read", "customer_read", "reference_read"], $credentials->scopes);
    }

    public function testSystemInfo(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "systemVersion": "8.1.51",
  "publicUrl": "https://test.retailcrm.ru",
  "technicalUrl": "https://testwtestxtestvtestytestwtesthm6.retailcrm.io"
}
EOF;
        $mock = static::createUnversionedApiMockBuilder('system-info');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $systemInfo = $client->api->systemInfo();

        self::assertModelEqualsToResponse($json, $systemInfo);
    }
}
