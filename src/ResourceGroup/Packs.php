<?php

/**
 * PHP version 7.3
 *
 * @category Packs
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Packs\PacksCreateRequest;
use RetailCrm\Api\Model\Request\Packs\PacksHistoryRequest;
use RetailCrm\Api\Model\Request\Packs\PacksRequest;
use RetailCrm\Api\Model\Response\IdResponse;
use RetailCrm\Api\Model\Response\Packs\PacksGetResponse;
use RetailCrm\Api\Model\Response\Packs\PacksHistoryResponse;
use RetailCrm\Api\Model\Response\Packs\PacksResponse;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class Packs
 *
 * @category Packs
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Packs extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/orders/packs" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Packs\OrderProductPackFilter;
     * use RetailCrm\Api\Model\Request\Packs\PacksRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request              = new PacksRequest();
     * $request->filter      = new OrderProductPackFilter();
     * $request->filter->ids = [143];
     *
     * try {
     *     $response = $client->packs->list($request);
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
     * echo 'Packs: ' . print_r($response->packs, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Packs\PacksRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Packs\PacksResponse
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
    public function list(?PacksRequest $request = null): PacksResponse
    {
        /** @var PacksResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'orders/packs',
            $request,
            PacksResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/orders/packs/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Packs\OrderProductPack;
     * use RetailCrm\Api\Model\Request\Packs\PacksCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $pack                     = new OrderProductPack();
     * $pack->itemId             = 11235;
     * $pack->invoiceNumber      = '1234567890';
     * $pack->deliveryNoteNumber = '1234567890';
     * $pack->shipmentDate       = (new DateTime())->add(new DateInterval('P1D'));
     * $pack->store              = 'main12';
     * $pack->quantity           = 1;
     * $pack->purchasePrice      = 100;
     *
     * try {
     *     $response = $client->packs->create(new PacksCreateRequest($pack));
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
     * echo 'Created pack with ID: ' . $response->id;
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Packs\PacksCreateRequest $request
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
    public function create(PacksCreateRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'orders/packs/create',
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/orders/packs/history" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Component\Transformer\DateTimeTransformer;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Packs\OrderProductPackHistoryFilterType;
     * use RetailCrm\Api\Model\Request\Packs\PacksHistoryRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request              = new PacksHistoryRequest();
     * $request->filter      = new OrderProductPackHistoryFilterType();
     * $request->filter->startDate = DateTimeTransformer::create('2020-01-01 00:00:00');
     *
     * try {
     *     $response = $client->packs->history($request);
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
     * echo 'Packs history: ' . print_r($response->history, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Packs\PacksHistoryRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Packs\PacksHistoryResponse
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
    public function history(?PacksHistoryRequest $request = null): PacksHistoryResponse
    {
        /** @var PacksHistoryResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'orders/packs/history',
            $request,
            PacksHistoryResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/orders/packs/{id}" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->packs->get(143);
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
     * echo 'Pack #143: ' . print_r($response->pack, true);
     * ```
     *
     * @param int $id
     *
     * @return \RetailCrm\Api\Model\Response\Packs\PacksGetResponse
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
    public function get(int $id): PacksGetResponse
    {
        /** @var PacksGetResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'orders/packs/' . $id,
            null,
            PacksGetResponse::class
        );
        return $response;
    }


    /**
     * Makes POST "/api/v5/orders/packs/{id}/delete" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->packs->delete(143);
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
            'orders/packs/' . $id . '/delete',
            null,
            SuccessResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/orders/packs/{id}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Packs\OrderProductPack;
     * use RetailCrm\Api\Model\Request\Packs\PacksCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $pack                     = new OrderProductPack();
     * $pack->shipmentDate       = (new DateTime())->add(new DateInterval('P1D'));
     *
     * try {
     *     $response = $client->packs->edit(143, new PacksCreateRequest($pack));
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
     * echo 'Edited pack #' . $response->id;
     * ```
     *
     * @param int                                                   $id
     * @param \RetailCrm\Api\Model\Request\Packs\PacksCreateRequest $request
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
    public function edit(int $id, PacksCreateRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'orders/packs/' . $id . '/edit',
            $request,
            IdResponse::class
        );
        return $response;
    }
}
