<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use DateInterval;
use DateTime;
use RetailCrm\Api\Enum\CountryCodeIso3166;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\Delivery\DeliveryShipment;
use RetailCrm\Api\Model\Entity\Delivery\RequestStatusUpdateItem;
use RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder;
use RetailCrm\Api\Model\Entity\Delivery\SerializedOrder;
use RetailCrm\Api\Model\Entity\Delivery\SerializedOrderDelivery;
use RetailCrm\Api\Model\Entity\Delivery\SerializedOrderProduct;
use RetailCrm\Api\Model\Entity\Delivery\StatusInfo;
use RetailCrm\Api\Model\Entity\Delivery\TimeInterval;
use RetailCrm\Api\Model\Entity\Orders\Delivery\OrderDeliveryAddress;
use RetailCrm\Api\Model\Filter\Delivery\ApiDeliveryShipmentFilterType;
use RetailCrm\Api\Model\Request\Delivery\DeliveryCalculateRequest;
use RetailCrm\Api\Model\Request\Delivery\DeliveryShipmentsCreateRequest;
use RetailCrm\Api\Model\Request\Delivery\DeliveryShipmentsRequest;
use RetailCrm\Api\Model\Request\Delivery\TrackingRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class DeliveryTest
 *
 * @category DeliveryTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class DeliveryTest extends AbstractApiResourceGroupTestCase
{
    public function testCalculate()
    {
        $json = <<<'EOF'
{
  "success": true,
  "calculations": [
    {
      "code": "2",
      "available": true,
      "cost": 500
    },
    {
      "code": "3",
      "available": true,
      "cost": 0
    },
    {
      "code": "8",
      "available": true,
      "cost": 0
    },
    {
      "code": "9",
      "available": true,
      "cost": 0
    },
    {
      "code": "10",
      "available": true,
      "cost": 0
    },
    {
      "code": "11",
      "available": true,
      "cost": 0
    }
  ]
}
EOF;

        $delivery                      = new SerializedOrderDelivery();
        $delivery->address             = new OrderDeliveryAddress();
        $delivery->date                = (new DateTime())->add(new DateInterval('P1D'));
        $delivery->time                = TimeInterval::withCustomInterval('from 9:00 am to 18:00 pm');
        $delivery->address->index      = '12010';
        $delivery->address->building   = '9850';
        $delivery->address->countryIso = CountryCodeIso3166::UNITED_STATES_OF_AMERICA;
        $delivery->address->city       = 'New York';
        $delivery->address->street     = 'Griffin Ave.';

        $item                        = new SerializedOrderProduct();
        $item->initialPrice          = 1000.0;
        $item->discountManualPercent = 5.0;
        $item->quantity              = 10;

        $order           = new SerializedOrder();
        $order->delivery = $delivery;
        $order->items    = [$item];
        $order->height   = 100;
        $order->width    = 100;
        $order->weight   = 100;
        $order->length   = 100;

        $request                    = new DeliveryCalculateRequest();
        $request->order             = $order;
        $request->deliveryTypeCodes = ['2', '3', '8', '9', '10', '11'];

        $mock = static::createApiMockBuilder('delivery/calculate');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->delivery->calculate($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testTracking()
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $status            = new StatusInfo();
        $status->code      = 'code';
        $status->comment   = 'comment';
        $status->updatedAt = new DateTime();

        $item              = new RequestStatusUpdateItem();
        $item->deliveryId  = 'boxberry';
        $item->trackNumber = 'track';
        $item->cost        = 100;
        $item->history     = [$status];

        $request               = new TrackingRequest();
        $request->statusUpdate = [$item];

        $mock = static::createApiMockBuilder('delivery/generic/boxberry-1-5f8064212c612/tracking');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->delivery->tracking('boxberry-1-5f8064212c612', $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testShipments()
    {
        $json = <<<'EOF'
{
  "success": true,
  "pagination": {
    "limit": 20,
    "totalCount": 1,
    "currentPage": 1,
    "totalPageCount": 1
  },
  "deliveryShipments": [
    {
      "integrationCode": "boxberry-249",
      "id": 9,
      "externalId": "13825126",
      "deliveryType": "boxberry",
      "store": "main1",
      "managerId": 19,
      "status": "processing",
      "date": "2021-02-15",
      "time": {
        "from": "18:00",
        "to": "22:00"
      },
      "orders": [
        {
          "id": 6911,
          "number": "6911C"
        }
      ],
      "extraData": {
        "test": "string"
      }
    }
  ]
}
EOF;

        $request                      = new DeliveryShipmentsRequest();
        $request->filter              = new ApiDeliveryShipmentFilterType();
        $request->filter->dateFrom    = '2020-01-15';
        $request->filter->orderNumber = '6911C';

        $mock = static::createApiMockBuilder('delivery/shipments');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->delivery->shipments($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testShipmentsCreate()
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 1,
  "status": "processing"
}
EOF;

        $shipment                  = new DeliveryShipment();
        $shipment->integrationCode = 'boxberry-249';
        $shipment->externalId      = 'test_30';
        $shipment->managerId       = 19;
        $shipment->store           = 'main1';
        $shipment->date            = new DateTime();
        $shipment->time            = TimeInterval::withTextInterval('18:00', '22:00');
        $shipment->orders          = [
            SerializedEntityOrder::withNumber('8124705923428910')
        ];

        $request                   = new DeliveryShipmentsCreateRequest();
        $request->site             = 'aliexpress';
        $request->deliveryType     = 'boxberry';
        $request->deliveryShipment = $shipment;

        $mock = static::createApiMockBuilder('delivery/shipments/create');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->delivery->shipmentsCreate($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testShipmentsGet()
    {
        $json = <<<'EOF'
{
  "success": true,
  "deliveryShipment": {
    "integrationCode": "boxberry-249",
    "id": 9,
    "externalId": "13825126",
    "deliveryType": "boxberry",
    "store": "main1",
    "managerId": 19,
    "status": "processing",
    "date": "2021-02-15",
    "time": {
      "from": "18:00",
      "to": "22:00"
    },
    "orders": [
      {
        "id": 6911,
        "number": "6911C"
      }
    ],
    "extraData": {
      "test": "string"
    }
  }
}
EOF;

        $mock = static::createApiMockBuilder('delivery/shipments/9');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->delivery->shipmentsGet('9');

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testShipmentsEdit()
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 1,
  "status": "processing"
}
EOF;

        $shipment                  = new DeliveryShipment();
        $shipment->integrationCode = 'boxberry-249';
        $shipment->externalId      = 'test_30';
        $shipment->managerId       = 19;
        $shipment->store           = 'main1';
        $shipment->date            = new DateTime();
        $shipment->time            = TimeInterval::withTextInterval('18:00', '22:00');
        $shipment->orders          = [
            SerializedEntityOrder::withNumber('8124705923428910')
        ];

        $request                   = new DeliveryShipmentsCreateRequest();
        $request->site             = 'aliexpress';
        $request->deliveryType     = 'boxberry';
        $request->deliveryShipment = $shipment;

        $mock = static::createApiMockBuilder('delivery/shipments/1/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->delivery->shipmentsEdit('1', $request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
