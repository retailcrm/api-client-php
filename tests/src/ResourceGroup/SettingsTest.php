<?php

/**
 * PHP version 7.3
 *
 * @category SettingsTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class SettingsTest
 *
 * @category SettingsTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class SettingsTest extends AbstractApiResourceGroupTestCase
{
    public function testGet(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "settings": {
    "default_currency": {
      "value": "RUB",
      "updated_at": "2020-12-02 14:54:16"
    },
    "system_language": {
      "value": "RU",
      "updated_at": "2020-02-19 16:29:25"
    },
    "timezone": {
      "value": "Europe/Moscow",
      "updated_at": "2021-02-08 08:29:40"
    },
    "work_times": [
      {
        "day_type": "Sunday",
        "start_time": "00:00",
        "end_time": "12:00",
        "lunch_start_time": "04:30",
        "lunch_end_time": "05:00"
      },
      {
        "day_type": "Monday",
        "start_time": "08:00",
        "end_time": "20:30",
        "lunch_start_time": "12:30",
        "lunch_end_time": "13:00"
      }
    ],
    "mg": {
      "order_creation": {
        "default": {
          "site": "site",
          "order_type": "type",
          "order_method": "method"
        },
        "channels": {
          "1111": {
            "site": "site_1",
            "order_type": "type_1",
            "order_method": "method_1"
          },
          "2222": {
            "site": "site_2",
            "order_type": "type_2",
            "order_method": "method_2"
          }
        }
      }
    }
  }
}
EOF;

        $mock = static::createApiMockBuilder('settings');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->settings->get();

        self::assertModelEqualsToResponse($json, $response);
        self::assertNull($response->settings->order);
    }

    /**
     * @dataProvider orderValues
     */
    public function testOrder(bool $enabled): void
    {
        $json = json_encode([
            'success' => true,
            'settings' => [
                'order' => [
                    'allow_duplicate_order_product' => [
                        'value' => $enabled,
                        'updated_at' => '2026-05-27 13:31:02',
                    ],
                ],
            ],
        ], JSON_THROW_ON_ERROR);

        $mock = static::createApiMockBuilder('settings');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->settings->get();
        $setting = $response->settings->order->allowDuplicateOrderProduct;

        self::assertSame($enabled, $setting->value);
        self::assertInstanceOf(\DateTime::class, $setting->updatedAt);
        self::assertSame('2026-05-27 13:31:02', $setting->updatedAt->format('Y-m-d H:i:s'));
        self::assertModelEqualsToResponse($json, $response);
    }

    public function orderValues(): array
    {
        return [
            'enabled' => [true],
            'disabled' => [false],
        ];
    }
}
