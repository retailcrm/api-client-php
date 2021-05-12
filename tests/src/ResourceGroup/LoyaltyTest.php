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
use RetailCrm\Api\Enum\Loyalty\AccountStatus;
use RetailCrm\Api\Enum\Loyalty\PrivilegeType;
use RetailCrm\Api\Enum\NumericBoolean;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer;
use RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer;
use RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount;
use RetailCrm\Api\Model\Entity\Loyalty\SerializedCreateLoyaltyAccount;
use RetailCrm\Api\Model\Entity\Loyalty\SerializedOrder;
use RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderDelivery;
use RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderProduct;
use RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderProductOffer;
use RetailCrm\Api\Model\Filter\Loyalty\LoyaltyAccountApiFilterType;
use RetailCrm\Api\Model\Filter\Loyalty\LoyaltyApiFilterType;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltiesRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountCreateRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountEditRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountsRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyBonusCreditRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyCalculateRequest;
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
  "loyalty_account": {
    "phoneNumber": "88005553125",
    "cardNumber": "2222 3333 4444 5555",
    "customer": {
      "id": 4787
    }
  }
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

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('loyalty/account/create')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
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

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('loyalty/account/159/activate')
                ->setMethod(RequestMethod::POST),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
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

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('loyalty/account/159/bonus/credit')
                ->setMethod(RequestMethod::POST),
            static::responseJson(200, $json)
        );

        $client = TestClientFactory::createClient($mock);
        $response = $client->loyalty->accountBonusCredit(159, $request);

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

        $request = new LoyaltyAccountEditRequest($account);

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('loyalty/account/159/edit')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
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

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('loyalty/accounts')
                ->setMethod(RequestMethod::GET)
                ->setQueryParams(self::encodeFormArray($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->loyalty->accounts($request);

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

        $request = new LoyaltyCalculateRequest();
        $request->site = 'bitrix-test';
        $request->bonuses = 5;
        $request->order = $order;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('loyalty/calculate')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
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

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('loyalty/loyalties')
                ->setMethod(RequestMethod::GET)
                ->setQueryParams(self::encodeFormArray($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->loyalty->loyalties($request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
