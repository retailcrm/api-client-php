<?php

namespace RetailCrm\Http;

use RetailCrm\Exception\CurlException;
use RetailCrm\Response\ApiResponse;

/**
 * PHP version 5.3
 *
 * HTTP client
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion3
 */
class Client
{
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';

    protected $url;
    protected $defaultParameters;
    protected $retry;

    /**
     * Client constructor.
     *
     * @param string $url               api url
     * @param array  $defaultParameters array of parameters
     */
    public function __construct($url, array $defaultParameters = array())
    {
        if (false === stripos($url, 'https://')) {
            throw new \InvalidArgumentException(
                'API schema requires HTTPS protocol'
            );
        }

        $this->url = $url;
        $this->defaultParameters = $defaultParameters;
        $this->retry = 0;
        $this->curlErrors = array(
            CURLE_COULDNT_RESOLVE_PROXY,
            CURLE_COULDNT_RESOLVE_HOST,
            CURLE_COULDNT_CONNECT,
            CURLE_OPERATION_TIMEOUTED,
            CURLE_HTTP_POST_ERROR,
            CURLE_SSL_CONNECT_ERROR,
            CURLE_SEND_ERROR,
            CURLE_RECV_ERROR
        );
    }

    /**
     * Make HTTP request
     *
     * @param string $path       request url
     * @param string $method     (default: 'GET')
     * @param array  $parameters (default: array())
     * @param int    $timeout    (default: 30)
     * @param bool   $verify     (default: false)
     * @param bool   $debug      (default: false)
     *
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     *
     * @return ApiResponse
     */
    public function makeRequest(
        $path,
        $method,
        array $parameters = array(),
        $timeout = 30,
        $verify = false,
        $debug = false
    ) {
        $allowedMethods = array(self::METHOD_GET, self::METHOD_POST);
        if (!in_array($method, $allowedMethods)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Method "%s" is not valid. Allowed methods are %s',
                    $method,
                    implode(', ', $allowedMethods)
                )
            );
        }

        $parameters = array_merge($this->defaultParameters, $parameters);

        $url = $this->url . $path;

        if (self::METHOD_GET === $method && sizeof($parameters)) {
            $url .= '?' . http_build_query($parameters, '', '&');
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $verify);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $verify);

        if (!$debug) {
            curl_setopt($ch, CURLOPT_TIMEOUT, (int) $timeout);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, (int) $timeout);
        } else {
            curl_setopt(
                $ch,
                CURLOPT_TIMEOUT_MS,
                (int) $timeout + ($this->retry * 2000)
            );
        }

        if (self::METHOD_POST === $method) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
        }

        $responseBody = curl_exec($ch);
        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $errno = curl_errno($ch);
        $error = curl_error($ch);

        curl_close($ch);

        if ($errno && in_array($errno, $this->curlErrors) && $this->retry < 3) {
            $errno = null;
            $error = null;
            $this->retry += 1;
            $this->makeRequest(
                $path,
                $method,
                $parameters,
                $timeout,
                $verify,
                $debug
            );
        }

        if ($errno) {
            throw new CurlException($error, $errno);
        }

        return new ApiResponse($statusCode, $responseBody);
    }

    /**
     * Retry connect
     *
     * @return int
     */
    public function getRetry()
    {
        return $this->retry;
    }
}
