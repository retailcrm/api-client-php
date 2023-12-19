<?php

/**
 * PHP version 7.3
 *
 * @category FeaturesTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Api\FeaturesCheckRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class FeaturesTest
 *
 * @category FeaturesTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class FeaturesTest extends AbstractApiResourceGroupTestCase
{
    public function testCheck(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "features": [
    {
      "code": "communication.chatbot_feature_1",
      "available": true
    },
    {
      "code": "communication.chatbot_feature_2",
      "available": false
    }
  ]
}
EOF;
        $request           = new FeaturesCheckRequest();
        $request->features = ['communication.chatbot_feature_1', 'communication.chatbot_feature_2'];

        $mock = static::createApiMockBuilder('features/check');
        $mock->matchMethod(RequestMethod::GET)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $featuresCheck = $client->features->check($request);

        self::assertModelEqualsToResponse($json, $featuresCheck);
    }
}
