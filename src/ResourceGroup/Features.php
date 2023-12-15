<?php

/**
 * PHP version 7.3
 *
 * @category Features
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Api\FeaturesCheckRequest;
use RetailCrm\Api\Model\Response\Api\FeaturesCheckResponse;

/**
 * Class Features
 *
 * @category Features
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Features extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/features/check" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Request\Api\FeaturesCheckRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request = new FeaturesCheckRequest()
     * $request->features = ['communication.chatbot_feature_1', 'communication.chatbot_feature_2']
     *
     * try {
     *     $response = $client->api->featuresCheck($request);
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *        'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage
     *     );
     *
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *
     *      return;
     * }
     *
     * echo 'System features ' . print_r($response->features, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Api\FeaturesCheckRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Api\FeaturesCheckResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     */
    public function check(?FeaturesCheckRequest $request = null): FeaturesCheckResponse
    {
        /** @var FeaturesCheckResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'features/check',
            $request,
            FeaturesCheckResponse::class
        );

        return $response;
    }
}
