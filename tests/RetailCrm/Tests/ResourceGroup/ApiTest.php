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
use RetailCrm\Test\TestClientFactory;

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

        $mock = static::getMockClient();
        $mock->on(
            static::createUnversionedRequestMatcher('api-versions')->setMethod(RequestMethod::GET),
            static::responseJson(200, $json)
        );

        $client = TestClientFactory::createClient($mock);
        $apiVersions = $client->api->apiVersions();

        self::assertTrue($apiVersions->success);
        self::assertEquals(["3.0", "4.0", "5.0"], $apiVersions->versions);
    }

    public function testCredentials(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "credentials": [
    "/api/integration-modules/{code}",
    "/api/integration-modules/{code}/edit"
  ],
  "siteAccess": "access_full"
}
EOF;

        $mock = static::getMockClient();
        $mock->on(
            static::createUnversionedRequestMatcher('credentials')->setMethod(RequestMethod::GET),
            static::responseJson(200, $json)
        );

        $client      = TestClientFactory::createClient($mock);
        $credentials = $client->api->credentials();

        self::assertTrue($credentials->success);
        self::assertEquals(SiteAccess::ACCESS_FULL, $credentials->siteAccess);
        self::assertEquals([
            "/api/integration-modules/{code}",
            "/api/integration-modules/{code}/edit"
        ], $credentials->credentials);
    }
}
