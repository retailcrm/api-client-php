<?php

/**
 * PHP version 7.3
 *
 * @category Orders
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Orders\OrdersCombineRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersCreateRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersFixExternalIdsRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersHistoryRequest;
use RetailCrm\Api\Model\Request\Orders\OrdersRequest;
use RetailCrm\Api\Model\Response\Orders\OrdersCombineResponse;
use RetailCrm\Api\Model\Response\Orders\OrdersCreateResponse;
use RetailCrm\Api\Model\Response\Orders\OrdersHistoryResponse;
use RetailCrm\Api\Model\Response\Orders\OrdersResponse;
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
}
