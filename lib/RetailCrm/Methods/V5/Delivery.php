<?php

/**
 * PHP version 5.4
 *
 * Delivery
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Methods\V5;

use RetailCrm\Methods\V4\Delivery as Previous;

/**
 * PHP version 5.4
 *
 * Delivery class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait Delivery
{
    use Previous;

    /**
     * Get delivery settings
     *
     * @param string $code delivery code
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return void
     */
    public function deliverySettingsGet($code)
    {
        throw new \InvalidArgumentException("This method is not available, setting code: $code is unnecessary");
    }

    /**
     * Get delivery list
     *
     * @param array $filter (default: array())
     * @param int   $page   (default: null)
     * @param int   $limit  (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function deliveryShipmentsList(
        array $filter = [],
        $page = null,
        $limit = null
    ) {
        $parameters = [];

        if (count($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int) $page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int) $limit;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/delivery/shipments',
            "GET",
            $parameters
        );
    }

    /**
     * Create delivery shipment
     *
     * @param array  $shipment     (default: array())
     * @param string $deliveryType (default: string)
     * @param null   $site         (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function deliveryShipmentsCreate(
        array $shipment,
        $deliveryType,
        $site = null
    ) {
        if (!count($shipment)) {
            throw new \InvalidArgumentException(
                'Parameter `shipment` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/delivery/shipments/create',
            "POST",
            $this->fillSite(
                $site,
                [
                    'deliveryShipment' => json_encode($shipment),
                    'deliveryType' => $deliveryType
                ]
            )
        );
    }

    /**
     * Get shipment
     *
     * @param string $id shipment id
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function deliveryShipmentGet($id)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf("/delivery/shipments/%s", $id),
            "GET"
        );
    }

    /**
     * Edit delivery shipment
     *
     * @param array $shipment (default: array())
     * @param null  $site     (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function deliveryShipmentsEdit(array $shipment, $site = null)
    {
        if (!count($shipment)) {
            throw new \InvalidArgumentException(
                'Parameter `shipment` must contains a data'
            );
        }

        if (empty($shipment['id'])) {
            throw new \InvalidArgumentException(
                'Parameter `shipment` must contains an `id` field'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf("/delivery/shipments/%s/edit", $shipment['id']),
            "POST",
            $this->fillSite(
                $site,
                [
                    'deliveryShipment' => json_encode($shipment)
                ]
            )
        );
    }
}
