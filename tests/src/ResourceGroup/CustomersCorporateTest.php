<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\ByIdentifier;
use RetailCrm\Api\Enum\Customers\CustomerType;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\Customers\Customer;
use RetailCrm\Api\Model\Entity\Customers\CustomerAddress;
use RetailCrm\Api\Model\Entity\Customers\CustomerNote;
use RetailCrm\Api\Model\Entity\Customers\CustomerTag;
use RetailCrm\Api\Model\Entity\Customers\SerializedCustomerReference;
use RetailCrm\Api\Model\Entity\CustomersCorporate\Company;
use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact;
use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany;
use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate;
use RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer;
use RetailCrm\Api\Model\Entity\FixExternalRow;
use RetailCrm\Api\Model\Entity\Source;
use RetailCrm\Api\Model\Filter\Customers\CustomerHistoryFilter;
use RetailCrm\Api\Model\Filter\Customers\CustomerNoteFilter;
use RetailCrm\Api\Model\Filter\CustomersCorporate\CompanyFilter;
use RetailCrm\Api\Model\Filter\CustomersCorporate\CustomerAddressFilter;
use RetailCrm\Api\Model\Filter\CustomersCorporate\CustomerContactFilter;
use RetailCrm\Api\Model\Filter\CustomersCorporate\CustomerCorporateFilter;
use RetailCrm\Api\Model\Request\BySiteRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersCombineRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersHistoryRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersNotesCreateRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersNotesRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateAddressesCreateRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateAddressesEditRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateAddressesRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCompaniesCreateRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCompaniesEditRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCompaniesRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateContactsCreateRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateContactsEditRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateContactsRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCreateRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateEditRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateFixExternalIdsRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateUploadRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

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

        $mock = static::createApiMockBuilder('customers-corporate');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
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

        $mock = static::createApiMockBuilder('customers-corporate/combine');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
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

        $mock = static::createApiMockBuilder('customers-corporate/create');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
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

        $mock = static::createApiMockBuilder('customers-corporate/fix-external-ids');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
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

        $mock = static::createApiMockBuilder('customers-corporate/history');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customersCorporate->history($request);

        self::assertModelsCallback($json, $response, static function ($expected, $actual) {
            $expected = static::clearArray($expected);
            $actual   = static::clearArray($actual);

            self::assertEquals($expected, $actual);
        });
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

        $mock = static::createApiMockBuilder('customers-corporate/notes');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $costs  = $client->customersCorporate->notes($request);

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

        $mock = static::createApiMockBuilder('customers-corporate/notes/create');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customersCorporate->notesCreate($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCustomersNotesDelete(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $mock = static::createApiMockBuilder('customers-corporate/notes/1/delete');
        $mock->matchMethod(RequestMethod::POST)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customersCorporate->notesDelete(1);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testUpload(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "uploadedCustomers": [{
    "id": 1,
    "externalId": "test_20"
  }]
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

        $request                     = new CustomersCorporateUploadRequest();
        $request->site               = 'moysklad';
        $request->customersCorporate = [$customer];

        $mock = static::createApiMockBuilder('customers-corporate/upload');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customersCorporate->upload($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCustomersGet(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "customerCorporate": {
    "type": "customer_corporate",
    "id": 5043,
    "externalId": "test_20",
    "nickName": "Test Corp Company",
    "mainAddress": {
      "id": 3554
    },
    "createdAt": "2021-02-17 14:42:52",
    "managerId": 24,
    "vip": false,
    "bad": false,
    "site": "aliexpress",
    "tags": [

    ],
    "marginSumm": 0,
    "totalSumm": 0,
    "averageSumm": 0,
    "ordersCount": 0,
    "costSumm": 0,
    "customFields": {
      "galkatrue": true
    },
    "personalDiscount": 0,
    "mainCompany": {
      "id": 772,
      "name": "Test Company"
    }
  }
}
EOF;

        $request       = new BySiteRequest(ByIdentifier::ID, 'aliexpress');

        $mock = static::createApiMockBuilder('customers-corporate/5043');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customersCorporate->get(5043, $request);

        self::assertModelsCallback($json, $response, static function ($expected, $actual) {
            $expected['customerCorporate']['marginSumm']         = (float)$expected['customerCorporate']['marginSumm'];
            $expected['customerCorporate']['totalSumm']          = (float)$expected['customerCorporate']['totalSumm'];
            $expected['customerCorporate']['averageSumm']        = (float)$expected['customerCorporate']['averageSumm'];
            $expected['customerCorporate']['costSumm']           = (float)$expected['customerCorporate']['costSumm'];
            $expected['customerCorporate']['personalDiscount']   =
                (float)$expected['customerCorporate']['personalDiscount'];

            self::assertEquals($expected, $actual);
        });
    }

    public function testAddresses(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "addresses": [
    {
      "id": 3554,
      "text": "(719) 395-5645 13990 W County 270 Rd Nathrop, Colorado(CO), 81236",
      "isMain": true
    }
  ],
  "pagination": {
    "limit": 20,
    "totalCount": 1,
    "currentPage": 1,
    "totalPageCount": 1
  }
}
EOF;

        $request              = new CustomersCorporateAddressesRequest();
        $request->filter      = new CustomerAddressFilter();
        $request->site        = 'aliexpress';
        $request->by          = ByIdentifier::ID;
        $request->filter->ids = [3554];

        $mock = static::createApiMockBuilder('customers-corporate/5043/addresses');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customersCorporate->addresses(5043, $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testAddressesCreate(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 3559
}
EOF;

        $request                = new CustomersCorporateAddressesCreateRequest();
        $request->address       = new CustomerAddress();
        $request->site          = 'aliexpress';
        $request->by            = ByIdentifier::ID;
        $request->address->text = '(719) 395-5645 13990 W County 270 Rd Nathrop, Colorado(CO), 81236';

        $mock = static::createApiMockBuilder('customers-corporate/5043/addresses/create');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customersCorporate->addressesCreate(5043, $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testAddressesEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 3559
}
EOF;

        $request                = new CustomersCorporateAddressesEditRequest();
        $request->address       = new CustomerAddress();
        $request->site          = 'aliexpress';
        $request->by            = ByIdentifier::ID;
        $request->entityBy      = ByIdentifier::ID;
        $request->address->text = '(719) 395-5645 13990 W County 270 Rd Nathrop, Colorado2(CO), 81236';

        $mock = static::createApiMockBuilder('customers-corporate/5043/addresses/3559/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customersCorporate->addressesEdit(5043, 3559, $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCompanies(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "companies": [
    {
      "isMain": true,
      "id": 772,
      "customer": {
        "site": "aliexpress",
        "id": 5043,
        "externalId": "test_20",
        "type": "customer_corporate"
      },
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
      "costSumm": 0,
      "customFields": [

      ]
    }
  ],
  "pagination": {
    "limit": 20,
    "totalCount": 1,
    "currentPage": 1,
    "totalPageCount": 1
  }
}
EOF;

        $request              = new CustomersCorporateCompaniesRequest();
        $request->filter      = new CompanyFilter();
        $request->site        = 'aliexpress';
        $request->by          = ByIdentifier::ID;
        $request->filter->ids = [772];

        $mock = static::createApiMockBuilder('customers-corporate/5043/companies');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customersCorporate->companies(5043, $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCompaniesCreate(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 3559
}
EOF;

        $request                       = new CustomersCorporateCompaniesCreateRequest();
        $request->company              = new Company();
        $request->company->address     = new CustomerAddress();
        $request->site                 = 'aliexpress';
        $request->by                   = ByIdentifier::ID;
        $request->company->name        = 'Test Company';
        $request->company->brand       = 'Test Brand';
        $request->company->address->id = 1;
        $request->company->isMain      = true;

        $mock = static::createApiMockBuilder('customers-corporate/5043/companies/create');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customersCorporate->companiesCreate(5043, $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCompaniesEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 3559
}
EOF;

        $request                       = new CustomersCorporateCompaniesEditRequest();
        $request->company              = new Company();
        $request->company->address     = new CustomerAddress();
        $request->site                 = 'aliexpress';
        $request->by                   = ByIdentifier::ID;
        $request->entityBy             = ByIdentifier::ID;
        $request->company->name        = 'Test Company';
        $request->company->brand       = 'Test Brand';
        $request->company->address->id = 3559;
        $request->company->isMain      = true;

        $mock = static::createApiMockBuilder('customers-corporate/5043/companies/772/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customersCorporate->companiesEdit(5043, 772, $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testContacts(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "contacts": [
    {
      "isMain": false,
      "id": 945,
      "customer": {
        "id": 5039,
        "externalId": "test_10",
        "site": "aliexpress"
      },
      "companies": [

      ]
    }
  ],
  "pagination": {
    "limit": 20,
    "totalCount": 1,
    "currentPage": 1,
    "totalPageCount": 1
  }
}
EOF;

        $request                             = new CustomersCorporateContactsRequest();
        $request->filter                     = new CustomerContactFilter();
        $request->site                       = 'aliexpress';
        $request->by                         = ByIdentifier::ID;
        $request->filter->contactIds         = [5039];
        $request->filter->contactExternalIds = ['test_10'];

        $mock = static::createApiMockBuilder('customers-corporate/5043/contacts');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customersCorporate->contacts(5043, $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testContactsCreate(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 949
}
EOF;
        $company = new CustomerContactCompany();
        $company->id = 776;

        $request                        = new CustomersCorporateContactsCreateRequest();
        $request->contact               = new CustomerContact();
        $request->contact->customer     = new SerializedRelationAbstractCustomer();
        $request->contact->customer->id = 4985;
        $request->site                  = 'aliexpress';
        $request->by                    = ByIdentifier::ID;
        $request->contact->companies    = [$company];

        $mock = static::createApiMockBuilder('customers-corporate/5043/contacts/create');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customersCorporate->contactsCreate(5043, $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testContactsEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 5039
}
EOF;
        $company = new CustomerContactCompany();
        $company->id = 776;

        $request                     = new CustomersCorporateContactsEditRequest();
        $request->contact            = new CustomerContact();
        $request->site               = 'aliexpress';
        $request->by                 = ByIdentifier::ID;
        $request->entityBy           = ByIdentifier::ID;
        $request->contact->companies = [$company];

        $mock = static::createApiMockBuilder('customers-corporate/5043/contacts/5039/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customersCorporate->contactsEdit(5043, 5039, $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 5043
}
EOF;

        $request                              = new CustomersCorporateEditRequest();
        $request->customerCorporate           = new CustomerCorporate();
        $request->customerCorporate->nickName = 'Test Edited Customer';
        $request->site                        = 'aliexpress';
        $request->by                          = ByIdentifier::ID;

        $mock = static::createApiMockBuilder('customers-corporate/5043/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customersCorporate->edit(5043, $request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
