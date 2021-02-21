<?php

/**
 * PHP version 7.3
 *
 * @category IntegrationTests
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use Http\Client\Curl\Client;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Model\Entity\Integration\IntegrationModule;
use RetailCrm\Api\Model\Entity\Integration\Integrations;
use RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration;
use RetailCrm\Api\Model\Request\Integration\IntegrationModulesEditRequest;
use RetailCrm\Test\TestClientFactory;

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

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('integration-modules/mg-fbmessenger')
                ->setMethod(RequestMethod::GET),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->integration->get('mg-fbmessenger');

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testEdit()
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

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('integration-modules/mg-fbmessenger/edit')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm(new IntegrationModulesEditRequest($module))),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);

        try {
            $response = $client->integration->edit('mg-fbmessenger', $module);
        } catch (ApiExceptionInterface $exception) {
            print_r($exception->getErrorResponse());
        }

        self::assertModelEqualsToResponse($json, $response);
    }
}
