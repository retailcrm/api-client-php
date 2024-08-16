<?php

/**
 * PHP version 7.3
 *
 * @category Store
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Store\InventoriesRequest;
use RetailCrm\Api\Model\Request\Store\InventoriesUploadRequest;
use RetailCrm\Api\Model\Request\Store\OffersRequest;
use RetailCrm\Api\Model\Request\Store\PricesUploadRequest;
use RetailCrm\Api\Model\Request\Store\ProductBatchEditRequest;
use RetailCrm\Api\Model\Request\Store\ProductGroupsCreateRequest;
use RetailCrm\Api\Model\Request\Store\ProductGroupsEditRequest;
use RetailCrm\Api\Model\Request\Store\ProductGroupsRequest;
use RetailCrm\Api\Model\Request\Store\ProductPropertiesRequest;
use RetailCrm\Api\Model\Request\Store\ProductPropertyValuesRequest;
use RetailCrm\Api\Model\Request\Store\ProductsBatchCreateRequest;
use RetailCrm\Api\Model\Request\Store\ProductsRequest;
use RetailCrm\Api\Model\Response\IdResponse;
use RetailCrm\Api\Model\Response\Store\InventoriesResponse;
use RetailCrm\Api\Model\Response\Store\InventoriesUploadResponse;
use RetailCrm\Api\Model\Response\Store\OffersResponse;
use RetailCrm\Api\Model\Response\Store\PricesUploadResponse;
use RetailCrm\Api\Model\Response\Store\ProductBatchEditResponse;
use RetailCrm\Api\Model\Response\Store\ProductGroupsResponse;
use RetailCrm\Api\Model\Response\Store\ProductPropertiesResponse;
use RetailCrm\Api\Model\Response\Store\ProductPropertyValuesResponse;
use RetailCrm\Api\Model\Response\Store\ProductsBatchCreateResponse;
use RetailCrm\Api\Model\Response\Store\ProductsResponse;

/**
 * Class Store
 *
 * @category Store
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Store extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/store/inventories" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\NumericBoolean;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Store\InventoryFilterType;
     * use RetailCrm\Api\Model\Request\Store\InventoriesRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                        = new InventoriesRequest();
     * $request->filter                = new InventoryFilterType();
     * $request->filter->productActive = NumericBoolean::TRUE;
     * $request->filter->sites         = ['moysklad', 'aliexpress'];
     *
     * try {
     *     $response = $client->store->inventories($request);
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
     * echo 'Offers: ' . print_r($response->offers, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Store\InventoriesRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Store\InventoriesResponse
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
    public function inventories(?InventoriesRequest $request = null): InventoriesResponse
    {
        /** @var InventoriesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'store/inventories',
            $request,
            InventoriesResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/store/inventories/upload" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Store\Inventory;
     * use RetailCrm\Api\Model\Entity\Store\Offer;
     * use RetailCrm\Api\Model\Request\Store\InventoriesUploadRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $offer         = new Offer();
     * $offer->xmlId  = '1';
     * $offer->stores = [new Inventory('main12', 15, 15)];
     *
     * $request         = new InventoriesUploadRequest();
     * $request->offers = [$offer];
     * $request->site   = 'aliexpress';
     *
     * try {
     *     $response = $client->store->inventoriesUpload($request);
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
     * echo 'Processed offers: ' . $response->processedOffersCount;
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Store\InventoriesUploadRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Store\InventoriesUploadResponse
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
    public function inventoriesUpload(InventoriesUploadRequest $request): InventoriesUploadResponse
    {
        /** @var InventoriesUploadResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'store/inventories/upload',
            $request,
            InventoriesUploadResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/store/prices/upload" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Store\PriceUploadInput;
     * use RetailCrm\Api\Model\Entity\Store\PriceUploadPricesInput;
     * use RetailCrm\Api\Model\Request\Store\PricesUploadRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $price = new PriceUploadInput();
     * $price->site = 'aliexpress';
     * $price->xmlId = '1';
     * $price->prices = [new PriceUploadPricesInput('base', 100)];
     *
     * $request = new PricesUploadRequest([$price]);
     *
     * try {
     *     $response = $client->store->pricesUpload($request);
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
     * printf(
     *     'Processed offers: %d, not found offers: %s',
     *     $response->processedOffersCount,
     *     print_r($response->notFoundOffers, true)
     * );
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Store\PricesUploadRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Store\PricesUploadResponse
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
    public function pricesUpload(PricesUploadRequest $request): PricesUploadResponse
    {
        /** @var PricesUploadResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'store/prices/upload',
            $request,
            PricesUploadResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/store/product-groups" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\NumericBoolean;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Store\ProductGroupFilterType;
     * use RetailCrm\Api\Model\Request\Store\ProductGroupsRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                 = new ProductGroupsRequest();
     * $request->filter         = new ProductGroupFilterType();
     * $request->filter->sites  = ['moysklad', 'aliexpress'];
     * $request->filter->active = NumericBoolean::TRUE;
     *
     * try {
     *     $response = $client->store->productGroups($request);
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
     * echo 'Product groups: ' . print_r($response->productGroup, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Store\ProductGroupsRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Store\ProductGroupsResponse
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
    public function productGroups(?ProductGroupsRequest $request = null): ProductGroupsResponse
    {
        /** @var ProductGroupsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'store/product-groups',
            $request,
            ProductGroupsResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/store/product-groups/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Model\Entity\Store\SerializedProductGroup;
     * use RetailCrm\Api\Model\Request\Store\ProductGroupsCreateRequest;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $productGroup = new SerializedProductGroup();
     * $productGroup->parentId = 100;
     * $productGroup->name = 'TestGroup';
     * $productGroup->description = 'Test group of products';
     * $productGroup->externalId = 'xxx-001';
     * $productGroup->active = true;
     * $productGroup->parentExternalId = 'xxx-000';
     * $productGroup->site = 'test_site';
     *
     * try {
     *     $response = $client->store->productGroupsCreate(new ProductGroupsCreateRequest($productGroup));
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *     return;
     * }
     *
     * echo 'Product group create result: ' . $response->success;
     * echo 'Product group id: ' . $response->id;
     * ```
     *
     * @param ProductGroupsCreateRequest $request
     *
     * @return IdResponse
     * @throws \RetailCrm\Api\Exception\ApiException
     * @throws \RetailCrm\Api\Exception\ClientException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function productGroupsCreate(ProductGroupsCreateRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'store/product-groups/create',
            $request,
            IdResponse::class
        );

        return $response;
    }

    /**
     * Makes POST "/api/v5/store/product-groups/{externalId}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Model\Entity\Store\SerializedProductGroup;
     * use RetailCrm\Api\Model\Request\Store\ProductGroupsEditRequest;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $productGroup = new SerializedProductGroup();
     * $productGroup->name = 'TestGroup';
     * $productGroup->description = 'Test group of products';
     * $productGroup->externalId = 'xxx-001';
     * $productGroup->active = true;
     *
     * try {
     *     $response = $client->store->productGroupsEdit(
     *         111,
     *         new ProductGroupsEditRequest($productGroup, 'externalId', 'test_site')
     *     );
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *     return;
     * }
     *
     * echo 'Product group create result: ' . $response->success;
     * echo 'Product group id: ' . $response->id;
     * ```
     *
     * @param string|int $identifier
     * @param ProductGroupsEditRequest $request
     *
     * @return IdResponse
     * @throws \RetailCrm\Api\Exception\ApiException
     * @throws \RetailCrm\Api\Exception\ClientException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function productGroupsEdit($identifier, ProductGroupsEditRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'store/product-groups/' . $identifier . '/edit',
            $request,
            IdResponse::class
        );

        return $response;
    }

    /**
     * Makes GET "/api/v5/store/products" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\NumericBoolean;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Store\ProductFilterType;
     * use RetailCrm\Api\Model\Request\Store\ProductsRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                    = new ProductsRequest();
     * $request->filter            = new ProductFilterType();
     * $request->filter->active    = NumericBoolean::TRUE;
     * $request->filter->priceType = 'base';
     * $request->filter->maxPrice  = '10000';
     * $request->filter->name      = 'Test Product';
     *
     * try {
     *     $response = $client->store->products($request);
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
     * echo 'Products: ' . print_r($response->products, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Store\ProductsRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Store\ProductsResponse
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
    public function products(?ProductsRequest $request = null): ProductsResponse
    {
        /** @var ProductsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'store/products',
            $request,
            ProductsResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/store/products/properties" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Store\ProductPropertiesFilterType;
     * use RetailCrm\Api\Model\Request\Store\ProductPropertiesRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                = new ProductPropertiesRequest();
     * $request->filter        = new ProductPropertiesFilterType();
     * $request->filter->sites = ['moysklad', 'aliexpress'];
     *
     * try {
     *     $response = $client->store->productsProperties($request);
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
     * echo 'Product properties: ' . print_r($response->properties, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Store\ProductPropertiesRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Store\ProductPropertiesResponse
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
    public function productsProperties(?ProductPropertiesRequest $request = null): ProductPropertiesResponse
    {
        /** @var ProductPropertiesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'store/products/properties',
            $request,
            ProductPropertiesResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/store/store/products/batch/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Model\Entity\Store\ProductEditGroupInput;
     * use RetailCrm\Api\Model\Entity\Store\ProductEditInput;
     * use RetailCrm\Api\Model\Request\Store\ProductBatchEditRequest;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $productInput = new ProductEditInput();
     * $productInput->name = 'testName';
     * $productInput->description = 'testDescription';
     * $productInput->active = true;
     * $productInput->id = 10;
     * $productInput->url = 'testUrl';
     * $productInput->article = 'testArticle';
     * $productInput->catalogId = 10;
     * $productInput->externalId = 'testExternalId';
     * $productInput->manufacturer = 'testManufacturer';
     * $productInput->markable = true;
     * $productInput->novelty = true;
     * $productInput->popular = true;
     * $productInput->recommended = true;
     * $productInput->site = 'testSite';
     * $productInput->stock = true;
     * $productEditGroupInput = new ProductEditGroupInput();
     * $productEditGroupInput->externalId = 'testExternalId';
     * $productEditGroupInput->id = 10;
     * $productInput->groups[] = $productEditGroupInput;
     *
     * try {
     *     $response = $client->store->productBatchEdit(new ProductBatchEditRequest([$productInput]));
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *     return;
     * }
     *
     * echo 'Processed product count: ' . $response->processedProductsCount;
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Store\ProductBatchEditRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Store\ProductBatchEditResponse
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     */
    public function productBatchEdit(ProductBatchEditRequest $request): ProductBatchEditResponse
    {
        /** @var ProductBatchEditResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'store/products/batch/edit',
            $request,
            ProductBatchEditResponse::class
        );

        return $response;
    }

    /**
     * Makes POST "/api/v5/store/products/batch/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Model\Entity\Store\ProductEditGroupInput;
     * use RetailCrm\Api\Model\Entity\Store\ProductCreateInput;
     * use RetailCrm\Api\Model\Request\Store\ProductsBatchCreateRequest;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Enum\Product\ProductType;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $productInput = new ProductCreateInput();
     * $productInput->name = 'testName';
     * $productInput->description = 'testDescription';
     * $productInput->active = true;
     * $productInput->url = 'testUrl';
     * $productInput->article = 'testArticle';
     * $productInput->catalogId = 10;
     * $productInput->externalId = 'testExternalId';
     * $productInput->manufacturer = 'testManufacturer';
     * $productInput->markable = true;
     * $productInput->novelty = true;
     * $productInput->popular = true;
     * $productInput->recommended = true;
     * $productInput->stock = true;
     * $productInput->type = ProductType::PRODUCT;
     * $productEditGroupInput = new ProductEditGroupInput();
     * $productEditGroupInput->externalId = 'testExternalId';
     * $productEditGroupInput->id = 10;
     * $productInput->groups[] = $productEditGroupInput;
     *
     * try {
     *     $response = $client->store->productsBatchCreate(new ProductsBatchCreateRequest([$productInput]));
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *     return;
     * }
     *
     * echo 'Processed product count: ' . $response->processedProductsCount;
     * ```
     *
     * @param ProductsBatchCreateRequest $request
     *
     * @return ProductsBatchCreateResponse
     * @throws \RetailCrm\Api\Exception\ApiException
     * @throws \RetailCrm\Api\Exception\ClientException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function productsBatchCreate(ProductsBatchCreateRequest $request): ProductsBatchCreateResponse
    {
        /** @var ProductsBatchCreateResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'store/products/batch/create',
            $request,
            ProductsBatchCreateResponse::class
        );

        return $response;
    }

    /**
     * Makes GET "/api/v5/store/offers" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\NumericBoolean;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Store\OfferFilterType;
     * use RetailCrm\Api\Model\Request\Store\OffersRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                    = new OffersRequest();
     * $request->filter            = new OfferFilterType();
     * $request->filter->active    = NumericBoolean::TRUE;
     * $request->filter->name      = 'Test Offer';
     *
     * try {
     *     $response = $client->store->offers($request);
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
     * echo 'Offers: ' . print_r($response->offers, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Store\OffersRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Store\OffersResponse
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
    public function offers(?OffersRequest $request = null): OffersResponse
    {
        /** @var OffersResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'store/offers',
            $request,
            OffersResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/store/products/properties/values" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Store\ProductPropertiesFilterType;
     * use RetailCrm\Api\Model\Request\Store\ProductPropertiesRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                = new ProductPropertyValuesRequest();
     * $request->filter        = new ProductPropertyValuesFilterType();
     * $request->filter->propertyCode = 'property_code';
     *
     * try {
     *     $response = $client->store->productsPropertyValues($request);
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
     * echo 'Product property values: ' . print_r($response->productPropertyValues, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Store\ProductPropertyValuesRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Store\ProductPropertyValuesResponse
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
    public function productsPropertyValues(?ProductPropertyValuesRequest $request = null): ProductPropertyValuesResponse
    {
        /** @var ProductPropertyValuesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'store/products/properties/values',
            $request,
            ProductPropertyValuesResponse::class
        );
        return $response;
    }
}
