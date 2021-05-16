<?php

/**
 * PHP version 7.3
 *
 * @category SegmentsTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\NumericBoolean;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Filter\Segments\SegmentApiFilter;
use RetailCrm\Api\Model\Request\Segments\SegmentsRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class SegmentsTest
 *
 * @category SegmentsTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class SegmentsTest extends AbstractApiResourceGroupTestCase
{
    public function testList(): void
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
  "segments": [
    {
      "id": 32,
      "code": "ForVK",
      "name": "ForVK",
      "createdAt": "2019-06-17 17:05:24",
      "isDynamic": true,
      "customersCount": 700,
      "active": true
    },
    {
      "id": 31,
      "code": "pol-ne-ukazan",
      "name": "Пол не указан",
      "createdAt": "2018-09-04 16:35:59",
      "isDynamic": true,
      "customersCount": 1300,
      "active": true
    },
    {
      "id": 26,
      "code": "bez-otmen",
      "name": "Без отмен",
      "createdAt": "2018-09-04 16:35:59",
      "isDynamic": true,
      "customersCount": 1303,
      "active": true
    },
    {
      "id": 20,
      "code": "nizkiy-sredniy-chek",
      "name": "Низкий средний чек",
      "createdAt": "2018-09-04 16:35:59",
      "isDynamic": true,
      "customersCount": 1253,
      "active": true
    },
    {
      "id": 17,
      "code": "nizkiy-ltv",
      "name": "Низкий LTV",
      "createdAt": "2018-09-04 16:35:59",
      "isDynamic": true,
      "customersCount": 1008,
      "active": true
    },
    {
      "id": 14,
      "code": "malenkaya-summa-pokupok",
      "name": "Маленькая сумма покупок",
      "createdAt": "2018-09-04 16:35:59",
      "isDynamic": true,
      "customersCount": 1058,
      "active": true
    },
    {
      "id": 11,
      "code": "davnie",
      "name": "Давние",
      "createdAt": "2018-09-04 16:35:59",
      "isDynamic": true,
      "customersCount": 937,
      "active": true
    }
  ]
}
EOF;

        $request                            = new SegmentsRequest();
        $request->filter                    = new SegmentApiFilter();
        $request->filter->active            = NumericBoolean::TRUE;
        $request->filter->minCustomersCount = 700;

        $mock = static::createApiMockBuilder('segments');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->segments->list($request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
