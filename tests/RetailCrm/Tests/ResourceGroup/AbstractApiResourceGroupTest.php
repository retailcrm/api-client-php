<?php

/**
 * PHP version 7.3
 *
 * @category AbstractApiResourceGroupTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Test\ArrayLogger;
use RetailCrm\Test\TestClientFactory;
use RetailCrm\Test\TestConfig;

/**
 * Class AbstractApiResourceGroupTest
 *
 * @category AbstractApiResourceGroupTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class AbstractApiResourceGroupTest extends AbstractApiResourceGroupTestCase
{
    public function testLogging()
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
        $logs = [
            [
                'level' => 'debug',
                'message' => '[RetailCRM API Request]: GET URL: "https://azgalot.retailcrm.ru/api/api-versions", ' .
                    'Headers: "{"Host":["' . parse_url(TestConfig::getApiUrl(), PHP_URL_HOST) . '"],' .
                    '"x-api-key":["' . TestConfig::getApiKey() . '"]}", ' .
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
}
