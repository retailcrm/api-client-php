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
use RetailCrm\Api\Model\Entity\WebAnalytics\Page;
use RetailCrm\Api\Model\Entity\WebAnalytics\Source;
use RetailCrm\Api\Model\Entity\WebAnalytics\Visit;
use RetailCrm\Api\Model\Request\WebAnalytics\ClientIdUploadRequest;
use RetailCrm\Api\Model\Request\WebAnalytics\SourcesUploadRequest;
use RetailCrm\Api\Model\Request\WebAnalytics\VisitsUploadRequest;
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

    public function testVisitsUpload(): void
    {
        $json = '{"success": true}';

        $entity = new Visit();
        $dateTime = new \DateTime('2023-12-06T12:00:00');
        $entity->createdAt = $dateTime->format('Y-m-d H:i:s');
        $entity->visitLength = 10;
        $entity->exitPage = '/exit-page';
        $entity->landingPage = '/landing-page';
        $entity->pageViews = 5;
        $entity->pageDepth = 3;
        $entity->customer = new Customer();
        $entity->customer->id = 10;
        $entity->customer->externalId = 'externalId';
        $entity->source = new Source();
        $entity->source->source = "source";
        $entity->source->medium = "medium";
        $entity->source->campaign = "campaign";
        $entity->source->keyword = "keyword";
        $entity->source->content = "content";
        $page1 = new Page();
        $page1->url = ('/page1');
        $page1->title = ('Page 1');
        $page1->countViews = 2;
        $page1->timeOnPage = 60;
        $page2 = new Page();
        $page2->url = ('/page2');
        $page2->title = ('Page 2');
        $page2->countViews = 3;
        $page2->timeOnPage = 45;
        $pages = [$page1, $page2];
        $entity->pages = $pages;
        $entity->clientId = '123456';
        $entity->site = 'example.com';

        $request = new VisitsUploadRequest([$entity]);

        $mock = static::createApiMockBuilder('web-analytics/visits/upload');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(201)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->webAnalytics->visitsUpload($request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
