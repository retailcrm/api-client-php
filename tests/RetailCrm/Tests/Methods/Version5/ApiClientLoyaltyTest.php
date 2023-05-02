<?php

namespace RetailCrm\Tests\Methods\Version5;

use RetailCrm\Test\TestCase;

class ApiClientLoyaltyTest extends TestCase
{
    /**
     * @dataProvider accountCreateProvider
     *
     * @group loyalty_v5
     *
     * @param array       $account
     * @param string      $site
     * @param string|null $exceptionClass
     *
     * @return void
     */
    public function testAccountCreate(array $account, $site, $exceptionClass)
    {
        $client = static::getApiClient();
        if (!empty($exceptionClass)) {
            $this->expectException($exceptionClass);
        }
        $response = $client->request->accountCreate($account, $site);
        if (empty($exceptionClass)) {
            static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
            static::assertTrue($response->isSuccessful());
        }
    }

    /**
     * @return array[]
     */
    public function accountCreateProvider()
    {
        return [
            'success' => [
                [
                    'phoneNumber' => 111111111,
                    'customer' => ['id' => 6218],
                ],
                'gray_sale_3',
                null,
            ],
            'error_data' => [
                [
                    'customer' => ['id' => 6218],
                ],
                'gray_sale_3',
                'InvalidArgumentException',
            ],
            'error_site' => [
                [
                    'phoneNumber' => 111111111,
                    'customer' => ['id' => 6218],
                ],
                '',
                'InvalidArgumentException',
            ],
        ];
    }

    /**
     * @dataProvider accountGetProvider
     *
     * @group loyalty_v5
     *
     * @param int         $id
     * @param string|null $exceptionClass
     *
     * @return void
     */
    public function testAccountGet($id, $exceptionClass)
    {
        $client = static::getApiClient();
        if (!empty($exceptionClass)) {
            $this->expectException($exceptionClass);
        }
        $response = $client->request->accountGet($id);
        if (empty($exceptionClass)) {
            static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
            static::assertTrue($response->isSuccessful());
        }
    }

    /**
     * @return array[]
     */
    public function accountGetProvider()
    {
        return [
            'success' => [
                246,
                null,
            ],
            'error' => [
                null,
                'InvalidArgumentException'
            ],
        ];
    }

    /**
     * @dataProvider accountActivateProvider
     *
     * @group loyalty_v5
     *
     * @param int         $id
     * @param string|null $exceptionClass
     *
     * @return void
     */
    public function testAccountActivate($id, $exceptionClass)
    {
        $client = static::getApiClient();
        if (!empty($exceptionClass)) {
            $this->expectException($exceptionClass);
        }
        $response = $client->request->accountActivate($id);
        if (empty($exceptionClass)) {
            static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
            static::assertTrue($response->isSuccessful());
        }
    }

    /**
     * @return array[]
     */
    public function accountActivateProvider()
    {
        return [
            'success' => [
                246,
                null,
            ],
            'error' => [
                null,
                'InvalidArgumentException'
            ],
        ];
    }

    /**
     * @dataProvider bonusChargeProvider
     *
     * @group loyalty_v5
     *
     * @param int         $id
     * @param array       $bonus
     * @param string|null $exceptionClass
     *
     * @return void
     */
    public function testBonusCharge($id, array $bonus, $exceptionClass)
    {
        $client = static::getApiClient();
        if (!empty($exceptionClass)) {
            $this->expectException($exceptionClass);
        }
        $response = $client->request->bonusCharge($id, $bonus);
        if (empty($exceptionClass)) {
            static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
            static::assertTrue($response->isSuccessful());
        }
    }

    /**
     * @return array[]
     */
    public function bonusChargeProvider()
    {
        return [
            'success' => [
                246,
                ['amount' => 50],
                null,
            ],
            'error_bonus' => [
                246,
                ['comment' => 'test'],
                'InvalidArgumentException'
            ],
            'error_id' => [
                null,
                ['amount' => 50],
                'InvalidArgumentException'
            ],
        ];
    }

    /**
     * @dataProvider bonusCreditProvider
     *
     * @group loyalty_v5
     *
     * @param int         $id
     * @param array       $bonus
     * @param string|null $exceptionClass
     *
     * @return void
     */
    public function testBonusCredit($id, array $bonus, $exceptionClass)
    {
        $client = static::getApiClient();
        if (!empty($exceptionClass)) {
            $this->expectException($exceptionClass);
        }
        $response = $client->request->bonusCredit($id, $bonus);
        if (empty($exceptionClass)) {
            static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
            static::assertTrue($response->isSuccessful());
        }
    }

    /**
     * @return array[]
     */
    public function bonusCreditProvider()
    {
        return [
            'success' => [
                246,
                ['amount' => 50],
                null,
            ],
            'error_bonus' => [
                246,
                ['comment' => 'test'],
                'InvalidArgumentException'
            ],
            'error_id' => [
                null,
                ['amount' => 50],
                'InvalidArgumentException'
            ],
        ];
    }

    /**
     * @dataProvider accountBonusOperationsGetProvider
     *
     * @group        loyalty_v5
     *
     * @param int         $id
     * @param array       $filter
     * @param int         $limit
     * @param int         $page
     * @param string|null $exceptionClass
     *
     * @return void
     */
    public function testAccountBonusOperationsGet($id, array $filter, $limit, $page, $exceptionClass)
    {
        $client = static::getApiClient();
        if (!empty($exceptionClass)) {
            $this->expectException($exceptionClass);
        }
        $response = $client->request->accountBonusOperationsGet($id, $filter, $limit, $page);
        if (empty($exceptionClass)) {
            static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
            static::assertTrue($response->isSuccessful());
        }
    }

    /**
     * @return array[]
     */
    public function accountBonusOperationsGetProvider()
    {
        return [
            'success_1' => [
                246,
                ['createdAtFrom' => '2023-05-02 17:29:03'],
                100,
                1,
                null,
            ],
            'success_2' => [
                246,
                [],
                50,
                1,
                null,
            ],
            'error_limit' => [
                246,
                [],
                35,
                2,
                'InvalidArgumentException',
            ],
            'error_page' => [
                246,
                [],
                50,
                0,
                'InvalidArgumentException',
            ],
            'error_id' => [
                null,
                [],
                50,
                0,
                'InvalidArgumentException',
            ],
        ];
    }

    /**
     * @dataProvider accountBonusDetailsGetProvider
     *
     * @group        loyalty_v5
     *
     * @param int         $id
     * @param string      $status
     * @param array       $filter
     * @param int         $limit
     * @param int         $page
     * @param string|null $exceptionClass
     *
     * @return void
     */
    public function testAccountBonusDetailsGet($id, $status, array $filter, $limit, $page, $exceptionClass)
    {
        $client = static::getApiClient();
        if (!empty($exceptionClass)) {
            $this->expectException($exceptionClass);
        }
        $response = $client->request->accountBonusDetailsGet($id, $status, $filter, $limit, $page);
        if (empty($exceptionClass)) {
            static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
            static::assertTrue($response->isSuccessful());
        }
    }

    /**
     * @return array[]
     */
    public function accountBonusDetailsGetProvider()
    {
        return [
            'success_1' => [
                246,
                'waiting_activation',
                ['date' => '2023-11-11 18:29:03'],
                100,
                1,
                null,
            ],
            'success_2' => [
                246,
                'burn_soon',
                [],
                50,
                1,
                null,
            ],
            'error_status' => [
                246,
                'something',
                [],
                100,
                1,
                'InvalidArgumentException',
            ],
            'error_limit' => [
                246,
                'waiting_activation',
                [],
                35,
                2,
                'InvalidArgumentException',
            ],
            'error_page' => [
                246,
                'waiting_activation',
                [],
                50,
                0,
                'InvalidArgumentException',
            ],
            'error_id' => [
                null,
                'waiting_activation',
                [],
                50,
                0,
                'InvalidArgumentException',
            ],
        ];
    }

    /**
     * @dataProvider accountEditProvider
     *
     * @group        loyalty_v5
     *
     * @param int         $id
     * @param array       $account
     * @param string|null $exceptionClass
     *
     * @return void
     */
    public function testAccountEdit($id, array $account, $exceptionClass)
    {
        $client = static::getApiClient();
        if (!empty($exceptionClass)) {
            $this->expectException($exceptionClass);
        }
        $response = $client->request->accountEdit($id, $account);
        if (empty($exceptionClass)) {
            static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
            static::assertTrue($response->isSuccessful());
        }
    }

    /**
     * @return array[]
     */
    public function accountEditProvider()
    {
        return [
            'success' => [
                246,
                ['cardNumber' => 'xxx-001'],
                null,
            ],
            'error_data' => [
                246,
                [],
                'InvalidArgumentException',
            ],
            'error_id' => [
                null,
                ['cardNumber' => 'xxx-001'],
                'InvalidArgumentException',
            ],
        ];
    }

    /**
     * @dataProvider accountsGetProvider
     *
     * @group        loyalty_v5
     *
     * @param array       $filter
     * @param int         $limit
     * @param int         $page
     * @param string|null $exceptionClass
     *
     * @return void
     */
    public function testAccountsGet(array $filter,  $limit, $page, $exceptionClass)
    {
        $client = static::getApiClient();
        if (!empty($exceptionClass)) {
            $this->expectException($exceptionClass);
        }
        $response = $client->request->accountsGet($filter,  $limit, $page);
        if (empty($exceptionClass)) {
            static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
            static::assertTrue($response->isSuccessful());
        }
    }

    /**
     * @return array[]
     */
    public function accountsGetProvider()
    {
        return [
            'success_1' => [
                ['sites' => ['gray_sale_3', 'lp-prerelize-demo']],
                100,
                1,
                null,
            ],
            'success_2' => [
                [],
                100,
                1,
                null,
            ],
            'error_limit' => [
                [],
                11,
                1,
                'InvalidArgumentException',
            ],
            'error_page' => [
                [],
                50,
                0,
                'InvalidArgumentException',
            ],
        ];
    }

    /**
     * @dataProvider bonusOperationsGetProvider
     *
     * @group        loyalty_v5
     *
     * @param string|null $cursor
     * @param array       $filter
     * @param int         $limit
     * @param string|null $exceptionClass
     *
     * @return void
     */
    public function testBonusOperationsGet($cursor, array $filter,  $limit, $exceptionClass)
    {
        $client = static::getApiClient();
        if (!empty($exceptionClass)) {
            $this->expectException($exceptionClass);
        }
        $response = $client->request->bonusOperationsGet($cursor, $filter, $limit);
        if (empty($exceptionClass)) {
            static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
            static::assertTrue($response->isSuccessful());
        }
    }

    /**
     * @return array[]
     */
    public function bonusOperationsGetProvider()
    {
        return [
            'success' => [
                null,
                ['loyalties' => [44, 6]],
                20,
                null,
            ],
            'error_limit' => [
                null,
                [],
                11,
                'InvalidArgumentException',
            ],
        ];
    }

    /**
     * @dataProvider calculateProvider
     *
     * @group        loyalty_v5
     *
     * @param string|null $site
     * @param array       $order
     * @param int         $bonuses
     * @param string|null $exceptionClass
     *
     * @return void
     */
    public function testCalculateProvider($site, array $order,  $bonuses, $exceptionClass)
    {
        $client = static::getApiClient();
        if (!empty($exceptionClass)) {
            $this->expectException($exceptionClass);
        }
        $response = $client->request->calculate($site, $order,  $bonuses);
        if (empty($exceptionClass)) {
            static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
            static::assertTrue($response->isSuccessful());
        }
    }

    /**
     * @return array[]
     */
    public function calculateProvider()
    {
        return [
            'success' => [
                'gray_sale_3',
                self::getOrderForCalculate(),
                0,
                null,
            ],
            'error_bonuses' => [
                'gray_sale_3',
                self::getOrderForCalculate(),
                'test',
                'InvalidArgumentException',
            ],
            'error_site' => [
                null,
                self::getOrderForCalculate(),
                0,
                'InvalidArgumentException',
            ],
        ];
    }

    /**
     * @return array
     */
    private static function getOrderForCalculate()
    {
        return [
            "customer" => [
                "id" => 6260,
            ],
            "privilegeType" => "loyalty_level",
            "discountManualPercent" => 10,
            "applyRound" => true,
            "items" => [
                [
                    "initialPrice" => 1000,
                    "discountManualPercent" => 10,
                    "quantity" => 1,
                    "offer" => [
                        "id" => 2539665,
                        "externalId" => "9339",
                        "xmlId" => "9339",
                    ],
                ],
            ],
        ];
    }

    /**
     * @dataProvider loyaltiesGetProvider
     *
     * @group        loyalty_v5
     *
     * @param array       $filter
     * @param int         $limit
     * @param int         $page
     * @param string|null $exceptionClass
     *
     * @return void
     */
    public function testLoyaltiesGet(array $filter, $limit, $page, $exceptionClass)
    {
        $client = static::getApiClient();
        if (!empty($exceptionClass)) {
            $this->expectException($exceptionClass);
        }
        $response = $client->request->loyaltiesGet($filter, $limit,  $page);
        if (empty($exceptionClass)) {
            static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
            static::assertTrue($response->isSuccessful());
        }
    }

    /**
     * @return array[]
     */
    public function loyaltiesGetProvider()
    {
        return [
            'success_1' => [
                ['active' => true],
                20,
                1,
                null,
            ],
            'success_2' => [
                [],
                20,
                1,
                null,
            ],
            'error_limit' => [
                ['active' => true],
                11,
                1,
                'InvalidArgumentException',
            ],
            'error_page' => [
                ['active' => true],
                11,
                0,
                'InvalidArgumentException',
            ],
        ];
    }

    /**
     * @dataProvider loyaltyGetProvider
     *
     * @group        loyalty_v5
     *
     * @param int|null    $id
     * @param string|null $exceptionClass
     *
     * @return void
     */
    public function testLoyaltyGet($id, $exceptionClass)
    {
        $client = static::getApiClient();
        if (!empty($exceptionClass)) {
            $this->expectException($exceptionClass);
        }
        $response = $client->request->loyaltyGet($id);
        if (empty($exceptionClass)) {
            static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
            static::assertTrue($response->isSuccessful());
        }
    }

    /**
     * @return array[]
     */
    public function loyaltyGetProvider()
    {
        return [
            'success' => [
                44,
                null,
            ],
            'error_id' => [
                null,
                'InvalidArgumentException',
            ],
        ];
    }
}
