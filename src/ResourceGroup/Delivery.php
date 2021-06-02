<?php

/**
 * PHP version 7.3
 *
 * @category Delivery
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Delivery\DeliveryCalculateRequest;
use RetailCrm\Api\Model\Request\Delivery\DeliveryShipmentsCreateRequest;
use RetailCrm\Api\Model\Request\Delivery\DeliveryShipmentsRequest;
use RetailCrm\Api\Model\Request\Delivery\TrackingRequest;
use RetailCrm\Api\Model\Response\Delivery\DeliveryCalculateResponse;
use RetailCrm\Api\Model\Response\Delivery\DeliveryShipmentsCreateResponse;
use RetailCrm\Api\Model\Response\Delivery\DeliveryShipmentsGetResponse;
use RetailCrm\Api\Model\Response\Delivery\DeliveryShipmentsResponse;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class Delivery
 *
 * @category Delivery
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Delivery extends AbstractApiResourceGroup
{
    /**
     * Makes POST "/api/v5/delivery/calculate" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\CountryCodeIso3166;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Delivery\SerializedOrder;
     * use RetailCrm\Api\Model\Entity\Delivery\SerializedOrderDelivery;
     * use RetailCrm\Api\Model\Entity\Delivery\SerializedOrderProduct;
     * use RetailCrm\Api\Model\Entity\Delivery\TimeInterval;
     * use RetailCrm\Api\Model\Entity\Orders\Delivery\OrderDeliveryAddress;
     * use RetailCrm\Api\Model\Request\Delivery\DeliveryCalculateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $delivery                      = new SerializedOrderDelivery();
     * $delivery->address             = new OrderDeliveryAddress();
     * $delivery->date                = (new DateTime())->add(new DateInterval('P1D'));
     * $delivery->time                = TimeInterval::withCustomInterval('from 9:00 am to 18:00 pm');
     * $delivery->address->index      = '12010';
     * $delivery->address->building   = '9850';
     * $delivery->address->countryIso = CountryCodeIso3166::UNITED_STATES_OF_AMERICA;
     * $delivery->address->city       = 'New York';
     * $delivery->address->street     = 'Griffin Ave.';
     *
     * $item                        = new SerializedOrderProduct();
     * $item->initialPrice          = 1000.0;
     * $item->discountManualPercent = 5.0;
     * $item->quantity              = 10;
     *
     * $order           = new SerializedOrder();
     * $order->delivery = $delivery;
     * $order->items    = [$item];
     * $order->height   = 100;
     * $order->width    = 100;
     * $order->weight   = 100;
     * $order->length   = 100;
     *
     * $request                    = new DeliveryCalculateRequest();
     * $request->order             = $order;
     * $request->deliveryTypeCodes = ['2', '3', '8', '9', '10', '11'];
     *
     * try {
     *     $response = $client->delivery->calculate($request);
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
     * echo 'Calculate result: ' . print_r($response->calculations, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Delivery\DeliveryCalculateRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Delivery\DeliveryCalculateResponse
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
    public function calculate(DeliveryCalculateRequest $request): DeliveryCalculateResponse
    {
        /** @var DeliveryCalculateResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'delivery/calculate',
            $request,
            DeliveryCalculateResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/delivery/generic/{subcode}/tracking" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Delivery\RequestStatusUpdateItem;
     * use RetailCrm\Api\Model\Entity\Delivery\StatusInfo;
     * use RetailCrm\Api\Model\Request\Delivery\TrackingRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $status            = new StatusInfo();
     * $status->code      = 'code';
     * $status->comment   = 'comment';
     * $status->updatedAt = new DateTime();
     *
     * $item              = new RequestStatusUpdateItem();
     * $item->deliveryId  = 'boxberry';
     * $item->trackNumber = 'track';
     * $item->cost        = 100;
     * $item->history     = [$status];
     *
     * $request               = new TrackingRequest();
     * $request->statusUpdate = [$item];
     *
     * try {
     *     $response = $client->delivery->tracking('boxberry-1-5f8064212c612', $request);
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
     * @param string                                                $subcode
     * @param \RetailCrm\Api\Model\Request\Delivery\TrackingRequest $request
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
    public function tracking(string $subcode, TrackingRequest $request): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'delivery/generic/' . $subcode . '/tracking',
            $request,
            SuccessResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/delivery/shipments" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Delivery\ApiDeliveryShipmentFilterType;
     * use RetailCrm\Api\Model\Request\Delivery\DeliveryShipmentsRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                      = new DeliveryShipmentsRequest();
     * $request->filter              = new ApiDeliveryShipmentFilterType();
     * $request->filter->dateFrom    = '2020-01-15';
     * $request->filter->orderNumber = '6911C';
     *
     * try {
     *     $response = $client->delivery->shipments($request);
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
     * echo 'Shipments: ' . print_r($response->deliveryShipments, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Delivery\DeliveryShipmentsRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Delivery\DeliveryShipmentsResponse
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
    public function shipments(?DeliveryShipmentsRequest $request = null): DeliveryShipmentsResponse
    {
        /** @var DeliveryShipmentsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'delivery/shipments',
            $request,
            DeliveryShipmentsResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/delivery/shipments/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Delivery\DeliveryShipment;
     * use RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder;
     * use RetailCrm\Api\Model\Entity\Delivery\TimeInterval;
     * use RetailCrm\Api\Model\Request\Delivery\DeliveryShipmentsCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $shipment                  = new DeliveryShipment();
     * $shipment->integrationCode = 'boxberry-249';
     * $shipment->externalId      = 'test_30';
     * $shipment->managerId       = 19;
     * $shipment->store           = 'main1';
     * $shipment->date            = new DateTime();
     * $shipment->time            = TimeInterval::withTextInterval('18:00', '22:00');
     * $shipment->orders          = [
     *     SerializedEntityOrder::withNumber('8124705923428910')
     * ];
     *
     * $request                   = new DeliveryShipmentsCreateRequest();
     * $request->site             = 'aliexpress';
     * $request->deliveryType     = 'boxberry';
     * $request->deliveryShipment = $shipment;
     *
     * try {
     *     $response = $client->delivery->shipmentsCreate($request);
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
     * printf('Created shipment %d with status "%s"', $response->id, $response->status);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Delivery\DeliveryShipmentsCreateRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Delivery\DeliveryShipmentsCreateResponse
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
    public function shipmentsCreate(DeliveryShipmentsCreateRequest $request): DeliveryShipmentsCreateResponse
    {
        /** @var DeliveryShipmentsCreateResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'delivery/shipments/create',
            $request,
            DeliveryShipmentsCreateResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/delivery/shipments/{id}" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->delivery->shipmentsGet('1');
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
     * echo 'Shipment №1: ' . print_r($response->deliveryShipment, true);
     * ```
     *
     * @param string $id
     *
     * @return \RetailCrm\Api\Model\Response\Delivery\DeliveryShipmentsGetResponse
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
    public function shipmentsGet(string $id): DeliveryShipmentsGetResponse
    {
        /** @var DeliveryShipmentsGetResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'delivery/shipments/' . $id,
            null,
            DeliveryShipmentsGetResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/delivery/shipments/{id}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Delivery\DeliveryShipment;
     * use RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder;
     * use RetailCrm\Api\Model\Entity\Delivery\TimeInterval;
     * use RetailCrm\Api\Model\Request\Delivery\DeliveryShipmentsCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $shipment                  = new DeliveryShipment();
     * $shipment->integrationCode = 'boxberry-249';
     * $shipment->externalId      = 'test_30';
     * $shipment->managerId       = 19;
     * $shipment->store           = 'main1';
     * $shipment->date            = new DateTime();
     * $shipment->time            = TimeInterval::withTextInterval('18:00', '22:00');
     * $shipment->orders          = [
     *     SerializedEntityOrder::withNumber('8124705923428910')
     * ];
     *
     * $request                   = new DeliveryShipmentsCreateRequest();
     * $request->site             = 'aliexpress';
     * $request->deliveryType     = 'boxberry';
     * $request->deliveryShipment = $shipment;
     *
     * try {
     *     $response = $client->delivery->shipmentsEdit('1', $request);
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
     * printf('Edited shipment %d with status "%s"', $response->id, $response->status);
     * ```
     *
     * @param string                                                               $id
     * @param \RetailCrm\Api\Model\Request\Delivery\DeliveryShipmentsCreateRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Delivery\DeliveryShipmentsCreateResponse
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
    public function shipmentsEdit(string $id, DeliveryShipmentsCreateRequest $request): DeliveryShipmentsCreateResponse
    {
        /** @var DeliveryShipmentsCreateResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'delivery/shipments/' . $id . '/edit',
            $request,
            DeliveryShipmentsCreateResponse::class
        );
        return $response;
    }
}
