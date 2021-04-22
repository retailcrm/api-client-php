<?php

/**
 * PHP version 7.3
 *
 * @category Customers
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\BySiteRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersCombineRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersCreateRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersEditRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersFixExternalIdsRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersHistoryRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersNotesCreateRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersNotesRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersRequest;
use RetailCrm\Api\Model\Request\Customers\CustomersUploadRequest;
use RetailCrm\Api\Model\Response\Customers\CustomerNotesResponse;
use RetailCrm\Api\Model\Response\Customers\CustomersEditResponse;
use RetailCrm\Api\Model\Response\Customers\CustomersGetResponse;
use RetailCrm\Api\Model\Response\Customers\CustomersHistoryResponse;
use RetailCrm\Api\Model\Response\Customers\CustomersResponse;
use RetailCrm\Api\Model\Response\Customers\CustomersUploadResponse;
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
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Model\Filter\Customers\CustomerFilter;
     * use RetailCrm\Api\Model\Request\Customers\CustomersRequest;
     * use RetailCrm\Api\Enum\NumericBoolean;
     * use RetailCrm\Api\Enum\PaginationLimit;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                    = new CustomersRequest();
     * $request->limit             = PaginationLimit::LIMIT_20;
     * $request->page              = 1;
     * $request->filter            = new CustomerFilter();
     * $request->filter->sites     = ['moysklad', 'aliexpress'];
     * $request->filter->name      = '89229112322';
     * $request->filter->isContact = NumericBoolean::TRUE;
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
     *
     *     return;
     * }
     *
     * echo 'Received customers: ' . print_r($response->customers, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Customers\CustomersRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Customers\CustomersResponse
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
     * use RetailCrm\Api\Model\Entity\Customers\SerializedCustomerReference;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
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
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Model\Entity\Customers\Customer;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerAddress;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerContragent;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerPhone;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerTag;
     * use RetailCrm\Api\Model\Request\Customers\CustomersCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
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
     *
     *     return;
     * }
     *
     * echo 'Created customer with ID: ' . $response->id;
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Customers\CustomersCreateRequest $request
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
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Model\Entity\Customers\FixExternalRow;
     * use RetailCrm\Api\Model\Request\Customers\CustomersFixExternalIdsRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
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
     *
     *     return;
     * }
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Customers\CustomersFixExternalIdsRequest $request
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
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
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
     *
     *     return;
     * }
     *
     * echo 'History: ' . print_r($response->history, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Customers\CustomersHistoryRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Customers\CustomersHistoryResponse
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

    /**
     * Makes GET "/api/v5/customers/notes" request.
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
     *     $response = $client->customers->notes($request);
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
            'customers/notes',
            $request,
            CustomerNotesResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers/notes/create" request.
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
     *     $response = $client->customers->notesCreate($request);
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
            'customers/notes/create',
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers/notes/{id}/delete" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->customers->notesDelete(1);
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
            sprintf('customers/notes/%d/delete', $id),
            null,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers/upload" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\Customers\ContragentType;
     * use RetailCrm\Api\Enum\Customers\CustomerType;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Customers\Customer;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerAddress;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerContragent;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerPhone;
     * use RetailCrm\Api\Model\Entity\Customers\CustomerTag;
     * use RetailCrm\Api\Model\Entity\Customers\FixExternalRow;
     * use RetailCrm\Api\Model\Request\Customers\CustomersUploadRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
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
     * $request            = new CustomersUploadRequest();
     * $request->site      = 'aliexpress';
     * $request->customers = [$customer];
     *
     * try {
     *     $response = $client->customers->upload($request);
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
     * @param \RetailCrm\Api\Model\Request\Customers\CustomersUploadRequest $request
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
    public function upload(CustomersUploadRequest $request): CustomersUploadResponse
    {
        /** @var CustomersUploadResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customers/upload',
            $request,
            CustomersUploadResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/customers/{externalId}" request.
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
     * try {
     *     $response = $client->customers->get(
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
     * echo 'Customer: ' . print_r($response->customer);
     * ```
     *
     * @param string|int                                      $identifier
     * @param \RetailCrm\Api\Model\Request\BySiteRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Customers\CustomersGetResponse
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
    public function get($identifier, ?BySiteRequest $request = null): CustomersGetResponse
    {

        /** @var CustomersGetResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'customers/' . $identifier,
            $request,
            CustomersGetResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customers/{externalId}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\ByIdentifier;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Customers\Customer;
     * use RetailCrm\Api\Model\Request\Customers\CustomersEditRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                      = new CustomersEditRequest();
     * $request->customer            = new Customer();
     * $request->by                  = ByIdentifier::ID;
     * $request->site                = 'aliexpress';
     * $request->customer->firstName = 'Test';
     *
     * try {
     *     $response = $client->customers->edit(4770, $request);
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
     * echo 'Edited customer: ' . $response->id;
     * ```
     *
     * @param int|string                                                  $identifier
     * @param \RetailCrm\Api\Model\Request\Customers\CustomersEditRequest $request
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
    public function edit($identifier, CustomersEditRequest $request): CustomersEditResponse
    {
        /** @var CustomersEditResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customers/' . $identifier . '/edit',
            $request,
            CustomersEditResponse::class
        );
        return $response;
    }
}
