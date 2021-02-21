<?php

/**
 * PHP version 7.3
 *
 * @category Integration
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\Integration\IntegrationModule;
use RetailCrm\Api\Model\Request\Integration\IntegrationModulesEditRequest;
use RetailCrm\Api\Model\Response\Integration\IntegrationModulesEditResponse;
use RetailCrm\Api\Model\Response\Integration\IntegrationModulesGetResponse;

/**
 * Class Integration
 *
 * @category Integration
 * @package  RetailCrm\Api\ResourceGroup
 */
class Integration extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/integration-modules/{code}" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->integration->get('mg-fbmessenger');
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *
     *     return;
     * }
     *
     * echo 'FBMessenger Module: ' . print_r($response->integrationModule, true);
     * ```
     *
     * @param string $code
     *
     * @return \RetailCrm\Api\Model\Response\Integration\IntegrationModulesGetResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function get(string $code): IntegrationModulesGetResponse
    {
        /** @var IntegrationModulesGetResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'integration-modules/' . $code,
            null,
            IntegrationModulesGetResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/integration-modules/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Integration\IntegrationModule;
     * use RetailCrm\Api\Model\Entity\Integration\Integrations;
     * use RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $module = new IntegrationModule();
     * $module->integrations = new Integrations();
     * $module->integrations->mgTransport = new TransportConfiguration();
     *
     * $module->clientId = 'e029f3dd545147c6428d12d9524f33b806e9310947430773c6c82719e4c41904';
     * $module->code = 'mg-fbmessenger';
     * $module->integrationCode = 'mg-fbmessenger';
     * $module->name = 'Facebook Messenger';
     * $module->logo = 'https://mg-tp-fbm-s1.retailcrm.pro/static/fbmessenger_logo.svg';
     * $module->baseUrl = 'https://mg-tp-fbm-s1.retailcrm.pro/';
     * $module->actions = ['activity' => '/actions/activity'];
     * $module->accountUrl = 'https://mg-tp-fbm-s1.retailcrm.pro/settings/clientId';
     * $module->integrations->mgTransport->webhookUrl = 'https://mg-tp-fbm-s1.retailcrm.pro/webhook/';
     *
     * try {
     *     $response = $client->integration->edit('mg-fbmessenger', $module);
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *
     *     return;
     * }
     *
     * echo 'Info: ' . print_r($response->info, true);
     * ```
     *
     * @param string                                                    $code
     * @param \RetailCrm\Api\Model\Entity\Integration\IntegrationModule $integrationModule
     *
     * @return \RetailCrm\Api\Model\Response\Integration\IntegrationModulesEditResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function edit(string $code, IntegrationModule $integrationModule): IntegrationModulesEditResponse
    {
        /** @var IntegrationModulesEditResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'integration-modules/' . $code . '/edit',
            new IntegrationModulesEditRequest($integrationModule),
            IntegrationModulesEditResponse::class
        );
        return $response;
    }
}
