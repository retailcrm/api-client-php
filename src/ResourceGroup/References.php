<?php

/**
 * PHP version 7.3
 *
 * @category References
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Orders\OrdersRequest;
use RetailCrm\Api\Model\Response\Orders\OrdersResponse;
use RetailCrm\Api\Model\Response\References\CostGroupsResponse;
use RetailCrm\Api\Model\Response\References\CostItemsResponse;
use RetailCrm\Api\Model\Response\References\CountriesResponse;
use RetailCrm\Api\Model\Response\References\CouriersResponse;
use RetailCrm\Api\Model\Response\References\DeliveryServicesResponse;
use RetailCrm\Api\Model\Response\References\DeliveryTypesResponse;
use RetailCrm\Api\Model\Response\References\LegalEntitiesResponse;
use RetailCrm\Api\Model\Response\References\MgChannelsResponse;
use RetailCrm\Api\Model\Response\References\OrderMethodsResponse;
use RetailCrm\Api\Model\Response\References\OrderTypesResponse;
use RetailCrm\Api\Model\Response\References\PaymentStatusesResponse;
use RetailCrm\Api\Model\Response\References\PaymentTypesResponse;
use RetailCrm\Api\Model\Response\References\PriceTypesResponse;
use RetailCrm\Api\Model\Response\References\ProductStatusesResponse;
use RetailCrm\Api\Model\Response\References\SitesResponse;
use RetailCrm\Api\Model\Response\References\StatusesResponse;
use RetailCrm\Api\Model\Response\References\StatusGroupsResponse;
use RetailCrm\Api\Model\Response\References\StoresResponse;
use RetailCrm\Api\Model\Response\References\UnitsResponse;

/**
 * Class References
 *
 * @category References
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class References extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/reference/cost-groups" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->costGroups();
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
     * echo 'Cost groups: ' . print_r($response->costGroups, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\CostGroupsResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function costGroups(): CostGroupsResponse
    {
        /** @var CostGroupsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/cost-groups',
            null,
            CostGroupsResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/cost-items" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->costItems();
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
     * echo 'Cost items: ' . print_r($response->costItems, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\CostItemsResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function costItems(): CostItemsResponse
    {
        /** @var CostItemsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/cost-items',
            null,
            CostItemsResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/countries" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->countries();
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
     * echo 'Countries ISO codes: ' . print_r($response->countriesIso, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\CountriesResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function countries(): CountriesResponse
    {
        /** @var CountriesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/countries',
            null,
            CountriesResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/couriers" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->couriers();
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
     * echo 'Couriers: ' . print_r($response->couriers, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\CouriersResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function couriers(): CouriersResponse
    {
        /** @var CouriersResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/couriers',
            null,
            CouriersResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/delivery-services" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->deliveryServices();
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
     * echo 'Delivery services: ' . print_r($response->deliveryServices, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\DeliveryServicesResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function deliveryServices(): DeliveryServicesResponse
    {
        /** @var DeliveryServicesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/delivery-services',
            null,
            DeliveryServicesResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/delivery-types" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->deliveryTypes();
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
     * echo 'Delivery types: ' . print_r($response->deliveryTypes, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\DeliveryTypesResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function deliveryTypes(): DeliveryTypesResponse
    {
        /** @var DeliveryTypesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/delivery-types',
            null,
            DeliveryTypesResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/legal-entities" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->legalEntities();
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
     * echo 'Legal entities: ' . print_r($response->legalEntities, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\LegalEntitiesResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function legalEntities(): LegalEntitiesResponse
    {
        /** @var LegalEntitiesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/legal-entities',
            null,
            LegalEntitiesResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/mg-channels" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->mgChannels();
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
     * echo 'MG Channels: ' . print_r($response->mgChannels, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\MgChannelsResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function mgChannels(): MgChannelsResponse
    {
        /** @var MgChannelsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/mg-channels',
            null,
            MgChannelsResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/order-methods" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->orderMethods();
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
     * echo 'Order methods: ' . print_r($response->orderMethods, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\OrderMethodsResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function orderMethods(): OrderMethodsResponse
    {
        /** @var OrderMethodsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/order-methods',
            null,
            OrderMethodsResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/order-types" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->orderTypes();
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
     * echo 'Order types: ' . print_r($response->orderTypes, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\OrderTypesResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function orderTypes(): OrderTypesResponse
    {
        /** @var OrderTypesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/order-types',
            null,
            OrderTypesResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/payment-statuses" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->paymentStatuses();
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
     * echo 'Payment statuses: ' . print_r($response->paymentStatuses, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\PaymentStatusesResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function paymentStatuses(): PaymentStatusesResponse
    {
        /** @var PaymentStatusesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/payment-statuses',
            null,
            PaymentStatusesResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/payment-types" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->paymentTypes();
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
     * echo 'Payment types: ' . print_r($response->paymentTypes, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\PaymentTypesResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function paymentTypes(): PaymentTypesResponse
    {
        /** @var PaymentTypesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/payment-types',
            null,
            PaymentTypesResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/price-types" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->priceTypes();
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
     * echo 'Price types: ' . print_r($response->priceTypes, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\PriceTypesResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function priceTypes(): PriceTypesResponse
    {
        /** @var PriceTypesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/price-types',
            null,
            PriceTypesResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/product-statuses" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->productStatuses();
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
     * echo 'Product statuses: ' . print_r($response->productStatuses, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\ProductStatusesResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function productStatuses(): ProductStatusesResponse
    {
        /** @var ProductStatusesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/product-statuses',
            null,
            ProductStatusesResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/sites" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->sites();
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
     * echo 'Sites: ' . print_r($response->sites, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\SitesResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function sites(): SitesResponse
    {
        /** @var SitesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/sites',
            null,
            SitesResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/status-groups" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->statusGroups();
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
     * echo 'Status groups: ' . print_r($response->statusGroups, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\StatusGroupsResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function statusGroups(): StatusGroupsResponse
    {
        /** @var StatusGroupsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/status-groups',
            null,
            StatusGroupsResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/statuses" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->statuses();
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
     * echo 'Statuses: ' . print_r($response->statuses, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\StatusesResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function statuses(): StatusesResponse
    {
        /** @var StatusesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/statuses',
            null,
            StatusesResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/stores" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->stores();
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
     * echo 'Stores: ' . print_r($response->stores, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\StoresResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function stores(): StoresResponse
    {
        /** @var StoresResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/stores',
            null,
            StoresResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/reference/units" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->references->units();
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
     * echo 'Units: ' . print_r($response->units, true);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\References\UnitsResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function units(): UnitsResponse
    {
        /** @var UnitsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'reference/units',
            null,
            UnitsResponse::class
        );
        return $response;
    }
}
