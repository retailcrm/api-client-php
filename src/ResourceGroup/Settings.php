<?php

/**
 * PHP version 7.3
 *
 * @category Settings
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Response\Settings\SettingsResponse;

/**
 * Class Settings
 *
 * @category Settings
 * @package  RetailCrm\Api\ResourceGroup
 */
class Settings extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/settings" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->settings->get();
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
     * echo 'System settings: ' . print_r($response->settings, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\Settings\SettingsResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function get(): SettingsResponse
    {
        /** @var SettingsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'settings',
            null,
            SettingsResponse::class
        );
        return $response;
    }
}
