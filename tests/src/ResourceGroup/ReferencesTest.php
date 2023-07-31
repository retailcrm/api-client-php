<?php

/**
 * PHP version 7.3
 *
 * @category ReferencesTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\CountryCodeIso3166;
use RetailCrm\Api\Enum\Reference\StoreInventoryType;
use RetailCrm\Api\Enum\Reference\StoreType;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Callback\Entity\Delivery\SerializedStoreWeekOpeningHours;
use RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime;
use RetailCrm\Api\Model\Entity\Orders\Delivery\CourierPhone;
use RetailCrm\Api\Model\Entity\References\CostGroup;
use RetailCrm\Api\Model\Entity\References\CostItem;
use RetailCrm\Api\Model\Entity\References\Courier;
use RetailCrm\Api\Model\Entity\References\Currency;
use RetailCrm\Api\Model\Entity\References\DeliveryService;
use RetailCrm\Api\Model\Entity\References\DeliveryType;
use RetailCrm\Api\Model\Entity\References\LegalEntity;
use RetailCrm\Api\Model\Entity\References\OrderMethod;
use RetailCrm\Api\Model\Entity\References\OrderProductStatus;
use RetailCrm\Api\Model\Entity\References\OrderType;
use RetailCrm\Api\Model\Entity\References\PaymentStatus;
use RetailCrm\Api\Model\Entity\References\PaymentType;
use RetailCrm\Api\Model\Entity\References\PriceType;
use RetailCrm\Api\Model\Entity\References\SerializedUnit;
use RetailCrm\Api\Model\Entity\References\Site;
use RetailCrm\Api\Model\Entity\References\Status;
use RetailCrm\Api\Model\Entity\References\Store;
use RetailCrm\Api\Model\Entity\References\StoreAddress;
use RetailCrm\Api\Model\Entity\References\StorePhone;
use RetailCrm\Api\Model\Request\References\CostGroupsEditRequest;
use RetailCrm\Api\Model\Request\References\CostItemsEditRequest;
use RetailCrm\Api\Model\Request\References\CouriersCreateRequest;
use RetailCrm\Api\Model\Request\References\CurrenciesCreateRequest;
use RetailCrm\Api\Model\Request\References\DeliveryServicesEditRequest;
use RetailCrm\Api\Model\Request\References\DeliveryTypesEditRequest;
use RetailCrm\Api\Model\Request\References\LegalEntityEditRequest;
use RetailCrm\Api\Model\Request\References\OrderMethodsEditRequest;
use RetailCrm\Api\Model\Request\References\OrderTypesEditRequest;
use RetailCrm\Api\Model\Request\References\PaymentStatusesEditRequest;
use RetailCrm\Api\Model\Request\References\PaymentTypesEditRequest;
use RetailCrm\Api\Model\Request\References\PriceTypesEditRequest;
use RetailCrm\Api\Model\Request\References\ProductStatusesEditRequest;
use RetailCrm\Api\Model\Request\References\SitesEditRequest;
use RetailCrm\Api\Model\Request\References\StatusesEditRequest;
use RetailCrm\Api\Model\Request\References\StoresEditRequest;
use RetailCrm\Api\Model\Request\References\UnitsEditRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class ReferencesTest
 *
 * @category ReferencesTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class ReferencesTest extends AbstractApiResourceGroupTestCase
{
    public function testCostGroups(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "costGroups": [
    {
      "code": "commission",
      "name": "Комиссии",
      "ordering": 60,
      "active": true,
      "color": "#ffd298"
    },
    {
      "code": "assembling",
      "name": "Комплектация заказа",
      "ordering": 80,
      "active": true,
      "color": "#ef8e06"
    },
    {
      "code": "administrative",
      "name": "Административные расходы",
      "ordering": 70,
      "active": true,
      "color": "#bc6b01"
    },
    {
      "code": "delivery",
      "name": "Доставка",
      "ordering": 991,
      "active": true,
      "color": "#dd4040"
    },
    {
      "code": "attraction",
      "name": "Расходы на привлечение клиентов",
      "ordering": 50,
      "active": true,
      "color": "#0044b7"
    },
    {
      "code": "product-cost",
      "name": "Стоимость товара",
      "ordering": 990,
      "active": true,
      "color": "#22C993"
    }
  ]
}
EOF;

        $mock = static::createApiMockBuilder('reference/cost-groups');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->costGroups();

        self::assertModelEqualsToResponse($json, $response);
    }
    public function testCostGroupsEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity           = new CostGroup();
        $entity->name     = 'Комиссии';
        $entity->ordering = 60;
        $entity->active   = true;

        $request = new CostGroupsEditRequest($entity);

        $mock = static::createApiMockBuilder('reference/cost-groups/commission/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->costGroupsEdit('commission', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCostItems(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "costItems": [
    {
      "code": "products-purchase-price",
      "name": "Закупочная стоимость товаров",
      "group": "product-cost",
      "ordering": 990,
      "active": true,
      "appliesToOrders": true,
      "type": "var",
      "appliesToUsers": false
    },
    {
      "code": "delivery-cost",
      "name": "Стоимость доставки",
      "group": "delivery",
      "ordering": 991,
      "active": true,
      "appliesToOrders": true,
      "type": "var",
      "appliesToUsers": false
    },
    {
      "code": "office-expenses",
      "name": "Офисные расходы",
      "group": "administrative",
      "ordering": 10,
      "active": true,
      "appliesToOrders": false,
      "type": "const",
      "appliesToUsers": false
    },
    {
      "code": "payroll-fund",
      "name": "ФОТ",
      "group": "administrative",
      "ordering": 20,
      "active": true,
      "appliesToOrders": false,
      "type": "const",
      "appliesToUsers": true
    },
    {
      "code": "employee-bonus",
      "name": "Бонусы сотрудникам",
      "group": "administrative",
      "ordering": 30,
      "active": true,
      "appliesToOrders": true,
      "type": "var",
      "appliesToUsers": true
    },
    {
      "code": "payment-systems-commission",
      "name": "Комиссии платёжных систем",
      "group": "commission",
      "ordering": 40,
      "active": true,
      "appliesToOrders": true,
      "type": "var",
      "appliesToUsers": false
    },
    {
      "code": "commission-for-warehouse-services",
      "name": "Комиссии за услуги склада",
      "group": "assembling",
      "ordering": 50,
      "active": true,
      "appliesToOrders": true,
      "type": "var",
      "appliesToUsers": false
    },
    {
      "code": "product-moving",
      "name": "Забор товара от поставщика",
      "group": "assembling",
      "ordering": 60,
      "active": true,
      "appliesToOrders": true,
      "type": "var",
      "appliesToUsers": false
    },
    {
      "code": "packaging",
      "name": "Упаковка",
      "group": "assembling",
      "ordering": 70,
      "active": true,
      "appliesToOrders": true,
      "type": "var",
      "appliesToUsers": false
    },
    {
      "code": "warehousing-services",
      "name": "Складское обслуживание",
      "group": "assembling",
      "ordering": 80,
      "active": true,
      "appliesToOrders": true,
      "type": "const",
      "appliesToUsers": false
    },
    {
      "code": "seo",
      "name": "SEO",
      "group": "attraction",
      "ordering": 90,
      "active": true,
      "appliesToOrders": false,
      "type": "const",
      "appliesToUsers": false
    },
    {
      "code": "context-ad",
      "name": "Контекстная реклама",
      "group": "attraction",
      "ordering": 100,
      "active": true,
      "appliesToOrders": false,
      "type": "const",
      "appliesToUsers": false
    },
    {
      "code": "banner-ad",
      "name": "Баннерная реклама",
      "group": "attraction",
      "ordering": 110,
      "active": true,
      "appliesToOrders": false,
      "type": "const",
      "appliesToUsers": false
    },
    {
      "code": "emailing",
      "name": "Email-рассылки",
      "group": "attraction",
      "ordering": 120,
      "active": true,
      "appliesToOrders": false,
      "type": "const",
      "appliesToUsers": false
    },
    {
      "code": "partnership",
      "name": "Партнерская программа",
      "group": "attraction",
      "ordering": 130,
      "active": true,
      "appliesToOrders": false,
      "type": "const",
      "appliesToUsers": false
    },
    {
      "code": "referrals",
      "name": "Рефералы",
      "group": "attraction",
      "ordering": 140,
      "active": true,
      "appliesToOrders": false,
      "type": "const",
      "appliesToUsers": false
    },
    {
      "code": "social-media-ad",
      "name": "Реклама в соцсетях",
      "group": "attraction",
      "ordering": 150,
      "active": true,
      "appliesToOrders": false,
      "type": "const",
      "appliesToUsers": false
    }
  ]
}
EOF;

        $mock = static::createApiMockBuilder('reference/cost-items');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->costItems();

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCostItemsEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity                  = new CostItem();
        $entity->name            = "Test item";
        $entity->group           = "product-cost";
        $entity->ordering        = 990;
        $entity->active          = true;
        $entity->appliesToOrders = true;
        $entity->type            = "var";
        $entity->appliesToUsers  = false;

        $request = new CostItemsEditRequest($entity);

        $mock = static::createApiMockBuilder('reference/cost-items/test-item/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->costItemsEdit('test-item', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCountries(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "countriesIso": [
    "RU",
    "UA",
    "BY",
    "KZ",
    "AZ",
    "HU",
    "PL",
    "GB",
    "US",
    "FR",
    "ES"
  ]
}
EOF;

        $mock = static::createApiMockBuilder('reference/countries');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->countries();

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCouriers(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "couriers": [
    {
      "id": 3,
      "firstName": "Артур",
      "lastName": "Пирожков",
      "active": true,
      "phone": {
        "number": "88005553535"
      }
    }
  ]
}
EOF;

        $mock = static::createApiMockBuilder('reference/couriers');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->couriers();

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCouriersCreate(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 1
}
EOF;

        $entity            = new Courier();
        $entity->firstName = 'Tester';
        $entity->lastName  = 'Tester';
        $entity->phone     = new CourierPhone('88005553125');

        $request = new CouriersCreateRequest($entity);

        $mock = static::createApiMockBuilder('reference/couriers/create');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->couriersCreate($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCouriersEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity            = new Courier();
        $entity->firstName = 'Tester';
        $entity->lastName  = 'Courier';
        $entity->phone     = new CourierPhone('88005553126');

        $request = new CouriersCreateRequest($entity);

        $mock = static::createApiMockBuilder('reference/couriers/4/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->couriersEdit(4, $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCurrencies(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "currencies": [
    {
      "id": 1,
      "code": "RUB",
      "isBase": true,
      "isAutoConvert": false
    },
    {
      "id": 3,
      "code": "KZT",
      "isBase": false,
      "isAutoConvert": true,
      "autoConvertExtraPercent": 10
    },
    {
      "id": 2,
      "code": "USD",
      "isBase": false,
      "isAutoConvert": true,
      "autoConvertExtraPercent": 5
    }
  ]
}
EOF;

        $mock = static::createApiMockBuilder('reference/currencies');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->currencies();

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCurrenciesCreate(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 1
}
EOF;

        $entity                             = new Currency();
        $entity->code                       = 'EUR';
        $entity->isAutoConvert              = true;
        $entity->autoConvertExtraPercent    = 5;

        $request = new CurrenciesCreateRequest($entity);

        $mock = static::createApiMockBuilder('reference/currencies/create');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->currenciesCreate($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCurrenciesEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity                             = new Currency();
        $entity->isAutoConvert              = true;
        $entity->autoConvertExtraPercent    = 15;

        $request = new CurrenciesCreateRequest($entity);

        $mock = static::createApiMockBuilder('reference/currencies/3/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->currenciesEdit(3, $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testDeliveryServices(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "deliveryServices": {
    "1": {
      "name": "Единая ставка",
      "code": "1",
      "active": true
    },
    "2": {
      "name": "Flat rate",
      "code": "2",
      "active": true
    },
    "3": {
      "name": "Free shipping",
      "code": "3",
      "active": true
    },
    "avia": {
      "name": "Воздушный транспорт",
      "code": "avia",
      "active": true
    },
    "land": {
      "name": "Наземный транспорт",
      "code": "land",
      "active": true
    },
    "pvz-out2": {
      "name": "pvpHern",
      "code": "pvz-out2",
      "active": true
    },
    "pvz-out3": {
      "name": "pvpHern",
      "code": "pvz-out3",
      "active": true
    },
    "dict-deliveryservices-1571123786": {
      "name": "Bbbdict-deliveryservices-1571123786",
      "code": "dict-deliveryservices-1571123786",
      "active": false
    },
    "dict-deliveryservices-1571123849": {
      "name": "Bbbdict-deliveryservices-1571123849",
      "code": "dict-deliveryservices-1571123849",
      "active": false
    },
    "dict-deliveryservices-1571124851": {
      "name": "Bbbdict-deliveryservices-1571124851",
      "code": "dict-deliveryservices-1571124851",
      "active": false
    },
    "dict-deliveryservices-1571124915": {
      "name": "Bbbdict-deliveryservices-1571124915",
      "code": "dict-deliveryservices-1571124915",
      "active": false
    },
    "dict-deliveryservices-1571134088": {
      "name": "Bbbdict-deliveryservices-1571134088",
      "code": "dict-deliveryservices-1571134088",
      "active": false
    },
    "dict-deliveryservices-1571134205": {
      "name": "Bbbdict-deliveryservices-1571134205",
      "code": "dict-deliveryservices-1571134205",
      "active": false
    },
    "dict-deliveryservices-1575878847": {
      "name": "Bbbdict-deliveryservices-1575878847",
      "code": "dict-deliveryservices-1575878847",
      "active": false
    },
    "dict-deliveryservices-1575878957": {
      "name": "Bbbdict-deliveryservices-1575878957",
      "code": "dict-deliveryservices-1575878957",
      "active": false
    },
    "dict-deliveryservices-1581413621": {
      "name": "Bbbdict-deliveryservices-1581413621",
      "code": "dict-deliveryservices-1581413621",
      "active": false
    },
    "dict-deliveryservices-1581413624": {
      "name": "Bbbdict-deliveryservices-1581413624",
      "code": "dict-deliveryservices-1581413624",
      "active": false
    },
    "dict-deliveryservices-1581413629": {
      "name": "Bbbdict-deliveryservices-1581413629",
      "code": "dict-deliveryservices-1581413629",
      "active": false
    },
    "dict-deliveryservices-1581413633": {
      "name": "Bbbdict-deliveryservices-1581413633",
      "code": "dict-deliveryservices-1581413633",
      "active": false
    },
    "dict-deliveryservices-1581413756": {
      "name": "Bbbdict-deliveryservices-1581413756",
      "code": "dict-deliveryservices-1581413756",
      "active": false
    },
    "dict-deliveryservices-1581413762": {
      "name": "Bbbdict-deliveryservices-1581413762",
      "code": "dict-deliveryservices-1581413762",
      "active": false
    },
    "dict-deliveryservices-1581413765": {
      "name": "Bbbdict-deliveryservices-1581413765",
      "code": "dict-deliveryservices-1581413765",
      "active": false
    },
    "dict-deliveryservices-1581413773": {
      "name": "Bbbdict-deliveryservices-1581413773",
      "code": "dict-deliveryservices-1581413773",
      "active": false
    }
  }
}
EOF;

        $mock = static::createApiMockBuilder('reference/delivery-services');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->deliveryServices();

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testDeliveryServicesEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity         = new DeliveryService();
        $entity->name   = 'dict-deliveryservices-1571123786';
        $entity->active = false;

        $request = new DeliveryServicesEditRequest($entity);

        $mock = static::createApiMockBuilder('reference/delivery-services/dict-deliveryservices-1571123786/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->deliveryServicesEdit('dict-deliveryservices-1571123786', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testDeliveryTypes(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "deliveryTypes": {
    "2": {
      "isDynamicCostCalculation": false,
      "isAutoCostCalculation": false,
      "isAutoNetCostCalculation": false,
      "isCostDependsOnRegionAndWeightAndSum": false,
      "isCostDependsOnDateTime": false,
      "currency": "RUB",
      "name": "Доставка курьером",
      "code": "2",
      "active": true,
      "defaultCost": 500,
      "defaultNetCost": 0,
      "description": "Доставка осуществляется в течение дня в удобное для вас время.",
      "paymentTypes": [
        "7",
        "bonuses-sl",
        "bank-card",
        "bank-transfer",
        "credit",
        "cash",
        "e-money"
      ],
      "deliveryServices": [

      ],
      "defaultForCrm": false,
      "deliveryPaymentTypes": [
        {
          "code": "p_type1",
          "cod": true
        },
        {
          "code": "p_type2",
          "cod": false
        }
      ],
      "sites": [
        "site1"
      ]
    },
    "16": {
      "isDynamicCostCalculation": false,
      "isAutoCostCalculation": false,
      "isAutoNetCostCalculation": false,
      "isCostDependsOnRegionAndWeightAndSum": false,
      "isCostDependsOnDateTime": false,
      "currency": "RUB",
      "name": "Почта России",
      "code": "16",
      "active": true,
      "defaultCost": 0,
      "defaultNetCost": 0,
      "description": "Доставка почтой  (расчёт на основании табличных данных)",
      "paymentTypes": [
        "bank-card",
        "bank-transfer",
        "credit",
        "e-money"
      ],
      "deliveryServices": [
        "avia",
        "land"
      ],
      "defaultForCrm": false,
      "deliveryPaymentTypes": [
        {
          "code": "p_type1",
          "cod": true
        },
        {
          "code": "p_type2",
          "cod": false
        }
      ],
      "sites": [
      ]
    },
    "ozon-seller": {
      "isDynamicCostCalculation": false,
      "isAutoCostCalculation": false,
      "isAutoNetCostCalculation": false,
      "isCostDependsOnRegionAndWeightAndSum": false,
      "isCostDependsOnDateTime": false,
      "currency": "RUB",
      "name": "Доставка OZON",
      "code": "ozon-seller",
      "active": false,
      "defaultCost": 0,
      "defaultNetCost": 0,
      "description": "Доставка OZON 5f4766d858f78",
      "paymentTypes": [
        "cash",
        "bank-card",
        "e-money",
        "bank-transfer",
        "credit",
        "bonuses-sl",
        "dict-paymenttypes-1571123795",
        "dict-paymenttypes-1575878858",
        "dict-paymenttypes-1571123853",
        "dict-paymenttypes-1571124860",
        "dict-paymenttypes-1575878963",
        "dict-paymenttypes-1571124919",
        "dict-paymenttypes-1571134100",
        "dict-paymenttypes-1571134212",
        "7",
        "dict-paymenttypes-1581413638",
        "dict-paymenttypes-1581413641",
        "dict-paymenttypes-1581413645",
        "dict-paymenttypes-1581413649",
        "dict-paymenttypes-1581413768",
        "dict-paymenttypes-1581413773",
        "dict-paymenttypes-1581413777",
        "dict-paymenttypes-1581413785",
        "423361",
        "442099",
        "442100",
        "555159",
        "555161",
        "776106",
        "818241",
        "897285"
      ],
      "integrationCode": "ozon-seller-5f4766d858f78",
      "deliveryServices": [

      ],
      "defaultForCrm": false,
      "deliveryPaymentTypes": [
        {
          "code": "p_type1",
          "cod": true
        },
        {
          "code": "p_type2",
          "cod": false
        }
      ],
      "sites": [
      ]
    },
    "crrst-24": {
      "isDynamicCostCalculation": false,
      "isAutoCostCalculation": true,
      "isAutoNetCostCalculation": true,
      "isCostDependsOnRegionAndWeightAndSum": false,
      "isCostDependsOnDateTime": false,
      "currency": "RUB",
      "name": "Курьерист 24",
      "code": "crrst-24",
      "active": true,
      "defaultCost": 0,
      "defaultNetCost": 0,
      "paymentTypes": [

      ],
      "integrationCode": "courierist-24",
      "deliveryServices": [

      ],
      "defaultForCrm": false,
      "deliveryPaymentTypes": [
      ],
      "sites": [
      ]
    }
  }
}
EOF;

        $mock = static::createApiMockBuilder('reference/delivery-types');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->deliveryTypes();

        self::assertModelsCallback($json, $response, static function ($expected, $actual) {
            foreach ($expected['deliveryTypes'] as $key => $deliveryType) {
                $actual['deliveryTypes'][$key]['isDynamicCostCalculation'] = $deliveryType['isDynamicCostCalculation'];
                $actual['deliveryTypes'][$key]['isAutoCostCalculation'] = $deliveryType['isAutoCostCalculation'];
                $actual['deliveryTypes'][$key]['isAutoNetCostCalculation'] = $deliveryType['isAutoNetCostCalculation'];
                $actual['deliveryTypes'][$key]['isCostDependsOnRegionAndWeightAndSum']
                    = $deliveryType['isCostDependsOnRegionAndWeightAndSum'];
                $actual['deliveryTypes'][$key]['isCostDependsOnDateTime'] = $deliveryType['isCostDependsOnDateTime'];
                $actual['deliveryTypes'][$key]['sites'] = $deliveryType['sites'];
            }

            self::assertEquals($expected, $actual);
        });
    }

    public function testDeliveryTypesEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity                 = new DeliveryType();
        $entity->name           = 'Test Type';
        $entity->active         = false;
        $entity->defaultCost    = 0;
        $entity->defaultNetCost = 0;
        $entity->paymentTypes   = [
            'bank-card',
            'bank-transfer',
            'credit',
            'cash',
            'e-money'
        ];

        $request = new DeliveryTypesEditRequest($entity);

        $mock = static::createApiMockBuilder('reference/delivery-types/dict-deliverytypes-1571124916/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->deliveryTypesEdit('dict-deliverytypes-1571124916', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testLegalEntities(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "legalEntities": [
    {
      "contragentType": "enterpreneur",
      "legalName": "NDS",
      "code": "NDS",
      "countryIso": "RU",
      "vatRate": "20.00"
    },
    {
      "contragentType": "enterpreneur",
      "legalName": "ИП Бороздина Татьяна Александровна",
      "INN": "773719480154",
      "code": "Vog_Gallery",
      "countryIso": "RU"
    },
    {
      "contragentType": "legal-entity",
      "legalName": "ООО \"Казематы\"",
      "code": "kazemat",
      "countryIso": "RU",
      "vatRate": "18.00"
    },
    {
      "contragentType": "legal-entity",
      "legalName": "ООО \"Некрополь\"",
      "code": "necropol",
      "countryIso": "RU",
      "vatRate": "20.00"
    }
  ]
}
EOF;

        $mock = static::createApiMockBuilder('reference/legal-entities');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->legalEntities();

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testLegalEntitiesEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity                 = new LegalEntity();
        $entity->contragentType = "legal-entity";
        $entity->legalName      = "ООО \"Некрополь\"";
        $entity->countryIso     = CountryCodeIso3166::RUSSIAN_FEDERATION;
        $entity->vatRate        = "20.00";

        $request = new LegalEntityEditRequest($entity);

        $mock = static::createApiMockBuilder('reference/legal-entities/necropol/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->legalEntitiesEdit('necropol', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testMgChannels(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "mgChannels": [
    {
      "id": 6,
      "externalId": 3,
      "type": "viber",
      "active": false,
      "name": "AzgalotNeBot"
    },
    {
      "id": 7,
      "externalId": 6,
      "type": "fbmessenger",
      "active": false
    },
    {
      "id": 8,
      "externalId": 7,
      "type": "viber",
      "active": false,
      "name": "transportest"
    },
    {
      "id": 9,
      "externalId": 9,
      "type": "whatsapp",
      "active": false,
      "name": "transports"
    }
  ]
}
EOF;

        $mock = static::createApiMockBuilder('reference/mg-channels');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->mgChannels();

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testOrderMethods(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "orderMethods": {
    "2": {
      "name": "2",
      "code": "2",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "isFromPos": false
    },
    "phone": {
      "name": "По телефону",
      "code": "phone",
      "active": true,
      "defaultForCrm": true,
      "defaultForApi": false,
      "isFromPos": false
    },
    "shopping-cart": {
      "name": "Через корзину",
      "code": "shopping-cart",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": true,
      "isFromPos": false
    },
    "one-click": {
      "name": "В один клик",
      "code": "one-click",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "isFromPos": false
    },
    "price-decrease-request": {
      "name": "Запрос на понижение цены",
      "code": "price-decrease-request",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "isFromPos": false
    },
    "landing-page": {
      "name": "Заявка с посадочной страницы",
      "code": "landing-page",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "isFromPos": false
    },
    "offline": {
      "name": "Оффлайн",
      "code": "offline",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "isFromPos": false
    },
    "app": {
      "name": "Мобильное приложение",
      "code": "app",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "isFromPos": false
    },
    "live-chat": {
      "name": "Онлайн-консультант",
      "code": "live-chat",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "isFromPos": false
    },
    "terminal": {
      "name": "Терминал",
      "code": "terminal",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "isFromPos": false
    },
    "missed-call": {
      "name": "Пропущенный звонок",
      "code": "missed-call",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "isFromPos": false
    },
    "messenger": {
      "name": "Мессенджеры",
      "code": "messenger",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "isFromPos": false
    }
  }
}
EOF;

        $mock = static::createApiMockBuilder('reference/order-methods');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->orderMethods();

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testOrderMethodsEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity         = new OrderMethod();
        $entity->name   = 'Test Method';
        $entity->active = true;

        $request = new OrderMethodsEditRequest($entity);

        $mock = static::createApiMockBuilder('reference/order-methods/2/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->orderMethodsEdit('2', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testOrderTypes(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "orderTypes": {
    "1": {
      "name": "1",
      "code": "1",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "eshop-individual": {
      "name": "Физическое лицо",
      "code": "eshop-individual",
      "active": true,
      "defaultForCrm": true,
      "defaultForApi": false,
      "ordering": 990
    },
    "test": {
      "name": "test",
      "code": "test",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "eshop-legal": {
      "name": "Юридическое лицо",
      "code": "eshop-legal",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "dict-ordertypes-1571123791": {
      "name": "Bbbdict-ordertypes-1571123791",
      "code": "dict-ordertypes-1571123791",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "dict-ordertypes-1575878853": {
      "name": "Bbbdict-ordertypes-1575878853",
      "code": "dict-ordertypes-1575878853",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "dict-ordertypes-1571123851": {
      "name": "Bbbdict-ordertypes-1571123851",
      "code": "dict-ordertypes-1571123851",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "dict-ordertypes-1571124857": {
      "name": "Bbbdict-ordertypes-1571124857",
      "code": "dict-ordertypes-1571124857",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "dict-ordertypes-1575878961": {
      "name": "Bbbdict-ordertypes-1575878961",
      "code": "dict-ordertypes-1575878961",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "dict-ordertypes-1571124917": {
      "name": "Bbbdict-ordertypes-1571124917",
      "code": "dict-ordertypes-1571124917",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "dict-ordertypes-1571134095": {
      "name": "Bbbdict-ordertypes-1571134095",
      "code": "dict-ordertypes-1571134095",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "dict-ordertypes-1571134209": {
      "name": "Bbbdict-ordertypes-1571134209",
      "code": "dict-ordertypes-1571134209",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "dict-ordertypes-1581413631": {
      "name": "Bbbdict-ordertypes-1581413631",
      "code": "dict-ordertypes-1581413631",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "dict-ordertypes-1581413635": {
      "name": "Bbbdict-ordertypes-1581413635",
      "code": "dict-ordertypes-1581413635",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "dict-ordertypes-1581413638": {
      "name": "Bbbdict-ordertypes-1581413638",
      "code": "dict-ordertypes-1581413638",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "dict-ordertypes-1581413643": {
      "name": "Bbbdict-ordertypes-1581413643",
      "code": "dict-ordertypes-1581413643",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "dict-ordertypes-1581413763": {
      "name": "Bbbdict-ordertypes-1581413763",
      "code": "dict-ordertypes-1581413763",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "dict-ordertypes-1581413769": {
      "name": "Bbbdict-ordertypes-1581413769",
      "code": "dict-ordertypes-1581413769",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "dict-ordertypes-1581413772": {
      "name": "Bbbdict-ordertypes-1581413772",
      "code": "dict-ordertypes-1581413772",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "dict-ordertypes-1581413780": {
      "name": "Bbbdict-ordertypes-1581413780",
      "code": "dict-ordertypes-1581413780",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    },
    "mc-order": {
      "name": "Заказ для МС",
      "code": "mc-order",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "ordering": 990
    }
  }
}
EOF;

        $mock = static::createApiMockBuilder('reference/order-types');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->orderTypes();

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testOrderTypesEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity         = new OrderType();
        $entity->name   = 'Test Type';
        $entity->active = true;

        $request = new OrderTypesEditRequest($entity);

        $mock = static::createApiMockBuilder('reference/order-types/1/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->orderTypesEdit('1', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testPaymentStatuses(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "paymentStatuses": {
    "dict-paymentstatuses-1571123793": {
      "name": "Bbbdict-paymentstatuses-1571123793",
      "code": "dict-paymentstatuses-1571123793",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "cash"
      ]
    },
    "dict-paymentstatuses-1571123852": {
      "name": "Bbbdict-paymentstatuses-1571123852",
      "code": "dict-paymentstatuses-1571123852",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "cash"
      ]
    },
    "dict-paymentstatuses-1571124858": {
      "name": "Bbbdict-paymentstatuses-1571124858",
      "code": "dict-paymentstatuses-1571124858",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "cash"
      ]
    },
    "dict-paymentstatuses-1571124918": {
      "name": "Bbbdict-paymentstatuses-1571124918",
      "code": "dict-paymentstatuses-1571124918",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "cash"
      ]
    },
    "payment-start": {
      "name": "Платеж проведен",
      "code": "payment-start",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 30,
      "paymentTypes": [
        "bonuses-sl",
        "test-payment-integration",
        "alfa-bank-payment",
        "bank-card",
        "bank-transfer",
        "credit",
        "cash",
        "invoice-payment",
        "wallete-one-payment-vog",
        "test-mc-payment",
        "test-mc-cashin",
        "e-money"
      ]
    },
    "paid": {
      "name": "Оплачен",
      "code": "paid",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": true,
      "ordering": 60,
      "paymentTypes": [
        "bonuses-sl",
        "17",
        "test-payment-integration",
        "alfa-bank-payment",
        "bank-card",
        "897285",
        "bank-transfer",
        "12",
        "credit",
        "818241",
        "cash",
        "13",
        "423361",
        "442100",
        "442099",
        "14",
        "19",
        "18",
        "checkbox-payment",
        "checkbox-payment-two",
        "invoice-payment",
        "wallete-one-payment-vog",
        "776106",
        "15",
        "20",
        "16",
        "test-mc-payment",
        "test-mc-prepayment",
        "test-mc-cashin",
        "555159",
        "555161",
        "e-money"
      ]
    },
    "credit-check": {
      "name": "Проверка документов на кредит",
      "code": "credit-check",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 40,
      "paymentTypes": [
        "bonuses-sl",
        "credit",
        "cash"
      ]
    },
    "credit-approved": {
      "name": "Кредит одобрен",
      "code": "credit-approved",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 50,
      "paymentTypes": [
        "bonuses-sl",
        "credit",
        "cash"
      ]
    },
    "fail": {
      "name": "Ошибка",
      "code": "fail",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 55,
      "paymentTypes": [
        "bonuses-sl",
        "bank-card",
        "bank-transfer",
        "credit",
        "cash",
        "e-money"
      ]
    },
    "not-paid": {
      "name": "Не оплачен",
      "code": "not-paid",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 10,
      "paymentTypes": [
        "bonuses-sl",
        "17",
        "bank-card",
        "bank-transfer",
        "12",
        "credit",
        "cash",
        "13",
        "14",
        "19",
        "18",
        "checkbox-payment",
        "15",
        "20",
        "16",
        "test-mc-payment",
        "test-mc-cashin",
        "e-money"
      ]
    },
    "dict-paymentstatuses-1571134098": {
      "name": "Bbbdict-paymentstatuses-1571134098",
      "code": "dict-paymentstatuses-1571134098",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "cash"
      ]
    },
    "dict-paymentstatuses-1571134211": {
      "name": "Bbbdict-paymentstatuses-1571134211",
      "code": "dict-paymentstatuses-1571134211",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "cash"
      ]
    },
    "dict-paymentstatuses-1575878855": {
      "name": "Bbbdict-paymentstatuses-1575878855",
      "code": "dict-paymentstatuses-1575878855",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "cash"
      ]
    },
    "dict-paymentstatuses-1575878962": {
      "name": "Bbbdict-paymentstatuses-1575878962",
      "code": "dict-paymentstatuses-1575878962",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "cash"
      ]
    },
    "dict-paymentstatuses-1581413635": {
      "name": "Bbbdict-paymentstatuses-1581413635",
      "code": "dict-paymentstatuses-1581413635",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "cash"
      ]
    },
    "dict-paymentstatuses-1581413638": {
      "name": "Bbbdict-paymentstatuses-1581413638",
      "code": "dict-paymentstatuses-1581413638",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "cash"
      ]
    },
    "dict-paymentstatuses-1581413641": {
      "name": "Bbbdict-paymentstatuses-1581413641",
      "code": "dict-paymentstatuses-1581413641",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "cash"
      ]
    },
    "dict-paymentstatuses-1581413646": {
      "name": "Bbbdict-paymentstatuses-1581413646",
      "code": "dict-paymentstatuses-1581413646",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "cash"
      ]
    },
    "dict-paymentstatuses-1581413765": {
      "name": "Bbbdict-paymentstatuses-1581413765",
      "code": "dict-paymentstatuses-1581413765",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "cash"
      ]
    },
    "dict-paymentstatuses-1581413771": {
      "name": "Bbbdict-paymentstatuses-1581413771",
      "code": "dict-paymentstatuses-1581413771",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "cash"
      ]
    },
    "dict-paymentstatuses-1581413775": {
      "name": "Bbbdict-paymentstatuses-1581413775",
      "code": "dict-paymentstatuses-1581413775",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "cash"
      ]
    },
    "dict-paymentstatuses-1581413783": {
      "name": "Bbbdict-paymentstatuses-1581413783",
      "code": "dict-paymentstatuses-1581413783",
      "active": false,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "cash"
      ]
    },
    "pending": {
      "name": "Не оплачен",
      "code": "pending",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "897285",
        "bank-transfer",
        "818241",
        "cash",
        "423361",
        "442100",
        "442099",
        "checkbox-payment-two",
        "776106",
        "555159",
        "555161"
      ]
    },
    "invoice": {
      "name": "Выставлен счет",
      "code": "invoice",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 20,
      "paymentTypes": [
        "bonuses-sl",
        "test-payment-integration",
        "alfa-bank-payment",
        "bank-card",
        "bank-transfer",
        "credit",
        "cash",
        "invoice-payment",
        "wallete-one-payment-vog",
        "test-mc-payment",
        "test-mc-cashin",
        "e-money"
      ]
    },
    "fiskalizirovan": {
      "name": "Фискализирован",
      "code": "fiskalizirovan",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": true,
      "ordering": 990,
      "paymentTypes": [
        "checkbox-payment",
        "checkbox-payment-two"
      ]
    },
    "check-refund": {
      "name": "Возврат чека",
      "code": "check-refund",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "test-payment-integration",
        "alfa-bank-payment",
        "checkbox-payment",
        "checkbox-payment-two",
        "invoice-payment",
        "wallete-one-payment-vog"
      ]
    },
    "check-refund-after": {
      "name": "Чек возвращён",
      "code": "check-refund-after",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "paymentComplete": false,
      "ordering": 990,
      "paymentTypes": [
        "test-payment-integration",
        "alfa-bank-payment",
        "checkbox-payment",
        "checkbox-payment-two",
        "invoice-payment",
        "wallete-one-payment-vog"
      ]
    }
  }
}
EOF;

        $mock = static::createApiMockBuilder('reference/payment-statuses');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->paymentStatuses();

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testPaymentStatusesEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity               = new PaymentStatus();
        $entity->name         = 'Test Status';
        $entity->active       = true;
        $entity->ordering     = 990;
        $entity->paymentTypes = ['cash'];

        $request = new PaymentStatusesEditRequest($entity);

        $mock = static::createApiMockBuilder('reference/payment-statuses/dict-paymentstatuses-1571123793/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->paymentStatusesEdit('dict-paymentstatuses-1571123793', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testPaymentTypes(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "paymentTypes": {
    "7": {
      "name": "7",
      "code": "7",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "deliveryTypes": [
        "2",
        "ozon-seller-5f2432a06a903",
        "ozon-seller",
        "ozon-seller-5f689f4509b2f",
        "ozon-seller-228",
        "ozon-seller-2",
        "ozon-seller-5f6affbcb5617",
        "servientrega-test",
        "ozon-seller-5f8fe602d193b",
        "ozon-seller-5f9bfac6a9855",
        "ozon-seller-5f9bff5857b35",
        "delivery-callback-check",
        "ozon-seller-5f9d10257668e",
        "ozon-seller-3",
        "serv-test",
        "ozon-seller-5fda1144d3c1e",
        "ozon-seller-5ff57fbceb6b2",
        "ozon-seller-6023f9ca1d880",
        "ozon-seller-6023fbcea632c",
        "ozon-seller-6024d760b14f8"
      ],
      "paymentStatuses": [
      ],
      "sites": [
        "site1"
      ]
    },
    "12": {
      "name": "Безналичный расчет",
      "code": "12",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "description": "",
      "deliveryTypes": [
        "3",
        "ozon-seller-6023f9ca1d880",
        "ozon-seller-6023fbcea632c",
        "ozon-seller-6024d760b14f8"
      ],
      "paymentStatuses": [
        "not-paid",
        "paid"
      ]
    },
    "13": {
      "name": "Наличными",
      "code": "13",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "description": "",
      "deliveryTypes": [
        "11",
        "8",
        "9",
        "3",
        "ozon-seller-6023f9ca1d880",
        "ozon-seller-6023fbcea632c",
        "ozon-seller-6024d760b14f8"
      ],
      "paymentStatuses": [
        "not-paid",
        "paid"
      ],
      "sites": [
        "site1",
        "site2"
      ]
    },
    "14": {
      "name": "Онлайн-оплата банковской картой",
      "code": "14",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "description": "",
      "deliveryTypes": [
        "8",
        "9",
        "3",
        "ozon-seller-6023f9ca1d880",
        "ozon-seller-6023fbcea632c",
        "ozon-seller-6024d760b14f8"
      ],
      "paymentStatuses": [
        "not-paid",
        "paid"
      ],
      "sites": [
      ]
    },
    "15": {
      "name": "Оплата при получении",
      "code": "15",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "description": "",
      "deliveryTypes": [
        "11",
        "3",
        "ozon-seller-6023f9ca1d880",
        "ozon-seller-6023fbcea632c",
        "ozon-seller-6024d760b14f8"
      ],
      "paymentStatuses": [
        "not-paid",
        "paid"
      ],
      "sites": [
      ]
    },
    "wallete-one-payment-vog": {
      "name": "Оплата Wallet One (Vog)",
      "code": "wallete-one-payment-vog",
      "active": true,
      "defaultForCrm": false,
      "defaultForApi": false,
      "deliveryTypes": [

      ],
      "paymentStatuses": [
        "invoice",
        "payment-start",
        "paid",
        "check-refund",
        "check-refund-after"
      ],
      "integrationModule": {
        "active": true,
        "name": "Wallet One",
        "logo": "http://argo.inet-cool.ru/img/w1.svg"
      },
      "sites": [
      ]
    }
  }
}
EOF;

        $mock = static::createApiMockBuilder('reference/payment-types');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->paymentTypes();

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testPaymentTypesEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity                  = new PaymentType();
        $entity->name            = "Test Integration Payment";
        $entity->code            = "test-payment-integration";
        $entity->active          = true;
        $entity->defaultForCrm   = false;
        $entity->defaultForApi   = false;
        $entity->paymentStatuses = [
            "invoice",
            "payment-start",
            "paid",
            "check-refund",
            "check-refund-after"
        ];

        $request = new PaymentTypesEditRequest($entity);

        $mock = static::createApiMockBuilder('reference/payment-types/test-payment-integration/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->paymentTypesEdit('test-payment-integration', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testPriceTypes(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "priceTypes": [
    {
      "id": 7,
      "code": "sample_v4_price_code",
      "name": "Sample v4 price type",
      "active": true,
      "default": false,
      "geo": [

      ],
      "groups": [

      ],
      "ordering": 500
    },
    {
      "id": 5,
      "code": "name",
      "name": "Название",
      "active": true,
      "default": false,
      "geo": [

      ],
      "groups": [

      ],
      "ordering": 990
    },
    {
      "id": 6,
      "code": "test2",
      "name": "test2",
      "active": true,
      "default": false,
      "geo": [

      ],
      "groups": [

      ],
      "ordering": 990
    },
    {
      "id": 4,
      "code": "base",
      "name": "Базовая",
      "active": true,
      "default": true,
      "geo": [

      ],
      "groups": [

      ],
      "ordering": 991
    }
  ]
}
EOF;

        $mock = static::createApiMockBuilder('reference/price-types');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->priceTypes();

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testPriceTypesEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity           = new PriceType();
        $entity->name     = "Test Price Type";
        $entity->active   = true;
        $entity->ordering = 980;

        $request = new PriceTypesEditRequest($entity);

        $mock = static::createApiMockBuilder('reference/price-types/test2/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->priceTypesEdit('test2', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testProductStatuses(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "productStatuses": {
    "1": {
      "code": "1",
      "ordering": 140,
      "active": true,
      "createdAt": "2019-02-07 16:55:29",
      "cancelStatus": false,
      "name": "1"
    },
    "4": {
      "code": "4",
      "ordering": 270,
      "active": false,
      "createdAt": "2019-10-01 11:24:08",
      "cancelStatus": false,
      "name": "4"
    },
    "otmena": {
      "code": "otmena",
      "ordering": 360,
      "active": true,
      "createdAt": "2020-01-14 11:34:24",
      "cancelStatus": true,
      "name": "otmena"
    },
    "new": {
      "code": "new",
      "ordering": 10,
      "active": true,
      "createdAt": "2018-09-04 16:35:03",
      "cancelStatus": false,
      "name": "Добавлен"
    },
    "confirming": {
      "code": "confirming",
      "ordering": 20,
      "active": true,
      "createdAt": "2018-09-04 16:35:03",
      "cancelStatus": false,
      "name": "Подтверждение наличия"
    },
    "in-reserve": {
      "code": "in-reserve",
      "ordering": 30,
      "active": true,
      "createdAt": "2018-09-04 16:35:03",
      "cancelStatus": false,
      "name": "В резерве"
    },
    "assembly-delivery": {
      "code": "assembly-delivery",
      "ordering": 40,
      "active": true,
      "createdAt": "2018-09-04 16:35:03",
      "cancelStatus": false,
      "name": "Доставляется на точку сборки"
    },
    "ready-for-assembly": {
      "code": "ready-for-assembly",
      "ordering": 50,
      "active": true,
      "createdAt": "2018-09-04 16:35:03",
      "cancelStatus": false,
      "name": "Готов к комплектации"
    },
    "completed": {
      "code": "completed",
      "ordering": 60,
      "active": true,
      "createdAt": "2018-09-04 16:35:03",
      "cancelStatus": false,
      "name": "Укомплектован"
    },
    "saled": {
      "code": "saled",
      "ordering": 70,
      "active": true,
      "createdAt": "2018-09-04 16:35:03",
      "orderStatusByProductStatus": "complete",
      "orderStatusForProductStatus": "complete",
      "cancelStatus": false,
      "name": "Продан"
    },
    "out-of-stock": {
      "code": "out-of-stock",
      "ordering": 80,
      "active": true,
      "createdAt": "2018-09-04 16:35:03",
      "orderStatusByProductStatus": "no-product",
      "orderStatusForProductStatus": "no-product",
      "cancelStatus": true,
      "name": "Нет в наличии"
    },
    "failure": {
      "code": "failure",
      "ordering": 90,
      "active": true,
      "createdAt": "2018-09-04 16:35:03",
      "cancelStatus": true,
      "name": "Отказ клиента"
    },
    "product-is-damaged": {
      "code": "product-is-damaged",
      "ordering": 100,
      "active": true,
      "createdAt": "2018-09-04 16:35:03",
      "cancelStatus": true,
      "name": "Товар поврежден"
    },
    "assembly-not-delivery": {
      "code": "assembly-not-delivery",
      "ordering": 110,
      "active": true,
      "createdAt": "2018-09-04 16:35:03",
      "cancelStatus": true,
      "name": "Не доставлен на точку сборки"
    },
    "lost": {
      "code": "lost",
      "ordering": 120,
      "active": true,
      "createdAt": "2018-09-04 16:35:03",
      "cancelStatus": true,
      "name": "Потерян"
    },
    "returned": {
      "code": "returned",
      "ordering": 130,
      "active": true,
      "createdAt": "2018-09-04 16:35:03",
      "cancelStatus": true,
      "name": "Возврат"
    },
    "1-1": {
      "code": "1-1",
      "ordering": 150,
      "active": true,
      "createdAt": "2019-02-07 16:55:38",
      "cancelStatus": false,
      "name": "1"
    },
    "dsad-dsad-sdsad-ds-ds-ad-d": {
      "code": "dsad-dsad-sdsad-ds-ds-ad-d",
      "ordering": 160,
      "active": true,
      "createdAt": "2019-02-07 16:56:10",
      "orderStatusByProductStatus": "test",
      "orderStatusForProductStatus": "test",
      "cancelStatus": false,
      "name": "dsad\"Ds'aD\"Sdsad-Ds___ds-ad-=d"
    },
    "": {
      "code": "",
      "ordering": 170,
      "active": true,
      "createdAt": "2019-02-07 16:56:10",
      "cancelStatus": false,
      "name": "+/-+/*++-+-/*+-+/*"
    },
    "-1": {
      "code": "-1",
      "ordering": 180,
      "active": true,
      "createdAt": "2019-02-07 16:56:10",
      "cancelStatus": false,
      "name": "{}\"{>:<>?1"
    },
    "-2": {
      "code": "-2",
      "ordering": 190,
      "active": true,
      "createdAt": "2019-02-07 16:57:56",
      "cancelStatus": false,
      "name": "+/-+/*++-+-/*+-+/*+/-+/*++-+-/*+-+/*"
    },
    "-3": {
      "code": "-3",
      "ordering": 200,
      "active": true,
      "createdAt": "2019-02-07 16:58:09",
      "cancelStatus": false,
      "name": "+/-+/*++-+-/*+-+/*"
    },
    "-4": {
      "code": "-4",
      "ordering": 210,
      "active": true,
      "createdAt": "2019-02-07 16:58:20",
      "cancelStatus": false,
      "name": "+/-+/*++-+-/*+-+/*"
    },
    "fdsfsdfsdfsd": {
      "code": "fdsfsdfsdfsd",
      "ordering": 220,
      "active": true,
      "createdAt": "2019-02-07 16:58:20",
      "cancelStatus": false,
      "name": "&nbsp;"
    },
    "-5": {
      "code": "-5",
      "ordering": 230,
      "active": true,
      "createdAt": "2019-02-07 16:58:20",
      "cancelStatus": false,
      "name": "{}\"{>:<>?"
    },
    "nbsp": {
      "code": "nbsp",
      "ordering": 240,
      "active": false,
      "createdAt": "2019-02-07 17:16:55",
      "cancelStatus": false,
      "name": "&nbsp;"
    },
    "yvayva": {
      "code": "yvayva",
      "ordering": 250,
      "active": false,
      "createdAt": "2019-02-07 17:16:55",
      "cancelStatus": false,
      "name": "ываыва"
    },
    "-6": {
      "code": "-6",
      "ordering": 260,
      "active": false,
      "createdAt": "2019-02-21 10:50:17",
      "cancelStatus": false,
      "name": "+/-+/*++-+-/*+-+/*"
    },
    "dict-productstatuses-1571134214": {
      "code": "dict-productstatuses-1571134214",
      "ordering": 280,
      "active": false,
      "createdAt": "2019-10-15 13:10:15",
      "cancelStatus": false,
      "name": "Bbbdict-productstatuses-1571134214"
    },
    "dict-productstatuses-1571134105": {
      "code": "dict-productstatuses-1571134105",
      "ordering": 290,
      "active": false,
      "createdAt": "2019-10-15 13:08:25",
      "cancelStatus": false,
      "name": "Bbbdict-productstatuses-1571134105"
    },
    "dict-productstatuses-1571124920": {
      "code": "dict-productstatuses-1571124920",
      "ordering": 300,
      "active": false,
      "createdAt": "2019-10-15 10:35:20",
      "cancelStatus": false,
      "name": "Bbbdict-productstatuses-1571124920"
    },
    "dict-productstatuses-1571124862": {
      "code": "dict-productstatuses-1571124862",
      "ordering": 310,
      "active": false,
      "createdAt": "2019-10-15 10:34:22",
      "cancelStatus": false,
      "name": "Bbbdict-productstatuses-1571124862"
    },
    "dict-productstatuses-1571123853": {
      "code": "dict-productstatuses-1571123853",
      "ordering": 320,
      "active": false,
      "createdAt": "2019-10-15 10:17:34",
      "cancelStatus": false,
      "name": "Bbbdict-productstatuses-1571123853"
    },
    "dict-productstatuses-1571123796": {
      "code": "dict-productstatuses-1571123796",
      "ordering": 330,
      "active": false,
      "createdAt": "2019-10-15 10:16:36",
      "cancelStatus": false,
      "name": "Bbbdict-productstatuses-1571123796"
    },
    "dict-productstatuses-1575878965": {
      "code": "dict-productstatuses-1575878965",
      "ordering": 340,
      "active": false,
      "createdAt": "2019-12-09 11:09:25",
      "cancelStatus": false,
      "name": "Bbbdict-productstatuses-1575878965"
    },
    "dict-productstatuses-1575878860": {
      "code": "dict-productstatuses-1575878860",
      "ordering": 350,
      "active": false,
      "createdAt": "2019-12-09 11:07:40",
      "cancelStatus": false,
      "name": "Bbbdict-productstatuses-1575878860"
    },
    "dict-productstatuses-1581413641": {
      "code": "dict-productstatuses-1581413641",
      "ordering": 990,
      "active": false,
      "createdAt": "2020-02-11 12:34:02",
      "cancelStatus": false,
      "name": "Bbbdict-productstatuses-1581413641"
    },
    "dict-productstatuses-1581413644": {
      "code": "dict-productstatuses-1581413644",
      "ordering": 990,
      "active": false,
      "createdAt": "2020-02-11 12:34:05",
      "cancelStatus": false,
      "name": "Bbbdict-productstatuses-1581413644"
    },
    "dict-productstatuses-1581413648": {
      "code": "dict-productstatuses-1581413648",
      "ordering": 990,
      "active": false,
      "createdAt": "2020-02-11 12:34:09",
      "cancelStatus": false,
      "name": "Bbbdict-productstatuses-1581413648"
    },
    "dict-productstatuses-1581413652": {
      "code": "dict-productstatuses-1581413652",
      "ordering": 990,
      "active": false,
      "createdAt": "2020-02-11 12:34:14",
      "cancelStatus": false,
      "name": "Bbbdict-productstatuses-1581413652"
    },
    "dict-productstatuses-1581413770": {
      "code": "dict-productstatuses-1581413770",
      "ordering": 990,
      "active": false,
      "createdAt": "2020-02-11 12:36:11",
      "cancelStatus": false,
      "name": "Bbbdict-productstatuses-1581413770"
    },
    "dict-productstatuses-1581413776": {
      "code": "dict-productstatuses-1581413776",
      "ordering": 990,
      "active": false,
      "createdAt": "2020-02-11 12:36:17",
      "cancelStatus": false,
      "name": "Bbbdict-productstatuses-1581413776"
    },
    "dict-productstatuses-1581413780": {
      "code": "dict-productstatuses-1581413780",
      "ordering": 990,
      "active": false,
      "createdAt": "2020-02-11 12:36:21",
      "cancelStatus": false,
      "name": "Bbbdict-productstatuses-1581413780"
    },
    "dict-productstatuses-1581413788": {
      "code": "dict-productstatuses-1581413788",
      "ordering": 990,
      "active": false,
      "createdAt": "2020-02-11 12:36:29",
      "cancelStatus": false,
      "name": "Bbbdict-productstatuses-1581413788"
    }
  }
}
EOF;

        $mock = static::createApiMockBuilder('reference/product-statuses');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->productStatuses();

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testProductStatusesEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity           = new OrderProductStatus();
        $entity->name     = "Test Product Status";
        $entity->active   = true;
        $entity->ordering = 980;

        $request = new ProductStatusesEditRequest($entity);

        $mock = static::createApiMockBuilder('reference/product-statuses/nbsp/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->productStatusesEdit('nbsp', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testSites(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "sites": {
    "test": {
      "id": 100,
      "name": "test",
      "url": "https://example.com",
      "code": "test",
      "description": "description",
      "defaultForCrm": false,
      "ymlUrl": "https://example.com",
      "loadFromYml": true,
      "catalogUpdatedAt": "2021-02-24 12:30:46",
      "catalogLoadingAt": "2021-03-02 15:09:24",
      "contragent": {
        "contragentType": "enterpreneur",
        "legalName": "ИП Бороздина Татьяна Александровна",
        "INN": "773719480254",
        "code": "test",
        "countryIso": "RU"
      },
      "countryIso": "RU",
      "currency": "RUB",
      "senderEmail": "test@example.com",
      "senderName": "test",
      "catalogId": "catalog",
      "isCatalogMainSite": true,
      "ordering": 989,
      "isDemo": false
    },
    "test-ru": {
      "id": 101,
      "catalogId": "81",
      "isCatalogMainSite": true,
      "isDemo": true,
      "name": "Test Shop",
      "description": "description",
      "url": "https://example.com/2",
      "code": "test-ru",
      "defaultForCrm": false,
      "ymlUrl": "https://example.com/2/test_catalog.xml",
      "loadFromYml": false,
      "catalogUpdatedAt": "2021-02-24 12:30:46",
      "catalogLoadingAt": "2021-04-07 15:14:53",
      "ordering": 990,
      "contragent": {
        "contragentType": "enterpreneur",
        "legalName": "ИП Бороздина Татьяна Александровна",
        "INN": "773719480154",
        "code": "Vog_Gallery",
        "countryIso": "RU"
      },
      "countryIso": "RU",
      "currency": "RUB"
    }
  }
}
EOF;

        $mock = static::createApiMockBuilder('reference/sites');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->sites();

        self::assertModelsCallback($json, $response, static function (array $expected, array $actual) {
            foreach ($actual['sites'] as $key => $site) {
                if ($site['contragent'] === $expected['sites'][$key]['contragent']['code']) {
                    $actual['sites'][$key]['contragent'] = $expected['sites'][$key]['contragent'];
                }
            }

            self::assertEquals($expected, $actual);
        });
    }

    public function testSitesEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity                   = new Site();
        $entity->name             = "Test Shop";
        $entity->url              = "https://example.com";
        $entity->defaultForCrm    = false;
        $entity->ymlUrl           = "https://example.com/test_catalog.xml";
        $entity->loadFromYml      = true;
        $entity->countryIso       = CountryCodeIso3166::RUSSIAN_FEDERATION;
        $entity->contragentCode   = 'test-contragent';

        $request = new SitesEditRequest($entity);

        $mock = static::createApiMockBuilder('reference/sites/test-site/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->sitesEdit('test-site', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testStatusGroups(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "statusGroups": {
    "new": {
      "name": "Новый",
      "code": "new",
      "active": true,
      "ordering": 10,
      "process": false,
      "statuses": [
        "new",
        "dict-statuses-1571123798",
        "dict-statuses-1571123854",
        "dict-statuses-1571124864",
        "dict-statuses-1571124921",
        "dict-statuses-1571134107",
        "dict-statuses-1571134216",
        "dict-statuses-1575878862",
        "dict-statuses-1575878966",
        "dict-statuses-1581413644",
        "dict-statuses-1581413648",
        "dict-statuses-1581413651",
        "dict-statuses-1581413656",
        "dict-statuses-1581413772",
        "dict-statuses-1581413778",
        "dict-statuses-1581413782",
        "dict-statuses-1581413790"
      ]
    },
    "approval": {
      "name": "Согласование",
      "code": "approval",
      "active": true,
      "ordering": 20,
      "process": true,
      "statuses": [
        "availability-confirmed",
        "offer-analog",
        "client-confirmed",
        "prepayed"
      ]
    },
    "assembling": {
      "name": "Комплектация",
      "code": "assembling",
      "active": true,
      "ordering": 30,
      "process": true,
      "statuses": [
        "send-to-assembling",
        "assembling",
        "assembling-complete",
        "test"
      ]
    },
    "delivery": {
      "name": "Доставка",
      "code": "delivery",
      "active": true,
      "ordering": 40,
      "process": true,
      "statuses": [
        "send-to-delivery",
        "delivering",
        "redirect",
        "delivered"
      ]
    },
    "complete": {
      "name": "Выполнен",
      "code": "complete",
      "active": true,
      "ordering": 50,
      "process": false,
      "statuses": [
        "complete",
        "3"
      ]
    },
    "cancel": {
      "name": "Отменен",
      "code": "cancel",
      "active": true,
      "ordering": 60,
      "process": false,
      "statuses": [
        "no-call",
        "no-product",
        "already-buyed",
        "delyvery-did-not-suit",
        "prices-did-not-suit",
        "cancel-other",
        "testdubl",
        "abandoned-cart"
      ]
    }
  }
}
EOF;

        $mock = static::createApiMockBuilder('reference/status-groups');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->statusGroups();

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testStatuses(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "statuses": {
    "3": {
      "name": "3",
      "code": "3",
      "active": true,
      "ordering": 990,
      "group": "complete"
    },
    "new": {
      "name": "Новый",
      "code": "new",
      "active": true,
      "ordering": 10,
      "group": "new"
    },
    "complete": {
      "name": "Выполнен",
      "code": "complete",
      "active": true,
      "ordering": 10,
      "group": "complete"
    },
    "availability-confirmed": {
      "name": "Наличие подтверждено",
      "code": "availability-confirmed",
      "active": true,
      "ordering": 10,
      "group": "approval"
    },
    "offer-analog": {
      "name": "Предложить замену",
      "code": "offer-analog",
      "active": true,
      "ordering": 20,
      "group": "approval"
    },
    "client-confirmed": {
      "name": "Согласовано с клиентом",
      "code": "client-confirmed",
      "active": true,
      "ordering": 30,
      "group": "approval"
    },
    "prepayed": {
      "name": "Предоплата поступила",
      "code": "prepayed",
      "active": true,
      "ordering": 40,
      "group": "approval"
    },
    "send-to-assembling": {
      "name": "Передано в комплектацию",
      "code": "send-to-assembling",
      "active": true,
      "ordering": 10,
      "group": "assembling"
    },
    "assembling": {
      "name": "Комплектуется",
      "code": "assembling",
      "active": true,
      "ordering": 20,
      "group": "assembling"
    },
    "assembling-complete": {
      "name": "Укомплектован",
      "code": "assembling-complete",
      "active": true,
      "ordering": 30,
      "group": "assembling"
    },
    "send-to-delivery": {
      "name": "Передан в доставку",
      "code": "send-to-delivery",
      "active": true,
      "ordering": 10,
      "group": "delivery"
    },
    "delivering": {
      "name": "Доставляется",
      "code": "delivering",
      "active": true,
      "ordering": 20,
      "group": "delivery"
    },
    "redirect": {
      "name": "Доставка перенесена",
      "code": "redirect",
      "active": true,
      "ordering": 30,
      "group": "delivery"
    },
    "no-call": {
      "name": "Недозвон",
      "code": "no-call",
      "active": true,
      "ordering": 10,
      "group": "cancel"
    },
    "no-product": {
      "name": "Нет в наличии",
      "code": "no-product",
      "active": true,
      "ordering": 20,
      "group": "cancel"
    },
    "already-buyed": {
      "name": "Купил в другом месте",
      "code": "already-buyed",
      "active": true,
      "ordering": 30,
      "group": "cancel"
    },
    "delyvery-did-not-suit": {
      "name": "Не устроила доставка",
      "code": "delyvery-did-not-suit",
      "active": true,
      "ordering": 40,
      "group": "cancel"
    },
    "prices-did-not-suit": {
      "name": "Не устроила цена",
      "code": "prices-did-not-suit",
      "active": true,
      "ordering": 50,
      "group": "cancel"
    },
    "cancel-other": {
      "name": "Отменен",
      "code": "cancel-other",
      "active": true,
      "ordering": 60,
      "group": "cancel"
    },
    "testdubl": {
      "name": "testDubl",
      "code": "testdubl",
      "active": true,
      "ordering": 990,
      "group": "cancel"
    },
    "test": {
      "name": "test",
      "code": "test",
      "active": true,
      "ordering": 990,
      "group": "assembling"
    },
    "dict-statuses-1571123798": {
      "name": "Bbbdict-statuses-1571123798",
      "code": "dict-statuses-1571123798",
      "active": false,
      "ordering": 990,
      "group": "new"
    },
    "dict-statuses-1571123854": {
      "name": "Bbbdict-statuses-1571123854",
      "code": "dict-statuses-1571123854",
      "active": false,
      "ordering": 990,
      "group": "new"
    },
    "dict-statuses-1571124864": {
      "name": "Bbbdict-statuses-1571124864",
      "code": "dict-statuses-1571124864",
      "active": false,
      "ordering": 990,
      "group": "new"
    },
    "dict-statuses-1571124921": {
      "name": "Bbbdict-statuses-1571124921",
      "code": "dict-statuses-1571124921",
      "active": false,
      "ordering": 990,
      "group": "new"
    },
    "dict-statuses-1571134107": {
      "name": "Bbbdict-statuses-1571134107",
      "code": "dict-statuses-1571134107",
      "active": false,
      "ordering": 990,
      "group": "new"
    },
    "dict-statuses-1571134216": {
      "name": "Bbbdict-statuses-1571134216",
      "code": "dict-statuses-1571134216",
      "active": false,
      "ordering": 990,
      "group": "new"
    },
    "abandoned-cart": {
      "name": "Брошенная корзина",
      "code": "abandoned-cart",
      "active": true,
      "ordering": 990,
      "group": "cancel"
    },
    "dict-statuses-1575878862": {
      "name": "Bbbdict-statuses-1575878862",
      "code": "dict-statuses-1575878862",
      "active": false,
      "ordering": 990,
      "group": "new"
    },
    "dict-statuses-1575878966": {
      "name": "Bbbdict-statuses-1575878966",
      "code": "dict-statuses-1575878966",
      "active": false,
      "ordering": 990,
      "group": "new"
    },
    "dict-statuses-1581413644": {
      "name": "Bbbdict-statuses-1581413644",
      "code": "dict-statuses-1581413644",
      "active": false,
      "ordering": 990,
      "group": "new"
    },
    "dict-statuses-1581413648": {
      "name": "Bbbdict-statuses-1581413648",
      "code": "dict-statuses-1581413648",
      "active": false,
      "ordering": 990,
      "group": "new"
    },
    "dict-statuses-1581413651": {
      "name": "Bbbdict-statuses-1581413651",
      "code": "dict-statuses-1581413651",
      "active": false,
      "ordering": 990,
      "group": "new"
    },
    "dict-statuses-1581413656": {
      "name": "Bbbdict-statuses-1581413656",
      "code": "dict-statuses-1581413656",
      "active": false,
      "ordering": 990,
      "group": "new"
    },
    "dict-statuses-1581413772": {
      "name": "Bbbdict-statuses-1581413772",
      "code": "dict-statuses-1581413772",
      "active": false,
      "ordering": 990,
      "group": "new"
    },
    "dict-statuses-1581413778": {
      "name": "Bbbdict-statuses-1581413778",
      "code": "dict-statuses-1581413778",
      "active": false,
      "ordering": 990,
      "group": "new"
    },
    "dict-statuses-1581413782": {
      "name": "Bbbdict-statuses-1581413782",
      "code": "dict-statuses-1581413782",
      "active": false,
      "ordering": 990,
      "group": "new"
    },
    "dict-statuses-1581413790": {
      "name": "Bbbdict-statuses-1581413790",
      "code": "dict-statuses-1581413790",
      "active": false,
      "ordering": 990,
      "group": "new"
    },
    "delivered": {
      "name": "Доставлен",
      "code": "delivered",
      "active": true,
      "ordering": 40,
      "group": "delivery"
    }
  }
}
EOF;

        $mock = static::createApiMockBuilder('reference/statuses');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->statuses();

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testStatusesEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity           = new Status();
        $entity->name     = "Test Status";
        $entity->active   = true;
        $entity->ordering = 990;
        $entity->group    = "assembling";

        $request = new StatusesEditRequest($entity);

        $mock = static::createApiMockBuilder('reference/statuses/test/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->statusesEdit('test', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testStores(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "stores": [
    {
      "description": "Москва",
      "type": "store-type-warehouse",
      "inventoryType": "integer",
      "address": {
        "countryIso": "RU",
        "region": "Москва город",
        "regionId": 55,
        "city": "Москва",
        "cityId": 4995,
        "cityType": "г.",
        "street": "Ивовая",
        "streetId": 1777155,
        "streetType": "ул.",
        "building": "23",
        "text": "ул. Ивовая, д. 23",
        "coordinates": {
          "latitude": 51.660781,
          "longitude": 39.200269
        }
      },
      "active": true,
      "phone": {

      },
      "code": "main12",
      "workTime": {
        "mo": [

        ],
        "tu": [

        ],
        "we": [

        ],
        "th": [

        ],
        "fr": [

        ],
        "sa": [

        ],
        "su": [

        ]
      },
      "name": "Основной"
    },
    {
      "description": "Санкт-Петербург",
      "type": "store-type-warehouse",
      "inventoryType": "available",
      "address": {
        "index": "196626",
        "countryIso": "RU",
        "region": "Санкт-Петербург город",
        "regionId": 48,
        "city": "Санкт-Петербург",
        "cityId": 5000,
        "cityType": "г.",
        "streetType": "ул."
      },
      "active": true,
      "phone": {

      },
      "code": "food",
      "workTime": {
        "mo": [

        ],
        "tu": [

        ],
        "we": [

        ],
        "th": [

        ],
        "fr": [

        ],
        "sa": [

        ],
        "su": [

        ]
      },
      "name": "Продуктовый"
    },
    {
      "description": "Тверь",
      "email": "luchshe@pozvonit.chemukogotozanimat",
      "type": "store-type-warehouse",
      "inventoryType": "integer",
      "address": {
        "index": "170040",
        "countryIso": "RU",
        "region": "Тверская область",
        "regionId": 74,
        "city": "Тверь",
        "cityId": 4833,
        "cityType": "г.",
        "street": "ул. 2-я Переволоцкая",
        "building": "50",
        "flat": "13",
        "house": "5",
        "housing": "1",
        "text": "ул. 2-я Переволоцкая, д. 50, стр. 5, корп. 1, кв./офис 13"
      },
      "active": true,
      "phone": {
        "number": "88005553535"
      },
      "code": "tver",
      "workTime": {
        "mo": [

        ],
        "tu": [

        ],
        "we": [

        ],
        "th": [

        ],
        "fr": [

        ],
        "sa": [

        ],
        "su": [

        ]
      },
      "name": "Тверь"
    },
    {
      "type": "store-type-warehouse",
      "inventoryType": "integer",
      "address": {
        "countryIso": "RU",
        "region": "Адыгея Республика",
        "regionId": 26,
        "city": "Майкоп",
        "cityId": 1,
        "cityType": "г.",
        "street": "Ленина",
        "streetId": 961854,
        "streetType": "ул.",
        "building": "50",
        "flat": "13",
        "house": "1",
        "housing": "2",
        "text": "ул. Ленина, д. 50, стр. 1, корп. 2, кв./офис 13"
      },
      "active": true,
      "phone": {

      },
      "code": "antisklad",
      "workTime": {
        "mo": [

        ],
        "tu": [

        ],
        "we": [

        ],
        "th": [

        ],
        "fr": [

        ],
        "sa": [

        ],
        "su": [

        ]
      },
      "name": "АнтиСклад"
    },
    {
      "type": "store-type-warehouse",
      "inventoryType": "integer",
      "address": {
        "countryIso": "RU",
        "region": "Москва город",
        "regionId": 55,
        "city": "Москва",
        "cityId": 4995,
        "cityType": "г.",
        "street": "Кастанаевская",
        "streetId": 1780121,
        "streetType": "ул.",
        "building": "48",
        "flat": "30",
        "metro": "Славянский бульвар/Пионерская",
        "text": "ул. Кастанаевская, д. 48, кв./офис 30, метро Славянский бульвар/Пионерская"
      },
      "active": true,
      "phone": {

      },
      "code": "castan",
      "workTime": {
        "mo": [

        ],
        "tu": [

        ],
        "we": [

        ],
        "th": [

        ],
        "fr": [

        ],
        "sa": [

        ],
        "su": [

        ]
      },
      "name": "Кастанаевская"
    },
    {
      "inventoryType": "integer",
      "address": {

      },
      "active": true,
      "code": "test-store-v4",
      "workTime": {
        "mo": [

        ],
        "tu": [

        ],
        "we": [

        ],
        "th": [

        ],
        "fr": [

        ],
        "sa": [

        ],
        "su": [

        ]
      },
      "name": "Test Store V4"
    },
    {
      "type": "store-type-warehouse",
      "inventoryType": "integer",
      "address": {
        "countryIso": "RU"
      },
      "active": true,
      "phone": {

      },
      "code": "test-store-v5",
      "workTime": {
        "mo": [

        ],
        "tu": [

        ],
        "we": [

        ],
        "th": [

        ],
        "fr": [

        ],
        "sa": [

        ],
        "su": [

        ]
      },
      "name": "Test Store V5"
    },
    {
      "type": "store-type-warehouse",
      "inventoryType": "integer",
      "address": {
        "countryIso": "UA",
        "region": "Винницкая область",
        "regionId": 104,
        "city": "Винница",
        "cityId": 16054,
        "cityType": "г.",
        "street": "Аграрна",
        "streetId": 1814071,
        "streetType": "ул.",
        "building": "12",
        "text": "ул. Аграрна, д. 12"
      },
      "active": true,
      "phone": {

      },
      "code": "weiser_store",
      "workTime": {
        "mo": [

        ],
        "tu": [

        ],
        "we": [

        ],
        "th": [

        ],
        "fr": [

        ],
        "sa": [

        ],
        "su": [

        ]
      },
      "name": "weiser store"
    },
    {
      "type": "store-type-warehouse",
      "inventoryType": "integer",
      "address": {
        "countryIso": "RU",
        "region": "Ростовская область",
        "regionId": 73,
        "city": "Ростов-на-Дону",
        "cityId": 4298,
        "cityType": "г."
      },
      "active": true,
      "phone": {

      },
      "code": "rostov",
      "workTime": {
        "mo": [

        ],
        "tu": [

        ],
        "we": [

        ],
        "th": [

        ],
        "fr": [

        ],
        "sa": [

        ],
        "su": [

        ]
      },
      "name": "Ростов"
    },
    {
      "description": "Калининград",
      "type": "store-type-warehouse",
      "inventoryType": "integer",
      "address": {
        "countryIso": "RU",
        "region": "Калининградская область",
        "regionId": 30,
        "city": "Калининград",
        "cityId": 2798,
        "cityType": "г.",
        "street": "9 Апреля",
        "streetId": 1341484,
        "streetType": "ул.",
        "building": "5",
        "text": "ул. 9 Апреля, д. 5"
      },
      "active": true,
      "phone": {

      },
      "code": "klgd",
      "workTime": {
        "mo": [

        ],
        "tu": [

        ],
        "we": [

        ],
        "th": [

        ],
        "fr": [

        ],
        "sa": [

        ],
        "su": [

        ]
      },
      "name": "Калининград"
    }
  ]
}
EOF;

        $mock = static::createApiMockBuilder('reference/stores');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->stores();

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testStoresEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity                      = new Store();
        $entity->address             = new StoreAddress();
        $entity->address->countryIso = "UA";
        $entity->address->region     = "Винницкая область";
        $entity->address->regionId   = 104;
        $entity->address->city       = "Винница";
        $entity->address->cityId     = 16054;
        $entity->address->cityType   = "г.";
        $entity->address->street     = "Аграрна";
        $entity->address->streetId   = 1814071;
        $entity->address->streetType = "ул.";
        $entity->address->building   = "12";
        $entity->address->text       = "ул. Аграрна, д. 12";
        $entity->workTime            = new SerializedStoreWeekOpeningHours(
            [new StoreWorkTime('9:00', '18:00', '12:00', '13:00')],
            [new StoreWorkTime('9:00', '18:00', '12:00', '13:00')],
            [new StoreWorkTime('9:00', '18:00', '12:00', '13:00')],
            [new StoreWorkTime('9:00', '18:00', '12:00', '13:00')],
            [new StoreWorkTime('9:00', '18:00', '12:00', '13:00')]
        );
        $entity->type                = StoreType::STORE_TYPE_WAREHOUSE;
        $entity->inventoryType       = StoreInventoryType::INTEGER;
        $entity->active              = true;
        $entity->phone               = new StorePhone('88005553123');
        $entity->name                = 'Test Store';

        $request = new StoresEditRequest($entity);

        $mock = static::createApiMockBuilder('reference/stores/test/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->storesEdit('test', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testUnits(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "units": {
    "6": {
      "code": "6",
      "name": "Метр",
      "sym": "м",
      "default": false,
      "active": true
    },
    "112": {
      "code": "112",
      "name": "Литр",
      "sym": "л.",
      "default": false,
      "active": true
    },
    "163": {
      "code": "163",
      "name": "Грамм",
      "sym": "г",
      "default": false,
      "active": true
    },
    "166": {
      "code": "166",
      "name": "Килограмм",
      "sym": "кг",
      "default": false,
      "active": true
    },
    "366": {
      "code": "366",
      "name": "Год",
      "sym": "г; ле",
      "default": false,
      "active": true
    },
    "796": {
      "code": "796",
      "name": "Штука",
      "sym": "шт",
      "default": false,
      "active": true
    },
    "797": {
      "code": "797",
      "name": "пог. м",
      "sym": "пог. ",
      "default": false,
      "active": true
    },
    "798": {
      "code": "798",
      "name": "упак 10 шт",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "799": {
      "code": "799",
      "name": "упак",
      "sym": "упак",
      "default": false,
      "active": true
    },
    "800": {
      "code": "800",
      "name": "шт (2 пог. м)",
      "sym": "шт (2",
      "default": false,
      "active": true
    },
    "801": {
      "code": "801",
      "name": "компл",
      "sym": "компл",
      "default": false,
      "active": true
    },
    "802": {
      "code": "802",
      "name": "пар",
      "sym": "пар",
      "default": false,
      "active": true
    },
    "803": {
      "code": "803",
      "name": "бухта (10 рул)",
      "sym": "бухта",
      "default": false,
      "active": true
    },
    "805": {
      "code": "805",
      "name": "кор.",
      "sym": "кор.",
      "default": false,
      "active": true
    },
    "806": {
      "code": "806",
      "name": "набор",
      "sym": "набор",
      "default": false,
      "active": true
    },
    "808": {
      "code": "808",
      "name": "шт (2 м)",
      "sym": "шт (2",
      "default": false,
      "active": true
    },
    "809": {
      "code": "809",
      "name": "м2",
      "sym": "м2",
      "default": false,
      "active": true
    },
    "810": {
      "code": "810",
      "name": "упак (10 шт)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "811": {
      "code": "811",
      "name": "бухта (15 м)",
      "sym": "бухта",
      "default": false,
      "active": true
    },
    "812": {
      "code": "812",
      "name": "бухта (25 м)",
      "sym": "бухта",
      "default": false,
      "active": true
    },
    "813": {
      "code": "813",
      "name": "бухта (20 м)",
      "sym": "бухта",
      "default": false,
      "active": true
    },
    "815": {
      "code": "815",
      "name": "шт (4 пог. м)",
      "sym": "шт (4",
      "default": false,
      "active": true
    },
    "816": {
      "code": "816",
      "name": "бухта (100 м)",
      "sym": "бухта",
      "default": false,
      "active": true
    },
    "817": {
      "code": "817",
      "name": "бухта (50 м)",
      "sym": "бухта",
      "default": false,
      "active": true
    },
    "818": {
      "code": "818",
      "name": "упак (5 кг)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "819": {
      "code": "819",
      "name": "бухта (50 пог. м)",
      "sym": "бухта",
      "default": false,
      "active": true
    },
    "820": {
      "code": "820",
      "name": "бухта (30 пог. м)",
      "sym": "бухта",
      "default": false,
      "active": true
    },
    "821": {
      "code": "821",
      "name": "бухта (25 пог. м)",
      "sym": "бухта",
      "default": false,
      "active": true
    },
    "824": {
      "code": "824",
      "name": "упак (2 шт)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "825": {
      "code": "825",
      "name": "бухта",
      "sym": "бухта",
      "default": false,
      "active": true
    },
    "830": {
      "code": "830",
      "name": "пакет",
      "sym": "пакет",
      "default": false,
      "active": true
    },
    "831": {
      "code": "831",
      "name": "рул",
      "sym": "рул",
      "default": false,
      "active": true
    },
    "832": {
      "code": "832",
      "name": "банка",
      "sym": "банка",
      "default": false,
      "active": true
    },
    "833": {
      "code": "833",
      "name": "ведро",
      "sym": "ведро",
      "default": false,
      "active": true
    },
    "834": {
      "code": "834",
      "name": "бут",
      "sym": "бут",
      "default": false,
      "active": true
    },
    "838": {
      "code": "838",
      "name": "упак (5 шт)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "843": {
      "code": "843",
      "name": "м2 (3,99 шт)",
      "sym": "м2 (3",
      "default": false,
      "active": true
    },
    "844": {
      "code": "844",
      "name": "элем",
      "sym": "элем",
      "default": false,
      "active": true
    },
    "847": {
      "code": "847",
      "name": "м2 (4,048 шт)",
      "sym": "м2 (4",
      "default": false,
      "active": true
    },
    "849": {
      "code": "849",
      "name": "Звено (элемент)",
      "sym": "Звено",
      "default": false,
      "active": true
    },
    "850": {
      "code": "850",
      "name": "куль.",
      "sym": "куль.",
      "default": false,
      "active": true
    },
    "852": {
      "code": "852",
      "name": "меш.",
      "sym": "меш.",
      "default": false,
      "active": true
    },
    "853": {
      "code": "853",
      "name": "шт (3 пог. м)",
      "sym": "шт (3",
      "default": false,
      "active": true
    },
    "862": {
      "code": "862",
      "name": "шт (2,2 пог. м)",
      "sym": "шт (2",
      "default": false,
      "active": true
    },
    "865": {
      "code": "865",
      "name": "шт (0,016 м3)",
      "sym": "шт (0",
      "default": false,
      "active": true
    },
    "867": {
      "code": "867",
      "name": "бутыль",
      "sym": "бутыл",
      "default": false,
      "active": true
    },
    "869": {
      "code": "869",
      "name": "шт (75 м2)",
      "sym": "шт (7",
      "default": false,
      "active": true
    },
    "871": {
      "code": "871",
      "name": "упак (4 шт)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "873": {
      "code": "873",
      "name": "шт (2,5 пог. м)",
      "sym": "шт (2",
      "default": false,
      "active": true
    },
    "874": {
      "code": "874",
      "name": "рул (25 м2)",
      "sym": "рул (",
      "default": false,
      "active": true
    },
    "875": {
      "code": "875",
      "name": "м2 (4,055 шт)",
      "sym": "м2 (4",
      "default": false,
      "active": true
    },
    "876": {
      "code": "876",
      "name": "кан",
      "sym": "кан",
      "default": false,
      "active": true
    },
    "884": {
      "code": "884",
      "name": "упак (3 шт)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "886": {
      "code": "886",
      "name": "т.",
      "sym": "т.",
      "default": false,
      "active": true
    },
    "887": {
      "code": "887",
      "name": "м2 (4,047 шт)",
      "sym": "м2 (4",
      "default": false,
      "active": true
    },
    "891": {
      "code": "891",
      "name": "шт (2,06 пог. м)",
      "sym": "шт (2",
      "default": false,
      "active": true
    },
    "899": {
      "code": "899",
      "name": "шт (0,047 м3)",
      "sym": "шт (0",
      "default": false,
      "active": true
    },
    "900": {
      "code": "900",
      "name": "рул (0,2 шт)",
      "sym": "рул (",
      "default": false,
      "active": true
    },
    "910": {
      "code": "910",
      "name": "рул (75 м2)",
      "sym": "рул (",
      "default": false,
      "active": true
    },
    "912": {
      "code": "912",
      "name": "шт (0,045 м3)",
      "sym": "шт (0",
      "default": false,
      "active": true
    },
    "915": {
      "code": "915",
      "name": "упак (6 шт)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "1429": {
      "code": "1429",
      "name": "шт (1 упак)",
      "sym": "шт (1",
      "default": false,
      "active": true
    },
    "1712": {
      "code": "1712",
      "name": "упак (10 кг)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "1761": {
      "code": "1761",
      "name": "рул (40м2)",
      "sym": "рул (",
      "default": false,
      "active": true
    },
    "2203": {
      "code": "2203",
      "name": "пог. м (0,125 рул)",
      "sym": "пог. ",
      "default": false,
      "active": true
    },
    "2204": {
      "code": "2204",
      "name": "пачка",
      "sym": "пачка",
      "default": false,
      "active": true
    },
    "2543": {
      "code": "2543",
      "name": "упак (5,25 м2)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "2544": {
      "code": "2544",
      "name": "упак (8,4 м2)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "2558": {
      "code": "2558",
      "name": "пог. м (2 м)",
      "sym": "пог. ",
      "default": false,
      "active": true
    },
    "2559": {
      "code": "2559",
      "name": "упак (6 м2)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "2568": {
      "code": "2568",
      "name": "л. (9 кг)",
      "sym": "л. (9",
      "default": false,
      "active": true
    },
    "2576": {
      "code": "2576",
      "name": "упак (0,84 м2)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "2579": {
      "code": "2579",
      "name": "рул (50 м2)",
      "sym": "рул (",
      "default": false,
      "active": true
    },
    "2582": {
      "code": "2582",
      "name": "упак (5 м2)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "2589": {
      "code": "2589",
      "name": "рул (16,5 м2)",
      "sym": "рул (",
      "default": false,
      "active": true
    },
    "2590": {
      "code": "2590",
      "name": "шт (0,107 м2)",
      "sym": "шт (0",
      "default": false,
      "active": true
    },
    "2591": {
      "code": "2591",
      "name": "пог. м (0,5 м2)",
      "sym": "пог. ",
      "default": false,
      "active": true
    },
    "2592": {
      "code": "2592",
      "name": "пог. м (0,35 м2)",
      "sym": "пог. ",
      "default": false,
      "active": true
    },
    "2593": {
      "code": "2593",
      "name": "пог. м (0,25 м2)",
      "sym": "пог. ",
      "default": false,
      "active": true
    },
    "2595": {
      "code": "2595",
      "name": "бухта (10 м)",
      "sym": "бухта",
      "default": false,
      "active": true
    },
    "2599": {
      "code": "2599",
      "name": "упак (0,76 пог. м)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "2600": {
      "code": "2600",
      "name": "упак (1,04 м2)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "2602": {
      "code": "2602",
      "name": "упак (1,2 пог. м)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "2604": {
      "code": "2604",
      "name": "упак (0,79 м2)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "2609": {
      "code": "2609",
      "name": "м (0,01 бухта)",
      "sym": "м (0,",
      "default": false,
      "active": true
    },
    "2610": {
      "code": "2610",
      "name": "упак (1,08 пог. м)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "2611": {
      "code": "2611",
      "name": "упак (0,98 пог. м)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "2612": {
      "code": "2612",
      "name": "упак (1,05 пог. м)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "2613": {
      "code": "2613",
      "name": "упак (1,5 пог. м)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "2629": {
      "code": "2629",
      "name": "упак (0,57 м2)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "2637": {
      "code": "2637",
      "name": "бухта(25 пог.м.)",
      "sym": "бухта",
      "default": false,
      "active": true
    },
    "2653": {
      "code": "2653",
      "name": "упак (5 м)",
      "sym": "упак ",
      "default": false,
      "active": true
    },
    "pc": {
      "code": "pc",
      "name": "Штука",
      "sym": "шт.",
      "default": true,
      "active": true
    },
    "kg": {
      "code": "kg",
      "name": "Килограмм",
      "sym": "кг",
      "default": false,
      "active": true
    },
    "m": {
      "code": "m",
      "name": "Метр",
      "sym": "м",
      "default": false,
      "active": true
    },
    "l": {
      "code": "l",
      "name": "Литр",
      "sym": "л.",
      "default": false,
      "active": true
    },
    "pkg": {
      "code": "pkg",
      "name": "Упаковка",
      "sym": "упак.",
      "default": false,
      "active": true
    },
    "pcs": {
      "code": "pcs",
      "name": "Штука",
      "sym": "шт.",
      "default": false,
      "active": true
    },
    "nuqbm77fiiEsB0aZNoiik2": {
      "code": "nuqbm77fiiEsB0aZNoiik2",
      "name": "azgalot",
      "sym": "azgal",
      "default": false,
      "active": true
    },
    "pce": {
      "code": "pce",
      "name": "Штука",
      "sym": "шт",
      "default": false,
      "active": true
    },
    "nmp": {
      "code": "nmp",
      "name": "Упаковка",
      "sym": "упак",
      "default": false,
      "active": true
    },
    "kgm": {
      "code": "kgm",
      "name": "Килограмм",
      "sym": "кг",
      "default": false,
      "active": true
    },
    "mtr": {
      "code": "mtr",
      "name": "Метр",
      "sym": "м",
      "default": false,
      "active": true
    },
    "nbb": {
      "code": "nbb",
      "name": "Бобина",
      "sym": "боб",
      "default": false,
      "active": true
    },
    "npl": {
      "code": "npl",
      "name": "Рулон",
      "sym": "рул",
      "default": false,
      "active": true
    },
    "azg": {
      "code": "azg",
      "name": "azgalot",
      "sym": "azg",
      "default": false,
      "active": true
    },
    "cen": {
      "code": "cen",
      "name": "100 штук",
      "sym": "100шт",
      "default": false,
      "active": true
    }
  }
}
EOF;

        $mock = static::createApiMockBuilder('reference/units');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->units();

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testUnitsEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $entity         = new SerializedUnit();
        $entity->name   = "Бобина";
        $entity->sym    = "боб";
        $entity->active = true;

        $request = new UnitsEditRequest($entity);

        $mock = static::createApiMockBuilder('reference/units/nbb/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->references->unitsEdit('nbb', $request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
