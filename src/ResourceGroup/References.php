<?php

/**
 * PHP version 7.3
 *
 * @category References
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\References\CostGroup;
use RetailCrm\Api\Model\Entity\References\CostItem;
use RetailCrm\Api\Model\Entity\References\Courier;
use RetailCrm\Api\Model\Entity\References\DeliveryService;
use RetailCrm\Api\Model\Entity\References\DeliveryType;
use RetailCrm\Api\Model\Entity\References\LegalEntity;
use RetailCrm\Api\Model\Entity\References\OrderMethod;
use RetailCrm\Api\Model\Entity\References\OrderProductStatus;
use RetailCrm\Api\Model\Entity\References\OrderType;
use RetailCrm\Api\Model\Entity\References\PaymentStatus;
use RetailCrm\Api\Model\Entity\References\PaymentType;
use RetailCrm\Api\Model\Entity\References\PriceType;
use RetailCrm\Api\Model\Entity\References\SerializedUnit;
use RetailCrm\Api\Model\Entity\References\Site;
use RetailCrm\Api\Model\Entity\References\Status;
use RetailCrm\Api\Model\Entity\References\Store;
use RetailCrm\Api\Model\Request\Orders\OrdersRequest;
use RetailCrm\Api\Model\Request\References\CostGroupsEditRequest;
use RetailCrm\Api\Model\Request\References\CostItemsEditRequest;
use RetailCrm\Api\Model\Request\References\CouriersCreateRequest;
use RetailCrm\Api\Model\Request\References\DeliveryServicesEditRequest;
use RetailCrm\Api\Model\Request\References\DeliveryTypesEditRequest;
use RetailCrm\Api\Model\Request\References\LegalEntityEditRequest;
use RetailCrm\Api\Model\Request\References\OrderMethodsEditRequest;
use RetailCrm\Api\Model\Request\References\OrderTypesEditRequest;
use RetailCrm\Api\Model\Request\References\PaymentStatusesEditRequest;
use RetailCrm\Api\Model\Request\References\PaymentTypesEditRequest;
use RetailCrm\Api\Model\Request\References\PriceTypesEditRequest;
use RetailCrm\Api\Model\Request\References\ProductStatusesEditRequest;
use RetailCrm\Api\Model\Request\References\SitesEditRequest;
use RetailCrm\Api\Model\Request\References\StatusesEditRequest;
use RetailCrm\Api\Model\Request\References\StoresEditRequest;
use RetailCrm\Api\Model\Request\References\UnitsEditRequest;
use RetailCrm\Api\Model\Response\IdResponse;
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
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class References
 *
 * @category References
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
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
     * Makes POST "/api/v5/reference/cost-groups/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\References\CostGroup;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $entity           = new CostGroup();
     * $entity->name     = 'Комиссии';
     * $entity->ordering = 60;
     * $entity->active   = true;
     *
     * try {
     *     $response = $client->references->costGroupsEdit('commission', $entity);
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
     * @param string                                           $code
     * @param \RetailCrm\Api\Model\Entity\References\CostGroup $entity
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function costGroupsEdit(string $code, CostGroup $entity): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'reference/cost-groups/' . $code . '/edit',
            new CostGroupsEditRequest($entity),
            SuccessResponse::class
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
     * Makes POST "/api/v5/reference/cost-items/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\References\CostItem;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $entity                  = new CostItem();
     * $entity->name            = "Test item";
     * $entity->group           = "product-cost";
     * $entity->ordering        = 990;
     * $entity->active          = true;
     * $entity->appliesToOrders = true;
     * $entity->type            = "var";
     * $entity->appliesToUsers  = false;
     *
     * try {
     *     $response = $client->references->costItemsEdit('test-item', $entity);
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
     * @param string                                          $code
     * @param \RetailCrm\Api\Model\Entity\References\CostItem $entity
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function costItemsEdit(string $code, CostItem $entity): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'reference/cost-items/' . $code . '/edit',
            new CostItemsEditRequest($entity),
            SuccessResponse::class
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
     * Makes POST "/api/v5/reference/couriers/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Orders\Delivery\CourierPhone;
     * use RetailCrm\Api\Model\Entity\References\Courier;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $entity            = new Courier();
     * $entity->firstName = 'Tester';
     * $entity->lastName  = 'Tester';
     * $entity->phone     = new CourierPhone('88005553125');
     *
     * try {
     *     $response = $client->references->couriersCreate($entity);
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
     * echo 'Created courier with ID: ' . $response->id;
     * ```
     *
     * @param \RetailCrm\Api\Model\Entity\References\Courier $entity
     *
     * @return \RetailCrm\Api\Model\Response\IdResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function couriersCreate(Courier $entity): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'reference/couriers/create',
            new CouriersCreateRequest($entity),
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/reference/couriers/{id}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Orders\Delivery\CourierPhone;
     * use RetailCrm\Api\Model\Entity\References\Courier;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $entity            = new Courier();
     * $entity->firstName = 'Tester';
     * $entity->lastName  = 'Courier';
     * $entity->phone     = new CourierPhone('88005553126');
     *
     * try {
     *     $response = $client->references->couriersEdit(1, $entity);
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
     * @param int                                            $id
     * @param \RetailCrm\Api\Model\Entity\References\Courier $entity
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function couriersEdit(int $id, Courier $entity): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'reference/couriers/' . $id . '/edit',
            new CouriersCreateRequest($entity),
            SuccessResponse::class
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
     * Makes POST "/api/v5/reference/delivery-services/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\References\DeliveryService;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $entity         = new DeliveryService();
     * $entity->name   = 'dict-deliveryservices-1571123786';
     * $entity->active = false;
     *
     * try {
     *     $response = $client->references->deliveryServicesEdit('dict-deliveryservices-1571123786', $entity);
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
     * @param string                                                 $code
     * @param \RetailCrm\Api\Model\Entity\References\DeliveryService $entity
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function deliveryServicesEdit(string $code, DeliveryService $entity): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'reference/delivery-services/' . $code . '/edit',
            new DeliveryServicesEditRequest($entity),
            SuccessResponse::class
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
     * Makes POST "/api/v5/reference/delivery-types/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\References\DeliveryType;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $entity                 = new DeliveryType();
     * $entity->name           = 'Test Type';
     * $entity->active         = false;
     * $entity->defaultCost    = 0;
     * $entity->defaultNetCost = 0;
     * $entity->paymentTypes   = [
     *     'bank-card',
     *     'bank-transfer',
     *     'credit',
     *     'cash',
     *     'e-money'
     * ];
     *
     * try {
     *     $response = $client->references->deliveryTypesEdit('test-type', $entity);
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
     * @param string                                              $code
     * @param \RetailCrm\Api\Model\Entity\References\DeliveryType $entity
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function deliveryTypesEdit(string $code, DeliveryType $entity): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'reference/delivery-types/' . $code . '/edit',
            new DeliveryTypesEditRequest($entity),
            SuccessResponse::class
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
     * Makes POST "/api/v5/reference/legal-entities/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\CountryCodeIso3166;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\References\LegalEntity;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $entity                 = new LegalEntity();
     * $entity->contragentType = "legal-entity";
     * $entity->legalName      = "Test Entity";
     * $entity->countryIso     = CountryCodeIso3166::RUSSIAN_FEDERATION;
     * $entity->vatRate        = "20.00";
     *
     * try {
     *     $response = $client->references->legalEntitiesEdit('test-entity', $entity);
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
     * @param string                                             $code
     * @param \RetailCrm\Api\Model\Entity\References\LegalEntity $entity
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function legalEntitiesEdit(string $code, LegalEntity $entity): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'reference/legal-entities/' . $code . '/edit',
            new LegalEntityEditRequest($entity),
            SuccessResponse::class
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
     * Makes POST "/api/v5/reference/order-methods/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\References\OrderMethod;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $entity         = new OrderMethod();
     * $entity->name   = 'Test Method';
     * $entity->active = true;
     *
     * try {
     *     $response = $client->references->orderMethodsEdit('test-method', $entity);
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
     * @param string                                             $code
     * @param \RetailCrm\Api\Model\Entity\References\OrderMethod $entity
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function orderMethodsEdit(string $code, OrderMethod $entity): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'reference/order-methods/' . $code . '/edit',
            new OrderMethodsEditRequest($entity),
            SuccessResponse::class
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
     * Makes POST "/api/v5/reference/order-types/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\References\OrderType;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $entity         = new OrderType();
     * $entity->name   = 'Test Type';
     * $entity->active = true;
     *
     * try {
     *     $response = $client->references->orderTypesEdit('test-method', $entity);
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
     * @param string                                           $code
     * @param \RetailCrm\Api\Model\Entity\References\OrderType $entity
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function orderTypesEdit(string $code, OrderType $entity): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'reference/order-types/' . $code . '/edit',
            new OrderTypesEditRequest($entity),
            SuccessResponse::class
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
     * Makes POST "/api/v5/reference/payment-statuses/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\References\PaymentStatus;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $entity               = new PaymentStatus();
     * $entity->name         = 'Test Status';
     * $entity->active       = true;
     * $entity->ordering     = 990;
     * $entity->paymentTypes = ['cash'];
     *
     * try {
     *     $response = $client->references->paymentStatusesEdit('test-status', $entity);
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
     * @param string                                               $code
     * @param \RetailCrm\Api\Model\Entity\References\PaymentStatus $entity
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function paymentStatusesEdit(string $code, PaymentStatus $entity): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'reference/payment-statuses/' . $code . '/edit',
            new PaymentStatusesEditRequest($entity),
            SuccessResponse::class
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
     * Makes POST "/api/v5/reference/payment-types/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\References\PaymentType;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $entity                  = new PaymentType();
     * $entity->name            = "Test Integration Payment";
     * $entity->code            = "test-payment-integration";
     * $entity->active          = true;
     * $entity->defaultForCrm   = false;
     * $entity->defaultForApi   = false;
     * $entity->paymentStatuses = [
     *     "invoice",
     *     "payment-start",
     *     "paid",
     *     "check-refund",
     *     "check-refund-after"
     * ];
     *
     * try {
     *     $response = $client->references->paymentTypesEdit('test-payment-integration', $entity);
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
     * @param string                                             $code
     * @param \RetailCrm\Api\Model\Entity\References\PaymentType $entity
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function paymentTypesEdit(string $code, PaymentType $entity): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'reference/payment-types/' . $code . '/edit',
            new PaymentTypesEditRequest($entity),
            SuccessResponse::class
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
     * Makes POST "/api/v5/reference/price-types/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\References\PriceType;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $entity           = new PriceType();
     * $entity->name     = "Test Price Type";
     * $entity->active   = true;
     * $entity->ordering = 980;
     *
     * try {
     *     $response = $client->references->priceTypesEdit('test-price-type', $entity);
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
     * @param string                                           $code
     * @param \RetailCrm\Api\Model\Entity\References\PriceType $entity
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function priceTypesEdit(string $code, PriceType $entity): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'reference/price-types/' . $code . '/edit',
            new PriceTypesEditRequest($entity),
            SuccessResponse::class
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
     * Makes POST "/api/v5/reference/product-statuses/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\References\OrderProductStatus;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $entity           = new OrderProductStatus();
     * $entity->name     = "Test Product Status";
     * $entity->active   = true;
     * $entity->ordering = 980;
     *
     * try {
     *     $response = $client->references->productStatusesEdit('test-product-status', $entity);
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
     * @param string                                                    $code
     * @param \RetailCrm\Api\Model\Entity\References\OrderProductStatus $entity
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function productStatusesEdit(string $code, OrderProductStatus $entity): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'reference/product-statuses/' . $code . '/edit',
            new ProductStatusesEditRequest($entity),
            SuccessResponse::class
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
     * Makes POST "/api/v5/reference/sites/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\CountryCodeIso3166;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\References\Site;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $entity                   = new Site();
     * $entity->name             = "Test Shop";
     * $entity->url              = "https://example.com";
     * $entity->defaultForCrm    = false;
     * $entity->ymlUrl           = "https://example.com/test_catalog.xml";
     * $entity->loadFromYml      = true;
     * $entity->countryIso       = CountryCodeIso3166::RUSSIAN_FEDERATION;
     *
     * try {
     *     $response = $client->references->sitesEdit('test-site', $entity);
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
     * @param string                                      $code
     * @param \RetailCrm\Api\Model\Entity\References\Site $entity
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function sitesEdit(string $code, Site $entity): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'reference/sites/' . $code . '/edit',
            new SitesEditRequest($entity),
            SuccessResponse::class
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
     * Makes POST "/api/v5/reference/statuses/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\References\Status;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $entity           = new Status();
     * $entity->name     = "Test Status";
     * $entity->active   = true;
     * $entity->ordering = 990;
     * $entity->group    = "assembling";
     *
     * try {
     *     $response = $client->references->statusesEdit('test', $entity);
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
     * @param string                                        $code
     * @param \RetailCrm\Api\Model\Entity\References\Status $entity
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function statusesEdit(string $code, Status $entity): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'reference/statuses/' . $code . '/edit',
            new StatusesEditRequest($entity),
            SuccessResponse::class
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
     * Makes POST "/api/v5/reference/stores/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\Reference\StoreInventoryType;
     * use RetailCrm\Api\Enum\Reference\StoreType;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Callback\Entity\Delivery\SerializedStoreWeekOpeningHours;
     * use RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime;
     * use RetailCrm\Api\Model\Entity\References\Store;
     * use RetailCrm\Api\Model\Entity\References\StoreAddress;
     * use RetailCrm\Api\Model\Entity\References\StorePhone;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $entity                      = new Store();
     * $entity->address             = new StoreAddress();
     * $entity->address->countryIso = "UA";
     * $entity->address->region     = "Винницкая область";
     * $entity->address->regionId   = 104;
     * $entity->address->city       = "Винница";
     * $entity->address->cityId     = 16054;
     * $entity->address->cityType   = "г.";
     * $entity->address->street     = "Аграрна";
     * $entity->address->streetId   = 1814071;
     * $entity->address->streetType = "ул.";
     * $entity->address->building   = "12";
     * $entity->address->text       = "ул. Аграрна, д. 12";
     * $entity->workTime            = new SerializedStoreWeekOpeningHours(
     *     [new StoreWorkTime('9:00', '18:00', '12:00', '13:00')],
     *     [new StoreWorkTime('9:00', '18:00', '12:00', '13:00')],
     *     [new StoreWorkTime('9:00', '18:00', '12:00', '13:00')],
     *     [new StoreWorkTime('9:00', '18:00', '12:00', '13:00')],
     *     [new StoreWorkTime('9:00', '18:00', '12:00', '13:00')]
     * );
     * $entity->type                = StoreType::STORE_TYPE_WAREHOUSE;
     * $entity->inventoryType       = StoreInventoryType::INTEGER;
     * $entity->active              = true;
     * $entity->phone               = new StorePhone('88005553123');
     * $entity->name                = 'Test Store';
     *
     * try {
     *     $response = $client->references->storesEdit('test', $entity);
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
     * @param string                                       $code
     * @param \RetailCrm\Api\Model\Entity\References\Store $entity
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function storesEdit(string $code, Store $entity): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'reference/stores/' . $code . '/edit',
            new StoresEditRequest($entity),
            SuccessResponse::class
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

    /**
     * Makes POST "/api/v5/reference/units/{code}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\References\SerializedUnit;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $entity         = new SerializedUnit();
     * $entity->name   = "Бобина";
     * $entity->sym    = "боб";
     * $entity->active = true;
     *
     * try {
     *     $response = $client->references->unitsEdit('nbb', $entity);
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
     * @param string                                                $code
     * @param \RetailCrm\Api\Model\Entity\References\SerializedUnit $entity
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function unitsEdit(string $code, SerializedUnit $entity): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'reference/units/' . $code . '/edit',
            new UnitsEditRequest($entity),
            SuccessResponse::class
        );
        return $response;
    }
}
