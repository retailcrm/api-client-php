<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporate
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\BySiteRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersCombineRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersHistoryRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersNotesCreateRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersNotesRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateAddressesCreateRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateAddressesEditRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateAddressesRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCompaniesCreateRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCompaniesEditRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCompaniesRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateContactsCreateRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateContactsEditRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateContactsRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCreateRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateEditRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateFixExternalIdsRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateRequest;
use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateUploadRequest;
use RetailCrm\Api\Model\Response\Customers\CustomerNotesResponse;
use RetailCrm\Api\Model\Response\Customers\CustomersEditResponse;
use RetailCrm\Api\Model\Response\Customers\CustomersUploadResponse;
use RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateAddressesResponse;
use RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateCompaniesResponse;
use RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateContactsResponse;
use RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateGetResponse;
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
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class CustomersCorporate extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/customers-corporate" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\CustomersCorporate\CustomerCorporateFilter;
     * use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateRequest;
     * use RetailCrm\Api\Enum\PaginationLimit;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                        = new CustomersCorporateRequest();
     * $request->filter                = new CustomerCorporateFilter();
     * $request->limit                 = PaginationLimit::LIMIT_20;
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
     *
     *     return;
     * }
     *
     * echo 'Corporate customers: ' . print_r($response->customersCorporate);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateResponse
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
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Request\Customers\CustomersCombineRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
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
     *
     *     return;
     * }
     *
     * echo 'Result: ' . var_export($response->success, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Customers\CustomersCombineRequest $request
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
     * use RetailCrm\Api\Factory\SimpleClientFactory;
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
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
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
     *
     *     return;
     * }
     *
     * echo 'Created new corporate customer with id: ' . $response->id;
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCreateRequest $request
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
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Model\Entity\Customers\FixExternalRow;
     * use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateFixExternalIdsRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
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
     *
     *     return;
     * }
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateFixExternalIdsRequest $request
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
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Customers\CustomerHistoryFilter;
     * use RetailCrm\Api\Model\Request\Customers\CustomersHistoryRequest;
     * use RetailCrm\Api\Enum\PaginationLimit;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                  = new CustomersHistoryRequest();
     * $request->limit           = PaginationLimit::LIMIT_20;
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
     *
     *     return;
     * }
     *
     * echo 'History: ' . $response->history;
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Customers\CustomersHistoryRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateHistoryResponse
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

    /**
     * Makes GET "/api/v5/customers-corporate/notes" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Customers\CustomerNoteFilter;
     * use RetailCrm\Api\Model\Request\Customers\CustomersNotesRequest;
     * use RetailCrm\Api\Enum\PaginationLimit;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                              = new CustomersNotesRequest();
     * $request->limit                       = PaginationLimit::LIMIT_20;
     * $request->page                        = 1;
     * $request->filter                      = new CustomerNoteFilter();
     * $request->filter->customerExternalIds = ['10'];
     * $request->filter->createdAtFrom       = '2019-08-06 12:00:00';
     * $request->filter->text                = 'note';
     *
     * try {
     *     $response = $client->customersCorporate->notes($request);
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
     * echo 'Notes: ' . print_r($response->notes, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Customers\CustomersNotesRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Customers\CustomerNotesResponse
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
    public function notes(?CustomersNotesRequest $request = null): CustomerNotesResponse
    {
        /** @var CustomerNotesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'customers-corporate/notes',
            $request,
            CustomerNotesResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers-corporate/notes/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Customers\Customer;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerNote;
     * use RetailCrm\Api\Model\Request\Customers\CustomersNotesCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                             = new CustomersNotesCreateRequest();
     * $request->site                       = 'moysklad';
     * $request->note                       = new CustomerNote();
     * $request->note->customer             = new Customer();
     * $request->note->customer->externalId = '10';
     * $request->note->managerId            = 21;
     * $request->note->text                 = 'Text';
     *
     * try {
     *     $response = $client->customersCorporate->notesCreate($request);
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
     * echo 'Created note with id: ' . $response->id;
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Customers\CustomersNotesCreateRequest $request
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
    public function notesCreate(CustomersNotesCreateRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customers-corporate/notes/create',
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers-corporate/notes/{id}/delete" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->customersCorporate->notesDelete(1);
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
    public function notesDelete(int $id): SuccessResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            sprintf('customers-corporate/notes/%d/delete', $id),
            null,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers-corporate/upload" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\Customers\CustomerType;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerAddress;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerTag;
     * use RetailCrm\Api\Model\Entity\Customers\FixExternalRow;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\Company;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer;
     * use RetailCrm\Api\Model\Entity\Source;
     * use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateUploadRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
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
     * $request                     = new CustomersCorporateUploadRequest();
     * $request->site               = 'aliexpress';
     * $request->customersCorporate = [$customer];
     *
     * try {
     *     $response = $client->customersCorporate->upload($request);
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
     * echo 'Uploaded customers: ' . implode(', ', array_map(static function (FixExternalRow $row) {
     *         return $row->id;
     * }, $response->uploadedCustomers));
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateUploadRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Customers\CustomersUploadResponse
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
    public function upload(CustomersCorporateUploadRequest $request): CustomersUploadResponse
    {
        /** @var CustomersUploadResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customers-corporate/upload',
            $request,
            CustomersUploadResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/customers-corporate/{externalId}" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\ByIdentifier;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Request\BySiteRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request       = new CustomersGetRequest();
     * $request->site = 'bb_demo';
     * $request->by   = ByIdentifier::ID;
     *
     * try {
     *     $response = $client->customersCorporate->get(
     *         4770,
     *         new BySiteRequest(ByIdentifier::ID, 'bb_demo')
     *     );
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
     * echo 'Corporate customer: ' . print_r($response->customerCorporate);
     * ```
     *
     * @param string|int                                      $identifier
     * @param \RetailCrm\Api\Model\Request\BySiteRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateGetResponse
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
    public function get($identifier, ?BySiteRequest $request = null): CustomersCorporateGetResponse
    {
        /** @var CustomersCorporateGetResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'customers-corporate/' . $identifier,
            $request,
            CustomersCorporateGetResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/customers-corporate/{externalId}/addresses" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\ByIdentifier;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\CustomersCorporate\CustomerAddressFilter;
     * use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateAddressesRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request              = new CustomersCorporateAddressesRequest();
     * $request->filter      = new CustomerAddressFilter();
     * $request->site        = 'aliexpress';
     * $request->by          = ByIdentifier::ID;
     * $request->filter->ids = [1];
     *
     * try {
     *     $response = $client->customersCorporate->addresses(1, $request);
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
     * echo 'Addresses: ' . print_r($response->addresses, true);
     * ```
     *
     * @param string|int                                                                              $identifier
     * @param \RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateAddressesRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateAddressesResponse
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
    public function addresses(
        $identifier,
        ?CustomersCorporateAddressesRequest $request = null
    ): CustomersCorporateAddressesResponse {
        /** @var CustomersCorporateAddressesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'customers-corporate/' . $identifier . '/addresses',
            $request,
            CustomersCorporateAddressesResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers-corporate/{externalId}/addresses/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\ByIdentifier;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerAddress;
     * use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateAddressesCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                = new CustomersCorporateAddressesCreateRequest();
     * $request->address       = new CustomerAddress();
     * $request->site          = 'aliexpress';
     * $request->by            = ByIdentifier::ID;
     * $request->address->text = '(719) 395-5645 13990 W County 270 Rd Nathrop, Colorado(CO), 81236';
     *
     * try {
     *     $response = $client->customersCorporate->addressesCreate(1, $request);
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
     * echo 'Address ID: ' . $response->id;
     * ```
     *
     * @param int|string                                                                               $identifier
     * @param \RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateAddressesCreateRequest $request
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
    public function addressesCreate($identifier, CustomersCorporateAddressesCreateRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customers-corporate/' . $identifier . '/addresses/create',
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers-corporate/{externalId}/addresses/{entityExternalId}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\ByIdentifier;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerAddress;
     * use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateAddressesEditRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                = new CustomersCorporateAddressesEditRequest();
     * $request->address       = new CustomerAddress();
     * $request->site          = 'aliexpress';
     * $request->by            = ByIdentifier::ID;
     * $request->entityBy      = ByIdentifier::ID;
     * $request->address->text = '(719) 395-5645 13990 W County 270 Rd Nathrop, Colorado(CO), 81236';
     *
     * try {
     *     $response = $client->customersCorporate->addressesEdit(1, 1, $request);
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
     * echo 'Edited address ID: ' . $response->id;
     * ```
     *
     * @param int|string                                                                             $customerId
     * @param int|string                                                                             $addressId
     * @param \RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateAddressesEditRequest $request
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
    public function addressesEdit($customerId, $addressId, CustomersCorporateAddressesEditRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customers-corporate/' . $customerId . '/addresses/' . $addressId . '/edit',
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/customers-corporate/{externalId}/companies" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\ByIdentifier;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\CustomersCorporate\CompanyFilter;
     * use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCompaniesRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request              = new CustomersCorporateCompaniesRequest();
     * $request->filter      = new CompanyFilter();
     * $request->site        = 'aliexpress';
     * $request->by          = ByIdentifier::ID;
     * $request->filter->ids = [772];
     *
     * try {
     *     $response = $client->customersCorporate->companies(1, $request);
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
     * echo 'Companies: ' . print_r($response->companies, true);
     * ```
     *
     * @param string|int                                                                              $identifier
     * @param \RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCompaniesRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateCompaniesResponse
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
    public function companies(
        $identifier,
        ?CustomersCorporateCompaniesRequest $request = null
    ): CustomersCorporateCompaniesResponse {
        /** @var CustomersCorporateCompaniesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'customers-corporate/' . $identifier . '/companies',
            $request,
            CustomersCorporateCompaniesResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers-corporate/{externalId}/companies/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\ByIdentifier;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerAddress;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\Company;
     * use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCompaniesCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                       = new CustomersCorporateCompaniesCreateRequest();
     * $request->company              = new Company();
     * $request->company->address     = new CustomerAddress();
     * $request->site                 = 'aliexpress';
     * $request->by                   = ByIdentifier::ID;
     * $request->company->name        = 'Test Company';
     * $request->company->brand       = 'Test Brand';
     * $request->company->address->id = 1;
     * $request->company->isMain      = true;
     *
     * try {
     *     $response = $client->customersCorporate->companiesCreate(1, $request);
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
     * echo 'Created company ID: ' . $response->id;
     * ```
     *
     * @param int|string                                                                               $identifier
     * @param \RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCompaniesCreateRequest $request
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
    public function companiesCreate($identifier, CustomersCorporateCompaniesCreateRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customers-corporate/' . $identifier . '/companies/create',
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers-corporate/{externalId}/companies/{entityExternalId}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\ByIdentifier;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerAddress;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\Company;
     * use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCompaniesEditRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                       = new CustomersCorporateCompaniesEditRequest();
     * $request->company              = new Company();
     * $request->company->address     = new CustomerAddress();
     * $request->site                 = 'aliexpress';
     * $request->by                   = ByIdentifier::ID;
     * $request->entityBy             = ByIdentifier::ID;
     * $request->company->name        = 'Test Company';
     * $request->company->brand       = 'Test Brand';
     * $request->company->address->id = 3559;
     * $request->company->isMain      = true;
     *
     * try {
     *     $response = $client->customersCorporate->companiesEdit(1, 1, $request);
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
     * echo 'Edited company ID: ' . $response->id;
     * ```
     *
     * @param int|string                                                                             $customerId
     * @param int|string                                                                             $companyId
     * @param \RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateCompaniesEditRequest $request
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
    public function companiesEdit($customerId, $companyId, CustomersCorporateCompaniesEditRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customers-corporate/' . $customerId . '/companies/' . $companyId . '/edit',
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/customers-corporate/{externalId}/contacts" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\ByIdentifier;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\CustomersCorporate\CustomerContactFilter;
     * use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateContactsRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                             = new CustomersCorporateContactsRequest();
     * $request->filter                     = new CustomerContactFilter();
     * $request->site                       = 'aliexpress';
     * $request->by                         = ByIdentifier::ID;
     * $request->filter->contactIds         = [5039];
     * $request->filter->contactExternalIds = ['test_10'];
     *
     * try {
     *     $response = $client->customersCorporate->contacts(1, $request);
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
     * echo 'Contacts: ' . print_r($response->contacts, true);
     * ```
     *
     * @param string|int                                                                             $identifier
     * @param \RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateContactsRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateContactsResponse
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
    public function contacts(
        $identifier,
        ?CustomersCorporateContactsRequest $request = null
    ): CustomersCorporateContactsResponse {
        /** @var CustomersCorporateContactsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'customers-corporate/' . $identifier . '/contacts',
            $request,
            CustomersCorporateContactsResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers-corporate/{externalId}/contacts/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\ByIdentifier;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer;
     * use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateContactsCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $company     = new CustomerContactCompany();
     * $company->id = 776;
     *
     * $request                        = new CustomersCorporateContactsCreateRequest();
     * $request->contact               = new CustomerContact();
     * $request->contact->customer     = new SerializedRelationAbstractCustomer();
     * $request->contact->customer->id = 4985;
     * $request->site                  = 'aliexpress';
     * $request->by                    = ByIdentifier::ID;
     * $request->contact->companies    = [$company];
     *
     * try {
     *     $response = $client->customersCorporate->contactsCreate(1, $request);
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
     * echo 'Created contact: ' . $response->id;
     * ```
     *
     * @param int|string                                                                              $identifier
     * @param \RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateContactsCreateRequest $request
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
    public function contactsCreate($identifier, CustomersCorporateContactsCreateRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customers-corporate/' . $identifier . '/contacts/create',
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers-corporate/{externalId}/contacts/{entityExternalId}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\ByIdentifier;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany;
     * use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateContactsEditRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $company = new CustomerContactCompany();
     * $company->id = 776;
     *
     * $request                     = new CustomersCorporateContactsEditRequest();
     * $request->contact            = new CustomerContact();
     * $request->site               = 'aliexpress';
     * $request->by                 = ByIdentifier::ID;
     * $request->entityBy           = ByIdentifier::ID;
     * $request->contact->companies = [$company];
     *
     * try {
     *     $response = $client->customersCorporate->contactsEdit(1, 1, $request);
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
     * echo 'Edited contact: ' . $response->id;
     * ```
     *
     * @param int|string                                                                            $customerId
     * @param int|string                                                                            $contactId
     * @param \RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateContactsEditRequest $request
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
    public function contactsEdit($customerId, $contactId, CustomersCorporateContactsEditRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customers-corporate/' . $customerId . '/contacts/' . $contactId . '/edit',
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers-corporate/{externalId}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\ByIdentifier;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate;
     * use RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateEditRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                              = new CustomersCorporateEditRequest();
     * $request->customerCorporate           = new CustomerCorporate();
     * $request->customerCorporate->nickName = 'Test Edited Customer';
     * $request->site                        = 'aliexpress';
     * $request->by                          = ByIdentifier::ID;
     *
     * try {
     *     $response = $client->customersCorporate->edit(1, $request);
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
     * echo 'Edited corporate customer with ID: ' . $response->id;
     * ```
     *
     * @param int|string                                                                    $identifier
     * @param \RetailCrm\Api\Model\Request\CustomersCorporate\CustomersCorporateEditRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Customers\CustomersEditResponse
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
    public function edit($identifier, CustomersCorporateEditRequest $request): CustomersEditResponse
    {
        /** @var CustomersEditResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customers-corporate/' . $identifier . '/edit',
            $request,
            CustomersEditResponse::class
        );
        return $response;
    }
}
