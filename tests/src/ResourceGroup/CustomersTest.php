<?php

/**
 * PHP version 7.3
 *
 * @category CustomersTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Component\Transformer\DateTimeTransformer;
use RetailCrm\Api\Enum\ByIdentifier;
use RetailCrm\Api\Enum\Customers\ContragentType;
use RetailCrm\Api\Enum\Customers\CustomerType;
use RetailCrm\Api\Enum\NumericBoolean;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\Customers\Customer;
use RetailCrm\Api\Model\Entity\Customers\CustomerAddress;
use RetailCrm\Api\Model\Entity\Customers\CustomerContragent;
use RetailCrm\Api\Model\Entity\Customers\CustomerNote;
use RetailCrm\Api\Model\Entity\Customers\CustomerPhone;
use RetailCrm\Api\Model\Entity\Customers\CustomerTag;
use RetailCrm\Api\Model\Entity\Customers\SerializedCustomerReference;
use RetailCrm\Api\Model\Entity\FixExternalRow;
use RetailCrm\Api\Model\Filter\Customers\CustomerFilter;
use RetailCrm\Api\Model\Filter\Customers\CustomerHistoryFilter;
use RetailCrm\Api\Model\Filter\Customers\CustomerNoteFilter;
use RetailCrm\Api\Model\Request\BySiteRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersCombineRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersCreateRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersEditRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersFixExternalIdsRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersHistoryRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersNotesCreateRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersNotesRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersUploadRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class CustomersTest
 *
 * @category CustomersTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class CustomersTest extends AbstractApiResourceGroupTestCase
{
    public function testCustomersList(): void
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
  "customers": [
    {
      "type": "customer",
      "id": 1233,
      "externalId": "11",
      "isContact": true,
      "createdAt": "2019-05-27 09:42:45",
      "managerId": 24,
      "vip": false,
      "bad": false,
      "site": "moysklad",
      "contragent": {
        "contragentType": "individual"
      },
      "tags": [

      ],
      "marginSumm": 50,
      "totalSumm": 50,
      "averageSumm": 50,
      "ordersCount": 1,
      "costSumm": 0,
      "customFields": {
        "galkatrue": true
      },
      "personalDiscount": 0,
      "cumulativeDiscount": 0,
      "address": {
        "id": 1218,
        "countryIso": "RU",
        "region": "Ставропольский Край",
        "regionId": 20,
        "city": "Кисловодск",
        "cityId": 2303,
        "cityType": "г."
      },
      "segments": [
        {
          "id": 4,
          "code": "rossiya",
          "name": "Россия",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 201,
          "active": true
        },
        {
          "id": 8,
          "code": "rossiya-krome-msk",
          "name": "Россия (кроме МСК)",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 170,
          "active": true
        },
        {
          "id": 11,
          "code": "davnie",
          "name": "Давние",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 930,
          "active": true
        },
        {
          "id": 14,
          "code": "malenkaya-summa-pokupok",
          "name": "Маленькая сумма покупок",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1039,
          "active": true
        },
        {
          "id": 17,
          "code": "nizkiy-ltv",
          "name": "Низкий LTV",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 996,
          "active": true
        },
        {
          "id": 20,
          "code": "nizkiy-sredniy-chek",
          "name": "Низкий средний чек",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1238,
          "active": true
        },
        {
          "id": 26,
          "code": "bez-otmen",
          "name": "Без отмен",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1282,
          "active": true
        },
        {
          "id": 31,
          "code": "pol-ne-ukazan",
          "name": "Пол не указан",
          "createdAt": "2018-09-04 16:35:59",
          "isDynamic": true,
          "customersCount": 1279,
          "active": true
        }
      ],
      "firstName": "Иван",
      "lastName": "Иванов",
      "patronymic": "Иванович23",
      "presumableSex": "male",
      "email": "",
      "phones": [
        {
          "number": "89229112322"
        }
      ]
    }
  ]
}
EOF;

        $request                    = new CustomersRequest();
        $request->limit             = 20;
        $request->page              = 1;
        $request->filter            = new CustomerFilter();
        $request->filter->sites     = ['moysklad', 'aliexpress'];
        $request->filter->name      = '89229112322';
        $request->filter->isContact = NumericBoolean::TRUE;

        $mock = static::createApiMockBuilder('customers');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $costs  = $client->customers->list($request);

        self::assertModelEqualsToResponse($json, $costs);
    }

    public function testCustomersCombine(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $request                 = new CustomersCombineRequest();
        $request->customers      = [
            new SerializedCustomerReference(2),
            new SerializedCustomerReference(3),
            new SerializedCustomerReference(4),
        ];
        $request->resultCustomer = new SerializedCustomerReference(1);

        $mock = static::createApiMockBuilder('customers/combine');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customers->combine($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCustomersCreate(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 1
}
EOF;

        $customer                             = new Customer();
        $customer->type                       = CustomerType::CUSTOMER;
        $customer->externalId                 = 'test_10';
        $customer->managerId                  = 24;
        $customer->contragent                 = new CustomerContragent();
        $customer->contragent->contragentType = ContragentType::INDIVIDUAL;
        $customer->tags                       = [
            new CustomerTag('first'),
            new CustomerTag('second'),
            new CustomerTag('third'),
        ];
        $customer->customFields               = [
            'galkatrue' => true
        ];
        $customer->address                    = new CustomerAddress();
        $customer->address->text              = '(719) 395-5645 13990 W County 270 Rd Nathrop, Colorado(CO), 81236';
        $customer->firstName                  = 'Test';
        $customer->lastName                   = 'User';
        $customer->patronymic                 = 'Tester';
        $customer->email                      = 'tester@example.com';
        $customer->phones                     = [
            new CustomerPhone('(603) 292-6810')
        ];
        $customer->birthday = DateTimeTransformer::createDate('1980-01-01');

        $request           = new CustomersCreateRequest();
        $request->site     = 'aliexpress';
        $request->customer = $customer;

        $mock = static::createApiMockBuilder('customers/create');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customers->create($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCustomersFixExternalIds(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $request            = new CustomersFixExternalIdsRequest();
        $request->customers = [
            new FixExternalRow(1, 'external_id_1'),
            new FixExternalRow(2, 'external_id_2'),
            new FixExternalRow(3, 'external_id_3'),
        ];

        $mock = static::createApiMockBuilder('customers/fix-external-ids');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customers->fixExternalIds($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCustomersHistory(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "generatedAt": "2021-02-16 15:41:11",
  "history": [
    {
      "id": 2692,
      "createdAt": "2018-10-04 20:04:13",
      "source": "code",
      "field": "segments",
      "oldValue": {
        "code": "nizkiy-sredniy-chek"
      },
      "newValue": null,
      "customer": {
        "id": 978,
        "site": "moysklad"
      }
    },
    {
      "id": 2693,
      "createdAt": "2018-10-04 20:04:13",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "normalniy-sredniy-chek"
      },
      "customer": {
        "id": 978,
        "site": "moysklad"
      }
    },
    {
      "id": 2694,
      "createdAt": "2018-10-05 13:39:00",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "problemnie"
      },
      "customer": {
        "id": 978,
        "site": "moysklad"
      }
    },
    {
      "id": 2695,
      "createdAt": "2018-10-05 13:49:08",
      "created": true,
      "source": "api",
      "field": "id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": 982,
      "customer": {
        "type": "customer",
        "id": 982,
        "externalId": "2",
        "createdAt": "2018-10-05 13:49:07",
        "vip": false,
        "bad": false,
        "site": "presta",
        "contragent": {
          "contragentType": "individual"
        },
        "marginSumm": 0,
        "totalSumm": 0,
        "averageSumm": 0,
        "ordersCount": 0,
        "customFields": [

        ],
        "personalDiscount": 0,
        "cumulativeDiscount": 0,
        "segments": [

        ],
        "firstName": "Admin",
        "lastName": "admin",
        "email": "admin@mail.ru"
      }
    },
    {
      "id": 2696,
      "createdAt": "2018-10-05 13:51:11",
      "source": "api",
      "field": "phones",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "9515120000",
      "customer": {
        "id": 982,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2697,
      "createdAt": "2018-10-05 13:54:18",
      "source": "code",
      "field": "manager",
      "oldValue": null,
      "newValue": {
        "id": 23
      },
      "customer": {
        "id": 982,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2698,
      "createdAt": "2018-10-05 14:36:22",
      "created": true,
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "id",
      "oldValue": null,
      "newValue": 983,
      "customer": {
        "type": "customer",
        "id": 983,
        "createdAt": "2018-10-05 14:36:22",
        "managerId": 23,
        "vip": false,
        "bad": false,
        "site": "presta",
        "contragent": {
          "contragentType": "individual"
        },
        "marginSumm": 0,
        "totalSumm": 0,
        "averageSumm": 0,
        "ordersCount": 0,
        "customFields": [

        ],
        "personalDiscount": 0,
        "cumulativeDiscount": 0,
        "segments": [

        ],
        "firstName": "test",
        "email": ""
      }
    },
    {
      "id": 2699,
      "createdAt": "2018-10-05 14:36:34",
      "source": "api",
      "field": "external_id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "3",
      "customer": {
        "id": 983,
        "externalId": "3",
        "site": "presta"
      }
    },
    {
      "id": 2700,
      "createdAt": "2018-10-05 15:04:36",
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "manager",
      "oldValue": null,
      "newValue": {
        "id": 23
      },
      "customer": {
        "id": 971,
        "externalId": "1",
        "site": "BitrixMod"
      }
    },
    {
      "id": 2701,
      "createdAt": "2018-10-05 16:36:26",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nedavnie"
      },
      "customer": {
        "id": 982,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2702,
      "createdAt": "2018-10-05 16:36:26",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nedavnie"
      },
      "customer": {
        "id": 983,
        "externalId": "3",
        "site": "presta"
      }
    },
    {
      "id": 2703,
      "createdAt": "2018-10-05 16:36:26",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "rossiya-krome-msk"
      },
      "customer": {
        "id": 983,
        "externalId": "3",
        "site": "presta"
      }
    },
    {
      "id": 2704,
      "createdAt": "2018-10-05 16:36:26",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "bez-otmen"
      },
      "customer": {
        "id": 982,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2705,
      "createdAt": "2018-10-05 16:36:26",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "pol-ne-ukazan"
      },
      "customer": {
        "id": 982,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2706,
      "createdAt": "2018-10-05 16:36:26",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "pol-ne-ukazan"
      },
      "customer": {
        "id": 983,
        "externalId": "3",
        "site": "presta"
      }
    },
    {
      "id": 2707,
      "createdAt": "2018-10-05 16:36:26",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "sredney-davnosti"
      },
      "customer": {
        "id": 982,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2708,
      "createdAt": "2018-10-05 16:36:26",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "sredney-davnosti"
      },
      "customer": {
        "id": 983,
        "externalId": "3",
        "site": "presta"
      }
    },
    {
      "id": 2709,
      "createdAt": "2018-10-05 16:36:26",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nizkiy-ltv"
      },
      "customer": {
        "id": 982,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2710,
      "createdAt": "2018-10-05 16:36:26",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nizkiy-ltv"
      },
      "customer": {
        "id": 983,
        "externalId": "3",
        "site": "presta"
      }
    },
    {
      "id": 2711,
      "createdAt": "2018-10-05 16:36:26",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "davnie"
      },
      "customer": {
        "id": 982,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2712,
      "createdAt": "2018-10-05 16:36:26",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "davnie"
      },
      "customer": {
        "id": 983,
        "externalId": "3",
        "site": "presta"
      }
    },
    {
      "id": 2713,
      "createdAt": "2018-10-05 16:36:27",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "malenkaya-summa-pokupok"
      },
      "customer": {
        "id": 982,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2714,
      "createdAt": "2018-10-05 16:36:27",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "malenkaya-summa-pokupok"
      },
      "customer": {
        "id": 983,
        "externalId": "3",
        "site": "presta"
      }
    },
    {
      "id": 2715,
      "createdAt": "2018-10-05 16:36:27",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nizkiy-sredniy-chek"
      },
      "customer": {
        "id": 982,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2716,
      "createdAt": "2018-10-05 16:36:27",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nizkiy-sredniy-chek"
      },
      "customer": {
        "id": 983,
        "externalId": "3",
        "site": "presta"
      }
    },
    {
      "id": 2717,
      "createdAt": "2018-10-05 16:36:27",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "rossiya"
      },
      "customer": {
        "id": 983,
        "externalId": "3",
        "site": "presta"
      }
    },
    {
      "id": 2718,
      "createdAt": "2018-10-12 12:15:53",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "address.building",
      "oldValue": null,
      "newValue": "5",
      "address": {
        "id": 982,
        "isMain": true
      },
      "customer": {
        "id": 978,
        "site": "moysklad"
      }
    },
    {
      "id": 2719,
      "createdAt": "2018-10-12 12:15:53",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "address.city",
      "oldValue": null,
      "newValue": "Москва",
      "address": {
        "id": 982,
        "isMain": true
      },
      "customer": {
        "id": 978,
        "site": "moysklad"
      }
    },
    {
      "id": 2720,
      "createdAt": "2018-10-12 12:15:53",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "address.region",
      "oldValue": null,
      "newValue": "Москва город",
      "address": {
        "id": 982,
        "isMain": true
      },
      "customer": {
        "id": 978,
        "site": "moysklad"
      }
    },
    {
      "id": 2721,
      "createdAt": "2018-10-12 12:15:53",
      "source": "user",
      "user": {
        "id": 19
      },
      "field": "address.street",
      "oldValue": null,
      "newValue": "Мира",
      "address": {
        "id": 982,
        "isMain": true
      },
      "customer": {
        "id": 978,
        "site": "moysklad"
      }
    },
    {
      "id": 2722,
      "createdAt": "2018-10-12 13:46:37",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "moskva"
      },
      "customer": {
        "id": 978,
        "site": "moysklad"
      }
    },
    {
      "id": 2723,
      "createdAt": "2018-10-12 13:46:37",
      "source": "code",
      "field": "segments",
      "oldValue": {
        "code": "rossiya-krome-msk"
      },
      "newValue": null,
      "customer": {
        "id": 978,
        "site": "moysklad"
      }
    },
    {
      "id": 2724,
      "createdAt": "2018-10-12 13:46:38",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "klienti-iz-gorodov-millionnikov"
      },
      "customer": {
        "id": 978,
        "site": "moysklad"
      }
    },
    {
      "id": 2725,
      "createdAt": "2018-10-16 16:37:21",
      "created": true,
      "source": "api",
      "field": "id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": 984,
      "customer": {
        "type": "customer",
        "id": 984,
        "externalId": "4",
        "createdAt": "2018-10-16 16:37:21",
        "vip": false,
        "bad": false,
        "site": "presta",
        "contragent": {
          "contragentType": "individual"
        },
        "marginSumm": 0,
        "totalSumm": 0,
        "averageSumm": 0,
        "ordersCount": 0,
        "customFields": [

        ],
        "personalDiscount": 0,
        "cumulativeDiscount": 0,
        "segments": [

        ],
        "firstName": "Test",
        "lastName": "test",
        "email": "sergey_ds@gmail.com"
      }
    },
    {
      "id": 2726,
      "createdAt": "2018-10-16 16:39:55",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "pol-ne-ukazan"
      },
      "customer": {
        "id": 984,
        "externalId": "4",
        "site": "presta"
      }
    },
    {
      "id": 2727,
      "createdAt": "2018-10-16 16:39:55",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "problemnie"
      },
      "customer": {
        "id": 982,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2728,
      "createdAt": "2018-10-16 16:39:55",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "sredney-davnosti"
      },
      "customer": {
        "id": 984,
        "externalId": "4",
        "site": "presta"
      }
    },
    {
      "id": 2729,
      "createdAt": "2018-10-16 16:39:56",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nedavnie"
      },
      "customer": {
        "id": 984,
        "externalId": "4",
        "site": "presta"
      }
    },
    {
      "id": 2730,
      "createdAt": "2018-10-16 16:39:56",
      "source": "code",
      "field": "segments",
      "oldValue": {
        "code": "bez-otmen"
      },
      "newValue": null,
      "customer": {
        "id": 982,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2731,
      "createdAt": "2018-10-16 16:39:56",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "davnie"
      },
      "customer": {
        "id": 984,
        "externalId": "4",
        "site": "presta"
      }
    },
    {
      "id": 2732,
      "createdAt": "2018-10-16 16:39:56",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nizkiy-sredniy-chek"
      },
      "customer": {
        "id": 984,
        "externalId": "4",
        "site": "presta"
      }
    },
    {
      "id": 2733,
      "createdAt": "2018-10-16 18:06:04",
      "source": "api",
      "field": "phones",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": "1245987",
      "customer": {
        "id": 982,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2734,
      "createdAt": "2018-10-16 18:06:04",
      "source": "api",
      "field": "email",
      "apiKey": {
        "current": false
      },
      "oldValue": "admin@mail.ru",
      "newValue": "test12@gmail.com",
      "customer": {
        "id": 982,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2735,
      "createdAt": "2018-10-16 18:07:18",
      "deleted": true,
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "id",
      "oldValue": 974,
      "newValue": null,
      "customer": {
        "type": "customer",
        "id": 974,
        "externalId": "82",
        "isContact": false,
        "createdAt": "2018-10-03 09:13:04",
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
        "segments": [

        ],
        "firstName": "TestPresta",
        "phones": [

        ]
      }
    },
    {
      "id": 2736,
      "createdAt": "2018-10-16 18:07:18",
      "deleted": true,
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "id",
      "oldValue": 975,
      "newValue": null,
      "customer": {
        "type": "customer",
        "id": 975,
        "externalId": "83",
        "isContact": false,
        "createdAt": "2018-10-03 09:16:25",
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
        "segments": [

        ],
        "firstName": "TestPresta",
        "lastName": "TestPresta",
        "phones": [

        ]
      }
    },
    {
      "id": 2737,
      "createdAt": "2018-10-16 18:07:18",
      "deleted": true,
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "id",
      "oldValue": 976,
      "newValue": null,
      "customer": {
        "type": "customer",
        "id": 976,
        "externalId": "84",
        "isContact": false,
        "createdAt": "2018-10-03 09:55:05",
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
        "segments": [

        ],
        "firstName": "TestPresta",
        "lastName": "TestPresta",
        "phones": [

        ]
      }
    },
    {
      "id": 2738,
      "createdAt": "2018-10-16 18:07:18",
      "deleted": true,
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "id",
      "oldValue": 977,
      "newValue": null,
      "customer": {
        "type": "customer",
        "id": 977,
        "externalId": "85",
        "isContact": false,
        "createdAt": "2018-10-03 10:22:15",
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
        "segments": [

        ],
        "firstName": "TestPresta",
        "lastName": "TestPresta",
        "email": "test@gmail.ru",
        "phones": [

        ]
      }
    },
    {
      "id": 2739,
      "createdAt": "2018-10-16 18:07:18",
      "deleted": true,
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "id",
      "oldValue": 979,
      "newValue": null,
      "customer": {
        "type": "customer",
        "id": 979,
        "externalId": "86",
        "isContact": false,
        "createdAt": "2018-10-03 16:25:32",
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
        "segments": [

        ],
        "firstName": "TestPresta",
        "lastName": "TestPresta",
        "email": "test@gmail.ru",
        "phones": [

        ]
      }
    },
    {
      "id": 2740,
      "createdAt": "2018-10-16 18:07:18",
      "deleted": true,
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "id",
      "oldValue": 980,
      "newValue": null,
      "customer": {
        "type": "customer",
        "id": 980,
        "externalId": "87",
        "isContact": false,
        "createdAt": "2018-10-03 16:32:05",
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
        "segments": [

        ],
        "firstName": "TestPresta",
        "lastName": "TestPresta",
        "email": "test@gmail.ru",
        "phones": [

        ]
      }
    },
    {
      "id": 2741,
      "createdAt": "2018-10-16 18:07:18",
      "deleted": true,
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "id",
      "oldValue": 981,
      "newValue": null,
      "customer": {
        "type": "customer",
        "id": 981,
        "externalId": "88",
        "isContact": false,
        "createdAt": "2018-10-03 16:32:09",
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
        "segments": [

        ],
        "firstName": "TestPresta",
        "lastName": "TestPresta",
        "email": "test@gmail.ru",
        "phones": [

        ]
      }
    },
    {
      "id": 2742,
      "createdAt": "2018-10-16 18:07:18",
      "deleted": true,
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "id",
      "oldValue": 984,
      "newValue": null,
      "customer": {
        "type": "customer",
        "id": 984,
        "externalId": "4",
        "isContact": false,
        "createdAt": "2018-10-16 16:37:21",
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
        "segments": [

        ],
        "firstName": "Test",
        "lastName": "test",
        "email": "sergey_ds@gmail.com",
        "phones": [

        ]
      }
    },
    {
      "id": 2743,
      "createdAt": "2018-10-16 18:07:18",
      "deleted": true,
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "id",
      "oldValue": 983,
      "newValue": null,
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
      }
    },
    {
      "id": 2744,
      "createdAt": "2018-10-16 18:07:18",
      "deleted": true,
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "id",
      "oldValue": 982,
      "newValue": null,
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
      }
    },
    {
      "id": 2745,
      "createdAt": "2018-10-16 18:07:40",
      "created": true,
      "source": "api",
      "field": "id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": 985,
      "customer": {
        "type": "customer",
        "id": 985,
        "externalId": "2",
        "createdAt": "2018-10-16 18:03:30",
        "vip": false,
        "bad": false,
        "site": "presta",
        "contragent": {
          "contragentType": "individual"
        },
        "marginSumm": 0,
        "totalSumm": 0,
        "averageSumm": 0,
        "ordersCount": 0,
        "customFields": [

        ],
        "personalDiscount": 0,
        "cumulativeDiscount": 0,
        "segments": [

        ],
        "firstName": "Test",
        "lastName": "test",
        "email": "test12@gmail.com",
        "phones": [
          {
            "number": "1245987"
          }
        ]
      }
    },
    {
      "id": 2746,
      "createdAt": "2018-10-16 20:03:51",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "sredney-davnosti"
      },
      "customer": {
        "id": 985,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2747,
      "createdAt": "2018-10-16 20:03:51",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nedavnie"
      },
      "customer": {
        "id": 985,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2748,
      "createdAt": "2018-10-16 20:03:51",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nizkiy-ltv"
      },
      "customer": {
        "id": 985,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2749,
      "createdAt": "2018-10-16 20:03:52",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "pol-ne-ukazan"
      },
      "customer": {
        "id": 985,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2750,
      "createdAt": "2018-10-16 20:03:52",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nizkiy-sredniy-chek"
      },
      "customer": {
        "id": 985,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2751,
      "createdAt": "2018-10-16 20:03:52",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "davnie"
      },
      "customer": {
        "id": 985,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2752,
      "createdAt": "2018-10-16 20:03:52",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "malenkaya-summa-pokupok"
      },
      "customer": {
        "id": 985,
        "externalId": "2",
        "site": "presta"
      }
    },
    {
      "id": 2753,
      "createdAt": "2018-10-17 09:27:03",
      "created": true,
      "source": "api",
      "field": "id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": 986,
      "customer": {
        "type": "customer",
        "id": 986,
        "createdAt": "2018-10-17 09:27:03",
        "vip": false,
        "bad": false,
        "site": "BitrixMod",
        "contragent": {
          "contragentType": "individual"
        },
        "marginSumm": 0,
        "totalSumm": 0,
        "averageSumm": 0,
        "ordersCount": 0,
        "customFields": [

        ],
        "personalDiscount": 0,
        "cumulativeDiscount": 0,
        "segments": [

        ],
        "email": ""
      }
    },
    {
      "id": 2754,
      "createdAt": "2018-10-17 09:28:15",
      "created": true,
      "source": "api",
      "field": "id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": 987,
      "customer": {
        "type": "customer",
        "id": 987,
        "createdAt": "2018-10-17 09:28:15",
        "vip": false,
        "bad": false,
        "site": "BitrixMod",
        "contragent": {
          "contragentType": "individual"
        },
        "marginSumm": 0,
        "totalSumm": 0,
        "averageSumm": 0,
        "ordersCount": 0,
        "customFields": [

        ],
        "personalDiscount": 0,
        "cumulativeDiscount": 0,
        "segments": [

        ],
        "email": ""
      }
    },
    {
      "id": 2755,
      "createdAt": "2018-10-17 12:06:13",
      "source": "code",
      "field": "phones",
      "oldValue": null,
      "newValue": "911",
      "customer": {
        "id": 978,
        "site": "moysklad"
      }
    },
    {
      "id": 2756,
      "createdAt": "2018-10-17 12:09:38",
      "source": "code",
      "field": "phones",
      "oldValue": null,
      "newValue": "890999999999",
      "customer": {
        "id": 978,
        "site": "moysklad"
      }
    },
    {
      "id": 2757,
      "createdAt": "2018-10-17 13:37:52",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nizkiy-ltv"
      },
      "customer": {
        "id": 986,
        "site": "BitrixMod"
      }
    },
    {
      "id": 2758,
      "createdAt": "2018-10-17 13:37:52",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nizkiy-ltv"
      },
      "customer": {
        "id": 987,
        "site": "BitrixMod"
      }
    },
    {
      "id": 2759,
      "createdAt": "2018-10-17 13:37:53",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "pol-ne-ukazan"
      },
      "customer": {
        "id": 986,
        "site": "BitrixMod"
      }
    },
    {
      "id": 2760,
      "createdAt": "2018-10-17 13:37:53",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "pol-ne-ukazan"
      },
      "customer": {
        "id": 987,
        "site": "BitrixMod"
      }
    },
    {
      "id": 2761,
      "createdAt": "2018-10-17 13:37:53",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "sredney-davnosti"
      },
      "customer": {
        "id": 986,
        "site": "BitrixMod"
      }
    },
    {
      "id": 2762,
      "createdAt": "2018-10-17 13:37:53",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "sredney-davnosti"
      },
      "customer": {
        "id": 987,
        "site": "BitrixMod"
      }
    },
    {
      "id": 2763,
      "createdAt": "2018-10-17 13:37:53",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nedavnie"
      },
      "customer": {
        "id": 986,
        "site": "BitrixMod"
      }
    },
    {
      "id": 2764,
      "createdAt": "2018-10-17 13:37:53",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nedavnie"
      },
      "customer": {
        "id": 987,
        "site": "BitrixMod"
      }
    },
    {
      "id": 2765,
      "createdAt": "2018-10-17 13:37:53",
      "source": "code",
      "field": "segments",
      "oldValue": {
        "code": "normalniy-sredniy-chek"
      },
      "newValue": null,
      "customer": {
        "id": 978,
        "site": "moysklad"
      }
    },
    {
      "id": 2766,
      "createdAt": "2018-10-17 13:37:53",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "davnie"
      },
      "customer": {
        "id": 986,
        "site": "BitrixMod"
      }
    },
    {
      "id": 2767,
      "createdAt": "2018-10-17 13:37:53",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "davnie"
      },
      "customer": {
        "id": 987,
        "site": "BitrixMod"
      }
    },
    {
      "id": 2768,
      "createdAt": "2018-10-17 13:37:53",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "malenkaya-summa-pokupok"
      },
      "customer": {
        "id": 986,
        "site": "BitrixMod"
      }
    },
    {
      "id": 2769,
      "createdAt": "2018-10-17 13:37:53",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "malenkaya-summa-pokupok"
      },
      "customer": {
        "id": 987,
        "site": "BitrixMod"
      }
    },
    {
      "id": 2770,
      "createdAt": "2018-10-17 13:37:53",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nizkiy-sredniy-chek"
      },
      "customer": {
        "id": 986,
        "site": "BitrixMod"
      }
    },
    {
      "id": 2771,
      "createdAt": "2018-10-17 13:37:53",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nizkiy-sredniy-chek"
      },
      "customer": {
        "id": 987,
        "site": "BitrixMod"
      }
    },
    {
      "id": 2772,
      "createdAt": "2018-10-17 13:37:53",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nizkiy-sredniy-chek"
      },
      "customer": {
        "id": 978,
        "site": "moysklad"
      }
    },
    {
      "id": 2773,
      "createdAt": "2018-10-17 14:50:00",
      "created": true,
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "id",
      "oldValue": null,
      "newValue": 988,
      "customer": {
        "type": "customer",
        "id": 988,
        "createdAt": "2018-10-17 14:50:00",
        "vip": false,
        "bad": false,
        "contragent": {
          "contragentType": "individual"
        },
        "marginSumm": 0,
        "totalSumm": 0,
        "averageSumm": 0,
        "ordersCount": 0,
        "customFields": [

        ],
        "personalDiscount": 0,
        "cumulativeDiscount": 0,
        "segments": [

        ],
        "firstName": "testing"
      }
    },
    {
      "id": 2774,
      "createdAt": "2018-10-17 16:00:27",
      "created": true,
      "source": "user",
      "user": {
        "id": 23
      },
      "field": "id",
      "oldValue": null,
      "newValue": 989,
      "customer": {
        "type": "customer",
        "id": 989,
        "createdAt": "2018-10-17 16:00:27",
        "vip": false,
        "bad": false,
        "site": "presta",
        "contragent": {
          "contragentType": "individual"
        },
        "marginSumm": 0,
        "totalSumm": 0,
        "averageSumm": 0,
        "ordersCount": 0,
        "customFields": [

        ],
        "personalDiscount": 0,
        "cumulativeDiscount": 0,
        "segments": [

        ],
        "firstName": "testing2"
      }
    },
    {
      "id": 2775,
      "createdAt": "2018-10-17 16:42:34",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "pol-ne-ukazan"
      },
      "customer": {
        "id": 988
      }
    },
    {
      "id": 2776,
      "createdAt": "2018-10-17 16:42:34",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "pol-ne-ukazan"
      },
      "customer": {
        "id": 989,
        "site": "presta"
      }
    },
    {
      "id": 2777,
      "createdAt": "2018-10-17 16:42:34",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "sredney-davnosti"
      },
      "customer": {
        "id": 988
      }
    },
    {
      "id": 2778,
      "createdAt": "2018-10-17 16:42:34",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "sredney-davnosti"
      },
      "customer": {
        "id": 989,
        "site": "presta"
      }
    },
    {
      "id": 2779,
      "createdAt": "2018-10-17 16:42:35",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nedavnie"
      },
      "customer": {
        "id": 988
      }
    },
    {
      "id": 2780,
      "createdAt": "2018-10-17 16:42:35",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nedavnie"
      },
      "customer": {
        "id": 989,
        "site": "presta"
      }
    },
    {
      "id": 2781,
      "createdAt": "2018-10-17 16:42:35",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "rossiya-krome-msk"
      },
      "customer": {
        "id": 988
      }
    },
    {
      "id": 2782,
      "createdAt": "2018-10-17 16:42:35",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "rossiya-krome-msk"
      },
      "customer": {
        "id": 989,
        "site": "presta"
      }
    },
    {
      "id": 2783,
      "createdAt": "2018-10-17 16:42:35",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nizkiy-sredniy-chek"
      },
      "customer": {
        "id": 988
      }
    },
    {
      "id": 2784,
      "createdAt": "2018-10-17 16:42:35",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "nizkiy-sredniy-chek"
      },
      "customer": {
        "id": 989,
        "site": "presta"
      }
    },
    {
      "id": 2785,
      "createdAt": "2018-10-17 16:42:35",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "rossiya"
      },
      "customer": {
        "id": 988
      }
    },
    {
      "id": 2786,
      "createdAt": "2018-10-17 16:42:35",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "rossiya"
      },
      "customer": {
        "id": 989,
        "site": "presta"
      }
    },
    {
      "id": 2787,
      "createdAt": "2018-10-17 16:42:35",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "davnie"
      },
      "customer": {
        "id": 988
      }
    },
    {
      "id": 2788,
      "createdAt": "2018-10-17 16:42:35",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "davnie"
      },
      "customer": {
        "id": 989,
        "site": "presta"
      }
    },
    {
      "id": 2789,
      "createdAt": "2018-10-17 17:11:17",
      "created": true,
      "source": "api",
      "field": "id",
      "apiKey": {
        "current": false
      },
      "oldValue": null,
      "newValue": 990,
      "customer": {
        "type": "customer",
        "id": 990,
        "externalId": "3",
        "createdAt": "2018-10-17 17:11:16",
        "vip": false,
        "bad": false,
        "site": "presta",
        "contragent": {
          "contragentType": "individual"
        },
        "marginSumm": 0,
        "totalSumm": 0,
        "averageSumm": 0,
        "ordersCount": 0,
        "customFields": [

        ],
        "personalDiscount": 0,
        "cumulativeDiscount": 0,
        "segments": [

        ],
        "firstName": "Testadd",
        "lastName": "Adddd",
        "email": "test11@gmail.com"
      }
    },
    {
      "id": 2790,
      "createdAt": "2018-10-17 20:03:53",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "pol-ne-ukazan"
      },
      "customer": {
        "id": 990,
        "externalId": "3",
        "site": "presta"
      }
    },
    {
      "id": 2791,
      "createdAt": "2018-10-17 20:03:53",
      "source": "code",
      "field": "segments",
      "oldValue": null,
      "newValue": {
        "code": "sredney-davnosti"
      },
      "customer": {
        "id": 990,
        "externalId": "3",
        "site": "presta"
      }
    }
  ],
  "pagination": {
    "limit": 100,
    "totalCount": 28676,
    "currentPage": 1,
    "totalPageCount": 287
  }
}
EOF;

        $request                  = new CustomersHistoryRequest();
        $request->limit           = 20;
        $request->page            = 1;
        $request->filter          = new CustomerHistoryFilter();
        $request->filter->sinceId = 2691;

        $mock = static::createApiMockBuilder('customers/history');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->customers->history($request);

        self::assertModelEqualsToResponse($json, $response, true);
    }

    public function testCustomersNotes(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "pagination": {
    "limit": 20,
    "totalCount": 2,
    "currentPage": 1,
    "totalPageCount": 1
  },
  "notes": [
    {
      "customer": {
        "site": "moysklad",
        "id": 1057,
        "externalId": "10",
        "type": "customer"
      },
      "id": 42,
      "text": "note",
      "createdAt": "2019-08-06 18:04:56"
    },
    {
      "customer": {
        "site": "moysklad",
        "id": 1057,
        "externalId": "10",
        "type": "customer"
      },
      "id": 43,
      "text": "note2",
      "createdAt": "2019-08-06 18:05:27"
    }
  ]
}
EOF;

        $request                              = new CustomersNotesRequest();
        $request->limit                       = 20;
        $request->page                        = 1;
        $request->filter                      = new CustomerNoteFilter();
        $request->filter->customerExternalIds = ['10'];
        $request->filter->createdAtFrom       = '2019-08-06 12:00:00';
        $request->filter->text                = 'note';

        $mock = static::createApiMockBuilder('customers/notes');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $costs  = $client->customers->notes($request);

        self::assertModelEqualsToResponse($json, $costs);
    }

    public function testCustomersNotesCreate(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 1
}
EOF;

        $request                             = new CustomersNotesCreateRequest();
        $request->site                       = 'moysklad';
        $request->note                       = new CustomerNote();
        $request->note->customer             = new Customer();
        $request->note->customer->externalId = '10';
        $request->note->managerId            = 21;
        $request->note->text                 = 'Text';

        $mock = static::createApiMockBuilder('customers/notes/create');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customers->notesCreate($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCustomersNotesDelete(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $mock = static::createApiMockBuilder('customers/notes/1/delete');
        $mock->matchMethod(RequestMethod::POST)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customers->notesDelete(1);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCustomersUpload(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "uploadedCustomers": [{
    "id": 1,
    "externalId": "test_10"
  }]
}
EOF;

        $customer                             = new Customer();
        $customer->type                       = CustomerType::CUSTOMER;
        $customer->externalId                 = 'test_10';
        $customer->managerId                  = 24;
        $customer->contragent                 = new CustomerContragent();
        $customer->contragent->contragentType = ContragentType::INDIVIDUAL;
        $customer->tags                       = [
            new CustomerTag('first'),
            new CustomerTag('second'),
            new CustomerTag('third'),
        ];
        $customer->customFields               = [
            'galkatrue' => true
        ];
        $customer->address                    = new CustomerAddress();
        $customer->address->text              = '(719) 395-5645 13990 W County 270 Rd Nathrop, Colorado(CO), 81236';
        $customer->firstName                  = 'Test';
        $customer->lastName                   = 'User';
        $customer->patronymic                 = 'Tester';
        $customer->email                      = 'tester@example.com';
        $customer->phones                     = [
            new CustomerPhone('(603) 292-6810')
        ];

        $request           = new CustomersUploadRequest();
        $request->site     = 'aliexpress';
        $request->customers = [$customer];

        $mock = static::createApiMockBuilder('customers/upload');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customers->upload($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCustomersGet(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "customer": {
    "type": "customer",
    "id": 4770,
    "externalId": "5",
    "isContact": false,
    "createdAt": "2022-03-11 15:39:08",
    "managerId": 24,
    "vip": false,
    "bad": false,
    "site": "bb_demo",
    "contragent": {
      "contragentType": "individual"
    },
    "tags": [
      {
        "name": "test",
        "color": "#3e89b6",
        "attached": false
      },
      {
        "name": "first",
        "color": "#eff8e3",
        "attached": false
      },
      {
        "name": "third",
        "color": "#3e89b6",
        "attached": false
      },
      {
        "name": "second",
        "color": "#ef5e67",
        "attached": false
      }
    ],
    "marginSumm": 7057,
    "totalSumm": 7057,
    "averageSumm": 7057,
    "ordersCount": 1,
    "costSumm": 0,
    "customFields": {
      "galkatrue": true
    },
    "personalDiscount": 0,
    "cumulativeDiscount": 0,
    "address": {
      "id": 3492,
      "text": "ул. Красноармейская, д. 63/90, кв. 45"
    },
    "segments": [
      {
        "id": 9,
        "code": "nedavnie",
        "name": "Недавние",
        "createdAt": "2018-09-04 16:35:59",
        "isDynamic": true,
        "customersCount": 77,
        "active": true
      },
      {
        "id": 14,
        "code": "malenkaya-summa-pokupok",
        "name": "Маленькая сумма покупок",
        "createdAt": "2018-09-04 16:35:59",
        "isDynamic": true,
        "customersCount": 1040,
        "active": true
      },
      {
        "id": 16,
        "code": "sredniy-ltv",
        "name": "Средний LTV",
        "createdAt": "2018-09-04 16:35:59",
        "isDynamic": true,
        "customersCount": 21,
        "active": true
      },
      {
        "id": 19,
        "code": "normalniy-sredniy-chek",
        "name": "Нормальный средний чек",
        "createdAt": "2018-09-04 16:35:59",
        "isDynamic": true,
        "customersCount": 20,
        "active": true
      },
      {
        "id": 26,
        "code": "bez-otmen",
        "name": "Без отмен",
        "createdAt": "2018-09-04 16:35:59",
        "isDynamic": true,
        "customersCount": 1284,
        "active": true
      },
      {
        "id": 31,
        "code": "pol-ne-ukazan",
        "name": "Пол не указан",
        "createdAt": "2018-09-04 16:35:59",
        "isDynamic": true,
        "customersCount": 1281,
        "active": true
      }
    ],
    "firstName": "Omega",
    "email": "omega@omega.com",
    "emailMarketingUnsubscribedAt": "2020-10-30 14:22:12",
    "phones": [
      {
        "number": "79094055045"
      },
      {
        "number": "+79094055044"
      }
    ]
  }
}
EOF;

        $request       = new BySiteRequest(ByIdentifier::ID, 'bb_demo');

        $mock = static::createApiMockBuilder('customers/4770');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response  = $client->customers->get(4770, $request);

        self::assertModelsCallback($json, $response, static function ($expected, $actual) {
            $actualTags                                 = $actual['customer']['tags'];
            $actual['customer']['tags']                 = array_filter(
                array_map(static function ($tag) use ($actualTags) {
                    if (in_array($tag['name'], $actualTags, true)) {
                        return $tag;
                    }
                }, $expected['customer']['tags'])
            );

            $expected['customer']['marginSumm']         = (float)$expected['customer']['marginSumm'];
            $expected['customer']['totalSumm']          = (float)$expected['customer']['totalSumm'];
            $expected['customer']['averageSumm']        = (float)$expected['customer']['averageSumm'];
            $expected['customer']['costSumm']           = (float)$expected['customer']['costSumm'];
            $expected['customer']['personalDiscount']   = (float)$expected['customer']['personalDiscount'];
            $expected['customer']['cumulativeDiscount'] = (float)$expected['customer']['cumulativeDiscount'];

            self::assertEquals($expected, $actual);
        });
    }

    public function testCustomersEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 4770
}
EOF;

        $request                      = new CustomersEditRequest();
        $request->customer            = new Customer();
        $request->by                  = ByIdentifier::ID;
        $request->site                = 'aliexpress';
        $request->customer->firstName = 'Test';

        $mock = static::createApiMockBuilder('customers/4770/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customers->edit(4770, $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCustomersEditTags(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 4770
}
EOF;

        $request = new CustomersEditRequest();
        $request->customer = new Customer();
        $request->by = ByIdentifier::ID;
        $request->site = 'aliexpress';
        $request->customer->firstName = 'Test';
        $request->customer->addTags = ['tag1', 'tag2'];
        $request->customer->removeTags = ['tag3', 'tag4'];

        $mock = static::createApiMockBuilder('customers/4770/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->customers->edit(4770, $request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
