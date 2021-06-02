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
use RetailCrm\Api\Model\Entity\Integration\IntegrationModule;
use RetailCrm\Api\Model\Entity\Integration\Integrations;
use RetailCrm\Api\Model\Entity\Integration\Payment\Actions;
use RetailCrm\Api\Model\Entity\Integration\Payment\PaymentConfiguration;
use RetailCrm\Api\Model\Entity\Integration\Payment\Shop;
use RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration;
use RetailCrm\Api\Model\Request\Integration\IntegrationModulesEditRequest;
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
}
