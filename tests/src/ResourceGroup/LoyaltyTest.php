<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use DateInterval;
use DateTime;
use DateTimeInterface;
use Psr\Http\Message\RequestInterface;
use RetailCrm\Api\Component\Transformer\DateTimeTransformer;
use RetailCrm\Api\Enum\Loyalty\AccountStatus;
use RetailCrm\Api\Enum\Loyalty\PrivilegeType;
use RetailCrm\Api\Enum\NumericBoolean;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer;
use RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer;
use RetailCrm\Api\Model\Entity\Loyalty\BonusDetail;
use RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount;
use RetailCrm\Api\Model\Entity\Loyalty\SerializedCreateLoyaltyAccount;
use RetailCrm\Api\Model\Entity\Loyalty\SerializedOrder;
use RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderDelivery;
use RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderProduct;
use RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderProductOffer;
use RetailCrm\Api\Model\Entity\Pagination;
use RetailCrm\Api\Model\Filter\Loyalty\LoyaltyAccountApiFilterType;
use RetailCrm\Api\Model\Filter\Loyalty\LoyaltyAccountBonusApiFilterType;
use RetailCrm\Api\Model\Filter\Loyalty\LoyaltyAccountBonusOperationsApiFilterType;
use RetailCrm\Api\Model\Filter\Loyalty\LoyaltyApiFilterType;
use RetailCrm\Api\Model\Request\Loyalty\BonusAccountDetailsRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltiesRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountCreateRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountEditRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountsRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyBonusCreditRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyBonusOperationsRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyCalculateRequest;
use RetailCrm\Api\Model\Response\Loyalty\BonusAccountDetailsResponse;
use RetailCrm\Api\Model\Response\Loyalty\LoyaltyBonusStatisticResponse;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class LoyaltyTest
 *
 * @category LoyaltyTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class LoyaltyTest extends AbstractApiResourceGroupTestCase
{
    public function testAccountCreate(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "site": "bitrix-test",
  "loyaltyAccount": {
    "phoneNumber": "88005553125",
    "cardNumber": "2222 3333 4444 5555",
    "customer": {
      "id": 4787
    }
  },
  "warnings": []
}
EOF;

        $request           = new LoyaltyAccountCreateRequest();
        $account           = new SerializedCreateLoyaltyAccount();
        $account->customer = new SerializedEntityCustomer();

        $account->customer->id = 4787;
        $account->cardNumber   = '2222 3333 4444 5555';
        $account->phoneNumber  = '88005553125';

        $request->site           = 'bitrix-test';
        $request->loyaltyAccount = $account;

        $mock = static::createApiMockBuilder('loyalty/account/create');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->loyalty->accountCreate($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testAccountActivate(): void
    {
        $json = <<<'EOF'
{
    "success": true,
    "loyaltyAccount": {
        "active": true,
        "id": 159,
        "phoneNumber": "88005553123",
        "cardNumber": "1111 2222 3333 4444",
        "amount": 0,
        "createdAt": "2021-02-24 11:15:21",
        "activatedAt": "2021-02-24 11:51:03",
        "customFields": []
    }
}
EOF;

        $mock = static::createApiMockBuilder('loyalty/account/159/activate');
        $mock->matchMethod(RequestMethod::POST)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->loyalty->accountActivate(159);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testAccountBonusCredit(): void
    {
        $activationDate = new DateTime();
        $expireDate = static::dateTimeFromFormat(
            DateTimeInterface::RFC3339,
            $activationDate->format(DateTimeInterface::RFC3339)
        )->add(new DateInterval('P14D'));
        $activationDateString = $activationDate->format('Y-m-d');
        $expireDateString = $expireDate->format('Y-m-d');
        $json = <<<EOF
{
    "success": true,
    "loyaltyBonus": {
        "amount": 100,
        "activationDate": "${activationDateString}",
        "expireDate": "${expireDateString}"
    }
}
EOF;

        $request = new LoyaltyBonusCreditRequest();
        $request->amount = 100;
        $request->activationDate = $activationDate;
        $request->expireDate = $expireDate;
        $request->comment = 'Monthly membership bonuses.';

        $mock = static::createApiMockBuilder('loyalty/account/159/bonus/credit');
        $mock->matchMethod(RequestMethod::POST)
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->loyalty->accountBonusCredit(159, $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testAccountBonusOperations(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "pagination": {
    "limit": 20,
    "totalCount": 3,
    "currentPage": 1,
    "totalPageCount": 1
  },
  "bonusOperations": [
    {
      "type": "credit_for_order",
      "createdAt": "2020-11-27 13:47:57",
      "amount": 215.1,
      "order": {
        "id": 6473,
        "externalId": "10"
      },
      "bonus": {
        "activationDate": "2020-11-27"
      }
    },
    {
      "type": "charge_for_order",
      "createdAt": "2020-11-27 13:45:39",
      "amount": -247,
      "order": {
        "id": 6473,
        "externalId": "10"
      }
    },
    {
      "type": "credit_for_order",
      "createdAt": "2020-11-27 13:42:37",
      "amount": 347.8,
      "order": {
        "id": 6472,
        "externalId": "9"
      },
      "bonus": {
        "activationDate": "2020-11-27"
      }
    }
  ]
}
EOF;

        $request = new LoyaltyBonusOperationsRequest();
        $request->filter = new LoyaltyAccountBonusOperationsApiFilterType();
        $request->filter->createdAtFrom = DateTimeTransformer::create('2020-01-01 00:00:00');
        $request->filter->createdAtTo = DateTimeTransformer::create('2021-08-01 00:00:00');

        $mock = static::createApiMockBuilder('loyalty/account/147/bonus/operations');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery([
                'filter' => [
                    'createdAtFrom' => '2020-01-01 00:00:00',
                    'createdAtTo' => '2021-08-01 00:00:00'
                ]
            ])
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->loyalty->accountBonusOperations(147, $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testAccountEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "warnings": []
}
EOF;

        $account              = new LoyaltyAccount();
        $account->cardNumber  = '4444 5555 6666 7777';
        $account->phoneNumber = '88005553000';
        $account->loyaltyLevelId = 1;

        $request = new LoyaltyAccountEditRequest($account);

        $mock = static::createApiMockBuilder('loyalty/account/159/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->matchCallback(static function (RequestInterface $request) {
                $data = [];
                parse_str((string) $request->getBody(), $data);

                return false !== strpos($data['loyaltyAccount'] ?? '', '"loyaltyLevelId"');
            })
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->loyalty->accountEdit(159, $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testAccounts(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "pagination": {
    "limit": 20,
    "totalCount": 13,
    "currentPage": 1,
    "totalPageCount": 1
  },
  "loyaltyAccounts": [
    {
      "active": true,
      "id": 162,
      "customer": {
        "id": 5141,
        "externalId": "1",
        "site": "test_pl_for_stage",
        "firstName": "Admin",
        "lastName": "Admin"
      },
      "phoneNumber": "89085139060",
      "amount": 0,
      "ordersSum": 0,
      "nextLevelSum": 100000,
      "level": {
        "type": "discount",
        "id": 17,
        "name": "Базовый уровень",
        "privilegeSize": 20,
        "privilegeSizePromo": 10
      },
      "createdAt": "2021-04-16 16:32:03",
      "activatedAt": "2021-04-16 16:32:03"
    },
    {
      "active": true,
      "id": 161,
      "customer": {
        "id": 5101,
        "externalId": "1",
        "site": "new-bitrix",
        "firstName": "Admin5",
        "lastName": "Admin"
      },
      "phoneNumber": "89085139060",
      "amount": 49,
      "ordersSum": 0,
      "nextLevelSum": 5000,
      "level": {
        "type": "discount",
        "id": 14,
        "name": "Базовый уровень",
        "privilegeSize": 10,
        "privilegeSizePromo": 20
      },
      "createdAt": "2021-03-17 18:09:56",
      "activatedAt": "2021-03-17 18:09:56"
    },
    {
      "active": true,
      "id": 160,
      "customer": {
        "id": 4787,
        "externalId": "36",
        "site": "bitrix-test",
        "firstName": "test871"
      },
      "phoneNumber": "88005553125",
      "cardNumber": "2222 3333 4444 5555",
      "amount": 0,
      "ordersSum": 0,
      "nextLevelSum": 10000,
      "level": {
        "type": "discount",
        "id": 16,
        "name": "Скидочный",
        "privilegeSize": 50,
        "privilegeSizePromo": 50
      },
      "createdAt": "2021-02-24 11:17:11",
      "activatedAt": "2021-02-24 11:17:11"
    },
    {
      "active": true,
      "id": 158,
      "customer": {
        "id": 5011,
        "externalId": "2",
        "site": "bitrix-test",
        "firstName": "admin2",
        "lastName": "admin2"
      },
      "phoneNumber": "89085139555",
      "amount": 69,
      "ordersSum": 0,
      "level": {
        "type": "discount",
        "id": 12,
        "name": "Бонусный",
        "privilegeSize": 20,
        "privilegeSizePromo": 10
      },
      "createdAt": "2021-02-01 10:15:11",
      "activatedAt": "2021-02-01 10:15:11",
      "lastCheckId": "b93879ba-8791-4189-90f0-71e1904b5546"
    },
    {
      "active": true,
      "id": 157,
      "customer": {
        "id": 4232,
        "externalId": "13",
        "site": "bitrix-test",
        "firstName": "Образ",
        "lastName": "Испепеляющий",
        "patronymic": "Фарадеевич"
      },
      "phoneNumber": "89085149060",
      "amount": 0,
      "ordersSum": 0,
      "nextLevelSum": 10000,
      "level": {
        "type": "discount",
        "id": 16,
        "name": "Скидочный",
        "privilegeSize": 50,
        "privilegeSizePromo": 50
      },
      "createdAt": "2021-01-14 10:54:28",
      "activatedAt": "2021-01-14 10:54:28"
    },
    {
      "active": true,
      "id": 156,
      "customer": {
        "id": 4925,
        "externalId": "1",
        "site": "bitrix-test",
        "firstName": "Admin",
        "lastName": "Admin"
      },
      "cardNumber": "3456346346",
      "amount": 635,
      "ordersSum": 0,
      "nextLevelSum": 10000,
      "level": {
        "type": "discount",
        "id": 16,
        "name": "Скидочный",
        "privilegeSize": 50,
        "privilegeSizePromo": 50
      },
      "createdAt": "2021-01-12 16:52:50",
      "activatedAt": "2021-01-12 16:52:50"
    },
    {
      "active": true,
      "id": 155,
      "customer": {
        "id": 4923,
        "externalId": "10",
        "site": "bitrix-test",
        "firstName": "Артур"
      },
      "phoneNumber": "89085139060",
      "amount": 28,
      "ordersSum": 0,
      "nextLevelSum": 10000,
      "level": {
        "type": "discount",
        "id": 16,
        "name": "Скидочный",
        "privilegeSize": 50,
        "privilegeSizePromo": 50
      },
      "createdAt": "2020-12-14 17:42:07",
      "activatedAt": "2020-12-14 18:43:40",
      "confirmedPhoneAt": "2020-12-14 18:54:37",
      "lastCheckId": "4c1b54fb-c079-4757-916c-ab58dd667bff"
    },
    {
      "active": true,
      "id": 149,
      "customer": {
        "id": 4770,
        "externalId": "5",
        "site": "aliexpress",
        "firstName": "Test"
      },
      "phoneNumber": "+79094055044",
      "amount": 655.7,
      "ordersSum": 0,
      "level": {
        "type": "bonus_percent",
        "id": 4,
        "name": "Базовый уровень",
        "privilegeSize": 10,
        "privilegeSizePromo": 10
      },
      "createdAt": "2020-11-27 15:39:29",
      "activatedAt": "2020-11-27 15:39:29"
    },
    {
      "active": true,
      "id": 147,
      "customer": {
        "id": 4880,
        "externalId": "4",
        "site": "bb_demo",
        "firstName": "Артур"
      },
      "phoneNumber": "+79094055046",
      "amount": 315.9,
      "ordersSum": 5629,
      "level": {
        "type": "bonus_percent",
        "id": 4,
        "name": "Базовый уровень",
        "privilegeSize": 10,
        "privilegeSizePromo": 10
      },
      "createdAt": "2020-11-27 13:36:08",
      "activatedAt": "2020-11-27 13:36:08"
    },
    {
      "active": true,
      "id": 94,
      "customer": {
        "id": 4133,
        "externalId": "17",
        "site": "bitrix-test",
        "firstName": "atest14",
        "lastName": "Иванов",
        "patronymic": "иванович"
      },
      "phoneNumber": "+70143453900",
      "amount": 0,
      "ordersSum": 0,
      "nextLevelSum": 10000,
      "level": {
        "type": "discount",
        "id": 16,
        "name": "Скидочный",
        "privilegeSize": 50,
        "privilegeSizePromo": 50
      },
      "createdAt": "2020-11-13 09:11:44",
      "activatedAt": "2020-11-13 09:11:44"
    },
    {
      "active": true,
      "id": 91,
      "customer": {
        "id": 4117,
        "externalId": "14",
        "site": "bitrix-test",
        "firstName": "test11",
        "lastName": "Иванов",
        "patronymic": "Аркадьевич"
      },
      "phoneNumber": "+70113453901",
      "amount": 100,
      "ordersSum": 0,
      "nextLevelSum": 10000,
      "level": {
        "type": "discount",
        "id": 16,
        "name": "Скидочный",
        "privilegeSize": 50,
        "privilegeSizePromo": 50
      },
      "createdAt": "2020-11-13 08:27:21",
      "activatedAt": "2020-11-13 08:27:21"
    },
    {
      "active": true,
      "id": 90,
      "customer": {
        "id": 4113,
        "externalId": "12",
        "site": "bitrix-test",
        "firstName": "test2021",
        "lastName": "Егоров",
        "patronymic": "Егорович"
      },
      "phoneNumber": "+70093453901",
      "amount": 0,
      "ordersSum": 0,
      "nextLevelSum": 10000,
      "level": {
        "type": "discount",
        "id": 16,
        "name": "Скидочный",
        "privilegeSize": 50,
        "privilegeSizePromo": 50
      },
      "createdAt": "2020-11-13 08:21:13",
      "activatedAt": "2020-11-13 08:21:13"
    },
    {
      "active": true,
      "id": 85,
      "customer": {
        "id": 4115,
        "externalId": "7",
        "site": "bitrix-test",
        "firstName": "testesteron",
        "lastName": "Иванов",
        "patronymic": "Иванович"
      },
      "phoneNumber": "+70033453901",
      "amount": 0,
      "ordersSum": 0,
      "nextLevelSum": 10000,
      "level": {
        "type": "discount",
        "id": 16,
        "name": "Скидочный",
        "privilegeSize": 50,
        "privilegeSizePromo": 50
      },
      "createdAt": "2020-11-13 07:23:58",
      "activatedAt": "2020-11-13 07:23:58"
    }
  ]
}
EOF;

        $request = new LoyaltyAccountsRequest();
        $request->filter = new LoyaltyAccountApiFilterType();
        $request->filter->status = AccountStatus::ACTIVATED;

        $mock = static::createApiMockBuilder('loyalty/accounts');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(self::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->loyalty->accounts($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testAccountGet(): void
    {
        $json = <<<'EOF'
{
    "success": true,
    "loyaltyAccount": {
        "active": false,
        "id": 168,
        "loyalty": {
            "id": 1
        },
        "customer": {
            "id": 5260,
            "externalId": "5",
            "site": "bitrix-test",
            "customFields": {
                "galkatrue": true
            },
            "firstName": "admincd"
        },
        "phoneNumber": "89226234577",
        "amount": 0,
        "ordersSum": 0,
        "nextLevelSum": 10000,
        "level": {
            "type": "discount",
            "id": 21,
            "name": "Скидочный",
            "privilegeSize": 20,
            "privilegeSizePromo": 30
        },
        "createdAt": "2021-06-21 14:35:55",
        "status": "not_confirmed",
        "customFields": []
    }
}
EOF;

        $mock = static::createApiMockBuilder('loyalty/account/168');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->loyalty->accountGet(168);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCalculate(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "order": {
    "bonusesCreditTotal": 0,
    "bonusesChargeTotal": 0,
    "privilegeType": "none",
    "totalSumm": 100,
    "customer": {
      "personalDiscount": 0
    },
    "delivery": {
      "cost": 100
    },
    "site": "bitrix-test",
    "items": [
      {
        "bonusesChargeTotal": 0,
        "bonusesCreditTotal": 0,
        "initialPrice": 0,
        "discountTotal": 0,
        "prices": [
          {
            "price": 0,
            "quantity": 10
          }
        ],
        "quantity": 10
      }
    ]
  },
  "calculations": [
    {
      "privilegeType": "none",
      "discount": 0,
      "creditBonuses": 0,
      "maxChargeBonuses": 0,
      "maximum": true
    }
  ]
}
EOF;
        $item = new SerializedOrderProduct();
        $item->offer = SerializedOrderProductOffer::withId(1);
        $item->quantity = 10;

        $order                = new SerializedOrder();
        $order->customer      = SerializedRelationAbstractCustomer::withExternalId(
            '47876750',
            'bitrix-test'
        );
        $order->items         = [$item];
        $order->delivery      = new SerializedOrderDelivery(100);
        $order->privilegeType = PrivilegeType::NONE;
        $order->applyRound    = true;

        $request = new LoyaltyCalculateRequest();
        $request->site = 'bitrix-test';
        $request->bonuses = 5;
        $request->order = $order;

        $mock = static::createApiMockBuilder('loyalty/calculate');
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
        $response = $client->loyalty->calculate($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testLoyalties(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "pagination": {
    "limit": 20,
    "totalCount": 4,
    "currentPage": 1,
    "totalPageCount": 1
  },
  "loyalties": [
    {
      "active": true,
      "blocked": false,
      "id": 3,
      "name": "Новая программа",
      "confirmSmsCharge": false,
      "confirmSmsRegistration": false,
      "createdAt": "2020-11-26 06:58:02",
      "activatedAt": "2020-11-26 06:59:52"
    },
    {
      "active": true,
      "blocked": false,
      "id": 4,
      "name": "Битрикс новый",
      "confirmSmsCharge": false,
      "confirmSmsRegistration": false,
      "createdAt": "2021-03-17 18:08:02",
      "activatedAt": "2021-03-17 18:09:43"
    },
    {
      "active": true,
      "blocked": false,
      "id": 1,
      "name": "Тестовая программа",
      "confirmSmsCharge": false,
      "confirmSmsRegistration": false,
      "createdAt": "2020-10-16 13:57:53",
      "activatedAt": "2020-10-16 14:00:56"
    }
  ]
}
EOF;

        $request = new LoyaltiesRequest();
        $request->filter = new LoyaltyApiFilterType();
        $request->filter->active = NumericBoolean::TRUE;
        $request->filter->blocked = NumericBoolean::FALSE;

        $mock = static::createApiMockBuilder('loyalty/loyalties');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(self::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->loyalty->loyalties($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testLoyaltiesGet(): void
    {
        $json = <<<'EOF'
{
    "success": true,
    "loyalty": {
        "active": true,
        "blocked": false,
        "id": 4,
        "name": "Битрикс новый",
        "confirmSmsCharge": false,
        "confirmSmsRegistration": false,
        "createdAt": "2021-03-17 18:08:02",
        "activatedAt": "2021-03-17 18:09:43"
    },
    "requiredFields": []
}
EOF;

        $mock = static::createApiMockBuilder('loyalty/loyalties/4');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->loyalty->get(4);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testGetBonusAccountDetails(): void
    {
        $json = <<<'EOF'
{
  "statistic": {
    "totalAmount": 2.1
  },
  "bonuses": [
    {
      "date": "2021-03-17 18:08:02",
      "amount": 1.2
    }
  ],
  "pagination": {
    "limit": 10,
    "totalCount": 20,
    "currentPage": 2,
    "totalPageCount": 30
  },
  "success": true
}
EOF;

        $mock = static::createApiMockBuilder('loyalty/account/4/bonus/bonus_status/details');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $request = new BonusAccountDetailsRequest();
        $request->status = 'bonus_status';
        $request->id = 1;
        $request->limit = 2;
        $request->page = 1;
        $request->filter = new LoyaltyAccountBonusApiFilterType();
        $request->filter->date = new DateTime();


        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->loyalty->getBonusAccountDetails(4, 'bonus_status', $request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
