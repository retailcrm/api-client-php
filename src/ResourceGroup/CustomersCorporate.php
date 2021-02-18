<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporate
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Customers\CustomersCombineRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersHistoryRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCreateRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateFixExternalIdsRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateRequest;
use RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateHistoryResponse;
use RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateResponse;
use RetailCrm\Api\Model\Response\IdResponse;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CustomersCorporate
 *
 * @category CustomersCorporate
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class CustomersCorporate extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/customers-corporate" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\ClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\CustomersCorporate\CustomerCorporateFilter;
     * use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateRequest;
     *
     * $client = ClientFactory::create('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                        = new CustomersCorporateRequest();
     * $request->filter                = new CustomerCorporateFilter();
     * $request->limit                 = 20;
     * $request->page                  = 1;
     * $request->filter->sites         = ['moysklad', 'aliexpress'];
     * $request->filter->nickName      = ['Test'];
     * $request->filter->contragentInn = '5921305044';
     *
     * try {
     *     $response = $client->customersCorporate->list($request);
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
     * echo 'Corporate customers: ' . print_r($response->customersCorporate);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function list(?CustomersCorporateRequest $request = null): CustomersCorporateResponse
    {
        /** @var CustomersCorporateResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'customers-corporate',
            $request,
            CustomersCorporateResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers-corporate/combine" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Model\Entity\Customers\SerializedCustomerReference;
     * use RetailCrm\Api\Factory\ClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
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
     *     $response = $client->customersCorporate->combine($request);
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
            'customers-corporate/combine',
            $request,
            SuccessResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers-corporate/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Model\Entity\Source;
     * use RetailCrm\Api\Factory\ClientFactory;
     * use RetailCrm\Api\Enum\Customers\CustomerType;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerTag;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerAddress;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\Company;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer;
     * use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCreateRequest;
     *
     * $client = ClientFactory::create('https://test.retailcrm.pro', 'apiKey');
     *
     * $address       = new CustomerAddress();
     * $address->text = '(719) 395-5645 13990 W County 270 Rd Nathrop, Colorado(CO), 81236';
     *
     * $contact                       = new CustomerContact();
     * $contact->customer             = new SerializedRelationAbstractCustomer();
     * $contact->customer->externalId = 'test_10';
     * $contact->customer->site       = 'aliexpress';
     *
     * $company         = new Company();
     * $company->name   = 'Test Company';
     * $company->brand  = 'Test Brand';
     * $company->isMain = true;
     *
     * $customer                   = new CustomerCorporate();
     * $customer->source           = new Source();
     * $customer->addresses        = [$address];
     * $customer->customerContacts = [$contact];
     * $customer->companies        = [$company];
     * $customer->source->source   = 'chats';
     * $customer->type             = CustomerType::CORPORATE_CUSTOMER;
     * $customer->externalId       = 'test_20';
     * $customer->managerId        = 24;
     * $customer->nickName         = 'Test Corp Company';
     * $customer->tags             = [
     *     new CustomerTag('first'),
     *     new CustomerTag('second'),
     *     new CustomerTag('third'),
     * ];
     * $customer->customFields     = [
     *     'galkatrue' => true
     * ];
     *
     * $request                    = new CustomersCorporateCreateRequest();
     * $request->site              = 'aliexpress';
     * $request->customerCorporate = $customer;
     *
     * try {
     *     $response = $client->customersCorporate->create($request);
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
     * echo 'Created new corporate customer with id: ' . $response->id;
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCreateRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\IdResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function create(CustomersCorporateCreateRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customers-corporate/create',
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers-corporate/fix-external-ids" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\ClientFactory;
     * use RetailCrm\Api\Model\Entity\Customers\FixExternalRow;
     * use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateFixExternalIdsRequest;
     *
     * $client = ClientFactory::create('https://test.retailcrm.pro', 'apiKey');
     *
     * $request            = new CustomersCorporateFixExternalIdsRequest();
     * $request->customersCorporate = [
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
     * @param \RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateFixExternalIdsRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     */
    public function fixExternalIds(CustomersCorporateFixExternalIdsRequest $request): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customers-corporate/fix-external-ids',
            $request,
            SuccessResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/customers-corporate/history" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\ClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Customers\CustomerHistoryFilter;
     * use RetailCrm\Api\Model\Request\Customers\CustomersHistoryRequest;
     *
     * $client = ClientFactory::create('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                  = new CustomersHistoryRequest();
     * $request->limit           = 20;
     * $request->page            = 1;
     * $request->filter          = new CustomerHistoryFilter();
     * $request->filter->sinceId = 4241;
     *
     * try {
     *     $response = $client->customersCorporate->history($request);
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
     * echo 'History: ' . $response->history;
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Customers\CustomersHistoryRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateHistoryResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function history(?CustomersHistoryRequest $request = null): CustomersCorporateHistoryResponse
    {
        /** @var CustomersCorporateHistoryResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'customers-corporate/history',
            $request,
            CustomersCorporateHistoryResponse::class
        );
        return $response;
    }
}
