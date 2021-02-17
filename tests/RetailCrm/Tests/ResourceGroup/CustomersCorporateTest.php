<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\Customers\CustomerType;
use RetailCrm\Api\Enum\Customers\SerializedCustomerReference;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\Customers\CustomerAddress;
use RetailCrm\Api\Model\Entity\Customers\CustomerTag;
use RetailCrm\Api\Model\Entity\Customers\FixExternalRow;
use RetailCrm\Api\Model\Entity\CustomersCorporate\Company;
use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact;
use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate;
use RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer;
use RetailCrm\Api\Model\Entity\Source;
use RetailCrm\Api\Model\Filter\Customers\CustomerHistoryFilter;
use RetailCrm\Api\Model\Filter\CustomersCorporate\CustomerCorporateFilter;
use RetailCrm\Api\Model\Request\Customers\CustomersCombineRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersHistoryRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCreateRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateFixExternalIdsRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateRequest;
use RetailCrm\Test\TestClientFactory;

/**
 * Class CustomersCorporateTest
 *
 * @category CustomersCorporateTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class CustomersCorporateTest extends AbstractApiResourceGroupTestCase
{
    public function testList()
    {
        $json = <<<EOF
{
  "success": true,
  "pagination": {
    "limit": 20,
    "totalCount": 1,
    "currentPage": 1,
    "totalPageCount": 1
  },
  "customersCorporate": [
    {
      "type": "customer_corporate",
      "id": 5041,
      "nickName": "Test Corporate Customer",
      "mainAddress": {
        "id": 3553,
        "name": "Test Address"
      },
      "createdAt": "2021-02-17 13:28:18",
      "managerId": 28,
      "vip": false,
      "bad": false,
      "site": "aliexpress",
      "tags": [

      ],
      "marginSumm": 0,
      "totalSumm": 0,
      "averageSumm": 0,
      "ordersCount": 0,
      "customFields": {
        "galkatrue": true
      },
      "personalDiscount": 0,
      "mainCustomerContact": {
        "id": 944,
        "customer": {
          "id": 5042
        },
        "companies": [
          {
            "id": 160,
            "company": {
              "id": 771,
              "name": "Test Company"
            }
          }
        ]
      },
      "mainCompany": {
        "id": 771,
        "name": "Test Company"
      }
    }
  ]
}
EOF;
        $request                        = new CustomersCorporateRequest();
        $request->filter                = new CustomerCorporateFilter();
        $request->limit                 = 20;
        $request->page                  = 1;
        $request->filter->sites         = ['moysklad', 'aliexpress'];
        $request->filter->nickName      = ['Test'];
        $request->filter->contragentInn = '5921305044';

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('customers-corporate')
                ->setMethod(RequestMethod::GET)
                ->setQueryParams(static::encodeFormArray($request)),
            static::responseJson(200, $json)
        );

        $client = TestClientFactory::createClient($mock);
        $costs  = $client->customersCorporate->list($request);

        self::assertModelEqualsToResponse($json, $costs);
    }

    public function testCombine(): void
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

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('customers-corporate/combine')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->customersCorporate->combine($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCreate(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 1
}
EOF;

        $address       = new CustomerAddress();
        $address->text = '(719) 395-5645 13990 W County 270 Rd Nathrop, Colorado(CO), 81236';

        $contact                       = new CustomerContact();
        $contact->customer             = new SerializedRelationAbstractCustomer();
        $contact->customer->externalId = 'test_10';
        $contact->customer->site       = 'aliexpress';

        $company         = new Company();
        $company->name   = 'Test Company';
        $company->brand  = 'Test Brand';
        $company->isMain = true;

        $customer                   = new CustomerCorporate();
        $customer->source           = new Source();
        $customer->addresses        = [$address];
        $customer->customerContacts = [$contact];
        $customer->companies        = [$company];
        $customer->source->source   = 'chats';
        $customer->type             = CustomerType::CORPORATE_CUSTOMER;
        $customer->externalId       = 'test_20';
        $customer->managerId        = 24;
        $customer->nickName         = 'Test Corp Company';
        $customer->tags             = [
            new CustomerTag('first'),
            new CustomerTag('second'),
            new CustomerTag('third'),
        ];
        $customer->customFields     = [
            'galkatrue' => true
        ];

        $request                    = new CustomersCorporateCreateRequest();
        $request->site              = 'aliexpress';
        $request->customerCorporate = $customer;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('customers-corporate/create')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->customersCorporate->create($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCustomersFixExternalIds(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $request            = new CustomersCorporateFixExternalIdsRequest();
        $request->customersCorporate = [
            new FixExternalRow(1, 'external_id_1'),
            new FixExternalRow(2, 'external_id_2'),
            new FixExternalRow(3, 'external_id_3'),
        ];

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('customers-corporate/fix-external-ids')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->customersCorporate->fixExternalIds($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testHistory(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "generatedAt": "2021-02-17 16:43:02",
  "history": [
    {
      "id": 4242,
      "createdAt": "2021-02-17 13:28:58",
      "source": "user",
      "user": {
        "id": 27
      },
      "field": "contact",
      "oldValue": null,
      "newValue": {
        "id": 944
      },
      "customer": {
        "id": 5041,
        "site": "aliexpress"
      },
      "customerContact": {
        "id": 944,
        "customer": {
          "id": 5042
        }
      }
    },
    {
      "id": 4243,
      "createdAt": "2021-02-17 13:28:58",
      "source": "user",
      "user": {
        "id": 27
      },
      "field": "main_contact",
      "oldValue": null,
      "newValue": {
        "id": 944
      },
      "customer": {
        "id": 5041,
        "site": "aliexpress"
      }
    },
    {
      "id": 4244,
      "createdAt": "2021-02-17 13:30:12",
      "source": "user",
      "user": {
        "id": 27
      },
      "field": "address",
      "oldValue": null,
      "newValue": {
        "id": 3553,
        "name": "Test Address"
      },
      "address": {
        "id": 3553,
        "index": "012012",
        "countryIso": "US",
        "region": "region",
        "city": "Washington",
        "street": "street",
        "building": "1",
        "flat": "1",
        "floor": 1,
        "block": 1,
        "house": "1",
        "housing": "A",
        "metro": "metro",
        "text": "street, д. 1, стр. 1, корп. A, кв./офис 1, под. 1, эт. 1, метро metro",
        "name": "Test Address",
        "isMain": true
      },
      "customer": {
        "id": 5041,
        "site": "aliexpress"
      }
    },
    {
      "id": 4246,
      "createdAt": "2021-02-17 13:32:56",
      "source": "user",
      "user": {
        "id": 27
      },
      "field": "company",
      "oldValue": null,
      "newValue": {
        "id": 771,
        "name": "Test Company"
      },
      "customer": {
        "id": 5041,
        "site": "aliexpress"
      },
      "company": {
        "id": 771,
        "active": true,
        "name": "Test Company",
        "brand": "Test Brand",
        "site": "https://example.com",
        "createdAt": "2021-02-17 13:32:56",
        "contragent": {
          "contragentType": "legal-entity",
          "legalName": "Test Company",
          "legalAddress": "Test Address",
          "INN": "5921305044",
          "OKPO": "76844019",
          "KPP": "027043442",
          "OGRN": "1180284568463",
          "BIK": "5901994090737233",
          "bank": "Test Bank",
          "bankAddress": "Test Address",
          "corrAccount": "5901994090737233",
          "bankAccount": "5901994090737233"
        },
        "address": {
          "id": 3553,
          "name": "Test Address"
        }
      }
    },
    {
      "id": 4247,
      "createdAt": "2021-02-17 13:32:56",
      "source": "user",
      "user": {
        "id": 27
      },
      "field": "main_company",
      "oldValue": null,
      "newValue": {
        "id": 771,
        "name": "Test Company"
      },
      "customer": {
        "id": 5041,
        "site": "aliexpress"
      }
    },
    {
      "id": 4248,
      "createdAt": "2021-02-17 13:33:05",
      "source": "user",
      "user": {
        "id": 27
      },
      "field": "contact.contact_company",
      "oldValue": null,
      "newValue": {
        "id": 160,
        "customer_contact": {
          "id": 944
        }
      },
      "customer": {
        "id": 5041,
        "site": "aliexpress"
      },
      "company": {
        "id": 771,
        "name": "Test Company"
      },
      "customerContact": {
        "id": 944
      }
    },
    {
      "id": 4249,
      "createdAt": "2021-02-17 14:42:52",
      "created": true,
      "source": "api",
      "field": "id",
      "apiKey": {
        "current": true
      },
      "oldValue": null,
      "newValue": 5043,
      "customer": {
        "type": "customer_corporate",
        "id": 5043,
        "externalId": "test_20",
        "nickName": "Test Corp Company",
        "customerContacts": [
          {
            "id": 945,
            "customer": {
              "id": 5039,
              "externalId": "test_10"
            }
          }
        ],
        "addresses": [
          {
            "id": 3554,
            "text": "(719) 395-5645 13990 W County 270 Rd Nathrop, Colorado(CO), 81236"
          }
        ],
        "mainAddress": {
          "id": 3554
        },
        "createdAt": "2021-02-17 14:42:52",
        "managerId": 24,
        "vip": false,
        "bad": false,
        "site": "aliexpress",
        "marginSumm": 0,
        "totalSumm": 0,
        "averageSumm": 0,
        "ordersCount": 0,
        "customFields": {
          "galkatrue": true
        },
        "personalDiscount": 0,
        "cumulativeDiscount": 0,
        "companies": [
          {
            "id": 772,
            "active": true,
            "name": "Test Company",
            "brand": "Test Brand",
            "createdAt": "2021-02-17 14:42:52",
            "contragent": {
              "contragentType": "legal-entity"
            },
            "marginSumm": 0,
            "totalSumm": 0,
            "averageSumm": 0,
            "ordersCount": 0,
            "customFields": [

            ]
          }
        ],
        "mainCompany": {
          "id": 772,
          "name": "Test Company"
        }
      }
    }
  ],
  "pagination": {
    "limit": 20,
    "totalCount": 8,
    "currentPage": 1,
    "totalPageCount": 1
  }
}
EOF;

        $request                  = new CustomersHistoryRequest();
        $request->limit           = 20;
        $request->page            = 1;
        $request->filter          = new CustomerHistoryFilter();
        $request->filter->sinceId = 4241;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('customers-corporate/history')
                ->setMethod(RequestMethod::GET)
                ->setQueryParams(static::encodeFormArray($request)),
            static::responseJson(200, $json)
        );

        $client    = TestClientFactory::createClient($mock);
        $response  = $client->customersCorporate->history($request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
