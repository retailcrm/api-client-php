<?php

/**
 * PHP version 7.3
 *
 * @category StoreTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Component\Transformer\DateTimeTransformer;
use RetailCrm\Api\Enum\NumericBoolean;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\Store\Inventory;
use RetailCrm\Api\Model\Entity\Store\Offer;
use RetailCrm\Api\Model\Entity\Store\PriceUploadInput;
use RetailCrm\Api\Model\Entity\Store\PriceUploadPricesInput;
use RetailCrm\Api\Model\Entity\Store\ProductEditGroupInput;
use RetailCrm\Api\Model\Entity\Store\ProductEditInput;
use RetailCrm\Api\Model\Filter\Store\InventoryFilterType;
use RetailCrm\Api\Model\Filter\Store\ProductFilterType;
use RetailCrm\Api\Model\Filter\Store\ProductGroupFilterType;
use RetailCrm\Api\Model\Filter\Store\ProductPropertiesFilterType;
use RetailCrm\Api\Model\Request\Store\InventoriesRequest;
use RetailCrm\Api\Model\Request\Store\InventoriesUploadRequest;
use RetailCrm\Api\Model\Request\Store\PricesUploadRequest;
use RetailCrm\Api\Model\Request\Store\ProductBatchEditRequest;
use RetailCrm\Api\Model\Request\Store\ProductGroupsRequest;
use RetailCrm\Api\Model\Request\Store\ProductPropertiesRequest;
use RetailCrm\Api\Model\Request\Store\ProductsRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class StoreTest
 *
 * @category StoreTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class StoreTest extends AbstractApiResourceGroupTestCase
{
    public function testInventories(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "pagination": {
    "limit": 20,
    "totalCount": 29,
    "currentPage": 1,
    "totalPageCount": 2
  },
  "offers": [
    {
      "id": 1818323,
      "externalId": "1",
      "xmlId": "1",
      "site": "aliexpress",
      "purchasePrice": 100000,
      "quantity": 100000
    },
    {
      "id": 67459,
      "externalId": "02nwfIWEgNXZnA6mODvJt0",
      "xmlId": "02nwfIWEgNXZnA6mODvJt0",
      "site": "moysklad",
      "quantity": 0
    },
    {
      "id": 67458,
      "externalId": "GBG3DwI2h2I91YJzQRNY30",
      "xmlId": "GBG3DwI2h2I91YJzQRNY30",
      "site": "moysklad",
      "quantity": 0
    },
    {
      "id": 67457,
      "externalId": "KKwH14RahtDJy5QF9MBYO2",
      "xmlId": "KKwH14RahtDJy5QF9MBYO2",
      "site": "moysklad",
      "quantity": 0
    },
    {
      "id": 67456,
      "externalId": "ul5uNrdni3VfIrFuQ31lg3",
      "xmlId": "ul5uNrdni3VfIrFuQ31lg3",
      "site": "moysklad",
      "quantity": 0
    },
    {
      "id": 67455,
      "externalId": "INqnI6NWgoGUPZCXa2B5K2",
      "xmlId": "INqnI6NWgoGUPZCXa2B5K2",
      "site": "moysklad",
      "quantity": 0
    },
    {
      "id": 67454,
      "externalId": "WnjjaumJgHmMD-j3Pf8Bj3",
      "xmlId": "WnjjaumJgHmMD-j3Pf8Bj3",
      "site": "moysklad",
      "quantity": 0
    },
    {
      "id": 67453,
      "externalId": "hqgrucEpjhDoQvlSZJAOw1",
      "xmlId": "hqgrucEpjhDoQvlSZJAOw1",
      "site": "moysklad",
      "quantity": 0
    },
    {
      "id": 67452,
      "externalId": "HIBAxPx1iouGDf7F15UaO1",
      "xmlId": "HIBAxPx1iouGDf7F15UaO1",
      "site": "moysklad",
      "quantity": 0
    },
    {
      "id": 67451,
      "externalId": "fMPpS5eEgmATmN7gkS48d2",
      "xmlId": "fMPpS5eEgmATmN7gkS48d2",
      "site": "moysklad",
      "quantity": 0
    },
    {
      "id": 67450,
      "externalId": "5kfIZGqIgZU2MkH7sjuaN0",
      "xmlId": "5kfIZGqIgZU2MkH7sjuaN0",
      "site": "moysklad",
      "quantity": 0
    },
    {
      "id": 67449,
      "externalId": "ePceWUZRgJ03sVSDql4ND0",
      "xmlId": "ePceWUZRgJ03sVSDql4ND0",
      "site": "moysklad",
      "quantity": 0
    },
    {
      "id": 67448,
      "externalId": "pHeHmr3bjlcZpIa-QHX0w0",
      "xmlId": "pHeHmr3bjlcZpIa-QHX0w0",
      "site": "moysklad",
      "quantity": 0
    },
    {
      "id": 67447,
      "externalId": "cbHokHoPh9L-8Nuk3f1uL1",
      "xmlId": "cbHokHoPh9L-8Nuk3f1uL1",
      "site": "moysklad",
      "quantity": 0
    },
    {
      "id": 67446,
      "externalId": "o3U2Y5WDjMzLq52HMu9qp3",
      "xmlId": "o3U2Y5WDjMzLq52HMu9qp3",
      "site": "moysklad",
      "quantity": 0
    },
    {
      "id": 67445,
      "externalId": "UnDuIcDnj1H4s4k79zShg3",
      "xmlId": "UnDuIcDnj1H4s4k79zShg3",
      "site": "moysklad",
      "quantity": 0
    },
    {
      "id": 67444,
      "externalId": "0edwpF2WjK1r1cIP3GUJK1",
      "xmlId": "0edwpF2WjK1r1cIP3GUJK1",
      "site": "moysklad",
      "quantity": 0
    },
    {
      "id": 67443,
      "externalId": "0kxFw6aWgTVLBS0K4simC2",
      "xmlId": "0kxFw6aWgTVLBS0K4simC2",
      "site": "moysklad",
      "quantity": 0
    },
    {
      "id": 66747,
      "externalId": "-SiN3js4iac5MUlTH31OM2",
      "xmlId": "-SiN3js4iac5MUlTH31OM2",
      "site": "moysklad",
      "purchasePrice": 1000,
      "quantity": 0
    },
    {
      "id": 66746,
      "externalId": "eT4zbWgUgvVEXQtAuocaS1",
      "xmlId": "eT4zbWgUgvVEXQtAuocaS1",
      "site": "moysklad",
      "quantity": 0
    }
  ]
}
EOF;

        $request                        = new InventoriesRequest();
        $request->filter                = new InventoryFilterType();
        $request->filter->productActive = NumericBoolean::TRUE;
        $request->filter->sites         = ['moysklad', 'aliexpress'];

        $mock = static::createApiMockBuilder('store/inventories');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(self::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->store->inventories($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testInventoriesUpload(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "processedOffersCount": 1
}
EOF;
        $offer         = new Offer();
        $offer->xmlId  = '1';
        $offer->stores = [new Inventory('main12', 15, 15)];

        $request         = new InventoriesUploadRequest();
        $request->offers = [$offer];
        $request->site   = 'aliexpress';

        $mock = static::createApiMockBuilder('store/inventories/upload');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->store->inventoriesUpload($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testPricesUpload(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "processedOffersCount": 1,
  "notFoundOffers": []
}
EOF;
        $price = new PriceUploadInput();
        $price->site = 'aliexpress';
        $price->xmlId = '1';
        $price->prices = [new PriceUploadPricesInput('base', 100)];

        $mock = static::createApiMockBuilder('store/prices/upload');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm(new PricesUploadRequest([$price])))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->store->pricesUpload(new PricesUploadRequest([$price]));

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testProductGroups(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "pagination": {
    "limit": 20,
    "totalCount": 7,
    "currentPage": 1,
    "totalPageCount": 1
  },
  "productGroup": [
    {
      "site": "aliexpress",
      "id": 4326,
      "name": "Test Category",
      "externalId": "1",
      "active": true
    },
    {
      "site": "moysklad",
      "id": 3676,
      "name": "warehouseRoot",
      "externalId": "warehouseRoot",
      "active": true
    },
    {
      "site": "moysklad",
      "id": 3677,
      "name": "Вторая группа",
      "externalId": "2group",
      "active": true
    },
    {
      "parentId": 3677,
      "site": "moysklad",
      "id": 3679,
      "name": "Входящая в группу",
      "externalId": "2-1Group",
      "active": true
    },
    {
      "parentId": 3679,
      "site": "moysklad",
      "id": 3680,
      "name": "test",
      "externalId": "test",
      "active": true
    },
    {
      "site": "moysklad",
      "id": 3724,
      "name": "Услуги",
      "externalId": "fFkaMR23j9nCbAMnkG2T20",
      "active": true
    },
    {
      "site": "moysklad",
      "id": 3678,
      "name": "Фрукты",
      "externalId": "extFruits",
      "active": true
    }
  ]
}
EOF;

        $request                 = new ProductGroupsRequest();
        $request->filter         = new ProductGroupFilterType();
        $request->filter->sites  = ['moysklad', 'aliexpress'];
        $request->filter->active = NumericBoolean::TRUE;

        $mock = static::createApiMockBuilder('store/product-groups');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(self::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->store->productGroups($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testProducts(): void
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
  "products": [
    {
      "minPrice": 624,
      "maxPrice": 624,
      "id": 828272,
      "article": "38311",
      "name": "Test Product",
      "url": "https://example.com",
      "imageUrl": "https://example.com/image.jpg",
      "description": "Test Description",
      "groups": [
        {
          "id": 4050,
          "externalId": "368"
        },
        {
          "id": 4154,
          "externalId": "391"
        },
        {
          "id": 4279,
          "externalId": "394"
        }
      ],
      "externalId": "38311",
      "manufacturer": "Test",
      "offers": [
        {
          "name": "Test #1",
          "price": 624,
          "images": [
            "https://example.com/image.jpg"
          ],
          "id": 1941833,
          "externalId": "38311",
          "xmlId": "38311",
          "article": "38311",
          "prices": [
            {
              "priceType": "base",
              "price": 624,
              "ordering": 991
            }
          ],
          "purchasePrice": 272.64,
          "vatRate": "none",
          "properties": {
            "ves": "33",
            "brend": "Test",
            "image": "https://example.com/image.jpg",
            "ves_g": "33",
            "artikul": "38311"
          },
          "quantity": 0,
          "weight": 33,
          "active": true,
          "unit": {
            "code": "pc",
            "name": "Штука",
            "sym": "шт."
          }
        }
      ],
      "active": true,
      "quantity": 0,
      "markable": false
    }
  ]
}
EOF;

        $request                    = new ProductsRequest();
        $request->filter            = new ProductFilterType();
        $request->filter->active    = NumericBoolean::TRUE;
        $request->filter->priceType = 'base';
        $request->filter->maxPrice  = '10000';
        $request->filter->name      = 'Test Product';

        $mock = static::createApiMockBuilder('store/products');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(self::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->store->products($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testProductsSinceUpdated(): void
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
  "products": [
    {
      "updatedAt": "2019-12-01 00:00:00",
      "minPrice": 624,
      "maxPrice": 624,
      "id": 828272,
      "article": "38311",
      "name": "Test Product",
      "url": "https://example.com",
      "imageUrl": "https://example.com/image.jpg",
      "description": "Test Description",
      "groups": [
        {
          "id": 4050,
          "externalId": "368"
        },
        {
          "id": 4154,
          "externalId": "391"
        },
        {
          "id": 4279,
          "externalId": "394"
        }
      ],
      "externalId": "38311",
      "manufacturer": "Test",
      "offers": [
        {
          "name": "Test #1",
          "price": 624,
          "images": [
            "https://example.com/image.jpg"
          ],
          "id": 1941833,
          "externalId": "38311",
          "xmlId": "38311",
          "article": "38311",
          "prices": [
            {
              "priceType": "base",
              "price": 624,
              "ordering": 991
            }
          ],
          "purchasePrice": 272.64,
          "vatRate": "none",
          "properties": {
            "ves": "33",
            "brend": "Test",
            "image": "https://example.com/image.jpg",
            "ves_g": "33",
            "artikul": "38311"
          },
          "quantity": 0,
          "weight": 33,
          "active": true,
          "unit": {
            "code": "pc",
            "name": "Штука",
            "sym": "шт."
          }
        }
      ],
      "active": true,
      "quantity": 0,
      "markable": false
    }
  ]
}
EOF;

        $request                         = new ProductsRequest();
        $request->filter                 = new ProductFilterType();
        $request->filter->active         = NumericBoolean::TRUE;
        $request->filter->priceType      = 'base';
        $request->filter->maxPrice       = '10000';
        $request->filter->name           = 'Test Product';
        $request->filter->sinceId        = 828272;
        $request->filter->sinceUpdatedAt = DateTimeTransformer::create('2020-01-01 00:00:00');

        $mock = static::createApiMockBuilder('store/products');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(self::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->store->products($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testProductProperties(): void
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
  "properties": [
    {
      "sites": [
        "e-mapper",
        "sendpulse",
        "glavpunkt",
        "retailcrm-services-peshkariki",
        "vk-com",
        "moysklad",
        "eftestshop-ru"
      ],
      "groups": [
        {
          "id": 3676,
          "name": "warehouseRoot"
        },
        {
          "id": 3679,
          "name": "Входящая в группу"
        },
        {
          "id": 3680,
          "name": "test"
        },
        {
          "id": 3724,
          "name": "Услуги"
        }
      ],
      "code": "code",
      "name": "Код",
      "isNumeric": false,
      "visible": true,
      "variative": true
    }
  ]
}
EOF;

        $request = new ProductPropertiesRequest();
        $request->filter = new ProductPropertiesFilterType();
        $request->filter->sites = ['moysklad', 'aliexpress'];
        $request->filter->visible = NumericBoolean::TRUE;
        $request->filter->variative = NumericBoolean::TRUE;

        $mock = static::createApiMockBuilder('store/products/properties');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(self::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->store->productsProperties($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testProductBatchEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $productInput = new ProductEditInput();
        $productInput->name = 'testName';
        $productInput->description = 'testDescription';
        $productInput->active = true;
        $productInput->id = 10;
        $productInput->url = 'testUrl';
        $productInput->article = 'testArticle';
        $productInput->catalogId = 10;
        $productInput->externalId = 'testExternalId';
        $productInput->manufacturer = 'testManufacturer';
        $productInput->markable = true;
        $productInput->novelty = true;
        $productInput->popular = true;
        $productInput->recommended = true;
        $productInput->site = 'testSite';
        $productInput->stock = true;
        $productEditGroupInput = new ProductEditGroupInput();
        $productEditGroupInput->externalId = 'testExternalId';
        $productEditGroupInput->id = 10;
        $productInput->groups[] = $productEditGroupInput;
        $request = new ProductBatchEditRequest([$productInput]);

        $mock = static::createApiMockBuilder('store/products/batch/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->store->productBatchEdit($request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
