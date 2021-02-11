<?php

/**
 * PHP version 7.3
 *
 * @category CostsTest
 * @package  RetailCrm\Tests\Section
 */

namespace RetailCrm\Tests\Section;

use RetailCrm\Api\Model\Filter\Costs\CostsFilter;
use RetailCrm\Api\Model\Request\Costs\CostsRequest;
use RetailCrm\Test\TestClientFactory;

/**
 * Class CostsTest
 *
 * @category CostsTest
 * @package  RetailCrm\Tests\Section
 */
class CostsTest extends AbstractApiSectionTest
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
                ->setQueryParams(static::encodeFormArray($costsRequest)),
            static::responseJson(200, $json)
        );

        $client = TestClientFactory::createClient($mock);
        $costs  = $client->costs->costs($costsRequest);

        self::assertModelEqualsToResponse($json, $costs);
    }
}
