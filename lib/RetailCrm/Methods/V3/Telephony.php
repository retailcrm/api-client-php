<?php

/**
 * PHP version 5.4
 *
 * Telephony
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */

namespace RetailCrm\Methods\V3;

/**
 * PHP version 5.4
 *
 * Telephony class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */
trait Telephony
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
     * @return \RetailCrm\Response\ApiResponse
     */
    public function telephonySettingsGet($code)
    {
        if (empty($code)) {
            throw new \InvalidArgumentException('Parameter `code` must be set');
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/telephony/setting/$code",
            "GET"
        );
    }

    /**
     * Call event
     *
     * @param string $phone phone number
     * @param string $type call type
     * @param array  $codes
     * @param array  $userIds
     * @param string $callExternalId
     * @param string $hangupStatus
     * @param string $externalPhone
     * @param array  $webAnalyticsData
     * @param string $site (default: null)
     *
     * @return \RetailCrm\Response\ApiResponse
     * @internal param string $code additional phone code
     * @internal param string $status call status
     */
    public function telephonyCallEvent(
        $phone,
        $type,
        $codes,
        $userIds = [],
        $hangupStatus = null,
        $externalPhone = null,
        $callExternalId = null,
        $webAnalyticsData = [],
        $site = null
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

        if (!empty($userIds)) {
            $parameters['userIds'] = $userIds;
        }

        $parameters['hangupStatus'] = $hangupStatus;
        $parameters['callExternalId'] = $callExternalId;
        $parameters['externalPhone'] = $externalPhone;
        $parameters['webAnalyticsData'] = $webAnalyticsData;

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/telephony/call/event',
            "POST",
            ['event' => json_encode($this->fillSite($site, $parameters))]
        );
    }

    /**
     * Upload calls
     *
     * @param array $calls        calls data
     *
     * @param bool  $autoFillSite fill site code from API client in provided calls
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function telephonyCallsUpload(array $calls, $autoFillSite = false)
    {
        if (!count($calls)) {
            throw new \InvalidArgumentException(
                'Parameter `calls` must contains array of the calls'
            );
        }

        if ($autoFillSite) {
            foreach ($calls as $key => $call) {
                $calls[$key] = $this->fillSite(null, $call);
            }
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/telephony/calls/upload',
            "POST",
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
     * @return \RetailCrm\Response\ApiResponse
     */
    public function telephonyCallManager($phone, $details)
    {
        if (!isset($phone)) {
            throw new \InvalidArgumentException('Phone number must be set');
        }

        $parameters['phone'] = $phone;
        $parameters['details'] = isset($details) ? $details : 0;

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/telephony/manager',
            "GET",
            $parameters
        );
    }
}
