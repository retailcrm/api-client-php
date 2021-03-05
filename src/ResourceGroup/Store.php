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
use RetailCrm\Api\Model\Request\Store\PricesUploadRequest;
use RetailCrm\Api\Model\Request\Store\ProductGroupsRequest;
use RetailCrm\Api\Model\Request\Store\ProductPropertiesRequest;
use RetailCrm\Api\Model\Request\Store\ProductsRequest;
use RetailCrm\Api\Model\Response\Store\InventoriesResponse;
use RetailCrm\Api\Model\Response\Store\InventoriesUploadResponse;
use RetailCrm\Api\Model\Response\Store\PricesUploadResponse;
use RetailCrm\Api\Model\Response\Store\ProductGroupsResponse;
use RetailCrm\Api\Model\Response\Store\ProductPropertiesResponse;
use RetailCrm\Api\Model\Response\Store\ProductsResponse;

/**
 * Class Store
 *
 * @category Store
 * @package  RetailCrm\Api\ResourceGroup
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
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
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
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
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
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
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
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
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
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
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
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
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
}
