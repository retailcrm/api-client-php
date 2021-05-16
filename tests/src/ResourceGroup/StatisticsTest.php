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

        $mock = static::createApiMockBuilder('statistic/update');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->statistics->update();

        self::assertModelEqualsToResponse($json, $response);
    }
}
