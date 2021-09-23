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
use Psr\Http\Message\RequestInterface;
use RetailCrm\Api\Enum\ByIdentifier;
use RetailCrm\Api\Enum\CombineTechnique;
use RetailCrm\Api\Enum\CountryCodeIso3166;
use RetailCrm\Api\Enum\Customers\CustomerType;
use RetailCrm\Api\Enum\Order\DiscountType;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder;
use RetailCrm\Api\Model\Entity\FixExternalRow;
use RetailCrm\Api\Model\Entity\Orders\Delivery\OrderDeliveryAddress;
use RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedOrderDelivery;
use RetailCrm\Api\Model\Entity\Orders\Items\AbstractDiscount;
use RetailCrm\Api\Model\Entity\Orders\Items\Offer;
use RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct;
use RetailCrm\Api\Model\Entity\Orders\Items\PriceType;
use RetailCrm\Api\Model\Entity\Orders\Items\Unit;
use RetailCrm\Api\Model\Entity\Orders\Order;
use RetailCrm\Api\Model\Entity\Orders\Payment;
use RetailCrm\Api\Model\Entity\Orders\SerializedOrderLink;
use RetailCrm\Api\Model\Entity\Orders\SerializedOrderReference;
use RetailCrm\Api\Model\Entity\Orders\SerializedPayment;
use RetailCrm\Api\Model\Entity\Orders\SerializedRelationCustomer;
use RetailCrm\Api\Model\Filter\Orders\OrderFilter;
use RetailCrm\Api\Model\Filter\Orders\OrderHistoryFilterV4Type;
use RetailCrm\Api\Model\Request\BySiteRequest;
use RetailCrm\Api\Model\Request\Orders\OrderLoyaltyCancelBonusOperationsRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersCombineRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersCreateRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersEditRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersFixExternalIdsRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersHistoryRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersLinksCreateRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersLoyaltyApplyRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersPaymentsCreateRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersPaymentsEditRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersStatusesRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersUploadRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class OrdersTest
 *
 * @category OrdersTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class OrdersTest extends AbstractApiResourceGroupTestCase
{
    public function testList(): void
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
                    "discounts": [
                        {
                            "type": "round",
                            "amount": 0.5
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

        $mock = static::createApiMockBuilder('orders');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->orders->list($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCombine(): void
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

        $mock = static::createApiMockBuilder('orders/combine');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->orders->combine($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCreate(): void
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
    "applyRound": true,
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
        "discounts": [
          {
            "type": "manual_product",
            "amount": 1
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
        $item->discounts     = [new AbstractDiscount(DiscountType::MANUAL_PRODUCT, 1)];

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

        $mock = static::createApiMockBuilder('orders/create');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->matchCallback(static function (RequestInterface $request) {
                $data = [];
                parse_str((string) $request->getBody(), $data);

                return false !== strpos($data['order'] ?? '', '"customer":{"id":4924}');
            })
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->orders->create($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testFixExternalIds(): void
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

        $mock = static::createApiMockBuilder('orders/fix-external-ids');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->orders->fixExternalIds($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testHistory(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "generatedAt": "2021-02-25 20:41:40",
  "history": [
    {
      "id": 7038,
      "createdAt": "2018-10-02 13:30:06",
      "created": true,
      "source": "api",
      "field": "status",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2031,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2031,
        "number": "14",
        "externalId": "14",
        "orderType": "eshop-individual",
        "orderMethod": "shopping-cart",
        "createdAt": "2018-10-02 13:00:43",
        "statusUpdatedAt": "2018-10-02 13:30:06",
        "summ": 779,
        "totalSumm": 1395.16,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-02 13:30:06",
        "lastName": "admin",
        "firstName": "admin",
        "phone": "7900000000",
        "email": "admin@mail.ru",
        "call": false,
        "expired": false,
        "customer": {
          "type": "customer",
          "id": 971,
          "externalId": "1",
          "isContact": false,
          "createdAt": "2019-03-21 00:29:10",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "BitrixMod",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 46065.7,
          "totalSumm": 46065.7,
          "averageSumm": 3290.41,
          "ordersCount": 14,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 981,
            "index": "344092",
            "countryIso": "GB",
            "region": "Aberdeen",
            "city": "test",
            "text": "test "
          },
          "segments": [
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
              "id": 13,
              "code": "srednyaya-summa-pokupok",
              "name": "Средняя сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 23,
              "code": "regulyarniy-klient",
              "name": "Регулярный клиент",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "test",
          "lastName": "test",
          "email": "admin@mail.ru",
          "phones": [
            {
              "number": "7800553535"
            },
            {
              "number": "9515120022"
            },
            {
              "number": "984654846"
            }
          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "russian-post",
          "service": {
            "name": "Воздушный транспорт",
            "code": "avia",
            "active": true
          },
          "cost": 616.16,
          "netCost": 0,
          "address": {
            "id": 2031,
            "countryIso": "",
            "text": "ntncncn"
          }
        },
        "site": "BitrixMod",
        "status": "new",
        "items": [
          {
            "id": 3632,
            "initialPrice": 779,
            "discountTotal": 0,
            "prices": [
              {
                "price": 779,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-02 13:00:43",
            "quantity": 1,
            "status": "new",
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "fromApi": true,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7039,
      "createdAt": "2018-10-02 13:30:06",
      "created": true,
      "source": "api",
      "field": "status",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2032,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2032,
        "number": "15",
        "externalId": "15",
        "orderType": "eshop-individual",
        "orderMethod": "shopping-cart",
        "createdAt": "2018-10-02 13:18:05",
        "statusUpdatedAt": "2018-10-02 13:30:06",
        "summ": 1999,
        "totalSumm": 2663.96,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-02 13:30:06",
        "lastName": "admin",
        "firstName": "admin",
        "phone": "7900000000",
        "email": "admin@mail.ru",
        "call": false,
        "expired": false,
        "customer": {
          "type": "customer",
          "id": 971,
          "externalId": "1",
          "isContact": false,
          "createdAt": "2019-03-21 00:29:10",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "BitrixMod",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 46065.7,
          "totalSumm": 46065.7,
          "averageSumm": 3290.41,
          "ordersCount": 14,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 981,
            "index": "344092",
            "countryIso": "GB",
            "region": "Aberdeen",
            "city": "test",
            "text": "test "
          },
          "segments": [
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
              "id": 13,
              "code": "srednyaya-summa-pokupok",
              "name": "Средняя сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 23,
              "code": "regulyarniy-klient",
              "name": "Регулярный клиент",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "test",
          "lastName": "test",
          "email": "admin@mail.ru",
          "phones": [
            {
              "number": "7800553535"
            },
            {
              "number": "9515120022"
            },
            {
              "number": "984654846"
            }
          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "russian-post",
          "service": {
            "name": "Воздушный транспорт",
            "code": "avia",
            "active": true
          },
          "cost": 664.96,
          "netCost": 0,
          "address": {
            "id": 2032,
            "countryIso": "",
            "text": "ntncncn"
          }
        },
        "site": "BitrixMod",
        "status": "new",
        "items": [
          {
            "id": 3633,
            "initialPrice": 1999,
            "discountTotal": 0,
            "prices": [
              {
                "price": 1999,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-02 13:18:05",
            "quantity": 1,
            "status": "new",
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "payments": [
          {
            "id": 1422,
            "status": "not-paid",
            "type": "cash",
            "externalId": "9",
            "amount": 2663.96
          }
        ],
        "fromApi": true,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7040,
      "createdAt": "2018-10-02 13:30:06",
      "created": true,
      "source": "api",
      "field": "status",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2033,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2033,
        "number": "16",
        "externalId": "16",
        "orderType": "eshop-individual",
        "orderMethod": "shopping-cart",
        "createdAt": "2018-10-02 13:24:09",
        "statusUpdatedAt": "2018-10-02 13:30:06",
        "summ": 4999,
        "totalSumm": 4999,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-02 13:30:06",
        "lastName": "admin",
        "firstName": "admin",
        "phone": "7900000000",
        "email": "admin@mail.ru",
        "call": false,
        "expired": false,
        "customer": {
          "type": "customer",
          "id": 971,
          "externalId": "1",
          "isContact": false,
          "createdAt": "2019-03-21 00:29:10",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "BitrixMod",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 46065.7,
          "totalSumm": 46065.7,
          "averageSumm": 3290.41,
          "ordersCount": 14,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 981,
            "index": "344092",
            "countryIso": "GB",
            "region": "Aberdeen",
            "city": "test",
            "text": "test "
          },
          "segments": [
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
              "id": 13,
              "code": "srednyaya-summa-pokupok",
              "name": "Средняя сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 23,
              "code": "regulyarniy-klient",
              "name": "Регулярный клиент",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "test",
          "lastName": "test",
          "email": "admin@mail.ru",
          "phones": [
            {
              "number": "7800553535"
            },
            {
              "number": "9515120022"
            },
            {
              "number": "984654846"
            }
          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "self-delivery",
          "cost": 0,
          "netCost": 0,
          "address": {
            "id": 2033,
            "countryIso": "",
            "text": "ntncncn"
          }
        },
        "site": "BitrixMod",
        "status": "new",
        "items": [
          {
            "id": 3634,
            "initialPrice": 4999,
            "discountTotal": 0,
            "prices": [
              {
                "price": 4999,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-02 13:24:09",
            "quantity": 1,
            "status": "new",
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "payments": [
          {
            "id": 1423,
            "status": "not-paid",
            "type": "cash",
            "externalId": "10",
            "amount": 4999
          }
        ],
        "fromApi": true,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7041,
      "createdAt": "2018-10-03 11:28:01",
      "created": true,
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "status",
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2034,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2034,
        "number": "2034C",
        "orderType": "eshop-individual",
        "orderMethod": "phone",
        "countryIso": "RU",
        "createdAt": "2018-10-03 11:28:01",
        "statusUpdatedAt": "2018-10-03 11:28:01",
        "summ": 0,
        "totalSumm": 0,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-03 11:28:01",
        "firstName": "test",
        "email": "test@test.test",
        "call": false,
        "expired": false,
        "managerId": 19,
        "customer": {
          "type": "customer",
          "id": 978,
          "isContact": false,
          "createdAt": "2018-10-03 11:28:01",
          "managerId": 19,
          "vip": false,
          "bad": false,
          "site": "moysklad",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 43345.42,
          "totalSumm": 61632.6,
          "averageSumm": 844.28,
          "ordersCount": 73,
          "costSumm": 18287.18,
          "customFields": {
            "moyskladexternalid": "2f7651a1-e8e1-11e8-9109-f8fc0005536e"
          },
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 982,
            "countryIso": "RU",
            "region": "Москва город",
            "regionId": 55,
            "city": "Москва",
            "cityId": 4995,
            "cityType": "г.",
            "street": "Мира",
            "streetId": 1779257,
            "streetType": "пр-кт.",
            "building": "5",
            "notes": "345645364356b45  t56 g655gb5 g",
            "text": "пр-кт. Мира, д. 5, 345645364356b45  t56 g655gb5 g"
          },
          "segments": [
            {
              "id": 1,
              "code": "moskva",
              "name": "Москва",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 47,
              "active": true
            },
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
              "id": 11,
              "code": "davnie",
              "name": "Давние",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 935,
              "active": true
            },
            {
              "id": 12,
              "code": "bolshaya-summa-pokupok",
              "name": "Большая сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 4,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "svfds",
          "lastName": "dsadavfdvsdfvd",
          "patronymic": "vfdscdsvsddsa",
          "email": "test@test.test",
          "phones": [
            {
              "number": "89099999999"
            },
            {
              "number": "532523454365436"
            },
            {
              "number": "890999999999"
            },
            {
              "number": "911"
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
            "id": 2034,
            "countryIso": "RU"
          }
        },
        "site": "moysklad",
        "status": "new",
        "items": [
          {
            "id": 3635,
            "initialPrice": 0,
            "discountTotal": 0,
            "prices": [
              {
                "price": 0,
                "quantity": 1
              }
            ],
            "vatRate": "none",
            "createdAt": "2018-10-03 11:28:01",
            "quantity": 1,
            "status": "new",
            "offer": {
              "displayName": "кусок мяса (нормальное (никогда не видел))",
              "id": 20277,
              "externalId": "sEa3dPbFiBgtg2fKsx9Pz2#Vw7MCCAbjr6AURvCyB98C0",
              "xmlId": "sEa3dPbFiBgtg2fKsx9Pz2#Vw7MCCAbjr6AURvCyB98C0",
              "name": "кусок мяса (нормальное (никогда не видел))",
              "vatRate": "none",
              "unit": {
                "code": "796",
                "name": "Штука",
                "sym": "шт"
              }
            },
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "fromApi": false,
        "length": 0,
        "width": 0,
        "height": 0,
        "shipmentStore": "main12",
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7042,
      "createdAt": "2018-10-03 11:28:01",
      "source": "code",
      "field": "customer",
      "oldValue": null,
      "newValue": {
        "id": 978,
        "site": "moysklad"
      },
      "order": {
        "id": 2034,
        "managerId": 19,
        "site": "moysklad",
        "status": "new"
      }
    },
    {
      "id": 7043,
      "createdAt": "2018-10-03 11:28:31",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "order_product.vat_rate",
      "oldValue": 0,
      "newValue": null,
      "order": {
        "id": 2034,
        "managerId": 19,
        "site": "moysklad",
        "status": "new"
      },
      "item": {
        "id": 3635,
        "offer": {
          "id": 20277,
          "externalId": "sEa3dPbFiBgtg2fKsx9Pz2#Vw7MCCAbjr6AURvCyB98C0",
          "xmlId": "sEa3dPbFiBgtg2fKsx9Pz2#Vw7MCCAbjr6AURvCyB98C0"
        }
      }
    },
    {
      "id": 7044,
      "createdAt": "2018-10-03 11:28:38",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "status",
      "oldValue": {
        "code": "new"
      },
      "newValue": {
        "code": "client-confirmed"
      },
      "order": {
        "id": 2034,
        "managerId": 19,
        "site": "moysklad",
        "status": "client-confirmed"
      }
    },
    {
      "id": 7045,
      "createdAt": "2018-10-03 11:30:42",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "order_product.status",
      "oldValue": {
        "code": "new"
      },
      "newValue": {
        "code": "confirming"
      },
      "order": {
        "id": 2034,
        "managerId": 19,
        "site": "moysklad",
        "status": "client-confirmed"
      },
      "item": {
        "id": 3635,
        "offer": {
          "id": 20277,
          "externalId": "sEa3dPbFiBgtg2fKsx9Pz2#Vw7MCCAbjr6AURvCyB98C0",
          "xmlId": "sEa3dPbFiBgtg2fKsx9Pz2#Vw7MCCAbjr6AURvCyB98C0"
        }
      }
    },
    {
      "id": 7046,
      "createdAt": "2018-10-03 11:33:36",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "order_product.status",
      "oldValue": {
        "code": "confirming"
      },
      "newValue": {
        "code": "new"
      },
      "order": {
        "id": 2034,
        "managerId": 19,
        "site": "moysklad",
        "status": "client-confirmed"
      },
      "item": {
        "id": 3635,
        "offer": {
          "id": 20277,
          "externalId": "sEa3dPbFiBgtg2fKsx9Pz2#Vw7MCCAbjr6AURvCyB98C0",
          "xmlId": "sEa3dPbFiBgtg2fKsx9Pz2#Vw7MCCAbjr6AURvCyB98C0"
        }
      }
    },
    {
      "id": 7047,
      "createdAt": "2018-10-03 11:33:47",
      "source": "api",
      "field": "custom_moyskladexternalid",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "0b85301d-c6e7-11e8-9ff4-34e80002118e",
      "order": {
        "id": 2034,
        "managerId": 19,
        "site": "moysklad",
        "status": "client-confirmed"
      }
    },
    {
      "id": 7048,
      "createdAt": "2018-10-03 11:34:17",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "order_product.status",
      "oldValue": {
        "code": "new"
      },
      "newValue": {
        "code": "confirming"
      },
      "order": {
        "id": 2034,
        "managerId": 19,
        "site": "moysklad",
        "status": "client-confirmed"
      },
      "item": {
        "id": 3635,
        "offer": {
          "id": 20277,
          "externalId": "sEa3dPbFiBgtg2fKsx9Pz2#Vw7MCCAbjr6AURvCyB98C0",
          "xmlId": "sEa3dPbFiBgtg2fKsx9Pz2#Vw7MCCAbjr6AURvCyB98C0"
        }
      }
    },
    {
      "id": 7049,
      "createdAt": "2018-10-03 11:35:38",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "order_product.status",
      "oldValue": {
        "code": "confirming"
      },
      "newValue": {
        "code": "ready-for-assembly"
      },
      "order": {
        "id": 2034,
        "managerId": 19,
        "site": "moysklad",
        "status": "client-confirmed"
      },
      "item": {
        "id": 3635,
        "offer": {
          "id": 20277,
          "externalId": "sEa3dPbFiBgtg2fKsx9Pz2#Vw7MCCAbjr6AURvCyB98C0",
          "xmlId": "sEa3dPbFiBgtg2fKsx9Pz2#Vw7MCCAbjr6AURvCyB98C0"
        }
      }
    },
    {
      "id": 7050,
      "createdAt": "2018-10-04 13:18:45",
      "created": true,
      "source": "api",
      "field": "status",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2035,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2035,
        "number": "17",
        "externalId": "17",
        "orderType": "eshop-individual",
        "orderMethod": "shopping-cart",
        "createdAt": "2018-10-04 13:18:43",
        "statusUpdatedAt": "2018-10-04 13:18:44",
        "summ": 2699,
        "totalSumm": 2699,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-04 13:18:44",
        "lastName": "admin",
        "firstName": "admin",
        "phone": "7900000000",
        "email": "admin@mail.ru",
        "call": false,
        "expired": false,
        "customer": {
          "type": "customer",
          "id": 971,
          "externalId": "1",
          "isContact": false,
          "createdAt": "2019-03-21 00:29:10",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "BitrixMod",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 46065.7,
          "totalSumm": 46065.7,
          "averageSumm": 3290.41,
          "ordersCount": 14,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 981,
            "index": "344092",
            "countryIso": "GB",
            "region": "Aberdeen",
            "city": "test",
            "text": "test "
          },
          "segments": [
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
              "id": 13,
              "code": "srednyaya-summa-pokupok",
              "name": "Средняя сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 23,
              "code": "regulyarniy-klient",
              "name": "Регулярный клиент",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "test",
          "lastName": "test",
          "email": "admin@mail.ru",
          "phones": [
            {
              "number": "7800553535"
            },
            {
              "number": "9515120022"
            },
            {
              "number": "984654846"
            }
          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "self-delivery",
          "cost": 0,
          "netCost": 0,
          "address": {
            "id": 2035,
            "countryIso": "",
            "text": "ntncncn"
          }
        },
        "site": "BitrixMod",
        "status": "new",
        "items": [
          {
            "id": 3636,
            "initialPrice": 2699,
            "discountTotal": 0,
            "prices": [
              {
                "price": 2699,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-04 13:18:43",
            "quantity": 1,
            "status": "new",
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "payments": [
          {
            "id": 1424,
            "status": "not-paid",
            "type": "cash",
            "amount": 2699
          }
        ],
        "fromApi": true,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7051,
      "createdAt": "2018-10-04 13:18:46",
      "source": "api",
      "field": "payments.external_id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "11",
      "order": {
        "id": 2035,
        "externalId": "17",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      },
      "payment": {
        "id": 1424,
        "type": "cash",
        "externalId": "11"
      }
    },
    {
      "id": 7052,
      "createdAt": "2018-10-04 13:21:37",
      "created": true,
      "source": "api",
      "field": "status",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2036,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2036,
        "number": "18",
        "externalId": "18",
        "orderType": "eshop-individual",
        "orderMethod": "shopping-cart",
        "createdAt": "2018-10-04 14:21:36",
        "statusUpdatedAt": "2018-10-04 13:21:37",
        "summ": 2999,
        "totalSumm": 2999,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-04 13:21:37",
        "lastName": "admin",
        "firstName": "admin",
        "phone": "7900000000",
        "email": "admin@mail.ru",
        "call": false,
        "expired": false,
        "customer": {
          "type": "customer",
          "id": 971,
          "externalId": "1",
          "isContact": false,
          "createdAt": "2019-03-21 00:29:10",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "BitrixMod",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 46065.7,
          "totalSumm": 46065.7,
          "averageSumm": 3290.41,
          "ordersCount": 14,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 981,
            "index": "344092",
            "countryIso": "GB",
            "region": "Aberdeen",
            "city": "test",
            "text": "test "
          },
          "segments": [
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
              "id": 13,
              "code": "srednyaya-summa-pokupok",
              "name": "Средняя сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 23,
              "code": "regulyarniy-klient",
              "name": "Регулярный клиент",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "test",
          "lastName": "test",
          "email": "admin@mail.ru",
          "phones": [
            {
              "number": "7800553535"
            },
            {
              "number": "9515120022"
            },
            {
              "number": "984654846"
            }
          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "self-delivery",
          "cost": 0,
          "netCost": 0,
          "address": {
            "id": 2036,
            "countryIso": "",
            "text": "ntncncn"
          }
        },
        "site": "BitrixMod",
        "status": "new",
        "items": [
          {
            "id": 3637,
            "initialPrice": 2999,
            "discountTotal": 0,
            "prices": [
              {
                "price": 2999,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-04 14:21:36",
            "quantity": 1,
            "status": "new",
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "payments": [
          {
            "id": 1425,
            "status": "not-paid",
            "type": "cash",
            "amount": 2999
          }
        ],
        "fromApi": true,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7053,
      "createdAt": "2018-10-04 13:21:38",
      "source": "api",
      "field": "payments.external_id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "12",
      "order": {
        "id": 2036,
        "externalId": "18",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      },
      "payment": {
        "id": 1425,
        "type": "cash",
        "externalId": "12"
      }
    },
    {
      "id": 7054,
      "createdAt": "2018-10-04 13:38:04",
      "source": "api",
      "field": "created_at",
      "apiKey": {
        "current": false
      },
      "oldValue": "2018-10-04 14:21:36",
      "newValue": "2018-10-04 14:21:39",
      "order": {
        "id": 2036,
        "externalId": "18",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      }
    },
    {
      "id": 7055,
      "createdAt": "2018-10-04 13:38:04",
      "source": "api",
      "field": "customer_comment",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "dj",
      "order": {
        "id": 2036,
        "externalId": "18",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      }
    },
    {
      "id": 7056,
      "createdAt": "2018-10-04 14:39:14",
      "source": "api",
      "field": "customer_comment",
      "apiKey": {
        "current": false
      },
      "oldValue": "dj",
      "newValue": "djytfgyu",
      "order": {
        "id": 2036,
        "externalId": "18",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      }
    },
    {
      "id": 7057,
      "createdAt": "2018-10-04 14:58:43",
      "created": true,
      "source": "api",
      "field": "status",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2037,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2037,
        "number": "21",
        "externalId": "21",
        "orderType": "eshop-individual",
        "orderMethod": "shopping-cart",
        "createdAt": "2018-10-04 14:58:42",
        "statusUpdatedAt": "2018-10-04 14:58:42",
        "summ": 4999,
        "totalSumm": 4999,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-04 14:58:42",
        "lastName": "admin",
        "firstName": "admin",
        "phone": "7900000000",
        "email": "admin@mail.ru",
        "call": false,
        "expired": false,
        "customer": {
          "type": "customer",
          "id": 971,
          "externalId": "1",
          "isContact": false,
          "createdAt": "2019-03-21 00:29:10",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "BitrixMod",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 46065.7,
          "totalSumm": 46065.7,
          "averageSumm": 3290.41,
          "ordersCount": 14,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 981,
            "index": "344092",
            "countryIso": "GB",
            "region": "Aberdeen",
            "city": "test",
            "text": "test "
          },
          "segments": [
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
              "id": 13,
              "code": "srednyaya-summa-pokupok",
              "name": "Средняя сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 23,
              "code": "regulyarniy-klient",
              "name": "Регулярный клиент",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "test",
          "lastName": "test",
          "email": "admin@mail.ru",
          "phones": [
            {
              "number": "7800553535"
            },
            {
              "number": "9515120022"
            },
            {
              "number": "984654846"
            }
          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "self-delivery",
          "cost": 0,
          "netCost": 0,
          "address": {
            "id": 2037,
            "countryIso": "",
            "text": "ntncncn"
          }
        },
        "site": "BitrixMod",
        "status": "new",
        "items": [
          {
            "id": 3638,
            "initialPrice": 4999,
            "discountTotal": 0,
            "prices": [
              {
                "price": 4999,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-04 14:58:42",
            "quantity": 1,
            "status": "new",
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "payments": [
          {
            "id": 1426,
            "status": "not-paid",
            "type": "cash",
            "amount": 4999
          }
        ],
        "fromApi": true,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7058,
      "createdAt": "2018-10-04 14:58:44",
      "source": "api",
      "field": "payments.external_id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "13",
      "order": {
        "id": 2037,
        "externalId": "21",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      },
      "payment": {
        "id": 1426,
        "type": "cash",
        "externalId": "13"
      }
    },
    {
      "id": 7059,
      "createdAt": "2018-10-04 14:02:54",
      "created": true,
      "source": "api",
      "field": "status",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2038,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2038,
        "number": "22",
        "externalId": "22",
        "orderType": "eshop-individual",
        "orderMethod": "shopping-cart",
        "createdAt": "2018-10-04 21:02:53",
        "statusUpdatedAt": "2018-10-04 14:02:54",
        "summ": 4398,
        "totalSumm": 4398,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-04 14:02:54",
        "lastName": "admin",
        "firstName": "admin",
        "phone": "7900000000",
        "email": "admin@mail.ru",
        "call": false,
        "expired": false,
        "customer": {
          "type": "customer",
          "id": 971,
          "externalId": "1",
          "isContact": false,
          "createdAt": "2019-03-21 00:29:10",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "BitrixMod",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 46065.7,
          "totalSumm": 46065.7,
          "averageSumm": 3290.41,
          "ordersCount": 14,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 981,
            "index": "344092",
            "countryIso": "GB",
            "region": "Aberdeen",
            "city": "test",
            "text": "test "
          },
          "segments": [
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
              "id": 13,
              "code": "srednyaya-summa-pokupok",
              "name": "Средняя сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 23,
              "code": "regulyarniy-klient",
              "name": "Регулярный клиент",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "test",
          "lastName": "test",
          "email": "admin@mail.ru",
          "phones": [
            {
              "number": "7800553535"
            },
            {
              "number": "9515120022"
            },
            {
              "number": "984654846"
            }
          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "self-delivery",
          "cost": 0,
          "netCost": 0,
          "address": {
            "id": 2038,
            "countryIso": "",
            "text": "ntncncn"
          }
        },
        "site": "BitrixMod",
        "status": "new",
        "items": [
          {
            "id": 3639,
            "initialPrice": 2199,
            "discountTotal": 0,
            "prices": [
              {
                "price": 2199,
                "quantity": 2
              }
            ],
            "createdAt": "2018-10-04 21:02:53",
            "quantity": 2,
            "status": "new",
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "payments": [
          {
            "id": 1427,
            "status": "not-paid",
            "type": "cash",
            "amount": 4398
          }
        ],
        "fromApi": true,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7060,
      "createdAt": "2018-10-04 14:02:54",
      "source": "api",
      "field": "payments.external_id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "14",
      "order": {
        "id": 2038,
        "externalId": "22",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      },
      "payment": {
        "id": 1427,
        "type": "cash",
        "externalId": "14"
      }
    },
    {
      "id": 7061,
      "createdAt": "2018-10-04 14:29:48",
      "created": true,
      "source": "api",
      "field": "status",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2039,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2039,
        "number": "23",
        "externalId": "23",
        "orderType": "eshop-individual",
        "orderMethod": "shopping-cart",
        "createdAt": "2018-10-04 15:29:47",
        "statusUpdatedAt": "2018-10-04 14:29:48",
        "summ": 6597,
        "totalSumm": 6597,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-04 14:29:48",
        "lastName": "admin",
        "firstName": "admin",
        "phone": "7900000000",
        "email": "admin@mail.ru",
        "call": false,
        "expired": false,
        "customer": {
          "type": "customer",
          "id": 971,
          "externalId": "1",
          "isContact": false,
          "createdAt": "2019-03-21 00:29:10",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "BitrixMod",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 46065.7,
          "totalSumm": 46065.7,
          "averageSumm": 3290.41,
          "ordersCount": 14,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 981,
            "index": "344092",
            "countryIso": "GB",
            "region": "Aberdeen",
            "city": "test",
            "text": "test "
          },
          "segments": [
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
              "id": 13,
              "code": "srednyaya-summa-pokupok",
              "name": "Средняя сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 23,
              "code": "regulyarniy-klient",
              "name": "Регулярный клиент",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "test",
          "lastName": "test",
          "email": "admin@mail.ru",
          "phones": [
            {
              "number": "7800553535"
            },
            {
              "number": "9515120022"
            },
            {
              "number": "984654846"
            }
          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "self-delivery",
          "cost": 0,
          "netCost": 0,
          "address": {
            "id": 2039,
            "countryIso": "",
            "text": "ntncncn"
          }
        },
        "site": "BitrixMod",
        "status": "new",
        "items": [
          {
            "id": 3640,
            "initialPrice": 2199,
            "discountTotal": 0,
            "prices": [
              {
                "price": 2199,
                "quantity": 3
              }
            ],
            "createdAt": "2018-10-04 15:29:47",
            "quantity": 3,
            "status": "new",
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "payments": [
          {
            "id": 1428,
            "status": "not-paid",
            "type": "cash",
            "amount": 6597
          }
        ],
        "fromApi": true,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7062,
      "createdAt": "2018-10-04 14:29:49",
      "source": "api",
      "field": "payments.external_id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "15",
      "order": {
        "id": 2039,
        "externalId": "23",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      },
      "payment": {
        "id": 1428,
        "type": "cash",
        "externalId": "15"
      }
    },
    {
      "id": 7063,
      "createdAt": "2018-10-04 15:24:01",
      "created": true,
      "source": "api",
      "field": "status",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2040,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2040,
        "number": "25",
        "externalId": "25",
        "orderType": "eshop-individual",
        "orderMethod": "shopping-cart",
        "createdAt": "2018-10-04 16:24:00",
        "statusUpdatedAt": "2018-10-04 15:24:01",
        "summ": 4999,
        "totalSumm": 4999,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-04 15:24:01",
        "lastName": "admin",
        "firstName": "admin",
        "phone": "7900000000",
        "email": "admin@mail.ru",
        "call": false,
        "expired": false,
        "customer": {
          "type": "customer",
          "id": 971,
          "externalId": "1",
          "isContact": false,
          "createdAt": "2019-03-21 00:29:10",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "BitrixMod",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 46065.7,
          "totalSumm": 46065.7,
          "averageSumm": 3290.41,
          "ordersCount": 14,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 981,
            "index": "344092",
            "countryIso": "GB",
            "region": "Aberdeen",
            "city": "test",
            "text": "test "
          },
          "segments": [
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
              "id": 13,
              "code": "srednyaya-summa-pokupok",
              "name": "Средняя сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 23,
              "code": "regulyarniy-klient",
              "name": "Регулярный клиент",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "test",
          "lastName": "test",
          "email": "admin@mail.ru",
          "phones": [
            {
              "number": "7800553535"
            },
            {
              "number": "9515120022"
            },
            {
              "number": "984654846"
            }
          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "self-delivery",
          "cost": 0,
          "netCost": 0,
          "address": {
            "id": 2040,
            "countryIso": "",
            "text": "ntncncn"
          }
        },
        "site": "BitrixMod",
        "status": "new",
        "items": [
          {
            "id": 3641,
            "initialPrice": 4999,
            "discountTotal": 0,
            "prices": [
              {
                "price": 4999,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-04 16:24:00",
            "quantity": 1,
            "status": "new",
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "payments": [
          {
            "id": 1429,
            "status": "not-paid",
            "type": "cash",
            "amount": 4999
          }
        ],
        "fromApi": true,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7064,
      "createdAt": "2018-10-04 15:24:02",
      "source": "api",
      "field": "payments.external_id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "16",
      "order": {
        "id": 2040,
        "externalId": "25",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      },
      "payment": {
        "id": 1429,
        "type": "cash",
        "externalId": "16"
      }
    },
    {
      "id": 7065,
      "createdAt": "2018-10-04 15:27:29",
      "created": true,
      "source": "api",
      "field": "status",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2041,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2041,
        "number": "26",
        "externalId": "26",
        "orderType": "eshop-individual",
        "orderMethod": "shopping-cart",
        "createdAt": "2018-10-04 15:27:27",
        "statusUpdatedAt": "2018-10-04 15:27:27",
        "summ": 2199,
        "totalSumm": 2199,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-04 15:27:27",
        "lastName": "admin",
        "firstName": "admin",
        "phone": "7900000000",
        "email": "admin@mail.ru",
        "call": false,
        "expired": false,
        "customer": {
          "type": "customer",
          "id": 971,
          "externalId": "1",
          "isContact": false,
          "createdAt": "2019-03-21 00:29:10",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "BitrixMod",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 46065.7,
          "totalSumm": 46065.7,
          "averageSumm": 3290.41,
          "ordersCount": 14,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 981,
            "index": "344092",
            "countryIso": "GB",
            "region": "Aberdeen",
            "city": "test",
            "text": "test "
          },
          "segments": [
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
              "id": 13,
              "code": "srednyaya-summa-pokupok",
              "name": "Средняя сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 23,
              "code": "regulyarniy-klient",
              "name": "Регулярный клиент",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "test",
          "lastName": "test",
          "email": "admin@mail.ru",
          "phones": [
            {
              "number": "7800553535"
            },
            {
              "number": "9515120022"
            },
            {
              "number": "984654846"
            }
          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "self-delivery",
          "cost": 0,
          "netCost": 0,
          "address": {
            "id": 2041,
            "countryIso": "",
            "text": "ntncncn"
          }
        },
        "site": "BitrixMod",
        "status": "new",
        "items": [
          {
            "id": 3642,
            "initialPrice": 2199,
            "discountTotal": 0,
            "prices": [
              {
                "price": 2199,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-04 15:27:27",
            "quantity": 1,
            "status": "new",
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "payments": [
          {
            "id": 1430,
            "status": "not-paid",
            "type": "cash",
            "amount": 2199
          }
        ],
        "fromApi": true,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7066,
      "createdAt": "2018-10-04 15:27:31",
      "source": "api",
      "field": "payments.external_id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "17",
      "order": {
        "id": 2041,
        "externalId": "26",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      },
      "payment": {
        "id": 1430,
        "type": "cash",
        "externalId": "17"
      }
    },
    {
      "id": 7067,
      "createdAt": "2018-10-04 15:32:32",
      "created": true,
      "source": "api",
      "field": "status",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2042,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2042,
        "number": "27",
        "externalId": "27",
        "orderType": "eshop-individual",
        "orderMethod": "shopping-cart",
        "createdAt": "2018-10-04 16:32:31",
        "statusUpdatedAt": "2018-10-04 15:32:32",
        "summ": 4999,
        "totalSumm": 4999,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-04 15:32:32",
        "lastName": "admin",
        "firstName": "admin",
        "phone": "7900000000",
        "email": "admin@mail.ru",
        "call": false,
        "expired": false,
        "customer": {
          "type": "customer",
          "id": 971,
          "externalId": "1",
          "isContact": false,
          "createdAt": "2019-03-21 00:29:10",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "BitrixMod",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 46065.7,
          "totalSumm": 46065.7,
          "averageSumm": 3290.41,
          "ordersCount": 14,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 981,
            "index": "344092",
            "countryIso": "GB",
            "region": "Aberdeen",
            "city": "test",
            "text": "test "
          },
          "segments": [
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
              "id": 13,
              "code": "srednyaya-summa-pokupok",
              "name": "Средняя сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 23,
              "code": "regulyarniy-klient",
              "name": "Регулярный клиент",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "test",
          "lastName": "test",
          "email": "admin@mail.ru",
          "phones": [
            {
              "number": "7800553535"
            },
            {
              "number": "9515120022"
            },
            {
              "number": "984654846"
            }
          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "self-delivery",
          "cost": 0,
          "netCost": 0,
          "address": {
            "id": 2042,
            "countryIso": "",
            "text": "ntncncn"
          }
        },
        "site": "BitrixMod",
        "status": "new",
        "items": [
          {
            "id": 3643,
            "initialPrice": 4999,
            "discountTotal": 0,
            "prices": [
              {
                "price": 4999,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-04 16:32:31",
            "quantity": 1,
            "status": "new",
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "payments": [
          {
            "id": 1431,
            "status": "not-paid",
            "type": "cash",
            "amount": 4999
          }
        ],
        "fromApi": true,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7068,
      "createdAt": "2018-10-04 15:32:32",
      "source": "api",
      "field": "payments.external_id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "18",
      "order": {
        "id": 2042,
        "externalId": "27",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      },
      "payment": {
        "id": 1431,
        "type": "cash",
        "externalId": "18"
      }
    },
    {
      "id": 7069,
      "createdAt": "2018-10-04 15:33:32",
      "created": true,
      "source": "api",
      "field": "status",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2043,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2043,
        "number": "28",
        "externalId": "28",
        "orderType": "eshop-individual",
        "orderMethod": "shopping-cart",
        "createdAt": "2018-10-04 16:33:31",
        "statusUpdatedAt": "2018-10-04 15:33:31",
        "summ": 4999,
        "totalSumm": 4999,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-04 15:33:31",
        "lastName": "admin",
        "firstName": "admin",
        "phone": "7900000000",
        "email": "admin@mail.ru",
        "call": false,
        "expired": false,
        "customer": {
          "type": "customer",
          "id": 971,
          "externalId": "1",
          "isContact": false,
          "createdAt": "2019-03-21 00:29:10",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "BitrixMod",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 46065.7,
          "totalSumm": 46065.7,
          "averageSumm": 3290.41,
          "ordersCount": 14,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 981,
            "index": "344092",
            "countryIso": "GB",
            "region": "Aberdeen",
            "city": "test",
            "text": "test "
          },
          "segments": [
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
              "id": 13,
              "code": "srednyaya-summa-pokupok",
              "name": "Средняя сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 23,
              "code": "regulyarniy-klient",
              "name": "Регулярный клиент",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "test",
          "lastName": "test",
          "email": "admin@mail.ru",
          "phones": [
            {
              "number": "7800553535"
            },
            {
              "number": "9515120022"
            },
            {
              "number": "984654846"
            }
          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "self-delivery",
          "cost": 0,
          "netCost": 0,
          "address": {
            "id": 2043,
            "countryIso": "",
            "text": "ntncncn"
          }
        },
        "site": "BitrixMod",
        "status": "new",
        "items": [
          {
            "id": 3644,
            "initialPrice": 4999,
            "discountTotal": 0,
            "prices": [
              {
                "price": 4999,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-04 16:33:31",
            "quantity": 1,
            "status": "new",
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "payments": [
          {
            "id": 1432,
            "status": "not-paid",
            "type": "cash",
            "amount": 4999
          }
        ],
        "fromApi": true,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7070,
      "createdAt": "2018-10-04 15:33:32",
      "source": "api",
      "field": "payments.external_id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "19",
      "order": {
        "id": 2043,
        "externalId": "28",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      },
      "payment": {
        "id": 1432,
        "type": "cash",
        "externalId": "19"
      }
    },
    {
      "id": 7071,
      "createdAt": "2018-10-04 15:34:29",
      "created": true,
      "source": "api",
      "field": "status",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2044,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2044,
        "number": "29",
        "externalId": "29",
        "orderType": "eshop-individual",
        "orderMethod": "shopping-cart",
        "createdAt": "2018-10-04 16:34:29",
        "statusUpdatedAt": "2018-10-04 15:34:29",
        "summ": 1999,
        "totalSumm": 1999,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-04 15:34:29",
        "lastName": "admin",
        "firstName": "admin",
        "phone": "7900000000",
        "email": "admin@mail.ru",
        "call": false,
        "expired": false,
        "customer": {
          "type": "customer",
          "id": 971,
          "externalId": "1",
          "isContact": false,
          "createdAt": "2019-03-21 00:29:10",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "BitrixMod",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 46065.7,
          "totalSumm": 46065.7,
          "averageSumm": 3290.41,
          "ordersCount": 14,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 981,
            "index": "344092",
            "countryIso": "GB",
            "region": "Aberdeen",
            "city": "test",
            "text": "test "
          },
          "segments": [
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
              "id": 13,
              "code": "srednyaya-summa-pokupok",
              "name": "Средняя сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 23,
              "code": "regulyarniy-klient",
              "name": "Регулярный клиент",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "test",
          "lastName": "test",
          "email": "admin@mail.ru",
          "phones": [
            {
              "number": "7800553535"
            },
            {
              "number": "9515120022"
            },
            {
              "number": "984654846"
            }
          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "self-delivery",
          "cost": 0,
          "netCost": 0,
          "address": {
            "id": 2044,
            "countryIso": "",
            "text": "ntncncn"
          }
        },
        "site": "BitrixMod",
        "status": "new",
        "items": [
          {
            "id": 3645,
            "initialPrice": 1999,
            "discountTotal": 0,
            "prices": [
              {
                "price": 1999,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-04 16:34:29",
            "quantity": 1,
            "status": "new",
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "payments": [
          {
            "id": 1433,
            "status": "not-paid",
            "type": "cash",
            "amount": 1999
          }
        ],
        "fromApi": true,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7072,
      "createdAt": "2018-10-04 15:34:30",
      "source": "api",
      "field": "payments.external_id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "20",
      "order": {
        "id": 2044,
        "externalId": "29",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      },
      "payment": {
        "id": 1433,
        "type": "cash",
        "externalId": "20"
      }
    },
    {
      "id": 7073,
      "createdAt": "2018-10-04 15:35:06",
      "created": true,
      "source": "api",
      "field": "status",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2045,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2045,
        "number": "30",
        "externalId": "30",
        "orderType": "eshop-individual",
        "orderMethod": "shopping-cart",
        "createdAt": "2018-10-04 16:35:05",
        "statusUpdatedAt": "2018-10-04 15:35:06",
        "summ": 1999,
        "totalSumm": 1999,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-04 15:35:06",
        "lastName": "admin",
        "firstName": "admin",
        "phone": "7900000000",
        "email": "admin@mail.ru",
        "call": false,
        "expired": false,
        "customer": {
          "type": "customer",
          "id": 971,
          "externalId": "1",
          "isContact": false,
          "createdAt": "2019-03-21 00:29:10",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "BitrixMod",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 46065.7,
          "totalSumm": 46065.7,
          "averageSumm": 3290.41,
          "ordersCount": 14,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 981,
            "index": "344092",
            "countryIso": "GB",
            "region": "Aberdeen",
            "city": "test",
            "text": "test "
          },
          "segments": [
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
              "id": 13,
              "code": "srednyaya-summa-pokupok",
              "name": "Средняя сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 23,
              "code": "regulyarniy-klient",
              "name": "Регулярный клиент",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "test",
          "lastName": "test",
          "email": "admin@mail.ru",
          "phones": [
            {
              "number": "7800553535"
            },
            {
              "number": "9515120022"
            },
            {
              "number": "984654846"
            }
          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "self-delivery",
          "cost": 0,
          "netCost": 0,
          "address": {
            "id": 2045,
            "countryIso": "",
            "text": "ntncncn"
          }
        },
        "site": "BitrixMod",
        "status": "new",
        "items": [
          {
            "id": 3646,
            "initialPrice": 1999,
            "discountTotal": 0,
            "prices": [
              {
                "price": 1999,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-04 16:35:05",
            "quantity": 1,
            "status": "new",
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "payments": [
          {
            "id": 1434,
            "status": "not-paid",
            "type": "cash",
            "amount": 1999
          }
        ],
        "fromApi": true,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7074,
      "createdAt": "2018-10-04 15:35:06",
      "source": "api",
      "field": "payments.external_id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "21",
      "order": {
        "id": 2045,
        "externalId": "30",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      },
      "payment": {
        "id": 1434,
        "type": "cash",
        "externalId": "21"
      }
    },
    {
      "id": 7075,
      "createdAt": "2018-10-04 16:30:07",
      "created": true,
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "status",
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2046,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2046,
        "number": "2046C",
        "orderType": "eshop-individual",
        "orderMethod": "phone",
        "countryIso": "RU",
        "createdAt": "2018-10-04 16:30:07",
        "statusUpdatedAt": "2018-10-04 16:30:07",
        "summ": 9522,
        "totalSumm": 9522,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-04 16:30:07",
        "firstName": "test",
        "email": "test@test.test",
        "call": false,
        "expired": false,
        "managerId": 19,
        "customer": {
          "type": "customer",
          "id": 978,
          "isContact": false,
          "createdAt": "2018-10-03 11:28:01",
          "managerId": 19,
          "vip": false,
          "bad": false,
          "site": "moysklad",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 43345.42,
          "totalSumm": 61632.6,
          "averageSumm": 844.28,
          "ordersCount": 73,
          "costSumm": 18287.18,
          "customFields": {
            "moyskladexternalid": "2f7651a1-e8e1-11e8-9109-f8fc0005536e"
          },
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 982,
            "countryIso": "RU",
            "region": "Москва город",
            "regionId": 55,
            "city": "Москва",
            "cityId": 4995,
            "cityType": "г.",
            "street": "Мира",
            "streetId": 1779257,
            "streetType": "пр-кт.",
            "building": "5",
            "notes": "345645364356b45  t56 g655gb5 g",
            "text": "пр-кт. Мира, д. 5, 345645364356b45  t56 g655gb5 g"
          },
          "segments": [
            {
              "id": 1,
              "code": "moskva",
              "name": "Москва",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 47,
              "active": true
            },
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
              "id": 11,
              "code": "davnie",
              "name": "Давние",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 935,
              "active": true
            },
            {
              "id": 12,
              "code": "bolshaya-summa-pokupok",
              "name": "Большая сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 4,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "svfds",
          "lastName": "dsadavfdvsdfvd",
          "patronymic": "vfdscdsvsddsa",
          "email": "test@test.test",
          "phones": [
            {
              "number": "89099999999"
            },
            {
              "number": "532523454365436"
            },
            {
              "number": "890999999999"
            },
            {
              "number": "911"
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
            "id": 2046,
            "countryIso": "RU"
          }
        },
        "site": "moysklad",
        "status": "new",
        "items": [
          {
            "id": 3647,
            "initialPrice": 9522,
            "discountTotal": 0,
            "prices": [
              {
                "price": 9522,
                "quantity": 1
              }
            ],
            "vatRate": "none",
            "createdAt": "2018-10-04 16:30:07",
            "quantity": 1,
            "status": "new",
            "offer": {
              "displayName": "test_complect",
              "id": 20282,
              "externalId": "tgGLBBeLjviVOs6wwSJpR2",
              "xmlId": "tgGLBBeLjviVOs6wwSJpR2",
              "name": "test_complect",
              "article": "000224",
              "vatRate": "none",
              "unit": {
                "code": "796",
                "name": "Штука",
                "sym": "шт"
              }
            },
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "fromApi": false,
        "length": 0,
        "width": 0,
        "height": 0,
        "shipmentStore": "main12",
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7076,
      "createdAt": "2018-10-04 16:30:49",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "delivery_cost",
      "oldValue": 0,
      "newValue": 300,
      "order": {
        "id": 2046,
        "managerId": 19,
        "site": "moysklad",
        "status": "new"
      }
    },
    {
      "id": 7077,
      "createdAt": "2018-10-04 16:30:49",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "delivery_type",
      "oldValue": null,
      "newValue": {
        "code": "courier"
      },
      "order": {
        "id": 2046,
        "managerId": 19,
        "site": "moysklad",
        "status": "new"
      }
    },
    {
      "id": 7078,
      "createdAt": "2018-10-04 16:30:49",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "discount_manual_percent",
      "oldValue": null,
      "newValue": 20,
      "order": {
        "id": 2046,
        "managerId": 19,
        "site": "moysklad",
        "status": "new"
      }
    },
    {
      "id": 7079,
      "createdAt": "2018-10-04 16:30:49",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "order_product.discount_total",
      "oldValue": 0,
      "newValue": 1904.4,
      "order": {
        "id": 2046,
        "managerId": 19,
        "site": "moysklad",
        "status": "new"
      },
      "item": {
        "id": 3647,
        "offer": {
          "id": 20282,
          "externalId": "tgGLBBeLjviVOs6wwSJpR2",
          "xmlId": "tgGLBBeLjviVOs6wwSJpR2"
        }
      }
    },
    {
      "id": 7080,
      "createdAt": "2018-10-04 16:30:49",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "order_product.quantity",
      "oldValue": 1,
      "newValue": 4,
      "order": {
        "id": 2046,
        "managerId": 19,
        "site": "moysklad",
        "status": "new"
      },
      "item": {
        "id": 3647,
        "offer": {
          "id": 20282,
          "externalId": "tgGLBBeLjviVOs6wwSJpR2",
          "xmlId": "tgGLBBeLjviVOs6wwSJpR2"
        }
      }
    },
    {
      "id": 7081,
      "createdAt": "2018-10-04 16:30:49",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "order_product.summ",
      "oldValue": 9522,
      "newValue": 30470.4,
      "order": {
        "id": 2046,
        "managerId": 19,
        "site": "moysklad",
        "status": "new"
      },
      "item": {
        "id": 3647,
        "offer": {
          "id": 20282,
          "externalId": "tgGLBBeLjviVOs6wwSJpR2",
          "xmlId": "tgGLBBeLjviVOs6wwSJpR2"
        }
      }
    },
    {
      "id": 7082,
      "createdAt": "2018-10-04 16:31:11",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "payments",
      "oldValue": null,
      "newValue": {
        "id": 1435,
        "type": "bank-card"
      },
      "order": {
        "id": 2046,
        "managerId": 19,
        "site": "moysklad",
        "status": "new"
      },
      "payment": {
        "id": 1435,
        "status": "not-paid",
        "type": "bank-card",
        "amount": 30770.4
      }
    },
    {
      "id": 7083,
      "createdAt": "2018-10-04 16:31:11",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "delivery_time",
      "oldValue": null,
      "newValue": {
        "from": "09:00",
        "to": "13:00"
      },
      "order": {
        "id": 2046,
        "managerId": 19,
        "site": "moysklad",
        "status": "new"
      }
    },
    {
      "id": 7084,
      "createdAt": "2018-10-04 16:31:20",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "manager_comment",
      "oldValue": null,
      "newValue": "Комментарии оператора",
      "order": {
        "id": 2046,
        "managerId": 19,
        "site": "moysklad",
        "status": "new"
      }
    },
    {
      "id": 7085,
      "createdAt": "2018-10-04 16:33:27",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "order_product.vat_rate",
      "oldValue": 0,
      "newValue": null,
      "order": {
        "id": 2046,
        "managerId": 19,
        "site": "moysklad",
        "status": "new"
      },
      "item": {
        "id": 3647,
        "offer": {
          "id": 20282,
          "externalId": "tgGLBBeLjviVOs6wwSJpR2",
          "xmlId": "tgGLBBeLjviVOs6wwSJpR2"
        }
      }
    },
    {
      "id": 7086,
      "createdAt": "2018-10-04 16:33:35",
      "created": true,
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "status",
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2047,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2047,
        "number": "2047C",
        "orderType": "eshop-individual",
        "orderMethod": "phone",
        "countryIso": "RU",
        "createdAt": "2018-10-04 16:33:35",
        "statusUpdatedAt": "2018-10-04 16:33:35",
        "summ": 3597,
        "totalSumm": 3597,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-04 16:33:35",
        "firstName": "test",
        "email": "test@test.test",
        "call": false,
        "expired": false,
        "managerId": 19,
        "customer": {
          "type": "customer",
          "id": 978,
          "isContact": false,
          "createdAt": "2018-10-03 11:28:01",
          "managerId": 19,
          "vip": false,
          "bad": false,
          "site": "moysklad",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 43345.42,
          "totalSumm": 61632.6,
          "averageSumm": 844.28,
          "ordersCount": 73,
          "costSumm": 18287.18,
          "customFields": {
            "moyskladexternalid": "2f7651a1-e8e1-11e8-9109-f8fc0005536e"
          },
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 982,
            "countryIso": "RU",
            "region": "Москва город",
            "regionId": 55,
            "city": "Москва",
            "cityId": 4995,
            "cityType": "г.",
            "street": "Мира",
            "streetId": 1779257,
            "streetType": "пр-кт.",
            "building": "5",
            "notes": "345645364356b45  t56 g655gb5 g",
            "text": "пр-кт. Мира, д. 5, 345645364356b45  t56 g655gb5 g"
          },
          "segments": [
            {
              "id": 1,
              "code": "moskva",
              "name": "Москва",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 47,
              "active": true
            },
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
              "id": 11,
              "code": "davnie",
              "name": "Давние",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 935,
              "active": true
            },
            {
              "id": 12,
              "code": "bolshaya-summa-pokupok",
              "name": "Большая сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 4,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "svfds",
          "lastName": "dsadavfdvsdfvd",
          "patronymic": "vfdscdsvsddsa",
          "email": "test@test.test",
          "phones": [
            {
              "number": "89099999999"
            },
            {
              "number": "532523454365436"
            },
            {
              "number": "890999999999"
            },
            {
              "number": "911"
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
            "id": 2047,
            "countryIso": "RU"
          }
        },
        "site": "moysklad",
        "status": "new",
        "items": [
          {
            "id": 3648,
            "initialPrice": 1199,
            "discountTotal": 0,
            "prices": [
              {
                "price": 1199,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-04 16:33:35",
            "quantity": 1,
            "status": "new",
            "offer": {
              "displayName": "Домашние Тапочки Розовый Рай",
              "id": 20106,
              "externalId": "210",
              "xmlId": "471",
              "name": "Домашние Тапочки Розовый Рай",
              "article": "174-15-xx",
              "vatRate": "none",
              "unit": {
                "code": "pc",
                "name": "Штука",
                "sym": "шт."
              }
            },
            "properties": [

            ],
            "purchasePrice": 0
          },
          {
            "id": 3649,
            "initialPrice": 1199,
            "discountTotal": 0,
            "prices": [
              {
                "price": 1199,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-04 16:33:35",
            "quantity": 1,
            "status": "new",
            "offer": {
              "displayName": "Домашние Тапочки Розовый Рай",
              "id": 20105,
              "externalId": "209",
              "xmlId": "470",
              "name": "Домашние Тапочки Розовый Рай",
              "article": "174-15-xx",
              "vatRate": "none",
              "unit": {
                "code": "pc",
                "name": "Штука",
                "sym": "шт."
              }
            },
            "properties": [

            ],
            "purchasePrice": 0
          },
          {
            "id": 3650,
            "initialPrice": 1199,
            "discountTotal": 0,
            "prices": [
              {
                "price": 1199,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-04 16:33:35",
            "quantity": 1,
            "status": "new",
            "offer": {
              "displayName": "Домашние Тапочки Розовый Рай",
              "id": 20104,
              "externalId": "208",
              "xmlId": "469",
              "name": "Домашние Тапочки Розовый Рай",
              "article": "174-15-xx",
              "vatRate": "none",
              "unit": {
                "code": "pc",
                "name": "Штука",
                "sym": "шт."
              }
            },
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "fromApi": false,
        "length": 0,
        "width": 0,
        "height": 0,
        "shipmentStore": "main12",
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7087,
      "createdAt": "2018-10-04 16:35:00",
      "created": true,
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "status",
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2048,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2048,
        "number": "2048C",
        "orderType": "eshop-individual",
        "orderMethod": "phone",
        "countryIso": "RU",
        "createdAt": "2018-10-04 16:35:00",
        "statusUpdatedAt": "2018-10-04 16:35:00",
        "summ": 0,
        "totalSumm": 300,
        "prepaySum": 300,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-04 16:35:00",
        "firstName": "test",
        "email": "test@test.test",
        "call": false,
        "expired": false,
        "managerId": 19,
        "customer": {
          "type": "customer",
          "id": 978,
          "isContact": false,
          "createdAt": "2018-10-03 11:28:01",
          "managerId": 19,
          "vip": false,
          "bad": false,
          "site": "moysklad",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 43345.42,
          "totalSumm": 61632.6,
          "averageSumm": 844.28,
          "ordersCount": 73,
          "costSumm": 18287.18,
          "customFields": {
            "moyskladexternalid": "2f7651a1-e8e1-11e8-9109-f8fc0005536e"
          },
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 982,
            "countryIso": "RU",
            "region": "Москва город",
            "regionId": 55,
            "city": "Москва",
            "cityId": 4995,
            "cityType": "г.",
            "street": "Мира",
            "streetId": 1779257,
            "streetType": "пр-кт.",
            "building": "5",
            "notes": "345645364356b45  t56 g655gb5 g",
            "text": "пр-кт. Мира, д. 5, 345645364356b45  t56 g655gb5 g"
          },
          "segments": [
            {
              "id": 1,
              "code": "moskva",
              "name": "Москва",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 47,
              "active": true
            },
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
              "id": 11,
              "code": "davnie",
              "name": "Давние",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 935,
              "active": true
            },
            {
              "id": 12,
              "code": "bolshaya-summa-pokupok",
              "name": "Большая сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 4,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "svfds",
          "lastName": "dsadavfdvsdfvd",
          "patronymic": "vfdscdsvsddsa",
          "email": "test@test.test",
          "phones": [
            {
              "number": "89099999999"
            },
            {
              "number": "532523454365436"
            },
            {
              "number": "890999999999"
            },
            {
              "number": "911"
            }
          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "courier",
          "cost": 300,
          "netCost": 0,
          "address": {
            "id": 2048,
            "countryIso": "RU"
          }
        },
        "site": "moysklad",
        "status": "new",
        "items": [
          {
            "id": 3651,
            "initialPrice": 0,
            "discountTotal": 0,
            "prices": [
              {
                "price": 0,
                "quantity": 1
              }
            ],
            "vatRate": "none",
            "createdAt": "2018-10-04 16:35:00",
            "quantity": 1,
            "status": "new",
            "offer": {
              "displayName": "Рукола (Зеленая дважды)",
              "id": 20274,
              "externalId": "S1bbBvZ5h5f0N4hJbSK6B2#GpGvbiu6jwbbf7rku5XXU2",
              "xmlId": "S1bbBvZ5h5f0N4hJbSK6B2#GpGvbiu6jwbbf7rku5XXU2",
              "name": "Рукола (Зеленая дважды)",
              "vatRate": "none",
              "unit": {
                "code": "796",
                "name": "Штука",
                "sym": "шт"
              }
            },
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "fullPaidAt": "2018-10-04 00:00:00",
        "payments": [
          {
            "id": 1436,
            "status": "paid",
            "type": "cash",
            "amount": 300,
            "paidAt": "2018-10-04 00:00:00"
          }
        ],
        "fromApi": false,
        "length": 0,
        "width": 0,
        "height": 0,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7088,
      "createdAt": "2018-10-04 16:35:15",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "shipment_store",
      "oldValue": null,
      "newValue": {
        "code": "food"
      },
      "order": {
        "id": 2048,
        "managerId": 19,
        "site": "moysklad",
        "status": "new"
      }
    },
    {
      "id": 7089,
      "createdAt": "2018-10-04 16:36:27",
      "created": true,
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "status",
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2049,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2049,
        "number": "2049C",
        "orderType": "eshop-individual",
        "orderMethod": "phone",
        "countryIso": "RU",
        "createdAt": "2018-10-04 16:36:27",
        "statusUpdatedAt": "2018-10-04 16:36:27",
        "summ": 1099,
        "totalSumm": 1099,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-04 16:36:27",
        "firstName": "test",
        "email": "test@test.test",
        "call": false,
        "expired": false,
        "managerId": 19,
        "customer": {
          "type": "customer",
          "id": 978,
          "isContact": false,
          "createdAt": "2018-10-03 11:28:01",
          "managerId": 19,
          "vip": false,
          "bad": false,
          "site": "moysklad",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 43345.42,
          "totalSumm": 61632.6,
          "averageSumm": 844.28,
          "ordersCount": 73,
          "costSumm": 18287.18,
          "customFields": {
            "moyskladexternalid": "2f7651a1-e8e1-11e8-9109-f8fc0005536e"
          },
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 982,
            "countryIso": "RU",
            "region": "Москва город",
            "regionId": 55,
            "city": "Москва",
            "cityId": 4995,
            "cityType": "г.",
            "street": "Мира",
            "streetId": 1779257,
            "streetType": "пр-кт.",
            "building": "5",
            "notes": "345645364356b45  t56 g655gb5 g",
            "text": "пр-кт. Мира, д. 5, 345645364356b45  t56 g655gb5 g"
          },
          "segments": [
            {
              "id": 1,
              "code": "moskva",
              "name": "Москва",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 47,
              "active": true
            },
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
              "id": 11,
              "code": "davnie",
              "name": "Давние",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 935,
              "active": true
            },
            {
              "id": 12,
              "code": "bolshaya-summa-pokupok",
              "name": "Большая сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 4,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "svfds",
          "lastName": "dsadavfdvsdfvd",
          "patronymic": "vfdscdsvsddsa",
          "email": "test@test.test",
          "phones": [
            {
              "number": "89099999999"
            },
            {
              "number": "532523454365436"
            },
            {
              "number": "890999999999"
            },
            {
              "number": "911"
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
            "id": 2049,
            "countryIso": "RU"
          }
        },
        "site": "BitrixMod",
        "status": "new",
        "items": [
          {
            "id": 3652,
            "initialPrice": 1099,
            "discountTotal": 0,
            "prices": [
              {
                "price": 1099,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-04 16:36:27",
            "quantity": 1,
            "status": "new",
            "offer": {
              "displayName": "Нижнее белье Интимный Вечер",
              "id": 20186,
              "externalId": "125",
              "xmlId": "313",
              "name": "Нижнее белье Интимный Вечер",
              "article": "235-79-хх",
              "vatRate": "none",
              "unit": {
                "code": "pc",
                "name": "Штука",
                "sym": "шт."
              }
            },
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "fromApi": false,
        "length": 0,
        "width": 0,
        "height": 0,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7090,
      "createdAt": "2018-10-04 16:36:34",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "status",
      "oldValue": {
        "code": "new"
      },
      "newValue": {
        "code": "send-to-assembling"
      },
      "order": {
        "id": 2046,
        "managerId": 19,
        "site": "moysklad",
        "status": "send-to-assembling"
      }
    },
    {
      "id": 7091,
      "createdAt": "2018-10-04 16:36:38",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "status",
      "oldValue": {
        "code": "new"
      },
      "newValue": {
        "code": "send-to-assembling"
      },
      "order": {
        "id": 2047,
        "managerId": 19,
        "site": "moysklad",
        "status": "send-to-assembling"
      }
    },
    {
      "id": 7092,
      "createdAt": "2018-10-04 16:36:42",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "status",
      "oldValue": {
        "code": "new"
      },
      "newValue": {
        "code": "send-to-assembling"
      },
      "order": {
        "id": 2048,
        "managerId": 19,
        "site": "moysklad",
        "status": "send-to-assembling"
      }
    },
    {
      "id": 7093,
      "createdAt": "2018-10-04 16:36:46",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "status",
      "oldValue": {
        "code": "new"
      },
      "newValue": {
        "code": "send-to-assembling"
      },
      "order": {
        "id": 2049,
        "managerId": 19,
        "site": "BitrixMod",
        "status": "send-to-assembling"
      }
    },
    {
      "id": 7094,
      "createdAt": "2018-10-04 17:18:50",
      "source": "api",
      "field": "custom_moyskladexternalid",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "68f33e70-c7e0-11e8-9ff4-34e8000afb5a",
      "order": {
        "id": 2046,
        "managerId": 19,
        "site": "moysklad",
        "status": "send-to-assembling"
      }
    },
    {
      "id": 7095,
      "createdAt": "2018-10-04 17:18:51",
      "source": "api",
      "field": "custom_moyskladexternalid",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "69662cb7-c7e0-11e8-9ff4-3150000ae83f",
      "order": {
        "id": 2048,
        "managerId": 19,
        "site": "moysklad",
        "status": "send-to-assembling"
      }
    },
    {
      "id": 7096,
      "createdAt": "2018-10-05 11:06:46",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "order_product.quantity",
      "oldValue": 1,
      "newValue": 2,
      "order": {
        "id": 2048,
        "managerId": 19,
        "site": "moysklad",
        "status": "send-to-assembling"
      },
      "item": {
        "id": 3651,
        "offer": {
          "id": 20274,
          "externalId": "S1bbBvZ5h5f0N4hJbSK6B2#GpGvbiu6jwbbf7rku5XXU2",
          "xmlId": "S1bbBvZ5h5f0N4hJbSK6B2#GpGvbiu6jwbbf7rku5XXU2"
        }
      }
    },
    {
      "id": 7097,
      "createdAt": "2018-10-05 11:06:46",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "order_product.status",
      "oldValue": {
        "code": "new"
      },
      "newValue": {
        "code": "ready-for-assembly"
      },
      "order": {
        "id": 2048,
        "managerId": 19,
        "site": "moysklad",
        "status": "send-to-assembling"
      },
      "item": {
        "id": 3651,
        "offer": {
          "id": 20274,
          "externalId": "S1bbBvZ5h5f0N4hJbSK6B2#GpGvbiu6jwbbf7rku5XXU2",
          "xmlId": "S1bbBvZ5h5f0N4hJbSK6B2#GpGvbiu6jwbbf7rku5XXU2"
        }
      }
    },
    {
      "id": 7098,
      "createdAt": "2018-10-05 11:06:53",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "status",
      "oldValue": {
        "code": "send-to-assembling"
      },
      "newValue": {
        "code": "assembling"
      },
      "order": {
        "id": 2048,
        "managerId": 19,
        "site": "moysklad",
        "status": "assembling"
      }
    },
    {
      "id": 7099,
      "createdAt": "2018-10-05 11:12:22",
      "source": "api",
      "field": "status",
      "apiKey": {
        "current": false
      },
      "oldValue": {
        "code": "assembling"
      },
      "newValue": {
        "code": "cancel-other"
      },
      "order": {
        "id": 2048,
        "managerId": 19,
        "site": "moysklad",
        "status": "cancel-other"
      }
    },
    {
      "id": 7100,
      "createdAt": "2018-10-05 11:13:42",
      "source": "api",
      "field": "shipment_date",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "2018-10-05",
      "order": {
        "id": 2046,
        "managerId": 19,
        "site": "moysklad",
        "status": "send-to-assembling"
      }
    },
    {
      "id": 7101,
      "createdAt": "2018-10-05 11:13:42",
      "source": "api",
      "field": "shipped",
      "apiKey": {
        "current": false
      },
      "oldValue": false,
      "newValue": true,
      "order": {
        "id": 2046,
        "managerId": 19,
        "site": "moysklad",
        "status": "send-to-assembling"
      }
    },
    {
      "id": 7102,
      "createdAt": "2018-10-05 12:43:59",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "full_paid_at",
      "oldValue": null,
      "newValue": "2018-10-05 12:43:59",
      "order": {
        "id": 2046,
        "managerId": 19,
        "site": "moysklad",
        "status": "send-to-assembling"
      }
    },
    {
      "id": 7103,
      "createdAt": "2018-10-05 12:43:59",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "payments.paid_at",
      "oldValue": null,
      "newValue": "2018-10-05 00:00:00",
      "order": {
        "id": 2046,
        "managerId": 19,
        "site": "moysklad",
        "status": "send-to-assembling"
      },
      "payment": {
        "id": 1435,
        "type": "bank-card"
      }
    },
    {
      "id": 7104,
      "createdAt": "2018-10-05 12:43:59",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "payments.status",
      "oldValue": {
        "code": "not-paid"
      },
      "newValue": {
        "code": "paid"
      },
      "order": {
        "id": 2046,
        "managerId": 19,
        "site": "moysklad",
        "status": "send-to-assembling"
      },
      "payment": {
        "id": 1435,
        "type": "bank-card"
      }
    },
    {
      "id": 7105,
      "createdAt": "2018-10-05 13:51:11",
      "created": true,
      "source": "api",
      "field": "status",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2050,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2050,
        "number": "2050A",
        "externalId": "6",
        "orderType": "eshop-individual",
        "orderMethod": "shopping-cart",
        "createdAt": "2018-10-05 13:51:10",
        "statusUpdatedAt": "2018-10-05 13:51:11",
        "summ": 60.17,
        "totalSumm": 60.17,
        "prepaySum": 0,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-05 13:51:11",
        "lastName": "admin",
        "firstName": "Admin",
        "phone": "9515120000",
        "email": "admin@mail.ru",
        "call": false,
        "expired": false,
        "customer": {
          "type": "customer",
          "id": 982,
          "externalId": "2",
          "isContact": false,
          "createdAt": "2018-10-05 13:49:07",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "presta",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 0,
          "totalSumm": 0,
          "averageSumm": 0,
          "ordersCount": 0,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 983,
            "index": "344092",
            "countryIso": "",
            "city": "Ростов",
            "text": "test "
          },
          "segments": [

          ],
          "firstName": "Admin",
          "lastName": "admin",
          "email": "test12@gmail.com",
          "phones": [
            {
              "number": "1245987"
            },
            {
              "number": "9515120000"
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
            "id": 2050,
            "index": "344092",
            "countryIso": "",
            "city": "Ростов",
            "text": "test "
          }
        },
        "site": "presta",
        "status": "new",
        "items": [
          {
            "id": 3653,
            "initialPrice": 60.17310053999999,
            "discountTotal": 0,
            "prices": [
              {
                "price": 60.17,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-05 13:51:10",
            "quantity": 1,
            "status": "new",
            "properties": {
              "size": {
                "name": "Size",
                "value": "S",
                "code": "size"
              },
              "color": {
                "name": "Color",
                "value": "Beige",
                "code": "color"
              }
            },
            "purchasePrice": 0
          }
        ],
        "payments": [
          {
            "id": 1437,
            "type": "bank-transfer",
            "externalId": "6#GICOUOCSD",
            "amount": 60.17
          }
        ],
        "fromApi": true,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7106,
      "createdAt": "2018-10-05 13:51:47",
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "status",
      "oldValue": {
        "code": "new"
      },
      "newValue": {
        "code": "prepayed"
      },
      "order": {
        "id": 2050,
        "externalId": "6",
        "managerId": 23,
        "site": "presta",
        "status": "prepayed"
      }
    },
    {
      "id": 7107,
      "createdAt": "2018-10-05 13:51:47",
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "country",
      "oldValue": null,
      "newValue": "RU",
      "order": {
        "id": 2050,
        "externalId": "6",
        "managerId": 23,
        "site": "presta",
        "status": "prepayed"
      }
    },
    {
      "id": 7108,
      "createdAt": "2018-10-05 13:51:47",
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "manager",
      "oldValue": null,
      "newValue": {
        "id": 23
      },
      "order": {
        "id": 2050,
        "externalId": "6",
        "managerId": 23,
        "site": "presta",
        "status": "prepayed"
      }
    },
    {
      "id": 7109,
      "createdAt": "2018-10-05 13:51:55",
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "full_paid_at",
      "oldValue": null,
      "newValue": "2018-10-05 13:51:55",
      "order": {
        "id": 2050,
        "externalId": "6",
        "managerId": 23,
        "site": "presta",
        "status": "prepayed"
      }
    },
    {
      "id": 7110,
      "createdAt": "2018-10-05 13:51:55",
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "payments.paid_at",
      "oldValue": null,
      "newValue": "2018-10-05 00:00:00",
      "order": {
        "id": 2050,
        "externalId": "6",
        "managerId": 23,
        "site": "presta",
        "status": "prepayed"
      },
      "payment": {
        "id": 1437,
        "type": "bank-transfer",
        "externalId": "6#GICOUOCSD"
      }
    },
    {
      "id": 7111,
      "createdAt": "2018-10-05 13:51:55",
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "payments.status",
      "oldValue": null,
      "newValue": {
        "code": "paid"
      },
      "order": {
        "id": 2050,
        "externalId": "6",
        "managerId": 23,
        "site": "presta",
        "status": "prepayed"
      },
      "payment": {
        "id": 1437,
        "type": "bank-transfer",
        "externalId": "6#GICOUOCSD"
      }
    },
    {
      "id": 7112,
      "createdAt": "2018-10-05 13:53:45",
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "delivery_type",
      "oldValue": null,
      "newValue": {
        "code": "self-delivery"
      },
      "order": {
        "id": 2050,
        "externalId": "6",
        "managerId": 23,
        "site": "presta",
        "status": "prepayed"
      }
    },
    {
      "id": 7113,
      "createdAt": "2018-10-05 13:53:45",
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "full_paid_at",
      "oldValue": "2018-10-05 13:51:55",
      "newValue": null,
      "order": {
        "id": 2050,
        "externalId": "6",
        "managerId": 23,
        "site": "presta",
        "status": "prepayed"
      }
    },
    {
      "id": 7114,
      "createdAt": "2018-10-05 13:53:45",
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "payments.status",
      "oldValue": {
        "code": "paid"
      },
      "newValue": {
        "code": "not-paid"
      },
      "order": {
        "id": 2050,
        "externalId": "6",
        "managerId": 23,
        "site": "presta",
        "status": "prepayed"
      },
      "payment": {
        "id": 1437,
        "type": "bank-transfer",
        "externalId": "6#GICOUOCSD"
      }
    },
    {
      "id": 7115,
      "createdAt": "2018-10-05 13:53:52",
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "full_paid_at",
      "oldValue": null,
      "newValue": "2018-10-05 00:00:00",
      "order": {
        "id": 2050,
        "externalId": "6",
        "managerId": 23,
        "site": "presta",
        "status": "prepayed"
      }
    },
    {
      "id": 7116,
      "createdAt": "2018-10-05 13:53:52",
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "payments.status",
      "oldValue": {
        "code": "not-paid"
      },
      "newValue": {
        "code": "paid"
      },
      "order": {
        "id": 2050,
        "externalId": "6",
        "managerId": 23,
        "site": "presta",
        "status": "prepayed"
      },
      "payment": {
        "id": 1437,
        "type": "bank-transfer",
        "externalId": "6#GICOUOCSD"
      }
    },
    {
      "id": 7117,
      "createdAt": "2018-10-05 13:54:18",
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "status",
      "oldValue": {
        "code": "prepayed"
      },
      "newValue": {
        "code": "complete"
      },
      "order": {
        "id": 2050,
        "externalId": "6",
        "managerId": 23,
        "site": "presta",
        "status": "complete"
      }
    },
    {
      "id": 7118,
      "createdAt": "2018-10-05 13:54:18",
      "source": "code",
      "field": "order_product.status",
      "oldValue": {
        "code": "new"
      },
      "newValue": {
        "code": "saled"
      },
      "order": {
        "id": 2050,
        "externalId": "6",
        "managerId": 23,
        "site": "presta",
        "status": "complete"
      },
      "item": {
        "id": 3653
      }
    },
    {
      "id": 7119,
      "createdAt": "2018-10-05 13:55:18",
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "status",
      "oldValue": {
        "code": "complete"
      },
      "newValue": {
        "code": "cancel-other"
      },
      "order": {
        "id": 2050,
        "externalId": "6",
        "managerId": 23,
        "site": "presta",
        "status": "cancel-other"
      }
    },
    {
      "id": 7120,
      "createdAt": "2018-10-05 14:36:22",
      "created": true,
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "status",
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2051,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2051,
        "number": "2051C",
        "orderType": "eshop-individual",
        "orderMethod": "phone",
        "countryIso": "RU",
        "createdAt": "2018-10-05 14:36:22",
        "statusUpdatedAt": "2018-10-05 14:36:22",
        "summ": 999,
        "totalSumm": 1099,
        "prepaySum": 0,
        "purchaseSumm": 1,
        "markDatetime": "2018-10-05 14:36:22",
        "firstName": "test",
        "call": false,
        "expired": false,
        "managerId": 23,
        "customer": {
          "type": "customer",
          "id": 983,
          "externalId": "3",
          "isContact": false,
          "createdAt": "2018-10-05 14:36:22",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "presta",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 0,
          "totalSumm": 0,
          "averageSumm": 0,
          "ordersCount": 0,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 984,
            "countryIso": "RU"
          },
          "segments": [

          ],
          "firstName": "test",
          "email": "",
          "phones": [

          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "self-delivery",
          "cost": 100,
          "netCost": 0,
          "address": {
            "id": 2051,
            "countryIso": "RU"
          }
        },
        "site": "presta",
        "status": "new",
        "items": [
          {
            "id": 3654,
            "initialPrice": 0,
            "discountTotal": 0,
            "prices": [
              {
                "price": 0,
                "quantity": 1
              }
            ],
            "vatRate": "none",
            "createdAt": "2018-10-05 14:36:22",
            "quantity": 1,
            "status": "new",
            "offer": {
              "displayName": "Рукола (Зеленая дважды)",
              "id": 20274,
              "externalId": "S1bbBvZ5h5f0N4hJbSK6B2#GpGvbiu6jwbbf7rku5XXU2",
              "xmlId": "S1bbBvZ5h5f0N4hJbSK6B2#GpGvbiu6jwbbf7rku5XXU2",
              "name": "Рукола (Зеленая дважды)",
              "vatRate": "none",
              "unit": {
                "code": "796",
                "name": "Штука",
                "sym": "шт"
              }
            },
            "properties": [

            ],
            "purchasePrice": 0
          },
          {
            "id": 3655,
            "initialPrice": 999,
            "discountTotal": 0,
            "prices": [
              {
                "price": 999,
                "quantity": 1
              }
            ],
            "vatRate": "none",
            "createdAt": "2018-10-05 14:36:22",
            "quantity": 1,
            "status": "new",
            "properties": [

            ],
            "purchasePrice": 1
          }
        ],
        "payments": [
          {
            "id": 1438,
            "status": "not-paid",
            "type": "cash",
            "amount": 0,
            "paidAt": "2018-10-05 00:00:00"
          }
        ],
        "fromApi": false,
        "length": 0,
        "width": 0,
        "height": 0,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7121,
      "createdAt": "2018-10-05 14:36:22",
      "source": "code",
      "field": "customer",
      "oldValue": null,
      "newValue": {
        "id": 983,
        "externalId": "3",
        "site": "presta"
      },
      "order": {
        "id": 2051,
        "managerId": 23,
        "site": "presta",
        "status": "new"
      }
    },
    {
      "id": 7122,
      "createdAt": "2018-10-05 15:04:36",
      "created": true,
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "status",
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2052,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2052,
        "number": "2052C",
        "orderType": "eshop-individual",
        "orderMethod": "phone",
        "countryIso": "RU",
        "createdAt": "2018-10-05 15:04:36",
        "statusUpdatedAt": "2018-10-05 15:04:36",
        "summ": 21.25,
        "totalSumm": 21.25,
        "prepaySum": 21.25,
        "purchaseSumm": 0,
        "markDatetime": "2018-10-05 15:04:36",
        "lastName": "test",
        "firstName": "test",
        "phone": "7900000000",
        "email": "admin@mail.ru",
        "call": false,
        "expired": false,
        "managerId": 23,
        "customer": {
          "type": "customer",
          "id": 971,
          "externalId": "1",
          "isContact": false,
          "createdAt": "2019-03-21 00:29:10",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "BitrixMod",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 46065.7,
          "totalSumm": 46065.7,
          "averageSumm": 3290.41,
          "ordersCount": 14,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 981,
            "index": "344092",
            "countryIso": "GB",
            "region": "Aberdeen",
            "city": "test",
            "text": "test "
          },
          "segments": [
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
              "id": 13,
              "code": "srednyaya-summa-pokupok",
              "name": "Средняя сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 23,
              "code": "regulyarniy-klient",
              "name": "Регулярный клиент",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "test",
          "lastName": "test",
          "email": "admin@mail.ru",
          "phones": [
            {
              "number": "7800553535"
            },
            {
              "number": "9515120022"
            },
            {
              "number": "984654846"
            }
          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "self-delivery",
          "cost": 0,
          "netCost": 0,
          "address": {
            "id": 2052,
            "countryIso": "RU",
            "text": "ntncncn"
          }
        },
        "site": "presta",
        "status": "new",
        "items": [
          {
            "id": 3656,
            "initialPrice": 21.25,
            "discountTotal": 0,
            "prices": [
              {
                "price": 21.25,
                "quantity": 1
              }
            ],
            "vatRate": "none",
            "createdAt": "2018-10-05 15:04:36",
            "quantity": 1,
            "status": "new",
            "offer": {
              "displayName": "Agustí Torelló Mata GR Barrica 2011",
              "id": 19971,
              "externalId": "88",
              "name": "Agustí Torelló Mata GR Barrica 2011",
              "vatRate": "none",
              "unit": {
                "code": "pc",
                "name": "Штука",
                "sym": "шт."
              }
            },
            "properties": [

            ],
            "purchasePrice": 0
          }
        ],
        "fullPaidAt": "2018-10-05 00:00:00",
        "payments": [
          {
            "id": 1439,
            "status": "paid",
            "type": "cash",
            "amount": 21.25,
            "paidAt": "2018-10-05 00:00:00"
          }
        ],
        "fromApi": false,
        "length": 0,
        "width": 0,
        "height": 0,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7123,
      "createdAt": "2018-10-05 15:12:02",
      "created": true,
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "status",
      "oldValue": null,
      "newValue": {
        "code": "new"
      },
      "order": {
        "slug": 2053,
        "bonusesCreditTotal": 0,
        "bonusesChargeTotal": 0,
        "id": 2053,
        "number": "2053C",
        "orderType": "eshop-individual",
        "orderMethod": "phone",
        "countryIso": "RU",
        "createdAt": "2018-10-05 15:12:02",
        "statusUpdatedAt": "2018-10-05 15:12:02",
        "summ": 60.17,
        "totalSumm": 60.17,
        "prepaySum": 60.17,
        "purchaseSumm": 15.3,
        "markDatetime": "2018-10-05 15:12:02",
        "lastName": "admin",
        "firstName": "admin",
        "phone": "7900000000",
        "email": "admin@mail.ru",
        "call": false,
        "expired": false,
        "managerId": 23,
        "customer": {
          "type": "customer",
          "id": 971,
          "externalId": "1",
          "isContact": false,
          "createdAt": "2019-03-21 00:29:10",
          "managerId": 23,
          "vip": false,
          "bad": false,
          "site": "BitrixMod",
          "contragent": {
            "contragentType": "individual"
          },
          "tags": [

          ],
          "marginSumm": 46065.7,
          "totalSumm": 46065.7,
          "averageSumm": 3290.41,
          "ordersCount": 14,
          "costSumm": 0,
          "customFields": [

          ],
          "personalDiscount": 0,
          "cumulativeDiscount": 0,
          "address": {
            "id": 981,
            "index": "344092",
            "countryIso": "GB",
            "region": "Aberdeen",
            "city": "test",
            "text": "test "
          },
          "segments": [
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
              "id": 13,
              "code": "srednyaya-summa-pokupok",
              "name": "Средняя сумма покупок",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
              "active": true
            },
            {
              "id": 15,
              "code": "bolshoy-ltv",
              "name": "Большой LTV",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 34,
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
              "id": 23,
              "code": "regulyarniy-klient",
              "name": "Регулярный клиент",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 5,
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
              "id": 31,
              "code": "pol-ne-ukazan",
              "name": "Пол не указан",
              "createdAt": "2018-09-04 16:35:59",
              "isDynamic": true,
              "customersCount": 1290,
              "active": true
            }
          ],
          "firstName": "test",
          "lastName": "test",
          "email": "admin@mail.ru",
          "phones": [
            {
              "number": "7800553535"
            },
            {
              "number": "9515120022"
            },
            {
              "number": "984654846"
            }
          ]
        },
        "contragent": {
          "contragentType": "individual"
        },
        "delivery": {
          "code": "self-delivery",
          "cost": 0,
          "netCost": 0,
          "address": {
            "id": 2053,
            "countryIso": "RU",
            "text": "ntncncn"
          }
        },
        "site": "presta",
        "status": "new",
        "items": [
          {
            "id": 3657,
            "initialPrice": 60.17,
            "discountTotal": 0,
            "prices": [
              {
                "price": 60.17,
                "quantity": 1
              }
            ],
            "createdAt": "2018-10-05 15:12:02",
            "quantity": 1,
            "status": "new",
            "properties": [

            ],
            "purchasePrice": 15.3
          }
        ],
        "fullPaidAt": "2018-10-05 00:00:00",
        "payments": [
          {
            "id": 1440,
            "status": "paid",
            "type": "cash",
            "amount": 60.17,
            "paidAt": "2018-10-05 00:00:00"
          }
        ],
        "fromApi": false,
        "length": 0,
        "width": 0,
        "height": 0,
        "shipped": false,
        "customFields": [

        ]
      }
    },
    {
      "id": 7124,
      "createdAt": "2018-10-08 13:35:42",
      "source": "code",
      "field": "manager",
      "oldValue": null,
      "newValue": {
        "id": 23
      },
      "order": {
        "id": 2031,
        "externalId": "14",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      }
    },
    {
      "id": 7125,
      "createdAt": "2018-10-08 13:35:42",
      "source": "code",
      "field": "manager",
      "oldValue": null,
      "newValue": {
        "id": 23
      },
      "order": {
        "id": 2032,
        "externalId": "15",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      }
    },
    {
      "id": 7126,
      "createdAt": "2018-10-08 13:35:42",
      "source": "code",
      "field": "manager",
      "oldValue": null,
      "newValue": {
        "id": 23
      },
      "order": {
        "id": 2033,
        "externalId": "16",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      }
    },
    {
      "id": 7127,
      "createdAt": "2018-10-08 13:35:42",
      "source": "code",
      "field": "manager",
      "oldValue": null,
      "newValue": {
        "id": 23
      },
      "order": {
        "id": 2035,
        "externalId": "17",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      }
    },
    {
      "id": 7128,
      "createdAt": "2018-10-08 13:35:42",
      "source": "code",
      "field": "manager",
      "oldValue": null,
      "newValue": {
        "id": 23
      },
      "order": {
        "id": 2036,
        "externalId": "18",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      }
    },
    {
      "id": 7129,
      "createdAt": "2018-10-08 13:35:42",
      "source": "code",
      "field": "manager",
      "oldValue": null,
      "newValue": {
        "id": 23
      },
      "order": {
        "id": 2037,
        "externalId": "21",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      }
    },
    {
      "id": 7130,
      "createdAt": "2018-10-08 13:35:42",
      "source": "code",
      "field": "manager",
      "oldValue": null,
      "newValue": {
        "id": 23
      },
      "order": {
        "id": 2038,
        "externalId": "22",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      }
    },
    {
      "id": 7131,
      "createdAt": "2018-10-08 13:35:42",
      "source": "code",
      "field": "manager",
      "oldValue": null,
      "newValue": {
        "id": 23
      },
      "order": {
        "id": 2039,
        "externalId": "23",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      }
    },
    {
      "id": 7132,
      "createdAt": "2018-10-08 13:35:42",
      "source": "code",
      "field": "manager",
      "oldValue": null,
      "newValue": {
        "id": 23
      },
      "order": {
        "id": 2040,
        "externalId": "25",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      }
    },
    {
      "id": 7133,
      "createdAt": "2018-10-08 13:35:43",
      "source": "code",
      "field": "manager",
      "oldValue": null,
      "newValue": {
        "id": 23
      },
      "order": {
        "id": 2041,
        "externalId": "26",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      }
    },
    {
      "id": 7134,
      "createdAt": "2018-10-08 13:35:43",
      "source": "code",
      "field": "manager",
      "oldValue": null,
      "newValue": {
        "id": 23
      },
      "order": {
        "id": 2042,
        "externalId": "27",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      }
    },
    {
      "id": 7135,
      "createdAt": "2018-10-08 13:35:43",
      "source": "code",
      "field": "manager",
      "oldValue": null,
      "newValue": {
        "id": 23
      },
      "order": {
        "id": 2043,
        "externalId": "28",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      }
    },
    {
      "id": 7136,
      "createdAt": "2018-10-08 13:35:43",
      "source": "code",
      "field": "manager",
      "oldValue": null,
      "newValue": {
        "id": 23
      },
      "order": {
        "id": 2044,
        "externalId": "29",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      }
    },
    {
      "id": 7137,
      "createdAt": "2018-10-08 13:35:43",
      "source": "code",
      "field": "manager",
      "oldValue": null,
      "newValue": {
        "id": 23
      },
      "order": {
        "id": 2045,
        "externalId": "30",
        "managerId": 23,
        "site": "BitrixMod",
        "status": "new"
      }
    }
  ],
  "pagination": {
    "limit": 100,
    "totalCount": 29733,
    "currentPage": 1,
    "totalPageCount": 298
  }
}
EOF;

        $request                  = new OrdersHistoryRequest();
        $request->limit           = 100;
        $request->page            = 1;
        $request->filter          = new OrderHistoryFilterV4Type();
        $request->filter->sinceId = 2691;

        $mock = static::createApiMockBuilder('orders/history');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->orders->history($request);

        self::assertModelEqualsToResponse($json, $response, true);
    }

    public function testLinksCreate(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $request                = new OrdersLinksCreateRequest();
        $request->link          = new SerializedOrderLink();
        $request->site          = 'aliexpress';
        $request->link->orders  = [
            SerializedEntityOrder::withNumber('8123522898559160'),
            SerializedEntityOrder::withNumber('8123898472679160')
        ];
        $request->link->comment = 'same client';

        $mock = static::createApiMockBuilder('orders/links/create');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->orders->linksCreate($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testLoyaltyApply(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "order": {
    "bonusesCreditTotal": 0,
    "bonusesChargeTotal": 10,
    "privilegeType": "none",
    "totalSumm": 9978,
    "loyaltyAccount": {
      "id": 156,
      "amount": 901
    },
    "customer": {
      "id": 4925,
      "externalId": "1",
      "personalDiscount": 0
    },
    "delivery": {
      "cost": 0
    },
    "site": "bitrix-test",
    "items": [
      {
        "bonusesChargeTotal": 5,
        "bonusesCreditTotal": 0,
        "initialPrice": 4999,
        "discountTotal": 10,
        "prices": [
          {
            "price": 4989,
            "quantity": 1
          }
        ],
        "quantity": 1
      },
      {
        "bonusesChargeTotal": 5,
        "bonusesCreditTotal": 0,
        "initialPrice": 4999,
        "discountTotal": 10,
        "prices": [
          {
            "price": 4989,
            "quantity": 1
          }
        ],
        "quantity": 1
      }
    ]
  }
}
EOF;

        $request          = new OrdersLoyaltyApplyRequest();
        $request->site    = 'bitrix-test';
        $request->order   = SerializedEntityOrder::withNumber('7')->setApplyRound(true);
        $request->bonuses = 10;

        $mock = static::createApiMockBuilder('orders/loyalty/apply');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->matchCallback(static function (RequestInterface $request) {
                $data = [];
                parse_str((string) $request->getBody(), $data);

                return false !== strpos($data['order'] ?? '', '"applyRound"');
            })
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->orders->loyaltyApply($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCancelBonusOperations(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "order": {
    "bonusesCreditTotal": 0,
    "bonusesChargeTotal": 0,
    "privilegeType": "none",
    "totalSumm": 1279,
    "loyaltyAccount": {
      "id": 164,
      "amount": 1000
    },
    "delivery": {
      "cost": 500
    },
    "site": "bitrix-test",
    "items": [
      {
        "bonusesChargeTotal": 0,
        "bonusesCreditTotal": 0,
        "discounts": [],
        "id": 12153,
        "externalIds": [
          {
            "code": "bitrix",
            "value": "0_169"
          }
        ],
        "initialPrice": 779,
        "discountTotal": 0,
        "prices": [
          {
            "price": 779,
            "quantity": 1
          }
        ],
        "quantity": 1,
        "offer": {
          "id": 66445,
          "externalId": "169"
        }
      }
    ]
  }
}
EOF;

        $request = new OrderLoyaltyCancelBonusOperationsRequest(
            SerializedEntityOrder::withId(7751)->setApplyRound(true),
            'bitrix-test'
        );
        $mock = static::createApiMockBuilder('orders/loyalty/cancel-bonus-operations');

        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->matchCallback(static function (RequestInterface $request) {
                $data = [];
                parse_str((string) $request->getBody(), $data);

                return false !== strpos($data['order'] ?? '', '"applyRound"');
            })
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->orders->cancelBonusOperations($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testPaymentsCreate(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 1
}
EOF;

        $request                   = new OrdersPaymentsCreateRequest();
        $request->payment          = new SerializedPayment();
        $request->payment->type    = 'bank-card';
        $request->payment->amount  = 10000;
        $request->payment->comment = 'Comment';
        $request->payment->order   = SerializedEntityOrder::withNumber('8123522898559160');
        $request->site             = 'aliexpress';

        $mock = static::createApiMockBuilder('orders/payments/create');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->orders->paymentsCreate($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testPaymentsDelete(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $mock = static::createApiMockBuilder('orders/payments/4562/delete');
        $mock->matchMethod(RequestMethod::POST)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->orders->paymentsDelete(4562);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testPaymentsEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 1
}
EOF;

        $request                   = new OrdersPaymentsEditRequest();
        $request->by               = ByIdentifier::ID;
        $request->payment          = new SerializedPayment();
        $request->payment->comment = 'Comment';
        $request->site             = 'aliexpress';

        $mock = static::createApiMockBuilder('orders/payments/4562/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->orders->paymentsEdit(4562, $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testStatuses(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "orders": [
    {
      "id": 6722,
      "externalId": "8123522898559160",
      "status": "delivering",
      "group": "delivery"
    }
  ]
}
EOF;

        $request              = new OrdersStatusesRequest();
        $request->externalIds = ['8123522898559160'];

        $mock = static::createApiMockBuilder('orders/statuses');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->orders->statuses($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testUpload(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "uploadedOrders": [{
    "id": 7146,
    "externalId": "external_id_7146"
  }],
  "orders": [{
    "slug": 7146,
    "bonusesCreditTotal": 0,
    "bonusesChargeTotal": 0,
    "id": 7146,
    "externalId": "external_id_7146",
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
    "applyRound": true,
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
  }]
}
EOF;

        $request         = new OrdersUploadRequest();
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

        $request->site  = 'moysklad';
        $request->orders = [$order];

        $mock = static::createApiMockBuilder('orders/upload');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->orders->upload($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testGet(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "order": {
    "slug": 6722,
    "bonusesCreditTotal": 0,
    "bonusesChargeTotal": 0,
    "id": 6722,
    "number": "8123522898559160",
    "externalId": "8123522898559160",
    "orderMethod": "shopping-cart",
    "countryIso": "RU",
    "createdAt": "2020-12-29 17:35:08",
    "statusUpdatedAt": "2020-12-31 15:09:31",
    "summ": 1,
    "totalSumm": 1,
    "prepaySum": 0,
    "purchaseSumm": 0,
    "markDatetime": "2020-12-31 15:09:31",
    "lastName": "Pavel",
    "firstName": "Kovalenko",
    "call": false,
    "expired": false,
    "customer": {
      "type": "customer",
      "id": 4976,
      "externalId": "ru1067815391",
      "isContact": false,
      "createdAt": "2020-12-31 12:01:02",
      "vip": false,
      "bad": false,
      "site": "aliexpress",
      "contragent": {
        "contragentType": "individual"
      },
      "tags": [

      ],
      "marginSumm": 2,
      "totalSumm": 2,
      "averageSumm": 1,
      "ordersCount": 2,
      "costSumm": 0,
      "customFields": {
        "galkatrue": true
      },
      "personalDiscount": 0,
      "cumulativeDiscount": 0,
      "address": {
        "id": 3523,
        "index": "344065",
        "countryIso": "RU",
        "region": "Rostovskaya oblast",
        "city": "Rostov-Na-Donu",
        "notes": "ул. 50-летия Ростсельмаша, 2/6"
      },
      "segments": [
        {
          "id": 4,
          "code": "rossiya",
          "name": "Россия",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 208,
          "active": true
        },
        {
          "id": 8,
          "code": "rossiya-krome-msk",
          "name": "Россия (кроме МСК)",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 176,
          "active": true
        },
        {
          "id": 9,
          "code": "nedavnie",
          "name": "Недавние",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 82,
          "active": true
        },
        {
          "id": 14,
          "code": "malenkaya-summa-pokupok",
          "name": "Маленькая сумма покупок",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1054,
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
          "customersCount": 1249,
          "active": true
        },
        {
          "id": 26,
          "code": "bez-otmen",
          "name": "Без отмен",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1296,
          "active": true
        },
        {
          "id": 31,
          "code": "pol-ne-ukazan",
          "name": "Пол не указан",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1293,
          "active": true
        }
      ],
      "firstName": "Kovalenko",
      "lastName": "Pavel",
      "phones": [

      ]
    },
    "contact": {
      "type": "customer",
      "id": 4976,
      "externalId": "ru1067815391",
      "isContact": false,
      "createdAt": "2020-12-31 12:01:02",
      "vip": false,
      "bad": false,
      "site": "aliexpress",
      "contragent": {
        "contragentType": "individual"
      },
      "tags": [

      ],
      "marginSumm": 2,
      "totalSumm": 2,
      "averageSumm": 1,
      "ordersCount": 2,
      "costSumm": 0,
      "customFields": {
        "galkatrue": true
      },
      "personalDiscount": 0,
      "cumulativeDiscount": 0,
      "address": {
        "id": 3523,
        "index": "344065",
        "countryIso": "RU",
        "region": "Rostovskaya oblast",
        "city": "Rostov-Na-Donu",
        "notes": "ул. 50-летия Ростсельмаша, 2/6"
      },
      "segments": [
        {
          "id": 4,
          "code": "rossiya",
          "name": "Россия",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 208,
          "active": true
        },
        {
          "id": 8,
          "code": "rossiya-krome-msk",
          "name": "Россия (кроме МСК)",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 176,
          "active": true
        },
        {
          "id": 9,
          "code": "nedavnie",
          "name": "Недавние",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 82,
          "active": true
        },
        {
          "id": 14,
          "code": "malenkaya-summa-pokupok",
          "name": "Маленькая сумма покупок",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1054,
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
          "customersCount": 1249,
          "active": true
        },
        {
          "id": 26,
          "code": "bez-otmen",
          "name": "Без отмен",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1296,
          "active": true
        },
        {
          "id": 31,
          "code": "pol-ne-ukazan",
          "name": "Пол не указан",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1293,
          "active": true
        }
      ],
      "firstName": "Kovalenko",
      "lastName": "Pavel",
      "phones": [

      ]
    },
    "contragent": {
      "contragentType": "individual"
    },
    "delivery": {
      "cost": 0,
      "netCost": 0,
      "address": {
        "index": "344065",
        "countryIso": "RU",
        "region": "Rostovskaya oblast",
        "city": "Rostov-Na-Donu",
        "notes": "ул. 50-летия Ростсельмаша, 2/6"
      }
    },
    "site": "aliexpress",
    "status": "delivering",
    "items": [
      {
        "markingCodes": [

        ],
        "id": 10114,
        "initialPrice": 1,
        "discountTotal": 0,
        "prices": [
          {
            "price": 1,
            "quantity": 1
          }
        ],
        "discounts": [
          {
            "type": "round",
            "amount": 0.5
          }
        ],
        "createdAt": "2020-12-29 17:35:08",
        "quantity": 1,
        "status": "new",
        "offer": {
          "displayName": "Test product/not for sale (do not order!)",
          "id": 1867352,
          "externalId": "1005001690749727",
          "xmlId": "1680c0a6-c5a3-48a6-aa8d-864553a8add9",
          "name": "Test product/not for sale (do not order!)",
          "unit": {
            "code": "pc",
            "name": "Штука",
            "sym": "шт."
          }
        },
        "properties": [

        ],
        "purchasePrice": 0
      }
    ],
    "payments": {
      "4326": {
        "id": 4326,
        "type": "bank-card",
        "externalId": "payment_8123522898559160",
        "amount": 0,
        "paidAt": "2020-12-29 17:35:12"
      }
    },
    "fromApi": true,
    "shipmentStore": "main12",
    "shipped": false,
    "customFields": {
      "galka": false,
      "test_number": 0,
      "otpravit_dozakaz": false
    }
  }
}
EOF;

        $request = new BySiteRequest(ByIdentifier::EXTERNAL_ID, 'aliexpress');

        $mock = static::createApiMockBuilder('orders/8123522898559160');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->orders->get('8123522898559160', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 6722,
  "order": {
    "slug": 6722,
    "bonusesCreditTotal": 0,
    "bonusesChargeTotal": 0,
    "id": 6722,
    "number": "8123522898559160",
    "externalId": "8123522898559160",
    "orderMethod": "shopping-cart",
    "privilegeType": "none",
    "countryIso": "RU",
    "createdAt": "2020-12-29 17:35:08",
    "statusUpdatedAt": "2020-12-31 15:09:31",
    "summ": 1,
    "totalSumm": 1,
    "prepaySum": 0,
    "purchaseSumm": 0,
    "markDatetime": "2020-12-31 15:09:31",
    "lastName": "Pavel",
    "firstName": "Kovalenko",
    "call": false,
    "expired": false,
    "managerComment": "Manager comment",
    "applyRound": true,
    "customer": {
      "type": "customer",
      "id": 4976,
      "externalId": "ru1067815391",
      "isContact": false,
      "createdAt": "2020-12-31 12:01:02",
      "vip": false,
      "bad": false,
      "site": "aliexpress",
      "contragent": {
        "contragentType": "individual"
      },
      "tags": [],
      "marginSumm": 2,
      "totalSumm": 2,
      "averageSumm": 1,
      "ordersCount": 2,
      "costSumm": 0,
      "customFields": {
        "galkatrue": true
      },
      "personalDiscount": 0,
      "cumulativeDiscount": 0,
      "address": {
        "id": 3523,
        "index": "344065",
        "countryIso": "RU",
        "region": "Rostovskaya oblast",
        "city": "Rostov-Na-Donu",
        "notes": "ул. 50-летия Ростсельмаша, 2/6"
      },
      "segments": [
        {
          "id": 4,
          "code": "rossiya",
          "name": "Россия",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 211,
          "active": true
        },
        {
          "id": 8,
          "code": "rossiya-krome-msk",
          "name": "Россия (кроме МСК)",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 179,
          "active": true
        },
        {
          "id": 9,
          "code": "nedavnie",
          "name": "Недавние",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 85,
          "active": true
        },
        {
          "id": 14,
          "code": "malenkaya-summa-pokupok",
          "name": "Маленькая сумма покупок",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1057,
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
          "customersCount": 1251,
          "active": true
        },
        {
          "id": 26,
          "code": "bez-otmen",
          "name": "Без отмен",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1300,
          "active": true
        },
        {
          "id": 31,
          "code": "pol-ne-ukazan",
          "name": "Пол не указан",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1297,
          "active": true
        }
      ],
      "firstName": "Kovalenko",
      "lastName": "Pavel",
      "phones": []
    },
    "contact": {
      "type": "customer",
      "id": 4976,
      "externalId": "ru1067815391",
      "isContact": false,
      "createdAt": "2020-12-31 12:01:02",
      "vip": false,
      "bad": false,
      "site": "aliexpress",
      "contragent": {
        "contragentType": "individual"
      },
      "tags": [],
      "marginSumm": 2,
      "totalSumm": 2,
      "averageSumm": 1,
      "ordersCount": 2,
      "costSumm": 0,
      "customFields": {
        "galkatrue": true
      },
      "personalDiscount": 0,
      "cumulativeDiscount": 0,
      "address": {
        "id": 3523,
        "index": "344065",
        "countryIso": "RU",
        "region": "Rostovskaya oblast",
        "city": "Rostov-Na-Donu",
        "notes": "ул. 50-летия Ростсельмаша, 2/6"
      },
      "segments": [
        {
          "id": 4,
          "code": "rossiya",
          "name": "Россия",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 211,
          "active": true
        },
        {
          "id": 8,
          "code": "rossiya-krome-msk",
          "name": "Россия (кроме МСК)",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 179,
          "active": true
        },
        {
          "id": 9,
          "code": "nedavnie",
          "name": "Недавние",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 85,
          "active": true
        },
        {
          "id": 14,
          "code": "malenkaya-summa-pokupok",
          "name": "Маленькая сумма покупок",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1057,
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
          "customersCount": 1251,
          "active": true
        },
        {
          "id": 26,
          "code": "bez-otmen",
          "name": "Без отмен",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1300,
          "active": true
        },
        {
          "id": 31,
          "code": "pol-ne-ukazan",
          "name": "Пол не указан",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1297,
          "active": true
        }
      ],
      "firstName": "Kovalenko",
      "lastName": "Pavel",
      "phones": []
    },
    "contragent": {
      "contragentType": "individual"
    },
    "delivery": {
      "cost": 0,
      "netCost": 0,
      "address": {
        "index": "344065",
        "countryIso": "RU",
        "region": "Rostovskaya oblast",
        "city": "Rostov-Na-Donu",
        "notes": "ул. 50-летия Ростсельмаша, 2/6"
      }
    },
    "site": "aliexpress",
    "status": "delivering",
    "items": [
      {
        "markingCodes": [],
        "id": 10114,
        "initialPrice": 1,
        "discountTotal": 0,
        "prices": [
          {
            "price": 1,
            "quantity": 1
          }
        ],
        "discounts": [
          {
            "type": "manual_product",
            "amount": 1
          }
        ],
        "createdAt": "2020-12-29 17:35:08",
        "quantity": 1,
        "status": "new",
        "offer": {
          "displayName": "Test product/not for sale (do not order!)",
          "id": 1867352,
          "externalId": "1005001690749727",
          "xmlId": "1680c0a6-c5a3-48a6-aa8d-864553a8add9",
          "name": "Test product/not for sale (do not order!)",
          "unit": {
            "code": "pc",
            "name": "Штука",
            "sym": "шт."
          }
        },
        "properties": [],
        "purchasePrice": 0
      }
    ],
    "payments": {
      "4326": {
        "id": 4326,
        "type": "bank-card",
        "externalId": "payment_8123522898559160",
        "amount": 1,
        "paidAt": "2020-12-29 17:35:12"
      }
    },
    "fromApi": true,
    "shipmentStore": "main12",
    "shipped": false,
    "customFields": {
      "galka": false,
      "test_number": 0,
      "otpravit_dozakaz": false
    }
  }
}
EOF;

        $order                 = new Order();
        $order->managerComment = 'Manager comment';

        $request        = new OrdersEditRequest();
        $request->by    = ByIdentifier::EXTERNAL_ID;
        $request->site  = 'aliexpress';
        $request->order = $order;

        $mock = static::createApiMockBuilder('orders/8123522898559160/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->orders->edit('8123522898559160', $request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
