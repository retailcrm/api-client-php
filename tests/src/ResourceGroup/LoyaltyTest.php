<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\Loyalty\AccountStatus;
use RetailCrm\Api\Enum\Loyalty\PrivilegeType;
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
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountCreateRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountEditRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountsRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyCalculateRequest;
use RetailCrm\Dev\TestUtils\Factory\TestClientFactory;
use RetailCrm\Dev\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

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
        "totalCount": 11,
        "currentPage": 1,
        "totalPageCount": 1
    },
    "loyaltyAccounts": [
        {
            "active": true,
            "id": 160,
            "phoneNumber": "88005553125",
            "cardNumber": "2222 3333 4444 5555",
            "amount": 0,
            "createdAt": "2021-02-24 11:17:11",
            "activatedAt": "2021-02-24 11:17:11",
            "customFields": []
        },
        {
            "active": true,
            "id": 158,
            "phoneNumber": "89085139555",
            "amount": 79,
            "createdAt": "2021-02-01 10:15:11",
            "activatedAt": "2021-02-01 10:15:11",
            "lastCheckId": "b93879ba-8791-4189-90f0-71e1904b5546",
            "customFields": []
        },
        {
            "active": true,
            "id": 157,
            "phoneNumber": "89085149060",
            "amount": 0,
            "createdAt": "2021-01-14 10:54:28",
            "activatedAt": "2021-01-14 10:54:28",
            "customFields": []
        },
        {
            "active": true,
            "id": 156,
            "cardNumber": "3456346346",
            "amount": 931,
            "createdAt": "2021-01-12 16:52:50",
            "activatedAt": "2021-01-12 16:52:50",
            "customFields": []
        },
        {
            "active": true,
            "id": 155,
            "phoneNumber": "89085139060",
            "amount": 28,
            "createdAt": "2020-12-14 17:42:07",
            "activatedAt": "2020-12-14 18:43:40",
            "confirmedPhoneAt": "2020-12-14 18:54:37",
            "lastCheckId": "4c1b54fb-c079-4757-916c-ab58dd667bff",
            "customFields": []
        },
        {
            "active": true,
            "id": 149,
            "phoneNumber": "+79094055044",
            "amount": 655.7,
            "createdAt": "2020-11-27 15:39:29",
            "activatedAt": "2020-11-27 15:39:29",
            "customFields": []
        },
        {
            "active": true,
            "id": 147,
            "phoneNumber": "+79094055046",
            "amount": 315.9,
            "createdAt": "2020-11-27 13:36:08",
            "activatedAt": "2020-11-27 13:36:08",
            "customFields": []
        },
        {
            "active": true,
            "id": 94,
            "phoneNumber": "+70143453900",
            "amount": 0,
            "createdAt": "2020-11-13 09:11:44",
            "activatedAt": "2020-11-13 09:11:44",
            "customFields": []
        },
        {
            "active": true,
            "id": 91,
            "phoneNumber": "+70113453901",
            "amount": 0,
            "createdAt": "2020-11-13 08:27:21",
            "activatedAt": "2020-11-13 08:27:21",
            "customFields": []
        },
        {
            "active": true,
            "id": 90,
            "phoneNumber": "+70093453901",
            "amount": 0,
            "createdAt": "2020-11-13 08:21:13",
            "activatedAt": "2020-11-13 08:21:13",
            "customFields": []
        },
        {
            "active": true,
            "id": 85,
            "phoneNumber": "+70033453901",
            "amount": 0,
            "createdAt": "2020-11-13 07:23:58",
            "activatedAt": "2020-11-13 07:23:58",
            "customFields": []
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
        $response = $client->loyalty->accountsList($request);

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
}
