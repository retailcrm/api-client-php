<?php

/**
 * PHP version 7.3
 *
 * @category IntegrationTests
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\Currency;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryConfiguration;
use RetailCrm\Api\Model\Entity\Integration\Delivery\Plate;
use RetailCrm\Api\Model\Entity\Integration\Delivery\Status;
use RetailCrm\Api\Model\Entity\Integration\IntegrationModule;
use RetailCrm\Api\Model\Entity\Integration\Integrations;
use RetailCrm\Api\Model\Entity\Integration\Payment\Actions;
use RetailCrm\Api\Model\Entity\Integration\Payment\PaymentConfiguration;
use RetailCrm\Api\Model\Entity\Integration\Payment\Shop;
use RetailCrm\Api\Model\Entity\Integration\Requires;
use RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration;
use RetailCrm\Api\Model\Request\Integration\IntegrationModulesEditRequest;
use RetailCrm\Api\Model\Request\Integration\IntegrationModuleUpdateScopesRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class IntegrationTests
 *
 * @category IntegrationTests
 * @package  RetailCrm\Tests\ResourceGroup
 */
class IntegrationTests extends AbstractApiResourceGroupTestCase
{
    public function testGet(): void
    {
        $json = <<<'EOF'
{
    "success": true,
    "integrationModule": {
        "code": "mg-fbmessenger",
        "integrationCode": "mg-fbmessenger",
        "active": true,
        "freeze": false,
        "name": "Facebook Messenger",
        "logo": "https://mg-tp-fbm-s1.retailcrm.pro/static/fbmessenger_logo.svg",
        "native": false,
        "baseUrl": "https://mg-tp-fbm-s1.retailcrm.pro/",
        "actions": {
            "activity": "/actions/activity"
        },
        "availableCountries": [],
        "accountUrl": "https://mg-tp-fbm-s1.retailcrm.pro/settings/clientId",
        "integrations": {
            "mgTransport": {
                "token": "token",
                "isActive": true,
                "webhookUrl": "https://mg-tp-fbm-s1.retailcrm.pro/webhook/"
            }
        }
    }
}
EOF;

        $mock = static::createApiMockBuilder('integration-modules/mg-fbmessenger');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->integration->get('mg-fbmessenger');

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testMgTransportEdit(): void
    {
        $json = <<<'EOF'
{
    "success": true,
    "info": {
        "mgTransport": {
            "endpointUrl": "https://mg-s1.retailcrm.pro",
            "token": "token"
        }
    }
}
EOF;
        $module = new IntegrationModule();
        $module->integrations = new Integrations();
        $module->integrations->mgTransport = new TransportConfiguration();

        $module->code = 'mg-fbmessenger';
        $module->clientId = 'e029f3dd545147c6428d12d9524f33b806e9310947430773c6c82719e4c41904';
        $module->integrationCode = 'mg-fbmessenger';
        $module->name = 'Facebook Messenger';
        $module->logo = 'https://mg-tp-fbm-s1.retailcrm.pro/static/fbmessenger_logo.svg';
        $module->baseUrl = 'https://mg-tp-fbm-s1.retailcrm.pro/';
        $module->actions = ['activity' => '/actions/activity'];
        $module->accountUrl = 'https://mg-tp-fbm-s1.retailcrm.pro/settings/clientId';
        $module->integrations->mgTransport->webhookUrl = 'https://mg-tp-fbm-s1.retailcrm.pro/webhook/';

        $request = new IntegrationModulesEditRequest($module);

        $mock = static::createApiMockBuilder('integration-modules/mg-fbmessenger/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->integration->edit('mg-fbmessenger', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testPaymentEdit(): void
    {
        $json = <<<'EOF'
{
    "success": true,
    "info": []
}
EOF;
        $module = new IntegrationModule();
        $module->integrations = new Integrations();
        $module->integrations->payment = new PaymentConfiguration();
        $module->integrations->payment->actions = new Actions();

        $module->code                                    = 'test-payment-integration';
        $module->clientId                                = 'test-payment-integration';
        $module->integrationCode                         = 'test-payment-integration';
        $module->name                                    = 'Test Payment Integration';
        $module->baseUrl                                 = 'https://example.com';
        $module->accountUrl                              = 'https://example.com';
        $module->integrations->payment->shops            = [
            new Shop('moysklad', 'МойСклад', true),
            new Shop('aliexpress', 'AliExpress', true),
        ];
        $module->integrations->payment->currencies       = [Currency::USD, Currency::EUR, Currency::RUB];
        $module->integrations->payment->invoiceTypes     = ['link'];
        $module->integrations->payment->actions->create  = 'payment/create';
        $module->integrations->payment->actions->approve = 'payment/approve';
        $module->integrations->payment->actions->cancel  = 'payment/cancel';
        $module->integrations->payment->actions->refund  = 'payment/refund';

        $request = new IntegrationModulesEditRequest($module);

        $mock = static::createApiMockBuilder('integration-modules/test-payment-integration/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->integration->edit('test-payment-integration', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testDeliveryEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "info": {
    "billingInfo": {
      "price": 2,
      "priceWithDiscount": 1,
      "currency": {
        "name": "Рубль",
        "shortName": "руб.",
        "code": "RUB"
      },
      "billingType": "fixed"
    },
    "deliveryType": {
      "id": 1,
      "code": "ozon-integration-10"
    }
  }
}
EOF;

        $module = new IntegrationModule();
        $module->clientId = '34fa3509-92f3-4faf-87d5-2efbd88cb4cb';
        $module->name = 'Ozon seller';
        $module->code = 'ozon-integration-10';
        $module->integrationCode = 'ozon-integration';
        $module->logo = 'https://localhost/images/logo.svg';
        $module->accountUrl = 'https://localhost/login';
        $module->baseUrl = 'https://localhost';
        $module->active = true;
        $module->actions = [
            'activity' => '/api/callback/v1/activity'
        ];
        $module->availableCountries = ['RU'];

        $deliveryConfiguration = new DeliveryConfiguration();
        $deliveryConfiguration->actions = [
            'get' => '/api/callback/v1/get',
            'print' => '/api/callback/v1/print'
        ];
        $deliveryConfiguration->payerType = ['receiver'];
        $deliveryConfiguration->platePrintLimit = 20;
        $deliveryConfiguration->rateDeliveryCost = true;
        $deliveryConfiguration->allowPackages = false;
        $deliveryConfiguration->codAvailable = false;
        $deliveryConfiguration->plateList = $this->createPlateList();
        $deliveryConfiguration->statusList = $this->createStatusList();

        $integrations = new Integrations();
        $integrations->delivery = $deliveryConfiguration;
        $module->integrations = $integrations;

        $request = new IntegrationModulesEditRequest($module);

        $mock = static::createApiMockBuilder('integration-modules/ozon-integration-10/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->integration->edit('ozon-integration-10', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    /**
     * @return Plate[]
     */
    private function createPlateList(): array
    {
        $plateList = [];
        $plates = [
            [
                'type' => 'order',
                'code' => 'sticker',
                'label' => 'Наклейка OZON',
            ],
            [
                'type' => 'order',
                'code' => 'act',
                'label' => 'Акт OZON',
            ],
        ];

        foreach ($plates as $plate) {
            $plateModel = new Plate();
            $plateModel->code = $plate['code'];
            $plateModel->type = $plate['type'];
            $plateModel->label = $plate['label'];

            $plateList[] = $plateModel;
        }

        return $plateList;
    }

    /**
     * @return Status[]
     */
    private function createStatusList(): array
    {
        $statusList = [];
        $statuses = [
            [
                'code' => 'status_01',
                'name' => 'Status 01',
                'isEditable' => true,
                'isError' => true,
                'isPreprocessing' => true,
            ],
            [
                'code' => 'status_02',
                'name' => 'Status 02',
                'isEditable' => false,
                'isError' => false,
                'isPreprocessing' => false,
            ],
        ];

        foreach ($statuses as $item) {
            $status = new Status();
            $status->code = $item['code'];
            $status->name = $item['name'];
            $status->isEditable = $item['isEditable'];
            $status->isError = $item['isError'];
            $status->isPreprocessing = $item['isPreprocessing'];
            $statusList[] = $status;
        }

        return $statusList;
    }

    public function testUpdateScopes(): void
    {
        $json = <<<'EOF'
{
    "success": true,
    "apiKey": "SOMEAPIKEY"
}
EOF;
        $requires = new Requires();
        $requires->scopes = [
            'integration_read',
            'integration_write',
        ];
        $request = new IntegrationModuleUpdateScopesRequest($requires);

        $mock = static::createApiMockBuilder('integration-modules/test-integration/update-scopes');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->integration->updateScopes('test-integration', $request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
