<?php

/**
 * PHP version 7.3
 *
 * @category PacksTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use DateInterval;
use DateTime;
use RetailCrm\Api\Component\Transformer\DateTimeTransformer;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\Packs\OrderProductPack;
use RetailCrm\Api\Model\Filter\Packs\OrderProductPackFilter;
use RetailCrm\Api\Model\Filter\Packs\OrderProductPackHistoryFilterType;
use RetailCrm\Api\Model\Request\Packs\PacksCreateRequest;
use RetailCrm\Api\Model\Request\Packs\PacksHistoryRequest;
use RetailCrm\Api\Model\Request\Packs\PacksRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class PacksTest
 *
 * @category PacksTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class PacksTest extends AbstractApiResourceGroupTestCase
{
    public function testList(): void
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
  "packs": [
    {
      "id": 143,
      "purchasePrice": 0,
      "quantity": 1,
      "unit": {
        "code": "796",
        "name": "Штука",
        "sym": "шт"
      },
      "store": "main12",
      "item": {
        "id": 11235,
        "externalIds": [
          {

          }
        ],
        "order": {
          "id": 7088
        },
        "offer": {
          "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
          "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
        }
      },
      "shipmentDate": "2021-02-10"
    }
  ]
}
EOF;

        $request              = new PacksRequest();
        $request->filter      = new OrderProductPackFilter();
        $request->filter->ids = [143];

        $mock = static::createApiMockBuilder('orders/packs');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->packs->list($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCreate(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 1
}
EOF;

        $pack                     = new OrderProductPack();
        $pack->itemId             = 11235;
        $pack->invoiceNumber      = '1234567890';
        $pack->deliveryNoteNumber = '1234567890';
        $pack->shipmentDate       = (new DateTime())->add(new DateInterval('P1D'));
        $pack->store              = 'main12';
        $pack->quantity           = 1;
        $pack->purchasePrice      = 100;

        $request = new PacksCreateRequest($pack);

        $mock = static::createApiMockBuilder('orders/packs/create');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->packs->create($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testHistory(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "generatedAt": "2021-03-02 14:30:54",
  "history": [
    {
      "id": 229,
      "createdAt": "2020-02-06 13:59:41",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "food"
      },
      "pack": {
        "id": 125,
        "purchasePrice": 33.67,
        "quantity": 1,
        "store": {
          "code": "food"
        },
        "item": {
          "id": 7642,
          "order": {
            "id": 5043
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 24
      }
    },
    {
      "id": 230,
      "createdAt": "2020-02-06 15:01:16",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "antisklad"
      },
      "pack": {
        "id": 126,
        "quantity": 20,
        "store": {
          "code": "antisklad"
        },
        "item": {
          "id": 7642,
          "order": {
            "id": 5043
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "api"
    },
    {
      "id": 231,
      "createdAt": "2020-02-12 17:29:38",
      "deleted": true,
      "field": "store",
      "oldValue": {
        "code": "food"
      },
      "pack": {
        "id": 125,
        "item": {
          "id": 7642,
          "order": {
            "id": 5043
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "code",
      "user": {
        "id": 24
      }
    },
    {
      "id": 232,
      "createdAt": "2020-02-12 17:29:38",
      "deleted": true,
      "field": "store",
      "oldValue": {
        "code": "antisklad"
      },
      "pack": {
        "id": 126,
        "item": {
          "id": 7642,
          "order": {
            "id": 5043
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "code",
      "user": {
        "id": 24
      }
    },
    {
      "id": 233,
      "createdAt": "2020-03-05 16:34:59",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "food"
      },
      "pack": {
        "id": 127,
        "purchasePrice": 33.67,
        "quantity": 1,
        "store": {
          "code": "food"
        },
        "item": {
          "id": 8341,
          "order": {
            "id": 5463
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 19
      }
    },
    {
      "id": 234,
      "createdAt": "2020-03-05 16:35:07",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "main12"
      },
      "pack": {
        "id": 128,
        "purchasePrice": 33.67,
        "quantity": 1,
        "store": {
          "code": "main"
        },
        "item": {
          "id": 8343,
          "order": {
            "id": 5463
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 19
      }
    },
    {
      "id": 235,
      "createdAt": "2020-03-05 16:35:13",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "main12"
      },
      "pack": {
        "id": 129,
        "quantity": 1,
        "store": {
          "code": "main"
        },
        "item": {
          "id": 8342,
          "order": {
            "id": 5463
          },
          "offer": {
            "externalId": "test xml code",
            "xmlId": "test xml code"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 19
      }
    },
    {
      "id": 236,
      "createdAt": "2020-03-05 16:35:31",
      "deleted": true,
      "field": "store",
      "oldValue": {
        "code": "main12"
      },
      "pack": {
        "id": 128,
        "item": {
          "id": 8343,
          "order": {
            "id": 5463
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "code",
      "user": {
        "id": 19
      }
    },
    {
      "id": 237,
      "createdAt": "2020-03-05 16:37:02",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "main12"
      },
      "pack": {
        "id": 130,
        "purchasePrice": 33.67,
        "quantity": 1,
        "store": {
          "code": "main"
        },
        "item": {
          "id": 8343,
          "order": {
            "id": 5463
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 19
      }
    },
    {
      "id": 238,
      "createdAt": "2020-03-05 16:37:02",
      "deleted": true,
      "field": "store",
      "oldValue": {
        "code": "main12"
      },
      "pack": {
        "id": 130,
        "item": {
          "id": 8343,
          "order": {
            "id": 5463
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "code",
      "user": {
        "id": 19
      }
    },
    {
      "id": 239,
      "createdAt": "2020-03-05 16:37:15",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "main12"
      },
      "pack": {
        "id": 131,
        "purchasePrice": 33.67,
        "quantity": 1,
        "store": {
          "code": "main"
        },
        "item": {
          "id": 8343,
          "order": {
            "id": 5463
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 19
      }
    },
    {
      "id": 240,
      "createdAt": "2020-07-17 19:18:52",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "main12"
      },
      "pack": {
        "id": 132,
        "quantity": 2,
        "store": {
          "code": "main"
        },
        "item": {
          "id": 9294,
          "order": {
            "id": 6093
          },
          "offer": {
            "externalId": "212",
            "xmlId": "477"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 28
      }
    },
    {
      "id": 241,
      "createdAt": "2020-07-17 20:34:53",
      "deleted": true,
      "field": "store",
      "oldValue": {
        "code": "main12"
      },
      "pack": {
        "id": 132,
        "item": {
          "id": 9294,
          "order": {
            "id": 6093
          },
          "offer": {
            "externalId": "212",
            "xmlId": "477"
          }
        }
      },
      "source": "code",
      "user": {
        "id": 28
      }
    },
    {
      "id": 242,
      "createdAt": "2020-07-18 18:13:15",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "main12"
      },
      "pack": {
        "id": 133,
        "quantity": 2,
        "store": {
          "code": "main"
        },
        "item": {
          "id": 9296,
          "order": {
            "id": 6097
          },
          "offer": {
            "externalId": "212",
            "xmlId": "477"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 28
      }
    },
    {
      "id": 243,
      "createdAt": "2020-07-18 18:17:03",
      "deleted": true,
      "field": "store",
      "oldValue": {
        "code": "main12"
      },
      "pack": {
        "id": 133,
        "item": {
          "id": 9296,
          "order": {
            "id": 6097
          },
          "offer": {
            "externalId": "212",
            "xmlId": "477"
          }
        }
      },
      "source": "code",
      "user": {
        "id": 28
      }
    },
    {
      "id": 244,
      "createdAt": "2020-07-18 18:19:32",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "main12"
      },
      "pack": {
        "id": 134,
        "quantity": 1,
        "store": {
          "code": "main"
        },
        "item": {
          "id": 9298,
          "order": {
            "id": 6098
          },
          "offer": {
            "externalId": "214",
            "xmlId": "480"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 28
      }
    },
    {
      "id": 245,
      "createdAt": "2020-07-19 12:49:05",
      "deleted": true,
      "field": "store",
      "oldValue": {
        "code": "main12"
      },
      "pack": {
        "id": 134,
        "item": {
          "id": 9298,
          "order": {
            "id": 6098
          },
          "offer": {
            "externalId": "214",
            "xmlId": "480"
          }
        }
      },
      "source": "code",
      "user": {
        "id": 28
      }
    },
    {
      "id": 246,
      "createdAt": "2020-08-25 17:18:40",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "weiser_store"
      },
      "pack": {
        "id": 135,
        "purchasePrice": 4000,
        "quantity": 1,
        "store": {
          "code": "weiser_store"
        },
        "item": {
          "id": 9435,
          "order": {
            "id": 6225
          },
          "offer": {
            "externalId": "77317025-132370645"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 28
      }
    },
    {
      "id": 247,
      "createdAt": "2020-08-25 17:21:57",
      "field": "purchasePrice",
      "oldValue": 4000,
      "newValue": 0,
      "pack": {
        "id": 135,
        "item": {
          "id": 9435,
          "order": {
            "id": 6225
          },
          "offer": {
            "externalId": "77317025-132370645"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 28
      }
    },
    {
      "id": 248,
      "createdAt": "2020-08-25 17:24:30",
      "field": "purchasePrice",
      "oldValue": 0,
      "newValue": 4000,
      "pack": {
        "id": 135,
        "item": {
          "id": 9435,
          "order": {
            "id": 6225
          },
          "offer": {
            "externalId": "77317025-132370645"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 28
      }
    },
    {
      "id": 249,
      "createdAt": "2020-08-25 17:24:30",
      "field": "quantity",
      "oldValue": 1,
      "newValue": 44,
      "pack": {
        "id": 135,
        "item": {
          "id": 9435,
          "order": {
            "id": 6225
          },
          "offer": {
            "externalId": "77317025-132370645"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 28
      }
    },
    {
      "id": 250,
      "createdAt": "2020-08-25 17:47:18",
      "deleted": true,
      "field": "store",
      "oldValue": {
        "code": "weiser_store"
      },
      "pack": {
        "id": 135,
        "item": {
          "id": 9435,
          "order": {
            "id": 6225
          },
          "offer": {
            "externalId": "77317025-132370645"
          }
        }
      },
      "source": "code",
      "user": {
        "id": 28
      }
    },
    {
      "id": 251,
      "createdAt": "2020-12-14 11:25:40",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "main12"
      },
      "pack": {
        "id": 136,
        "purchasePrice": 2053.04,
        "quantity": 2,
        "store": {
          "code": "main"
        },
        "item": {
          "id": 9932,
          "order": {
            "id": 6557
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 28
      }
    },
    {
      "id": 252,
      "createdAt": "2020-12-14 11:39:58",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "main12"
      },
      "pack": {
        "id": 137,
        "purchasePrice": 2053.04,
        "quantity": 1,
        "store": {
          "code": "main"
        },
        "item": {
          "id": 9947,
          "order": {
            "id": 6572
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 28
      }
    },
    {
      "id": 253,
      "createdAt": "2020-12-15 11:34:22",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "food"
      },
      "pack": {
        "id": 138,
        "purchasePrice": 2053.04,
        "quantity": 2,
        "store": {
          "code": "food"
        },
        "item": {
          "id": 9960,
          "order": {
            "id": 6583
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 28
      }
    },
    {
      "id": 254,
      "createdAt": "2020-12-15 11:34:29",
      "deleted": true,
      "field": "store",
      "oldValue": {
        "code": "food"
      },
      "pack": {
        "id": 138,
        "item": {
          "id": 9960,
          "order": {
            "id": 6583
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 28
      }
    },
    {
      "id": 255,
      "createdAt": "2020-12-15 11:34:29",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "main12"
      },
      "pack": {
        "id": 139,
        "purchasePrice": 2053.04,
        "quantity": 2,
        "store": {
          "code": "main"
        },
        "item": {
          "id": 9960,
          "order": {
            "id": 6583
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 28
      }
    },
    {
      "id": 256,
      "createdAt": "2020-12-15 15:18:39",
      "deleted": true,
      "field": "store",
      "oldValue": {
        "code": "main12"
      },
      "pack": {
        "id": 139,
        "item": {
          "id": 9960,
          "order": {
            "id": 6583
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "code",
      "user": {
        "id": 28
      }
    },
    {
      "id": 257,
      "createdAt": "2020-12-15 15:19:57",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "main12"
      },
      "pack": {
        "id": 140,
        "purchasePrice": 2103.69,
        "quantity": 1,
        "store": {
          "code": "main"
        },
        "item": {
          "id": 9961,
          "order": {
            "id": 6584
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 28
      }
    },
    {
      "id": 258,
      "createdAt": "2020-12-15 18:15:12",
      "deleted": true,
      "field": "store",
      "oldValue": {
        "code": "main12"
      },
      "pack": {
        "id": 140,
        "item": {
          "id": 9961,
          "order": {
            "id": 6584
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "code",
      "user": {
        "id": 28
      }
    },
    {
      "id": 259,
      "createdAt": "2020-12-16 09:08:20",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "main12"
      },
      "pack": {
        "id": 141,
        "purchasePrice": 2103.69,
        "quantity": 1,
        "store": {
          "code": "main"
        },
        "item": {
          "id": 9963,
          "order": {
            "id": 6586
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 28
      }
    },
    {
      "id": 260,
      "createdAt": "2020-12-29 16:50:41",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "main12"
      },
      "pack": {
        "id": 142,
        "purchasePrice": 4000,
        "quantity": 1,
        "store": {
          "code": "main"
        },
        "item": {
          "id": 10057,
          "order": {
            "id": 6690
          },
          "offer": {
            "externalId": "77317025-132370645"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 29
      }
    },
    {
      "id": 261,
      "createdAt": "2020-12-29 16:53:18",
      "field": "shipmentDate",
      "newValue": "2020-12-29 00:00:00",
      "pack": {
        "id": 142,
        "item": {
          "id": 10057,
          "order": {
            "id": 6690
          },
          "offer": {
            "externalId": "77317025-132370645"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 29
      }
    },
    {
      "id": 262,
      "createdAt": "2020-12-29 16:53:43",
      "deleted": true,
      "field": "store",
      "oldValue": {
        "code": "main12"
      },
      "pack": {
        "id": 142,
        "item": {
          "id": 10057,
          "order": {
            "id": 6690
          },
          "offer": {
            "externalId": "77317025-132370645"
          }
        }
      },
      "source": "code",
      "user": {
        "id": 29
      }
    },
    {
      "id": 263,
      "createdAt": "2021-02-11 16:34:47",
      "created": true,
      "field": "store",
      "newValue": {
        "code": "main12"
      },
      "pack": {
        "id": 143,
        "quantity": 1,
        "store": {
          "code": "main1"
        },
        "item": {
          "id": 11235,
          "order": {
            "id": 7088
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 29
      }
    },
    {
      "id": 264,
      "createdAt": "2021-02-11 16:38:12",
      "field": "shipmentDate",
      "newValue": "2021-02-11 00:00:00",
      "pack": {
        "id": 143,
        "item": {
          "id": 11235,
          "order": {
            "id": 7088
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 29
      }
    },
    {
      "id": 265,
      "createdAt": "2021-02-11 17:11:07",
      "field": "shipmentDate",
      "oldValue": "2021-02-11 00:00:00",
      "newValue": "2021-02-10 00:00:00",
      "pack": {
        "id": 143,
        "item": {
          "id": 11235,
          "order": {
            "id": 7088
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "user",
      "user": {
        "id": 29
      }
    },
    {
      "id": 266,
      "createdAt": "2021-03-02 14:25:53",
      "field": "purchasePrice",
      "oldValue": 0,
      "newValue": 100,
      "pack": {
        "id": 143,
        "item": {
          "id": 11235,
          "order": {
            "id": 7088
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "api"
    },
    {
      "id": 267,
      "createdAt": "2021-03-02 14:25:53",
      "field": "shipmentDate",
      "oldValue": "2021-02-10 00:00:00",
      "newValue": "2021-03-03 00:00:00",
      "pack": {
        "id": 143,
        "item": {
          "id": 11235,
          "order": {
            "id": 7088
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "api"
    },
    {
      "id": 268,
      "createdAt": "2021-03-02 14:25:53",
      "field": "invoiceNumber",
      "newValue": "1234567890",
      "pack": {
        "id": 143,
        "item": {
          "id": 11235,
          "order": {
            "id": 7088
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "api"
    },
    {
      "id": 269,
      "createdAt": "2021-03-02 14:25:53",
      "field": "deliveryNoteNumber",
      "newValue": "1234567890",
      "pack": {
        "id": 143,
        "item": {
          "id": 11235,
          "order": {
            "id": 7088
          },
          "offer": {
            "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
            "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
          }
        }
      },
      "source": "api"
    }
  ],
  "pagination": {
    "limit": 100,
    "totalCount": 41,
    "currentPage": 1,
    "totalPageCount": 1
  }
}
EOF;

        $request              = new PacksHistoryRequest();
        $request->filter      = new OrderProductPackHistoryFilterType();
        $request->filter->startDate = DateTimeTransformer::create('2020-01-01 00:00:00');

        $mock = static::createApiMockBuilder('orders/packs/history');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->packs->history($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testGet(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "pack": {
    "id": 143,
    "purchasePrice": 100,
    "quantity": 1,
    "unit": {
      "code": "796",
      "name": "Штука",
      "sym": "шт"
    },
    "store": "main12",
    "item": {
      "id": 11235,
      "externalIds": [
        {

        }
      ],
      "order": {
        "id": 7088
      },
      "offer": {
        "externalId": "0jpQ-POMiUzGGZw0mvZPi3",
        "xmlId": "0jpQ-POMiUzGGZw0mvZPi3"
      }
    },
    "shipmentDate": "2021-03-03",
    "invoiceNumber": "1234567890",
    "deliveryNoteNumber": "1234567890"
  }
}
EOF;

        $mock = static::createApiMockBuilder('orders/packs/143');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->packs->get(143);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "id": 1
}
EOF;

        $pack                     = new OrderProductPack();
        $pack->shipmentDate       = (new DateTime())->add(new DateInterval('P1D'));

        $request = new PacksCreateRequest($pack);

        $mock = static::createApiMockBuilder('orders/packs/143/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->packs->edit(143, $request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testDelete(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $mock = static::createApiMockBuilder('orders/packs/143/delete');
        $mock->matchMethod(RequestMethod::POST)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->packs->delete(143);

        self::assertModelEqualsToResponse($json, $response);
    }
}
