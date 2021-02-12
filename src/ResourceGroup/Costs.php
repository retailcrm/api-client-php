<?php

/**
 * PHP version 7.3
 *
 * @category Costs
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Costs\CostsRequest;
use RetailCrm\Api\Model\Response\Costs\CostsResponse;

/**
 * Class Costs
 *
 * @category Costs
 * @package  RetailCrm\Api\ResourceGroup
 */
class Costs extends AbstractApiResourceGroup
{
    /**
     * Makes "/api/v5/costs" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\ClientFactory;
     * use RetailCrm\Api\Model\Filter\Costs\CostsFilter;
     * use RetailCrm\Api\Model\Request\Costs\CostsRequest;
     * use RetailCrm\Api\Exception\ApiException;
     *
     * $client = ClientFactory::create('https://test.retailcrm.pro', 'apiKey');
     *
     * $costsRequest = new CostsRequest();
     * $costsRequest->limit = 20;
     * $costsRequest->page = 1;
     * $costsRequest->filter = new CostsFilter();
     * $costsRequest->filter->sites = ['moysklad', 'aliexpress'];
     * $costsRequest->filter->maxSumm = 20;
     *
     * try {
     *     $costs = $client->costs->costs($costsRequest);
     * } catch (ApiException $exception) {
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
     *
     * echo 'Received costs: ' . print_r($costs, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Costs\CostsRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Costs\CostsResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\ApiException
     * @throws \RetailCrm\Api\Exception\HandlerException
     */
    public function costs(?CostsRequest $request = null): CostsResponse
    {
        /** @var CostsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'costs',
            $request,
            CostsResponse::class
        );
        return $response;
    }
}
