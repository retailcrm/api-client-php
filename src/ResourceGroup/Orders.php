<?php

/**
 * PHP version 7.3
 *
 * @category Orders
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\BySiteRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersCombineRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersCreateRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersFixExternalIdsRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersHistoryRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersLinksCreateRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersLoyaltyApplyRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersPaymentsCreateRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersStatusesRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersUploadRequest;
use RetailCrm\Api\Model\Response\IdResponse;
use RetailCrm\Api\Model\Response\Orders\OrdersCombineResponse;
use RetailCrm\Api\Model\Response\Orders\OrdersCreateResponse;
use RetailCrm\Api\Model\Response\Orders\OrdersGetResponse;
use RetailCrm\Api\Model\Response\Orders\OrdersHistoryResponse;
use RetailCrm\Api\Model\Response\Orders\OrdersLoyaltyApplyResponse;
use RetailCrm\Api\Model\Response\Orders\OrdersResponse;
use RetailCrm\Api\Model\Response\Orders\OrdersStatusesResponse;
use RetailCrm\Api\Model\Response\Orders\OrdersUploadResponse;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class Orders
 *
 * @category Orders
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Orders extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/orders" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Order\OrderFilter;
     * use RetailCrm\Api\Model\Request\Orders\OrdersRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request = new OrdersRequest();
     * $request->filter = new OrderFilter();
     * $request->filter->ids = [7141];
     *
     * try {
     *     $response = $client->orders->list($request);
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
     * echo 'Got orders: ' . print_r($response->orders, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Orders\OrdersRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Orders\OrdersResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function list(?OrdersRequest $request): OrdersResponse
    {
        /** @var OrdersResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'orders',
            $request,
            OrdersResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/orders/combine" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\CombineTechnique;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Order\SerializedOrderReference;
     * use RetailCrm\Api\Model\Request\Orders\OrdersCombineRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request              = new OrdersCombineRequest();
     * $request->order       = new SerializedOrderReference(7143);
     * $request->resultOrder = new SerializedOrderReference(7140);
     * $request->technique   = CombineTechnique::SUMM;
     *
     * try {
     *     $response = $client->orders->combine($request);
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
     * echo 'Combine errors: ' . print_r($response->errors, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Orders\OrdersCombineRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Orders\OrdersCombineResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function combine(OrdersCombineRequest $request): OrdersCombineResponse
    {
        /** @var OrdersCombineResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'orders/combine',
            $request,
            OrdersCombineResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/orders/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\CountryCodeIso3166;
     * use RetailCrm\Api\Enum\Customers\CustomerType;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Order\Delivery\OrderDeliveryAddress;
     * use RetailCrm\Api\Model\Entity\Order\Delivery\SerializedOrderDelivery;
     * use RetailCrm\Api\Model\Entity\Order\Items\Offer;
     * use RetailCrm\Api\Model\Entity\Order\Items\OrderProduct;
     * use RetailCrm\Api\Model\Entity\Order\Items\PriceType;
     * use RetailCrm\Api\Model\Entity\Order\Items\Unit;
     * use RetailCrm\Api\Model\Entity\Order\Order;
     * use RetailCrm\Api\Model\Entity\Order\Payment;
     * use RetailCrm\Api\Model\Entity\Order\SerializedRelationCustomer;
     * use RetailCrm\Api\Model\Request\Orders\OrdersCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request         = new OrdersCreateRequest();
     * $order           = new Order();
     * $payment         = new Payment();
     * $delivery        = new SerializedOrderDelivery();
     * $deliveryAddress = new OrderDeliveryAddress();
     * $offer           = new Offer();
     * $item            = new OrderProduct();
     *
     * $payment->type   = 'bank-card';
     * $payment->status = 'paid';
     * $payment->amount = 1000;
     * $payment->paidAt = new DateTime();
     *
     * $deliveryAddress->index      = '344001';
     * $deliveryAddress->countryIso = CountryCodeIso3166::RUSSIAN_FEDERATION;
     * $deliveryAddress->region     = 'Ростовская область';
     * $deliveryAddress->city       = 'г. Ростов-на-Дону';
     * $deliveryAddress->street     = 'ул. Пушкинская';
     * $deliveryAddress->building   = '10';
     *
     * $delivery->address = $deliveryAddress;
     * $delivery->cost    = 0;
     * $delivery->netCost = 0;
     *
     * $offer->name        = 'Сборка №1445123';
     * $offer->displayName = 'Сборка №1445123';
     * $offer->xmlId       = 'tGunLo27jlPGmbA8BrHxY2';
     * $offer->article     = '14451445-14451445';
     * $offer->unit        = new Unit('796', 'Штука', 'шт');
     *
     * $item->offer         = $offer;
     * $item->priceType     = new PriceType('base');
     * $item->quantity      = 1;
     * $item->purchasePrice = 60;
     *
     * $order->delivery      = $delivery;
     * $order->items         = [$item];
     * $order->payments      = [$payment];
     * $order->orderType     = 'test';
     * $order->orderMethod   = 'phone';
     * $order->countryIso    = CountryCodeIso3166::RUSSIAN_FEDERATION;
     * $order->firstName     = 'Test';
     * $order->lastName      = 'User';
     * $order->patronymic    = 'Patronymic';
     * $order->phone         = '89003005069';
     * $order->email         = 'testuser12345678901@example.com';
     * $order->managerId     = 28;
     * $order->customer      = SerializedRelationCustomer::withIdAndType(
     *     4924,
     *     CustomerType::CUSTOMER
     * );
     * $order->status        = 'assembling';
     * $order->statusComment = 'Assembling order';
     * $order->weight        = 1000;
     * $order->shipmentStore = 'main12';
     * $order->shipmentDate  = (new DateTime())->add(new DateInterval('P7D'));
     * $order->shipped       = false;
     * $order->customFields  = [
     *     "galka" => false,
     *     "test_number" => 0,
     *     "otpravit_dozakaz" => false,
     * ];
     *
     * $request->order = $order;
     * $request->site  = 'moysklad';
     *
     * try {
     *     $response = $client->orders->create($request);
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
     *     'Created order id = %d with following data: %s',
     *     $response->id,
     *     print_r($response->order, true)
     * );
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Orders\OrdersCreateRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Orders\OrdersCreateResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function create(OrdersCreateRequest $request): OrdersCreateResponse
    {
        /** @var OrdersCreateResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'orders/create',
            $request,
            OrdersCreateResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/orders/fix-external-ids" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\FixExternalRow;
     * use RetailCrm\Api\Model\Request\Orders\OrdersFixExternalIdsRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request = new OrdersFixExternalIdsRequest();
     * $request->orders = [
     *     new FixExternalRow(1, 'external_1'),
     *     new FixExternalRow(2, 'external_2'),
     * ];
     *
     * try {
     *     $response = $client->orders->fixExternalIds($request);
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
     * @param \RetailCrm\Api\Model\Request\Orders\OrdersFixExternalIdsRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function fixExternalIds(OrdersFixExternalIdsRequest $request): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'orders/fix-external-ids',
            $request,
            SuccessResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/orders/history" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Order\OrderHistoryFilterV4Type;
     * use RetailCrm\Api\Model\Request\Orders\OrdersHistoryRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                  = new OrdersHistoryRequest();
     * $request->limit           = 100;
     * $request->page            = 1;
     * $request->filter          = new OrderHistoryFilterV4Type();
     * $request->filter->sinceId = 2691;
     *
     * try {
     *     $response = $client->orders->history($request);
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
     * echo 'Orders history: ' . print_r($response->history, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Orders\OrdersHistoryRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Orders\OrdersHistoryResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function history(?OrdersHistoryRequest $request = null): OrdersHistoryResponse
    {
        /** @var OrdersHistoryResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'orders/history',
            $request,
            OrdersHistoryResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/orders/links/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder;
     * use RetailCrm\Api\Model\Entity\Order\SerializedOrderLink;
     * use RetailCrm\Api\Model\Request\Orders\OrdersLinksCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                = new OrdersLinksCreateRequest();
     * $request->link          = new SerializedOrderLink();
     * $request->site          = 'aliexpress';
     * $request->link->orders  = [
     *     SerializedEntityOrder::withNumber('8123522898559160'),
     *     SerializedEntityOrder::withNumber('8123898472679160')
     * ];
     * $request->link->comment = 'same client';
     *
     * try {
     *     $response = $client->orders->linksCreate($request);
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
     * @param \RetailCrm\Api\Model\Request\Orders\OrdersLinksCreateRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function linksCreate(OrdersLinksCreateRequest $request): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'orders/links/create',
            $request,
            SuccessResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/orders/loyalty/apply" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder;
     * use RetailCrm\Api\Model\Request\Orders\OrdersLoyaltyApplyRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request          = new OrdersLoyaltyApplyRequest();
     * $request->site    = 'bitrix-test';
     * $request->order   = SerializedEntityOrder::withNumber('7');
     * $request->bonuses = 10;
     *
     * try {
     *     $response = $client->orders->loyaltyApply($request);
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
     * echo 'Applied loyalty to order: ' . print_r($response->order, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Orders\OrdersLoyaltyApplyRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Orders\OrdersLoyaltyApplyResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function loyaltyApply(OrdersLoyaltyApplyRequest $request): OrdersLoyaltyApplyResponse
    {
        /** @var OrdersLoyaltyApplyResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'orders/loyalty/apply',
            $request,
            OrdersLoyaltyApplyResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/orders/payments/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder;
     * use RetailCrm\Api\Model\Entity\Order\SerializedPayment;
     * use RetailCrm\Api\Model\Request\Orders\OrdersPaymentsCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                   = new OrdersPaymentsCreateRequest();
     * $request->payment          = new SerializedPayment();
     * $request->payment->type    = 'bank-card';
     * $request->payment->amount  = 10000;
     * $request->payment->comment = 'Comment';
     * $request->payment->order   = SerializedEntityOrder::withNumber('8123522898559160');
     * $request->site             = 'aliexpress';
     *
     * try {
     *     $response = $client->orders->paymentsCreate($request);
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
     * echo 'Created payment ID: ' . $response->id;
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Orders\OrdersPaymentsCreateRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\IdResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function paymentsCreate(OrdersPaymentsCreateRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'orders/payments/create',
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/orders/payments/{id}/delete" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->orders->paymentsDelete(4562);
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
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function paymentsDelete(int $id): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'orders/payments/' . $id . '/delete',
            null,
            SuccessResponse::class
        );
        return $response;
    }


    /**
     * Makes POST "/api/v5/orders/payments/{id}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\ByIdentifier;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Order\SerializedPayment;
     * use RetailCrm\Api\Model\Request\Orders\OrdersPaymentsEditRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                   = new OrdersPaymentsEditRequest();
     * $request->by               = ByIdentifier::ID;
     * $request->payment          = new SerializedPayment();
     * $request->payment->comment = 'Comment';
     * $request->site             = 'aliexpress';
     *
     * try {
     *     $response = $client->orders->paymentsEdit(4562, $request);
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
     * echo 'Edited payment ID: ' . $response->id;
     * ```
     *
     * @param int|string                                                      $identifier
     * @param \RetailCrm\Api\Model\Request\Orders\OrdersPaymentsCreateRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\IdResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function paymentsEdit($identifier, OrdersPaymentsCreateRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'orders/payments/' . $identifier . '/edit',
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/orders/statuses" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Request\Orders\OrdersStatusesRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request              = new OrdersStatusesRequest();
     * $request->externalIds = ['8123522898559160'];
     *
     * try {
     *     $response = $client->orders->statuses($request);
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
     * echo 'Statuses: ' . print_r($response->orders, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Orders\OrdersStatusesRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Orders\OrdersStatusesResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function statuses(OrdersStatusesRequest $request): OrdersStatusesResponse
    {
        /** @var OrdersStatusesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'orders/statuses',
            $request,
            OrdersStatusesResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/orders/upload" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\CountryCodeIso3166;
     * use RetailCrm\Api\Enum\Customers\CustomerType;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Order\Delivery\OrderDeliveryAddress;
     * use RetailCrm\Api\Model\Entity\Order\Delivery\SerializedOrderDelivery;
     * use RetailCrm\Api\Model\Entity\Order\Items\Offer;
     * use RetailCrm\Api\Model\Entity\Order\Items\OrderProduct;
     * use RetailCrm\Api\Model\Entity\Order\Items\PriceType;
     * use RetailCrm\Api\Model\Entity\Order\Items\Unit;
     * use RetailCrm\Api\Model\Entity\Order\Order;
     * use RetailCrm\Api\Model\Entity\Order\Payment;
     * use RetailCrm\Api\Model\Entity\Order\SerializedRelationCustomer;
     * use RetailCrm\Api\Model\Request\Orders\OrdersUploadRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request         = new OrdersUploadRequest();
     * $order           = new Order();
     * $payment         = new Payment();
     * $delivery        = new SerializedOrderDelivery();
     * $deliveryAddress = new OrderDeliveryAddress();
     * $offer           = new Offer();
     * $item            = new OrderProduct();
     *
     * $payment->type   = 'bank-card';
     * $payment->status = 'paid';
     * $payment->amount = 1000;
     * $payment->paidAt = new DateTime();
     *
     * $deliveryAddress->index      = '344001';
     * $deliveryAddress->countryIso = CountryCodeIso3166::RUSSIAN_FEDERATION;
     * $deliveryAddress->region     = 'Ростовская область';
     * $deliveryAddress->city       = 'г. Ростов-на-Дону';
     * $deliveryAddress->street     = 'ул. Пушкинская';
     * $deliveryAddress->building   = '10';
     *
     * $delivery->address = $deliveryAddress;
     * $delivery->cost    = 0;
     * $delivery->netCost = 0;
     *
     * $offer->name        = 'Сборка №1445123';
     * $offer->displayName = 'Сборка №1445123';
     * $offer->xmlId       = 'tGunLo27jlPGmbA8BrHxY2';
     * $offer->article     = '14451445-14451445';
     * $offer->unit        = new Unit('796', 'Штука', 'шт');
     *
     * $item->offer         = $offer;
     * $item->priceType     = new PriceType('base');
     * $item->quantity      = 1;
     * $item->purchasePrice = 60;
     *
     * $order->delivery      = $delivery;
     * $order->items         = [$item];
     * $order->payments      = [$payment];
     * $order->orderType     = 'test';
     * $order->orderMethod   = 'phone';
     * $order->countryIso    = CountryCodeIso3166::RUSSIAN_FEDERATION;
     * $order->firstName     = 'Test';
     * $order->lastName      = 'User';
     * $order->patronymic    = 'Patronymic';
     * $order->phone         = '89003005069';
     * $order->email         = 'testuser12345678901@example.com';
     * $order->managerId     = 28;
     * $order->customer      = SerializedRelationCustomer::withIdAndType(
     *     4924,
     *     CustomerType::CUSTOMER
     * );
     * $order->status        = 'assembling';
     * $order->statusComment = 'Assembling order';
     * $order->weight        = 1000;
     * $order->shipmentStore = 'main12';
     * $order->shipmentDate  = (new DateTime())->add(new DateInterval('P7D'));
     * $order->shipped       = false;
     * $order->customFields  = [
     *     "galka" => false,
     *     "test_number" => 0,
     *     "otpravit_dozakaz" => false,
     * ];
     *
     * $request->site  = 'moysklad';
     * $request->orders = [$order];
     *
     * try {
     *     $response = $client->orders->upload($request);
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
     * echo 'Uploaded: ' . print_r($response->uploadedOrders, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Orders\OrdersUploadRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Orders\OrdersUploadResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function upload(OrdersUploadRequest $request): OrdersUploadResponse
    {
        /** @var OrdersUploadResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'orders/upload',
            $request,
            OrdersUploadResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/orders" request.
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
     *     $response = $client->orders->get(
     *         '8123522898559160',
     *         new BySiteRequest(ByIdentifier::EXTERNAL_ID, 'aliexpress')
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
     * echo 'Order: ' . print_r($response->order, true);
     * ```
     *
     * @param int|string                                      $identifier
     * @param \RetailCrm\Api\Model\Request\BySiteRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Orders\OrdersGetResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function get($identifier, ?BySiteRequest $request): OrdersGetResponse
    {
        /** @var OrdersGetResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'orders/' . $identifier,
            $request,
            OrdersGetResponse::class
        );
        return $response;
    }
}
