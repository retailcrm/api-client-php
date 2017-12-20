<?php

/**
 * PHP version 5.4
 *
 * API client references test class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Tests\Methods\Version5;

use RetailCrm\Test\TestCase;

/**
 * Class ApiClientReferenceTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
class ApiClientReferenceTest extends TestCase
{
    /**
     * @group reference_v5
     * @dataProvider getListDictionaries
     * @param $name
     */
    public function testList($name)
    {

        $client = static::getApiClient();

        $method = $name . 'List';
        echo $method;
        $response = $client->request->$method();

        /* @var \RetailCrm\Response\ApiResponse $response */

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue($response->isSuccessful());
        static::assertTrue(isset($response[$name]));
        static::assertTrue(is_array($response[$name]));
    }

    /**
     * @group reference_v5
     * @dataProvider getEditDictionaries
     * @expectedException \InvalidArgumentException
     *
     * @param $name
     */
    public function testEditingException($name)
    {

        $client = static::getApiClient();

        $method = $name . 'Edit';
        $client->request->$method([]);
    }

    /**
     * @group reference_v5
     * @dataProvider getEditDictionaries
     *
     * @param $name
     */
    public function testEditing($name)
    {

        $client = static::getApiClient();

        $code = 'dict-' . strtolower($name) . '-' . time();
        $method = $name . 'Edit';
        $params = [
            'code' => $code,
            'name' => 'Aaa' . $code,
            'active' => false
        ];
        if ($name == 'statuses') {
            $params['group'] = 'new';
        }

        $response = $client->request->$method($params);
        /* @var \RetailCrm\Response\ApiResponse $response */

        static::assertTrue(in_array($response->getStatusCode(), [200, 201]));

        $response = $client->request->$method([
            'code' => $code,
            'name' => 'Bbb' . $code,
            'active' => false
        ]);

        static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
    }

    /**
     * @group reference_v5
     * @group site
     */
    public function testSiteEditing()
    {
        $name = 'sites';

        $client = static::getApiClient();

        $code = 'dict-' . strtolower($name) . '-' . time();
        $method = $name . 'Edit';
        $params = [
            'code' => $code,
            'name' => 'Aaa',
            'active' => false
        ];

        $response = $client->request->$method($params);
        /* @var \RetailCrm\Response\ApiResponse $response */

        static::assertEquals(400, $response->getStatusCode());

        if ($code == $client->request->getSite()) {
            $method = $name . 'Edit';
            $params = [
                'code' => $code,
                'name' => 'Aaa' . time(),
                'active' => false
            ];

            $response = $client->request->$method($params);
            static::assertEquals(200, $response->getStatusCode());
        }
    }

    /**
     * @return array
     */
    public function getListDictionaries()
    {
        return [
            ['deliveryServices'],
            ['deliveryTypes'],
            ['orderMethods'],
            ['orderTypes'],
            ['paymentStatuses'],
            ['paymentTypes'],
            ['productStatuses'],
            ['statusGroups'],
            ['statuses'],
            ['sites'],
            ['stores'],
            ['couriers'],
            ['costs']
        ];
    }

    /**
     * @return array
     */
    public function getEditDictionaries()
    {
        return [
            ['deliveryServices'],
            ['deliveryTypes'],
            ['orderMethods'],
            ['orderTypes'],
            ['paymentStatuses'],
            ['paymentTypes'],
            ['productStatuses'],
            ['statuses'],
        ];
    }
}
