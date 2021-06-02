<?php

/**
 * PHP version 7.3
 *
 * @category Costs
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Costs\CostsCreateRequest;
use RetailCrm\Api\Model\Request\Costs\CostsDeleteRequest;
use RetailCrm\Api\Model\Request\Costs\CostsEditRequest;
use RetailCrm\Api\Model\Request\Costs\CostsRequest;
use RetailCrm\Api\Model\Request\Costs\CostsUploadRequest;
use RetailCrm\Api\Model\Response\Costs\CostsDeleteResponse;
use RetailCrm\Api\Model\Response\Costs\CostsGetResponse;
use RetailCrm\Api\Model\Response\Costs\CostsResponse;
use RetailCrm\Api\Model\Response\Costs\CostsUploadResponse;
use RetailCrm\Api\Model\Response\IdResponse;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class Costs
 *
 * @category Costs
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Costs extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/costs" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\PaginationLimit;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Model\Filter\Costs\CostFilter;
     * use RetailCrm\Api\Model\Request\Costs\CostsRequest;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $costsRequest                  = new CostsRequest();
     * $costsRequest->limit           = PaginationLimit::LIMIT_20;
     * $costsRequest->page            = 1;
     * $costsRequest->filter          = new CostFilter();
     * $costsRequest->filter->sites   = ['moysklad', 'aliexpress'];
     * $costsRequest->filter->maxSumm = 20;
     *
     * try {
     *     $response = $client->costs->list($costsRequest);
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
     * echo 'Received costs: ' . print_r($response->costs, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Costs\CostsRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Costs\CostsResponse
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
    public function list(?CostsRequest $request = null): CostsResponse
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

    /**
     * Makes POST "/api/v5/costs/delete" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Model\Request\Costs\CostsDeleteRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request      = new CostsDeleteRequest();
     * $request->ids = [2, 3, 5, 8, 13, 21];
     *
     * try {
     *     $response = $client->costs->costsDelete($request);
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
     * printf('Deleted %d costs.', $response->count);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Costs\CostsDeleteRequest $request
     *
     * @return CostsDeleteResponse
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
    public function costsDelete(CostsDeleteRequest $request): CostsDeleteResponse
    {
        /** @var CostsDeleteResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'costs/delete',
            $request,
            CostsDeleteResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/costs/upload" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Model\Entity\Costs\Cost;
     * use RetailCrm\Api\Model\Request\Costs\CostsUploadRequest;
     * use RetailCrm\Api\Model\Entity\Source;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                = new CostsUploadRequest();
     * $cost                   = new Cost();
     * $cost->sites            = ['aliexpress'];
     * $cost->source           = new Source();
     * $cost->source->source   = 'source';
     * $cost->source->campaign = 'campaign';
     * $cost->source->content  = 'content';
     * $cost->source->keyword  = 'keyword';
     * $cost->source->medium   = 'medium';
     * $cost->comment          = 'comment';
     * $cost->costItem         = 'products-purchase-price';
     * $cost->createdAt        = new DateTime();
     * $cost->dateFrom         = new DateTime();
     * $cost->dateTo           = new DateTime();
     * $cost->summ             = 100.10;
     * $request->costs         = [$cost];
     *
     * try {
     *     $response = $client->costs->costsUpload($request);
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
     * echo 'Uploaded costs with IDs: ' . implode(', ', $response->uploadedCosts);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Costs\CostsUploadRequest $request
     *
     * @return CostsUploadResponse
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
    public function costsUpload(CostsUploadRequest $request): CostsUploadResponse
    {
        /** @var CostsUploadResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'costs/upload',
            $request,
            CostsUploadResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/costs/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Model\Entity\Costs\Cost;
     * use RetailCrm\Api\Model\Request\Costs\CostsCreateRequest;
     * use RetailCrm\Api\Model\Entity\Source;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                         = new CostsCreateRequest();
     * $request->site                   = 'aliexpress';
     * $request->cost                   = new Cost();
     * $request->cost->sites            = ['aliexpress'];
     * $request->cost->source           = new Source();
     * $request->cost->source->source   = 'source';
     * $request->cost->source->campaign = 'campaign';
     * $request->cost->source->content  = 'content';
     * $request->cost->source->keyword  = 'keyword';
     * $request->cost->source->medium   = 'medium';
     * $request->cost->comment          = 'comment';
     * $request->cost->costItem         = 'products-purchase-price';
     * $request->cost->createdAt        = new DateTime();
     * $request->cost->dateFrom         = new DateTime();
     * $request->cost->dateTo           = new DateTime();
     * $request->cost->summ             = 100.10;
     *
     * try {
     *     $response = $client->costs->create($request);
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
     * echo 'Created cost with ID: ' . $response->id;
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Costs\CostsCreateRequest $request
     *
     * @return IdResponse
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
    public function create(CostsCreateRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'costs/create',
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/costs/{id}" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->costs->get(1);
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
     * echo 'Received cost: ' . print_r($response->cost, true);
     * ```
     *
     * @param int $id
     *
     * @return \RetailCrm\Api\Model\Response\Costs\CostsGetResponse
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
    public function get(int $id): CostsGetResponse
    {
        /** @var CostsGetResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            sprintf('costs/%d', $id),
            null,
            CostsGetResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/costs/{id}/delete" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->costs->delete(1);
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
     * echo 'Status: ' . var_export($response->success, true);
     * ```
     *
     * @param int $id
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
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
    public function delete(int $id): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            sprintf('costs/%d/delete', $id),
            null,
            SuccessResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/costs/{id}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Model\Entity\Costs\Cost;
     * use RetailCrm\Api\Model\Request\Costs\CostsEditRequest;
     * use RetailCrm\Api\Model\Entity\Source;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                         = new CostsEditRequest();
     * $request->site                   = 'aliexpress';
     * $request->cost                   = new Cost();
     * $request->cost->sites            = ['aliexpress'];
     * $request->cost->source           = new Source();
     * $request->cost->source->source   = 'source';
     * $request->cost->source->campaign = 'campaign';
     * $request->cost->source->content  = 'content';
     * $request->cost->source->keyword  = 'keyword';
     * $request->cost->source->medium   = 'medium';
     * $request->cost->comment          = 'comment';
     * $request->cost->costItem         = 'products-purchase-price';
     * $request->cost->createdAt        = new DateTime();
     * $request->cost->dateFrom         = new DateTime();
     * $request->cost->dateTo           = new DateTime();
     * $request->cost->summ             = 100.10;
     *
     * try {
     *     $response = $client->costs->edit(1, $request);
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
     * echo 'Edited cost with ID: ' . $response->id;
     * ```
     *
     * @param int                                                 $id
     * @param \RetailCrm\Api\Model\Request\Costs\CostsEditRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\IdResponse
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
    public function edit(int $id, CostsEditRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            sprintf('costs/%d/edit', $id),
            $request,
            IdResponse::class
        );
        return $response;
    }
}
