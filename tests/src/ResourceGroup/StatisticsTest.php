<?php

/**
 * PHP version 7.3
 *
 * @category StatisticsTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class StatisticsTest
 *
 * @category StatisticsTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class StatisticsTest extends AbstractApiResourceGroupTestCase
{
    public function testUpdate(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('statistic/update')
                ->setMethod(RequestMethod::GET),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->statistics->update();

        self::assertModelEqualsToResponse($json, $response);
    }
}
