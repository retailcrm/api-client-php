That's how you can create a new order:

```php
<?php

use RetailCrm\Api\Interfaces\ClientExceptionInterface;
use RetailCrm\Api\Enum\CountryCodeIso3166;
use RetailCrm\Api\Enum\Customers\CustomerType;
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Model\Entity\Orders\Delivery\OrderDeliveryAddress;
use RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedOrderDelivery;
use RetailCrm\Api\Model\Entity\Orders\Items\Offer;
use RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct;
use RetailCrm\Api\Model\Entity\Orders\Items\PriceType;
use RetailCrm\Api\Model\Entity\Orders\Items\Unit;
use RetailCrm\Api\Model\Entity\Orders\Order;
use RetailCrm\Api\Model\Entity\Orders\Payment;
use RetailCrm\Api\Model\Entity\Orders\SerializedRelationCustomer;
use RetailCrm\Api\Model\Request\Orders\OrdersCreateRequest;

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');

$request         = new OrdersCreateRequest();
$order           = new Order();
$payment         = new Payment();
$delivery        = new SerializedOrderDelivery();
$deliveryAddress = new OrderDeliveryAddress();
$offer           = new Offer();
$item            = new OrderProduct();

$payment->type   = 'bank-card';
$payment->status = 'paid';
$payment->amount = 1000;
$payment->paidAt = new DateTime();

$deliveryAddress->index      = '344001';
$deliveryAddress->countryIso = CountryCodeIso3166::RUSSIAN_FEDERATION;
$deliveryAddress->region     = 'Region';
$deliveryAddress->city       = 'City';
$deliveryAddress->street     = 'Street';
$deliveryAddress->building   = '10';

$delivery->address = $deliveryAddress;
$delivery->cost    = 0;
$delivery->netCost = 0;

$offer->name        = 'Offer №1445123';
$offer->displayName = 'Offer №1445123';
$offer->xmlId       = 'tGunLo27jlPGmbA8BrHxY2';
$offer->article     = '14451445-14451445';
$offer->unit        = new Unit('796', 'Piece', 'pcs');

$item->offer         = $offer;
$item->priceType     = new PriceType('base');
$item->quantity      = 1;
$item->purchasePrice = 60;

$order->delivery      = $delivery;
$order->items         = [$item];
$order->payments      = [$payment];
$order->orderType     = 'test';
$order->orderMethod   = 'phone';
$order->countryIso    = CountryCodeIso3166::RUSSIAN_FEDERATION;
$order->firstName     = 'Test';
$order->lastName      = 'User';
$order->patronymic    = 'Patronymic';
$order->phone         = '89003005069';
$order->email         = 'testuser12345678901@example.com';
$order->managerId     = 28;
$order->customer      = SerializedRelationCustomer::withIdAndType(
    4924,
    CustomerType::CUSTOMER
);
$order->status        = 'assembling';
$order->statusComment = 'Assembling order';
$order->weight        = 1000;
$order->shipmentStore = 'main12';
$order->shipmentDate  = (new DateTime())->add(new DateInterval('P7D'));
$order->shipped       = false;
$order->customFields  = [
    "galka" => false,
    "test_number" => 0,
    "otpravit_dozakaz" => false,
];

$request->order = $order;
$request->site  = 'moysklad';

try {
    $response = $client->orders->create($request);
} catch (ApiExceptionInterface | ClientExceptionInterface $exception) {
    echo $exception; // Every ApiExceptionInterface instance should implement __toString() method.
    exit(-1);
}

printf(
    'Created order id = %d with the following data: %s',
    $response->id,
    print_r($response->order, true)
);
```


