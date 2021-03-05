<?php

/**
 * PHP version 7.3
 *
 * @category Statistics
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Response\SuccessResponse;
use RetailCrm\Api\Model\Response\Verification\SmsVerificationStatusResponse;

/**
 * Class Statistics
 *
 * @category Statistics
 * @package  RetailCrm\Api\ResourceGroup
 */
class Statistics extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/statistic/update" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->statistics->update();
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
     * }
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function update(): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'statistic/update',
            null,
            SuccessResponse::class
        );
        return $response;
    }
}
