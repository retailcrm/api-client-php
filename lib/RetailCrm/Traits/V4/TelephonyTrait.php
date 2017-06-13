<?php

/**
 * PHP version 5.4
 *
 * TelephonyTrait
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Traits\V4;

/**
 * PHP version 5.4
 *
 * TelephonyTrait class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait TelephonyTrait
{
    /**
     * Get telephony settings
     *
     * @param string $code
     *
     * @throws \RetailCrm\Exception\InvalidJsonException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \InvalidArgumentException
     *
     * @return ApiResponse
     */
    public function telephonySettingsGet($code)
    {
        if (empty($code)) {
            throw new \InvalidArgumentException('Parameter `code` must be set');
        }

        return $this->client->makeRequest(
            "/telephony/setting/$code",
            $this->client::METHOD_GET
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
     * @return ApiResponse
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

        return $this->client->makeRequest(
            "/telephony/setting/$code/edit",
            $this->client::METHOD_POST,
            ['configuration' => json_encode($parameters)]
        );
    }

    /**
     * Call event
     *
     * @param string $phone phone number
     * @param string $type  call type
     * @param array  $codes
     * @param string $hangupStatus
     * @param string $externalPhone
     * @param array  $webAnalyticsData
     *
     * @return ApiResponse
     * @internal param string $code additional phone code
     * @internal param string $status call status
     *
     */
    public function telephonyCallEvent(
        $phone,
        $type,
        $codes,
        $hangupStatus,
        $externalPhone = null,
        $webAnalyticsData = []
    ) {
        if (!isset($phone)) {
            throw new \InvalidArgumentException('Phone number must be set');
        }

        if (!isset($type)) {
            throw new \InvalidArgumentException('Type must be set (in|out|hangup)');
        }

        if (empty($codes)) {
            throw new \InvalidArgumentException('Codes array must be set');
        }

        $parameters['phone'] = $phone;
        $parameters['type'] = $type;
        $parameters['codes'] = $codes;
        $parameters['hangupStatus'] = $hangupStatus;
        $parameters['callExternalId'] = $externalPhone;
        $parameters['webAnalyticsData'] = $webAnalyticsData;


        return $this->client->makeRequest(
            '/telephony/call/event',
            $this->client::METHOD_POST,
            ['event' => json_encode($parameters)]
        );
    }

    /**
     * Upload calls
     *
     * @param array $calls calls data
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return ApiResponse
     */
    public function telephonyCallsUpload(array $calls)
    {
        if (!count($calls)) {
            throw new \InvalidArgumentException(
                'Parameter `calls` must contains array of the calls'
            );
        }

        return $this->client->makeRequest(
            '/telephony/calls/upload',
            $this->client::METHOD_POST,
            ['calls' => json_encode($calls)]
        );
    }

    /**
     * Get call manager
     *
     * @param string $phone   phone number
     * @param bool   $details detailed information
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return ApiResponse
     */
    public function telephonyCallManager($phone, $details)
    {
        if (!isset($phone)) {
            throw new \InvalidArgumentException('Phone number must be set');
        }

        $parameters['phone'] = $phone;
        $parameters['details'] = isset($details) ? $details : 0;

        return $this->client->makeRequest(
            '/telephony/manager',
            $this->client::METHOD_GET,
            $parameters
        );
    }
}
