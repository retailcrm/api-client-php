<?php

/**
 * PHP version 7.3
 *
 * @category CustomFields
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\CustomFields\CustomDictionaryCreateRequest;
use RetailCrm\Api\Model\Request\CustomFields\CustomFieldsCreateRequest;
use RetailCrm\Api\Model\Request\CustomFields\CustomFieldsDictionariesRequest;
use RetailCrm\Api\Model\Request\CustomFields\CustomFieldsRequest;
use RetailCrm\Api\Model\Response\CustomFields\CustomDictionaryCreateResponse;
use RetailCrm\Api\Model\Response\CustomFields\CustomDictionaryGetResponse;
use RetailCrm\Api\Model\Response\CustomFields\CustomFieldsCreateResponse;
use RetailCrm\Api\Model\Response\CustomFields\CustomFieldsDictionariesResponse;
use RetailCrm\Api\Model\Response\CustomFields\CustomFieldsEditResponse;
use RetailCrm\Api\Model\Response\CustomFields\CustomFieldsGetResponse;
use RetailCrm\Api\Model\Response\CustomFields\CustomFieldsResponse;

/**
 * Class CustomFields
 *
 * @category CustomFields
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class CustomFields extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/custom-fields" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Model\Filter\CustomFields\CustomFieldFilter;
     * use RetailCrm\Api\Model\Request\CustomFields\CustomFieldsRequest;
     * use RetailCrm\Api\Enum\PaginationLimit;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                      = new CustomFieldsRequest();
     * $request->page                = 1;
     * $request->limit               = PaginationLimit::LIMIT_20;
     * $request->filter              = new CustomFieldFilter();
     * $request->filter->entity      = 'order';
     * $request->filter->viewMode    = ['editable'];
     * $request->filter->displayArea = ['customer'];
     * $request->filter->type        = ['string'];
     * $request->filter->code        = 'bonus';
     * $request->filter->name        = 'бонус';
     *
     * try {
     *     $response = $client->customFields->list($request);
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
     * echo 'Received fields: ' . print_r($response->customFields, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\CustomFields\CustomFieldsRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\CustomFields\CustomFieldsResponse
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
    public function list(?CustomFieldsRequest $request = null): CustomFieldsResponse
    {
        /** @var CustomFieldsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'custom-fields',
            $request,
            CustomFieldsResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/custom-fields/dictionaries" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Model\Filter\CustomFields\CustomDictionaryFilter;
     * use RetailCrm\Api\Model\Request\CustomFields\CustomFieldsDictionariesRequest;
     * use RetailCrm\Api\Enum\PaginationLimit;

     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');

     * $request               = new CustomFieldsDictionariesRequest();
     * $request->page         = 1;
     * $request->limit        = PaginationLimit::LIMIT_20;
     * $request->filter       = new CustomDictionaryFilter();
     * $request->filter->code = 'test22';
     * $request->filter->name = 'test22';

     * try {
     *     $response = $client->customFields->dictionaries($request);
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );

     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *
     *     return;
     * }

     * echo 'Received dictionaries: ' . print_r($response->customDictionaries, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\CustomFields\CustomFieldsDictionariesRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\CustomFields\CustomFieldsDictionariesResponse
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
    public function dictionaries(?CustomFieldsDictionariesRequest $request = null): CustomFieldsDictionariesResponse
    {
        /** @var CustomFieldsDictionariesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'custom-fields/dictionaries',
            $request,
            CustomFieldsDictionariesResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/custom-fields/dictionaries/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary;
     * use RetailCrm\Api\Model\Entity\CustomFields\SerializedCustomDictionaryElement;
     * use RetailCrm\Api\Model\Request\CustomFields\CustomDictionaryCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $dictionary                = new CustomDictionary();
     * $element                   = new SerializedCustomDictionaryElement();
     * $element->name             = 'test_1';
     * $element->code             = 'test_1';
     * $element->ordering         = 10;
     * $dictionary->name          = 'TestDict';
     * $dictionary->code          = 'test_dict';
     * $dictionary->elements      = [$element];
     *
     * try {
     *     $response = $client->customFields->dictionariesCreate(new CustomDictionaryCreateRequest($dictionary));
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
     * echo 'Created dictionary ' . $response->code;
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\CustomFields\CustomDictionaryCreateRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\CustomFields\CustomDictionaryCreateResponse
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
    public function dictionariesCreate(CustomDictionaryCreateRequest $request): CustomDictionaryCreateResponse
    {
        /** @var CustomDictionaryCreateResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'custom-fields/dictionaries/create',
            $request,
            CustomDictionaryCreateResponse::class
        );

        return $response;
    }

    /**
     * Makes GET "/api/v5/custom-fields/dictionaries/{code}" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->customFields->dictionariesGet('test');
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
     * echo 'Received dictionary ' . print_r($response->customDictionary, true);
     * ```
     *
     * @param string $code
     *
     * @return \RetailCrm\Api\Model\Response\CustomFields\CustomDictionaryGetResponse
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
    public function dictionariesGet(string $code): CustomDictionaryGetResponse
    {
        /** @var CustomDictionaryGetResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            sprintf('custom-fields/dictionaries/%s', $code),
            null,
            CustomDictionaryGetResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/custom-fields/dictionaries/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary;
     * use RetailCrm\Api\Model\Entity\CustomFields\SerializedCustomDictionaryElement;
     * use RetailCrm\Api\Model\Request\CustomFields\CustomDictionaryCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $dictionary                = new CustomDictionary();
     * $element                   = new SerializedCustomDictionaryElement();
     * $element->name             = 'test_1';
     * $element->code             = 'test_1';
     * $element->ordering         = 10;
     * $dictionary->name          = 'TestDict';
     * $dictionary->elements      = [$element];
     *
     * try {
     *     $response = $client->customFields->dictionariesEdit(
     *         'test_dict',
     *         new CustomDictionaryCreateRequest($dictionary)
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
     * echo 'Edited dictionary ' . $response->code;
     * ```
     *
     * @param string                                                                  $code
     * @param \RetailCrm\Api\Model\Request\CustomFields\CustomDictionaryCreateRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\CustomFields\CustomDictionaryCreateResponse
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
    public function dictionariesEdit(
        string $code,
        CustomDictionaryCreateRequest $request
    ): CustomDictionaryCreateResponse {
        /** @var CustomDictionaryCreateResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            sprintf('custom-fields/dictionaries/%s/edit', $code),
            $request,
            CustomDictionaryCreateResponse::class
        );

        return $response;
    }

    /**
     * Makes POST "/api/v5/custom-fields/{entity}/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\CustomFields\CustomFieldDisplayArea;
     * use RetailCrm\Api\Enum\CustomFields\CustomFieldEntity;
     * use RetailCrm\Api\Enum\CustomFields\CustomFieldType;
     * use RetailCrm\Api\Enum\CustomFields\CustomFieldViewMode;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Model\Entity\CustomFields\CustomField;
     * use RetailCrm\Api\Model\Request\CustomFields\CustomFieldsCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $field                 = new CustomField();
     * $field->name           = 'Description';
     * $field->code           = 'description';
     * $field->type           = CustomFieldType::STRING;
     * $field->ordering       = 10;
     * $field->displayArea    = CustomFieldDisplayArea::MAIN_DATA;
     * $field->viewMode       = CustomFieldViewMode::EDITABLE;
     * $field->inFilter       = true;
     * $field->inList         = true;
     * $field->inGroupActions = true;
     *
     * try {
     *     $response = $client->customFields->create(
     *         CustomFieldEntity::CUSTOMER,
     *         new CustomFieldsCreateRequest($field)
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
     * echo 'Created field ' . print_r($response->code, true);
     * ```
     *
     * @param string                                                              $entity
     * @param \RetailCrm\Api\Model\Request\CustomFields\CustomFieldsCreateRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\CustomFields\CustomFieldsCreateResponse
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
    public function create(string $entity, CustomFieldsCreateRequest $request): CustomFieldsCreateResponse
    {
        /** @var CustomFieldsCreateResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            sprintf('custom-fields/%s/create', $entity),
            $request,
            CustomFieldsCreateResponse::class
        );

        return $response;
    }

    /**
     * Makes GET "/api/v5/custom-fields/{entity}/{code}" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\CustomFields\CustomFieldEntity;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->customFields->get(CustomFieldEntity::ORDER, 'item');
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
     * echo 'Received field: ' . print_r($response->customField, true);
     * ```
     *
     * @param string $entity
     * @param string $code
     *
     * @return \RetailCrm\Api\Model\Response\CustomFields\CustomFieldsGetResponse
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
    public function get(string $entity, string $code): CustomFieldsGetResponse
    {
        /** @var CustomFieldsGetResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            sprintf('custom-fields/%s/%s', $entity, $code),
            null,
            CustomFieldsGetResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/custom-fields/{entity}/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\CustomFields\CustomFieldDisplayArea;
     * use RetailCrm\Api\Enum\CustomFields\CustomFieldEntity;
     * use RetailCrm\Api\Enum\CustomFields\CustomFieldType;
     * use RetailCrm\Api\Enum\CustomFields\CustomFieldViewMode;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Model\Entity\CustomFields\CustomField;
     * use RetailCrm\Api\Model\Request\CustomFields\CustomFieldsCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $field                 = new CustomField();
     * $field->name           = 'Description';
     * $field->type           = CustomFieldType::STRING;
     * $field->ordering       = 10;
     * $field->viewMode       = CustomFieldViewMode::EDITABLE;
     * $field->inFilter       = true;
     * $field->inList         = true;
     * $field->inGroupActions = true;
     *
     * try {
     *     $response = $client->customFields->edit(
     *         CustomFieldEntity::CUSTOMER,
     *         'description',
     *         new CustomFieldsCreateRequest($field)
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
     * echo 'Edited field ' . print_r($response->code, true);
     * ```
     *
     * @param string                                                              $entity
     * @param string                                                              $code
     * @param \RetailCrm\Api\Model\Request\CustomFields\CustomFieldsCreateRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\CustomFields\CustomFieldsEditResponse
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
    public function edit(string $entity, string $code, CustomFieldsCreateRequest $request): CustomFieldsEditResponse
    {
        /** @var CustomFieldsEditResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            sprintf('custom-fields/%s/%s/edit', $entity, $code),
            $request,
            CustomFieldsEditResponse::class
        );

        return $response;
    }
}
