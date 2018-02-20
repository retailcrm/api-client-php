<?php

/**
 * PHP version 5.4
 *
 * Settings
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Methods\V4;

/**
 * PHP version 5.4
 *
 * Settings class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait Settings
{

    /**
     * Edit store configuration
     *
     * @param array $configuration
     *
     * @throws \RetailCrm\Exception\InvalidJsonException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \InvalidArgumentException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function storeSettingsEdit(array $configuration)
    {
        if (!count($configuration) || empty($configuration['code'])) {
            throw new \InvalidArgumentException(
                'Parameter `configuration` must contains a data & configuration `code` must be set'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/store/setting/%s/edit', $configuration['code']),
            "POST",
            ['configuration' => json_encode($configuration)]
        );
    }

    /**
     * Edit telephony settings
     *
     * @param string  $code        symbolic code
     * @param string  $clientId    client id
     * @param boolean $active      telephony activity
     * @param mixed   $name        service name
     * @param mixed   $makeCallUrl service init url
     * @param mixed   $image       service logo url(svg file)
     *
     * @param array   $additionalCodes
     * @param array   $externalPhones
     * @param bool    $allowEdit
     * @param bool    $inputEventSupported
     * @param bool    $outputEventSupported
     * @param bool    $hangupEventSupported
     * @param bool    $changeUserStatusUrl
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function telephonySettingsEdit(
        $code,
        $clientId,
        $active = false,
        $name = false,
        $makeCallUrl = false,
        $image = false,
        $additionalCodes = [],
        $externalPhones = [],
        $allowEdit = false,
        $inputEventSupported = false,
        $outputEventSupported = false,
        $hangupEventSupported = false,
        $changeUserStatusUrl = false
    ) {
        if (!isset($code)) {
            throw new \InvalidArgumentException('Code must be set');
        }

        $parameters['code'] = $code;

        if (!isset($clientId)) {
            throw new \InvalidArgumentException('client id must be set');
        }

        $parameters['clientId'] = $clientId;

        if (!isset($active)) {
            $parameters['active'] = false;
        } else {
            $parameters['active'] = $active;
        }

        if (!isset($name)) {
            throw new \InvalidArgumentException('name must be set');
        }

        if (isset($name)) {
            $parameters['name'] = $name;
        }

        if (isset($makeCallUrl)) {
            $parameters['makeCallUrl'] = $makeCallUrl;
        }

        if (isset($image)) {
            $parameters['image'] = $image;
        }

        if (isset($additionalCodes)) {
            $parameters['additionalCodes'] = $additionalCodes;
        }

        if (isset($externalPhones)) {
            $parameters['externalPhones'] = $externalPhones;
        }

        if (isset($allowEdit)) {
            $parameters['allowEdit'] = $allowEdit;
        }

        if (isset($inputEventSupported)) {
            $parameters['inputEventSupported'] = $inputEventSupported;
        }

        if (isset($outputEventSupported)) {
            $parameters['outputEventSupported'] = $outputEventSupported;
        }

        if (isset($hangupEventSupported)) {
            $parameters['hangupEventSupported'] = $hangupEventSupported;
        }

        if (isset($changeUserStatusUrl)) {
            $parameters['changeUserStatusUrl'] = $changeUserStatusUrl;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/telephony/setting/$code/edit",
            "POST",
            ['configuration' => json_encode($parameters)]
        );
    }

    /**
     * Edit delivery configuration
     *
     * @param array $configuration
     *
     * @throws \RetailCrm\Exception\InvalidJsonException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \InvalidArgumentException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function deliverySettingsEdit(array $configuration)
    {
        if (!count($configuration) || empty($configuration['code'])) {
            throw new \InvalidArgumentException(
                'Parameter `configuration` must contains a data & configuration `code` must be set'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/delivery/generic/setting/%s/edit', $configuration['code']),
            "POST",
            ['configuration' => json_encode($configuration)]
        );
    }
}
