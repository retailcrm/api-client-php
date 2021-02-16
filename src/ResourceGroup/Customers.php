<?php

/**
 * PHP version 7.3
 *
 * @category Customers
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Customers\CustomersCombineRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersCreateRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersFixExternalIdsRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersHistoryRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersRequest;
use RetailCrm\Api\Model\Response\Customers\CustomersHistoryResponse;
use RetailCrm\Api\Model\Response\Customers\CustomersResponse;
use RetailCrm\Api\Model\Response\IdResponse;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class Customers
 *
 * @category Customers
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Customers extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/customers" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Exception\ApiException;
     * use RetailCrm\Api\Factory\ClientFactory;
     * use RetailCrm\Api\Model\Filter\Customers\CustomerFilter;
     * use RetailCrm\Api\Model\Request\Customers\CustomersRequest;
     *
     * $client = ClientFactory::create('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                = new CustomersRequest();
     * $request->limit         = 20;
     * $request->page          = 1;
     * $request->filter        = new CustomerFilter();
     * $request->filter->sites = ['moysklad', 'aliexpress'];
     * $request->filter->name  = '89229112322';
     *
     * try {
     *     $response = $client->customers->list($request);
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
     *
     * echo 'Received customers: ' . print_r($response->customers, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Customers\CustomersRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Customers\CustomersResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     */
    public function list(?CustomersRequest $request = null): CustomersResponse
    {
        /** @var CustomersResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'customers',
            $request,
            CustomersResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers/combine" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\Customers\SerializedCustomerReference;
     * use RetailCrm\Api\Exception\ApiException;
     * use RetailCrm\Api\Factory\ClientFactory;
     * use RetailCrm\Api\Model\Request\Customers\CustomersCombineRequest;
     *
     * $client = ClientFactory::create('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                = new CustomersCombineRequest();
     * $request->customers     = [
     *     new SerializedCustomerReference(2),
     *     new SerializedCustomerReference(3),
     *     new SerializedCustomerReference(4),
     * ];
     * $request->resultCustomer = new SerializedCustomerReference(1);
     *
     * try {
     *     $response = $client->customers->combine($request);
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
     *
     * echo 'Result: ' . var_export($response->success, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Customers\CustomersCombineRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     */
    public function combine(CustomersCombineRequest $request): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customers/combine',
            $request,
            SuccessResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\Customers\ContragentType;
     * use RetailCrm\Api\Enum\Customers\CustomerType;
     * use RetailCrm\Api\Exception\ApiException;
     * use RetailCrm\Api\Factory\ClientFactory;
     * use RetailCrm\Api\Model\Entity\Customers\Customer;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerAddress;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerContragent;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerPhone;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerTag;
     * use RetailCrm\Api\Model\Request\Customers\CustomersCreateRequest;
     *
     * $client = ClientFactory::create('https://test.retailcrm.pro', 'apiKey');
     *
     * $customer                             = new Customer();
     * $customer->type                       = CustomerType::CUSTOMER;
     * $customer->externalId                 = 'test_10';
     * $customer->managerId                  = 24;
     * $customer->contragent                 = new CustomerContragent();
     * $customer->contragent->contragentType = ContragentType::INDIVIDUAL;
     * $customer->tags                       = [
     *     new CustomerTag('first'),
     *     new CustomerTag('second'),
     *     new CustomerTag('third'),
     * ];
     * $customer->customFields               = [
     *     'galkatrue' => true
     * ];
     * $customer->address                    = new CustomerAddress();
     * $customer->address->text              = '(719) 395-5645 13990 W County 270 Rd Nathrop, Colorado(CO), 81236';
     * $customer->firstName                  = 'Test';
     * $customer->lastName                   = 'User';
     * $customer->patronymic                 = 'Tester';
     * $customer->email                      = 'tester@example.com';
     * $customer->phones                     = [
     *     new CustomerPhone('(603) 292-6810')
     * ];
     *
     * $request           = new CustomersCreateRequest();
     * $request->site     = 'aliexpress';
     * $request->customer = $customer;
     *
     * try {
     *     $response = $client->customers->create($request);
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
     *
     * echo 'Created customer with ID: ' . $response->id;
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Customers\CustomersCreateRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\IdResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     */
    public function create(CustomersCreateRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customers/create',
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers/fix-external-ids" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Exception\ApiException;
     * use RetailCrm\Api\Factory\ClientFactory;
     * use RetailCrm\Api\Model\Entity\Customers\FixExternalRow;
     * use RetailCrm\Api\Model\Request\Customers\CustomersFixExternalIdsRequest;
     *
     * $client = ClientFactory::create('https://test.retailcrm.pro', 'apiKey');
     *
     * $request            = new CustomersFixExternalIdsRequest();
     * $request->customers = [
     *     new FixExternalRow(1, 'external_id_1'),
     *     new FixExternalRow(2, 'external_id_2'),
     *     new FixExternalRow(3, 'external_id_3'),
     * ];
     *
     * try {
     *     $response = $client->customers->fixExternalIds($request);
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
     * @param \RetailCrm\Api\Model\Request\Customers\CustomersFixExternalIdsRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     */
    public function fixExternalIds(CustomersFixExternalIdsRequest $request): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customers/fix-external-ids',
            $request,
            SuccessResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/customers/history" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Exception\ApiException;
     * use RetailCrm\Api\Factory\ClientFactory;
     * use RetailCrm\Api\Model\Filter\Customers\CustomerHistoryFilter;
     * use RetailCrm\Api\Model\Request\Customers\CustomersHistoryRequest;
     *
     * $client = ClientFactory::create('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                  = new CustomersHistoryRequest();
     * $request->limit           = 20;
     * $request->page            = 1;
     * $request->filter          = new CustomerHistoryFilter();
     * $request->filter->sinceId = 2691;
     *
     * try {
     *     $response = $client->customers->history($request);
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
     *
     * echo 'History: ' . print_r($response->history, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Customers\CustomersHistoryRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Customers\CustomersHistoryResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     */
    public function history(?CustomersHistoryRequest $request = null): CustomersHistoryResponse
    {
        /** @var CustomersHistoryResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'customers/history',
            $request,
            CustomersHistoryResponse::class
        );
        return $response;
    }
}
