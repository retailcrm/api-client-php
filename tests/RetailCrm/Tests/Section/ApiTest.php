<?php

/**
 * PHP version 7.3
 *
 * @category ApiTest
 * @package  RetailCrm\Tests\Section
 */

namespace RetailCrm\Tests\Section;

use RetailCrm\Test\TestClientFactory;

/**
 * Class ApiTest
 *
 * @category ApiTest
 * @package  RetailCrm\Tests\Section
 */
class ApiTest extends AbstractApiSectionTest
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
        $mock->on(static::createUnversionedRequestMatcher('api-versions'), static::responseJson(200, $json));

        $client = TestClientFactory::createClient($mock);
        $apiVersions = $client->api->apiVersions();

        self::assertTrue($apiVersions->success);
        self::assertEquals(["3.0", "4.0", "5.0"], $apiVersions->versions);
    }
}
