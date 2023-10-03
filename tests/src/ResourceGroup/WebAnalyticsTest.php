<?php

/**
 * PHP version 7.3
 *
 * @category WebAnalyticsTest
 * @package RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Model\Entity\WebAnalytics\ClientId;
use RetailCrm\Api\Model\Entity\WebAnalytics\Customer;
use RetailCrm\Api\Model\Entity\WebAnalytics\Order;
use RetailCrm\Api\Model\Entity\WebAnalytics\Source;
use RetailCrm\Api\Model\Request\WebAnalytics\ClientIdUploadRequest;
use RetailCrm\Api\Model\Request\WebAnalytics\SourcesUploadRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class WebAnalyticsTest
 *
 * @category WebAnalyticsTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class WebAnalyticsTest extends AbstractApiResourceGroupTestCase
{
    public function testClientIdsUpload(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity = new ClientId();
        $entity->value = 'value';
        $entity->order = new Order();
        $entity->order->id = 10;
        $entity->order->externalId = 'externalId';
        $entity->order->number = 'number';
        $entity->customer = new Customer();
        $entity->customer->id = 10;
        $entity->customer->externalId = 'externalId';

        $request = new ClientIdUploadRequest([$entity]);

        $mock = static::createApiMockBuilder('web-analytics/client-ids/upload');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(201)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->webAnalytics->clientIdsUpload($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testSourcesUpload(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity = new Source();
        $entity->source = "sourse";
        $entity->medium = "medium";
        $entity->campaign = "campaign";
        $entity->keyword = "keyword";
        $entity->content = "content";
        $entity->clientId = "10";
        $entity->order = new Order();
        $entity->order->id = 10;
        $entity->order->externalId = "externalId";
        $entity->order->number = "number";
        $entity->customer = new Customer();
        $entity->customer->id = 10;
        $entity->customer->externalId = 'externalId';

        $request = new SourcesUploadRequest([$entity]);

        $mock = static::createApiMockBuilder('web-analytics/sources/upload');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(201)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->webAnalytics->sourcesUpload($request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
