<?php

/**
 * PHP version 7.3
 *
 * @category CostsTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use DateTime;
use Http\Client\Curl\Client;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\Costs\Cost;
use RetailCrm\Api\Model\Filter\Costs\CostsFilter;
use RetailCrm\Api\Model\Request\Costs\CostsCreateRequest;
use RetailCrm\Api\Model\Request\Costs\CostsRequest;
use RetailCrm\Api\Model\Source;
use RetailCrm\Test\TestClientFactory;

/**
 * Class CostsTest
 *
 * @category CostsTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class CostsTest extends AbstractApiResourceGroupTest
{
    public function testCosts(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "pagination": {
    "limit": 20,
    "totalCount": 7,
    "currentPage": 1,
    "totalPageCount": 1
  },
  "costs": [
    {
      "id": 739,
      "dateFrom": "2019-03-26",
      "dateTo": "2019-03-26",
      "summ": 20,
      "costItem": "products-purchase-price",
      "createdAt": "2019-03-26 15:33:50",
      "createdBy": "19",
      "order": {
        "id": 2452,
        "number": "2452C"
      },
      "sites": [
        "moysklad"
      ]
    }
  ]
}
EOF;

        $costsRequest = new CostsRequest();
        $costsRequest->limit = 20;
        $costsRequest->page = 1;
        $costsRequest->filter = new CostsFilter();
        $costsRequest->filter->sites = ['moysklad', 'aliexpress'];
        $costsRequest->filter->maxSumm = 20;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('costs')
                ->setMethod(RequestMethod::GET)
                ->setQueryParams(static::encodeFormArray($costsRequest)),
            static::responseJson(200, $json)
        );

        $client = TestClientFactory::createClient($mock);
        $costs  = $client->costs->costs($costsRequest);

        self::assertModelEqualsToResponse($json, $costs);
    }

    public function testCostsCreate(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 1
}
EOF;

        $request                         = new CostsCreateRequest();
        $request->site                   = 'aliexpress';
        $request->cost                   = new Cost();
        $request->cost->sites            = ['aliexpress'];
        $request->cost->source           = new Source();
        $request->cost->source->source   = 'source';
        $request->cost->source->campaign = 'campaign';
        $request->cost->source->content  = 'content';
        $request->cost->source->keyword  = 'keyword';
        $request->cost->source->medium   = 'medium';
        $request->cost->comment          = 'comment';
        $request->cost->costItem         = 'products-purchase-price';
        $request->cost->createdAt        = new DateTime();
        $request->cost->dateFrom         = new DateTime();
        $request->cost->dateTo           = new DateTime();
        $request->cost->summ             = 100.10;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('costs/create')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->costs->costsCreate($request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
