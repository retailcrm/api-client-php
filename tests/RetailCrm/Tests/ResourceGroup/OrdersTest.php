<?php

/**
 * PHP version 7.3
 *
 * @category OrdersTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use DateInterval;
use DateTime;
use Http\Client\Curl\Client;
use RetailCrm\Api\Enum\CombineTechnique;
use RetailCrm\Api\Enum\CountryCodeIso3166;
use RetailCrm\Api\Enum\Customers\CustomerType;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Model\Entity\FixExternalRow;
use RetailCrm\Api\Model\Entity\Order\Delivery\OrderDeliveryAddress;
use RetailCrm\Api\Model\Entity\Order\Delivery\SerializedOrderDelivery;
use RetailCrm\Api\Model\Entity\Order\Items\Offer;
use RetailCrm\Api\Model\Entity\Order\Items\OrderProduct;
use RetailCrm\Api\Model\Entity\Order\Items\PriceType;
use RetailCrm\Api\Model\Entity\Order\Items\Unit;
use RetailCrm\Api\Model\Entity\Order\Order;
use RetailCrm\Api\Model\Entity\Order\Payment;
use RetailCrm\Api\Model\Entity\Order\SerializedOrderReference;
use RetailCrm\Api\Model\Entity\Order\SerializedRelationCustomer;
use RetailCrm\Api\Model\Filter\Order\OrderFilter;
use RetailCrm\Api\Model\Request\Orders\OrdersCombineRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersCreateRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersFixExternalIdsRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersRequest;
use RetailCrm\Test\TestClientFactory;

/**
 * Class OrdersTest
 *
 * @category OrdersTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class OrdersTest extends AbstractApiResourceGroupTestCase
{
    public function testList()
    {
        $json = <<<'EOF'
{
    "success": true,
    "pagination": {
        "limit": 20,
        "totalCount": 1,
        "currentPage": 1,
        "totalPageCount": 1
    },
    "orders": [
        {
            "slug": 7141,
            "bonusesCreditTotal": 0,
            "bonusesChargeTotal": 0,
            "id": 7141,
            "number": "7141C",
            "orderType": "test",
            "orderMethod": "phone",
            "privilegeType": "none",
            "countryIso": "RU",
            "createdAt": "2021-02-25 09:37:48",
            "statusUpdatedAt": "2021-02-25 09:37:55",
            "summ": 0,
            "totalSumm": 0,
            "prepaySum": 0,
            "purchaseSumm": 60,
            "markDatetime": "2021-02-25 09:37:48",
            "lastName": "М",
            "firstName": "Андрей",
            "patronymic": "В",
            "phone": "+79515151515",
            "email": "andrey@andrey.ru",
            "call": false,
            "expired": false,
            "managerId": 28,
            "customer": {
                "type": "customer",
                "id": 4924,
                "isContact": false,
                "createdAt": "2020-12-15 11:07:32",
                "managerId": 28,
                "vip": false,
                "bad": false,
                "site": "moysklad",
                "contragent": {
                    "contragentType": "individual"
                },
                "tags": [],
                "marginSumm": -1157.1,
                "totalSumm": 10224.4,
                "averageSumm": 681.63,
                "ordersCount": 15,
                "costSumm": 11381.5,
                "customFields": {
                    "galkatrue": true,
                    "moyskladexternalid": "03956a7e-3ead-11eb-0a80-017300081b64"
                },
                "personalDiscount": 0,
                "cumulativeDiscount": 0,
                "address": {
                    "id": 3515,
                    "index": "344001",
                    "countryIso": "RU",
                    "region": "Ростовская область",
                    "regionId": 73,
                    "city": "Ростов-на-Дону",
                    "cityId": 4298,
                    "cityType": "г.",
                    "street": "Пушкинская",
                    "streetId": 1583265,
                    "streetType": "ул.",
                    "building": "10",
                    "text": "ул. Пушкинская, д. 10"
                },
                "segments": [
                    {
                        "id": 3,
                        "code": "klienti-iz-gorodov-millionnikov",
                        "name": "Клиенты из городов-миллионников",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 64,
                        "active": true
                    },
                    {
                        "id": 4,
                        "code": "rossiya",
                        "name": "Россия",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 206,
                        "active": true
                    },
                    {
                        "id": 8,
                        "code": "rossiya-krome-msk",
                        "name": "Россия (кроме МСК)",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 174,
                        "active": true
                    },
                    {
                        "id": 9,
                        "code": "nedavnie",
                        "name": "Недавние",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 81,
                        "active": true
                    },
                    {
                        "id": 14,
                        "code": "malenkaya-summa-pokupok",
                        "name": "Маленькая сумма покупок",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 1052,
                        "active": true
                    },
                    {
                        "id": 17,
                        "code": "nizkiy-ltv",
                        "name": "Низкий LTV",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 1007,
                        "active": true
                    },
                    {
                        "id": 20,
                        "code": "nizkiy-sredniy-chek",
                        "name": "Низкий средний чек",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 1245,
                        "active": true
                    },
                    {
                        "id": 26,
                        "code": "bez-otmen",
                        "name": "Без отмен",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 1293,
                        "active": true
                    },
                    {
                        "id": 29,
                        "code": "mugchini",
                        "name": "Мужчины",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 9,
                        "active": true
                    }
                ],
                "firstName": "Андрей",
                "lastName": "М",
                "patronymic": "В",
                "sex": "male",
                "presumableSex": "male",
                "email": "andrey@andrey.ru",
                "phones": [
                    {
                        "number": "+79515151515"
                    }
                ]
            },
            "contact": {
                "type": "customer",
                "id": 4924,
                "isContact": false,
                "createdAt": "2020-12-15 11:07:32",
                "managerId": 28,
                "vip": false,
                "bad": false,
                "site": "moysklad",
                "contragent": {
                    "contragentType": "individual"
                },
                "tags": [],
                "marginSumm": -1157.1,
                "totalSumm": 10224.4,
                "averageSumm": 681.63,
                "ordersCount": 15,
                "costSumm": 11381.5,
                "customFields": {
                    "galkatrue": true,
                    "moyskladexternalid": "03956a7e-3ead-11eb-0a80-017300081b64"
                },
                "personalDiscount": 0,
                "cumulativeDiscount": 0,
                "address": {
                    "id": 3515,
                    "index": "344001",
                    "countryIso": "RU",
                    "region": "Ростовская область",
                    "regionId": 73,
                    "city": "Ростов-на-Дону",
                    "cityId": 4298,
                    "cityType": "г.",
                    "street": "Пушкинская",
                    "streetId": 1583265,
                    "streetType": "ул.",
                    "building": "10",
                    "text": "ул. Пушкинская, д. 10"
                },
                "segments": [
                    {
                        "id": 3,
                        "code": "klienti-iz-gorodov-millionnikov",
                        "name": "Клиенты из городов-миллионников",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 64,
                        "active": true
                    },
                    {
                        "id": 4,
                        "code": "rossiya",
                        "name": "Россия",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 206,
                        "active": true
                    },
                    {
                        "id": 8,
                        "code": "rossiya-krome-msk",
                        "name": "Россия (кроме МСК)",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 174,
                        "active": true
                    },
                    {
                        "id": 9,
                        "code": "nedavnie",
                        "name": "Недавние",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 81,
                        "active": true
                    },
                    {
                        "id": 14,
                        "code": "malenkaya-summa-pokupok",
                        "name": "Маленькая сумма покупок",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 1052,
                        "active": true
                    },
                    {
                        "id": 17,
                        "code": "nizkiy-ltv",
                        "name": "Низкий LTV",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 1007,
                        "active": true
                    },
                    {
                        "id": 20,
                        "code": "nizkiy-sredniy-chek",
                        "name": "Низкий средний чек",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 1245,
                        "active": true
                    },
                    {
                        "id": 26,
                        "code": "bez-otmen",
                        "name": "Без отмен",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 1293,
                        "active": true
                    },
                    {
                        "id": 29,
                        "code": "mugchini",
                        "name": "Мужчины",
                        "createdAt": "2018-09-04 16:35:59",
                        "isDynamic": true,
                        "customersCount": 9,
                        "active": true
                    }
                ],
                "firstName": "Андрей",
                "lastName": "М",
                "patronymic": "В",
                "sex": "male",
                "presumableSex": "male",
                "email": "andrey@andrey.ru",
                "phones": [
                    {
                        "number": "+79515151515"
                    }
                ]
            },
            "contragent": {
                "contragentType": "individual"
            },
            "delivery": {
                "cost": 0,
                "netCost": 0,
                "address": {
                    "index": "344001",
                    "countryIso": "RU",
                    "region": "Ростовская область",
                    "regionId": 73,
                    "city": "г. Ростов-на-Дону",
                    "cityId": 4298,
                    "street": "ул. Пушкинская",
                    "streetId": 1583265,
                    "building": "10",
                    "text": "ул. Пушкинская, д. 10"
                }
            },
            "site": "moysklad",
            "status": "assembling",
            "statusComment": "",
            "items": [
                {
                    "markingCodes": [],
                    "id": 11301,
                    "externalIds": [
                        {
                            "code": "moyskladOrder",
                            "value": "0f5b6bb5-7734-11eb-0a80-05c20001ea81"
                        }
                    ],
                    "priceType": {
                        "code": "base"
                    },
                    "initialPrice": 0,
                    "discountTotal": 0,
                    "prices": [
                        {
                            "price": 0,
                            "quantity": 1
                        }
                    ],
                    "vatRate": "none",
                    "createdAt": "2021-02-25 09:37:48",
                    "quantity": 1,
                    "status": "new",
                    "offer": {
                        "displayName": "сбьорка№1445123",
                        "id": 61121,
                        "externalId": "tGunLo27jlPGmbA8BrHxY2",
                        "xmlId": "tGunLo27jlPGmbA8BrHxY2",
                        "name": "сбьорка№1445",
                        "article": "14451445-14451445",
                        "vatRate": "none",
                        "unit": {
                            "code": "796",
                            "name": "Штука",
                            "sym": "шт"
                        }
                    },
                    "properties": [],
                    "purchasePrice": 60
                }
            ],
            "payments": {},
            "fromApi": false,
            "weight": 1000,
            "length": 0,
            "width": 0,
            "height": 0,
            "shipmentStore": "main12",
            "shipmentDate": "2021-02-25",
            "shipped": true,
            "customFields": {
                "galka": false,
                "test_number": 0,
                "otpravit_dozakaz": false,
                "moyskladexternalid": "0f203a5f-7734-11eb-0a80-026b0001f435"
            }
        }
    ]
}
EOF;

        $request = new OrdersRequest();
        $request->filter = new OrderFilter();
        $request->filter->ids = [7141];

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('orders')
                ->setMethod(RequestMethod::GET)
                ->setQueryParams(static::encodeFormArray($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->orders->list($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCombine()
    {
        $json = <<<'EOF'
{
    "success": true,
    "errors": []
}
EOF;

        $request              = new OrdersCombineRequest();
        $request->order       = new SerializedOrderReference(7143);
        $request->resultOrder = new SerializedOrderReference(7140);
        $request->technique   = CombineTechnique::SUMM;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('orders/combine')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->orders->combine($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCreate()
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 7146,
  "order": {
    "slug": 7146,
    "bonusesCreditTotal": 0,
    "bonusesChargeTotal": 0,
    "id": 7146,
    "number": "7146A",
    "orderType": "test",
    "orderMethod": "phone",
    "privilegeType": "none",
    "countryIso": "RU",
    "createdAt": "2021-02-25 17:05:06",
    "statusUpdatedAt": "2021-02-25 17:05:06",
    "summ": 0,
    "totalSumm": 0,
    "prepaySum": 1000,
    "purchaseSumm": 60,
    "markDatetime": "2021-02-25 17:05:06",
    "lastName": "User",
    "firstName": "Test",
    "patronymic": "Patronymic",
    "phone": "89003005069",
    "email": "testuser12345678901@example.com",
    "call": false,
    "expired": false,
    "managerId": 28,
    "customer": {
      "type": "customer",
      "id": 4924,
      "isContact": false,
      "createdAt": "2020-12-15 11:07:32",
      "managerId": 28,
      "vip": false,
      "bad": false,
      "site": "moysklad",
      "contragent": {
        "contragentType": "individual"
      },
      "tags": [],
      "marginSumm": -1157.1,
      "totalSumm": 10224.4,
      "averageSumm": 681.63,
      "ordersCount": 15,
      "costSumm": 11381.5,
      "customFields": {
        "galkatrue": true,
        "moyskladexternalid": "03956a7e-3ead-11eb-0a80-017300081b64"
      },
      "personalDiscount": 0,
      "cumulativeDiscount": 0,
      "address": {
        "id": 3515,
        "index": "344001",
        "countryIso": "RU",
        "region": "Ростовская область",
        "regionId": 73,
        "city": "Ростов-на-Дону",
        "cityId": 4298,
        "cityType": "г.",
        "street": "Пушкинская",
        "streetId": 1583265,
        "streetType": "ул.",
        "building": "10",
        "text": "ул. Пушкинская, д. 10"
      },
      "segments": [
        {
          "id": 3,
          "code": "klienti-iz-gorodov-millionnikov",
          "name": "Клиенты из городов-миллионников",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 64,
          "active": true
        },
        {
          "id": 4,
          "code": "rossiya",
          "name": "Россия",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 206,
          "active": true
        },
        {
          "id": 8,
          "code": "rossiya-krome-msk",
          "name": "Россия (кроме МСК)",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 174,
          "active": true
        },
        {
          "id": 9,
          "code": "nedavnie",
          "name": "Недавние",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 81,
          "active": true
        },
        {
          "id": 14,
          "code": "malenkaya-summa-pokupok",
          "name": "Маленькая сумма покупок",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1053,
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
          "id": 20,
          "code": "nizkiy-sredniy-chek",
          "name": "Низкий средний чек",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1246,
          "active": true
        },
        {
          "id": 26,
          "code": "bez-otmen",
          "name": "Без отмен",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1293,
          "active": true
        },
        {
          "id": 29,
          "code": "mugchini",
          "name": "Мужчины",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 9,
          "active": true
        }
      ],
      "firstName": "Андрей",
      "lastName": "М",
      "patronymic": "В",
      "sex": "male",
      "presumableSex": "male",
      "email": "testuser12345678901@example.com",
      "phones": [
        {
          "number": "89003005069"
        },
        {
          "number": "+79515151515"
        }
      ]
    },
    "contact": {
      "type": "customer",
      "id": 4924,
      "isContact": false,
      "createdAt": "2020-12-15 11:07:32",
      "managerId": 28,
      "vip": false,
      "bad": false,
      "site": "moysklad",
      "contragent": {
        "contragentType": "individual"
      },
      "tags": [],
      "marginSumm": -1157.1,
      "totalSumm": 10224.4,
      "averageSumm": 681.63,
      "ordersCount": 15,
      "costSumm": 11381.5,
      "customFields": {
        "galkatrue": true,
        "moyskladexternalid": "03956a7e-3ead-11eb-0a80-017300081b64"
      },
      "personalDiscount": 0,
      "cumulativeDiscount": 0,
      "address": {
        "id": 3515,
        "index": "344001",
        "countryIso": "RU",
        "region": "Ростовская область",
        "regionId": 73,
        "city": "Ростов-на-Дону",
        "cityId": 4298,
        "cityType": "г.",
        "street": "Пушкинская",
        "streetId": 1583265,
        "streetType": "ул.",
        "building": "10",
        "text": "ул. Пушкинская, д. 10"
      },
      "segments": [
        {
          "id": 3,
          "code": "klienti-iz-gorodov-millionnikov",
          "name": "Клиенты из городов-миллионников",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 64,
          "active": true
        },
        {
          "id": 4,
          "code": "rossiya",
          "name": "Россия",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 206,
          "active": true
        },
        {
          "id": 8,
          "code": "rossiya-krome-msk",
          "name": "Россия (кроме МСК)",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 174,
          "active": true
        },
        {
          "id": 9,
          "code": "nedavnie",
          "name": "Недавние",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 81,
          "active": true
        },
        {
          "id": 14,
          "code": "malenkaya-summa-pokupok",
          "name": "Маленькая сумма покупок",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1053,
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
          "id": 20,
          "code": "nizkiy-sredniy-chek",
          "name": "Низкий средний чек",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1246,
          "active": true
        },
        {
          "id": 26,
          "code": "bez-otmen",
          "name": "Без отмен",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1293,
          "active": true
        },
        {
          "id": 29,
          "code": "mugchini",
          "name": "Мужчины",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 9,
          "active": true
        }
      ],
      "firstName": "Андрей",
      "lastName": "М",
      "patronymic": "В",
      "sex": "male",
      "presumableSex": "male",
      "email": "testuser12345678901@example.com",
      "phones": [
        {
          "number": "89003005069"
        },
        {
          "number": "+79515151515"
        }
      ]
    },
    "contragent": {
      "contragentType": "individual"
    },
    "delivery": {
      "cost": 0,
      "netCost": 0,
      "address": {
        "index": "344001",
        "countryIso": "RU",
        "region": "Ростовская область",
        "city": "г. Ростов-на-Дону",
        "street": "ул. Пушкинская",
        "building": "10",
        "text": "ул. Пушкинская, д. 10"
      }
    },
    "site": "moysklad",
    "status": "assembling",
    "statusComment": "Assembling order",
    "items": [
      {
        "markingCodes": [],
        "id": 11308,
        "priceType": {
          "code": "base"
        },
        "initialPrice": 0,
        "discountTotal": 0,
        "prices": [
          {
            "price": 0,
            "quantity": 1
          }
        ],
        "vatRate": "none",
        "createdAt": "2021-02-25 17:05:06",
        "quantity": 1,
        "status": "new",
        "offer": {
          "displayName": "сбьорка№1445123",
          "id": 61121,
          "externalId": "tGunLo27jlPGmbA8BrHxY2",
          "xmlId": "tGunLo27jlPGmbA8BrHxY2",
          "name": "сбьорка№1445",
          "article": "14451445-14451445",
          "vatRate": "none",
          "unit": {
            "code": "796",
            "name": "Штука",
            "sym": "шт"
          }
        },
        "properties": [],
        "purchasePrice": 60
      }
    ],
    "fullPaidAt": "2021-02-25 14:05:06",
    "payments": [
      {
        "id": 4554,
        "status": "paid",
        "type": "bank-card",
        "amount": 1000,
        "paidAt": "2021-02-25 14:05:06"
      }
    ],
    "fromApi": true,
    "weight": 1000,
    "shipmentStore": "main12",
    "shipmentDate": "2021-03-04",
    "shipped": false,
    "customFields": {
      "galka": false,
      "test_number": 0,
      "otpravit_dozakaz": false
    }
  }
}
EOF;

        $request         = new OrdersCreateRequest();
        $order           = new Order();
        $payment         = new Payment();
        $delivery        = new SerializedOrderDelivery();
        $deliveryAddress = new OrderDeliveryAddress();
        $offer           = new Offer();
        $item            = new OrderProduct();

        $payment->type   = 'bank-card';
        $payment->status = 'paid';
        $payment->amount = 1000;
        $payment->paidAt = new DateTime();

        $deliveryAddress->index      = '344001';
        $deliveryAddress->countryIso = CountryCodeIso3166::RUSSIAN_FEDERATION;
        $deliveryAddress->region     = 'Ростовская область';
        $deliveryAddress->city       = 'г. Ростов-на-Дону';
        $deliveryAddress->street     = 'ул. Пушкинская';
        $deliveryAddress->building   = '10';

        $delivery->address = $deliveryAddress;
        $delivery->cost    = 0;
        $delivery->netCost = 0;

        $offer->name        = 'Сборка №1445123';
        $offer->displayName = 'Сборка №1445123';
        $offer->xmlId       = 'tGunLo27jlPGmbA8BrHxY2';
        $offer->article     = '14451445-14451445';
        $offer->unit        = new Unit('796', 'Штука', 'шт');

        $item->offer         = $offer;
        $item->priceType     = new PriceType('base');
        $item->quantity      = 1;
        $item->purchasePrice = 60;

        $order->delivery      = $delivery;
        $order->items         = [$item];
        $order->payments      = [$payment];
        $order->orderType     = 'test';
        $order->orderMethod   = 'phone';
        $order->countryIso    = CountryCodeIso3166::RUSSIAN_FEDERATION;
        $order->firstName     = 'Test';
        $order->lastName      = 'User';
        $order->patronymic    = 'Patronymic';
        $order->phone         = '89003005069';
        $order->email         = 'testuser12345678901@example.com';
        $order->managerId     = 28;
        $order->customer      = SerializedRelationCustomer::withIdAndType(
            4924,
            CustomerType::CUSTOMER
        );
        $order->status        = 'assembling';
        $order->statusComment = 'Assembling order';
        $order->weight        = 1000;
        $order->shipmentStore = 'main12';
        $order->shipmentDate  = (new DateTime())->add(new DateInterval('P7D'));
        $order->shipped       = false;
        $order->customFields  = [
            "galka" => false,
            "test_number" => 0,
            "otpravit_dozakaz" => false,
        ];

        $request->order = $order;
        $request->site  = 'moysklad';

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('orders/create')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->orders->create($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testFixExternalIds()
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $request = new OrdersFixExternalIdsRequest();
        $request->orders = [
            new FixExternalRow(1, 'external_1'),
            new FixExternalRow(2, 'external_2'),
        ];

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('orders/fix-external-ids')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->orders->fixExternalIds($request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
