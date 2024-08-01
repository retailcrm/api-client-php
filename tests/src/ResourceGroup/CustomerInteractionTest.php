<?php

namespace RetailCrm\Tests\ResourceGroup;

use DateTime;
use RetailCrm\Api\Enum\ByIdentifier;
use RetailCrm\Api\Enum\BySite;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\CustomerInteraction\Cart;
use RetailCrm\Api\Model\Entity\CustomerInteraction\CartCustomer;
use RetailCrm\Api\Model\Entity\CustomerInteraction\CartItem;
use RetailCrm\Api\Model\Entity\Orders\Items\Offer;
use RetailCrm\Api\Model\Request\ByAndSiteByRequest;
use RetailCrm\Api\Model\Request\CustomerInteraction\CustomerInteractionCartClearRequest;
use RetailCrm\Api\Model\Request\CustomerInteraction\CustomerInteractionCartSetRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

class CustomerInteractionTest extends AbstractApiResourceGroupTestCase
{
    public static function testCustomerInteractionCartClear(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $cart                       = new Cart();
        $cart->clearedAt            = new DateTime('now');
        $cart->customer             = new CartCustomer();
        $cart->customer->id         = 4770;
        $cart->customer->browserId  = 'browserId';
        $cart->customer->gaClientId = 'gaClientId';

        $request         = new CustomerInteractionCartClearRequest();
        $request->cart   = $cart;
        $request->siteBy = BySite::CODE;

        $mock = static::createApiMockBuilder('customer-interaction/testSite/cart/clear');
        $mock->matchMethod(RequestMethod::POST)
            ->matchPath('/api/v5/customer-interaction/testSite/cart/clear')
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customerInteraction->cartClear($request, 'testSite');

        self::assertModelEqualsToResponse($json, $response);
    }

    public static function testCustomerInteractionCartSet(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $customer     = new CartCustomer();
        $customer->id = 4770;

        $cartItem                    = new CartItem();
        $cartItem->price             = 24.99;
        $cartItem->quantity          = 2;
        $cartItem->offer             = new Offer();
        $cartItem->offer->externalId = '47701234567890';

        $cart           = new Cart();
        $cart->items[]  = $cartItem;
        $cart->customer = $customer;

        $request         = new CustomerInteractionCartSetRequest();
        $request->cart   = $cart;
        $request->siteBy = BySite::CODE;

        $mock = static::createApiMockBuilder('customer-interaction/testSite/cart/set');
        $mock->matchMethod(RequestMethod::POST)
            ->matchPath('/api/v5/customer-interaction/testSite/cart/set')
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customerInteraction->cartSet($request, 'testSite');

        self::assertModelEqualsToResponse($json, $response);
    }

    public static function testCustomerInteractionCartGet(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "cart": {
    "externalId": "12345678901234",
    "droppedAt": "2024-05-08 15:10:30-05:00",
    "link": "https:/shop.myshopify.com/recover?key=1234",
    "items": [
      {
        "id": "1",
        "offer": {
          "displayName": "Some sample product",
          "id": 11,
          "externalId": "01234567890123",
          "name": "Some sample product",
          "vatRate": "20.00",
          "properties": [],
          "unit": {
            "code": "pc",
            "name": "Piece",
            "sym": "pc"
          }
        },
        "quantity": 2,
        "price": 24.99
      }
    ],
    "currency": "EUR"
  }
}
EOF;
        $request = new ByAndSiteByRequest(ByIdentifier::ID, BySite::CODE);

        $mock = static::createApiMockBuilder('customer-interaction/testSite/cart/4770');
        $mock->matchMethod(RequestMethod::GET)
            ->matchPath('/api/v5/customer-interaction/testSite/cart/4770')
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->customerInteraction->cartGet('testSite', 4770, $request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
