<?php

/**
 * PHP version 5.4
 *
 * HTTP client
 *
 * @category RetailCrm
 * @package  RetailCrm
 */

namespace RetailCrm\Http;

use Psr\Log\LoggerInterface;
use RetailCrm\Exception\CurlException;
use RetailCrm\Exception\InvalidJsonException;
use RetailCrm\Exception\LimitException;
use RetailCrm\Exception\NotFoundException;
use RetailCrm\Response\ApiResponse;

/**
 * PHP version 5.4
 *
 * HTTP client
 *
 * @category RetailCrm
 * @package  RetailCrm
 */
class Client
{
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';

    protected $url;
    protected $defaultParameters;
    protected $options;

    /**
     * @var LoggerInterface|null $logger
     */
    protected $logger;

    /**
     * Client constructor.
     *
     * @param string $url               api url
     * @param array  $defaultParameters array of parameters
     * @param bool   $debug             debug mode
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($url, array $defaultParameters = [], $debug = false)
    {
        if (false === stripos($url, 'https://') && false === $debug) {
            throw new \InvalidArgumentException(
                'API schema requires HTTPS protocol'
            );
        }

        $this->url = $url;
        $this->defaultParameters = $defaultParameters;
        $this->options = new RequestOptions();
    }

    /**
     * Make HTTP request
     *
     * @param string $path       request url
     * @param string $method     (default: 'GET')
     * @param array  $parameters (default: array())
     * @param bool   $fullPath   (default: false)
     *
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     *
     * @throws \InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     *
     * @return ApiResponse
     */
    public function makeRawRequest(
        $path,
        $method,
        array $parameters = [],
        $fullPath = false
    ) {
        $allowedMethods = [self::METHOD_GET, self::METHOD_POST];

        if (!in_array($method, $allowedMethods, false)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Method "%s" is not valid. Allowed methods are %s',
                    $method,
                    implode(', ', $allowedMethods)
                )
            );
        }

        $parameters = array_merge($this->defaultParameters, $parameters);

        $url = $fullPath ? $path : $this->url . $path;

        if (self::METHOD_GET === $method && count($parameters)) {
            $url .= '?' . http_build_query($parameters, '', '&');
        }

        if (self::METHOD_POST === $method && '/files/upload' == $path) {
            $url .= '?apiKey=' . $parameters['apiKey'];
        }

        $curlHandler = curl_init();
        curl_setopt($curlHandler, CURLOPT_URL, $url);
        curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandler, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curlHandler, CURLOPT_FAILONERROR, false);
        curl_setopt($curlHandler, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curlHandler, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curlHandler, CURLOPT_TIMEOUT, $this->options->getClientTimeout());
        curl_setopt($curlHandler, CURLOPT_CONNECTTIMEOUT, $this->options->getClientTimeout());

        if ($this->options->getHeaders()) {
            curl_setopt($curlHandler, CURLOPT_HTTPHEADER, $this->options->getHttpHeaders());
        }

        $this->logRequest($url, $method, $parameters);

        if (self::METHOD_POST === $method) {
            curl_setopt($curlHandler, CURLOPT_POST, true);

            if ('/files/upload' == $path) {
                curl_setopt($curlHandler, CURLOPT_POSTFIELDS, file_get_contents($parameters['file']));
            } else {
                curl_setopt($curlHandler, CURLOPT_POSTFIELDS, $parameters);
            }
        }

        list($statusCode, $responseBody) = $this->checkResponse($curlHandler, $method);

        $this->logResponse($responseBody, $statusCode);

        return new ApiResponse($statusCode, $responseBody);
    }

    /**
     * Make HTTP request and deserialize JSON body (throws exception otherwise)
     *
     * @param string $path       request url
     * @param string $method     (default: 'GET')
     * @param array  $parameters (default: array())
     * @param bool   $fullPath   (default: false)
     *
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     *
     * @throws \InvalidArgumentException
     * @throws CurlException
     * @throws InvalidJsonException
     *
     * @return ApiResponse
     */
    public function makeRequest(
        $path,
        $method,
        array $parameters = [],
        $fullPath = false
    ) {
        return $this->makeRawRequest($path, $method, $parameters, $fullPath)->asJsonResponse();
    }

    /**
     * Set request options
     *
     * @param RequestOptions $options
     */
    public function setOptions(RequestOptions $options)
    {
        $this->options = $options;
    }

    /**
     * Set logger
     *
     * @param LoggerInterface|null $logger
     */
    public function setLogger($logger = null)
    {
        $this->logger = $logger;
    }

    /**
     * @param $curlHandler
     * @param $method
     *
     * @return array
     */
    private function checkResponse($curlHandler, $method)
    {
        $responseBody = curl_exec($curlHandler);
        $statusCode = curl_getinfo($curlHandler, CURLINFO_HTTP_CODE);
        $contentType = curl_getinfo($curlHandler, CURLINFO_CONTENT_TYPE);

        if (503 === $statusCode) {
            throw new LimitException("Service temporary unavailable");
        }

        if (
            (404 === $statusCode && false !== stripos($responseBody, 'Account does not exist'))
            || ('GET' !== $method && 405 === $statusCode && false !== stripos($contentType, 'text/html'))
        ) {
            throw new NotFoundException("Account does not exist");
        }

        $errno = curl_errno($curlHandler);
        $error = curl_error($curlHandler);

        curl_close($curlHandler);

        if ($errno) {
            throw new CurlException($error, $errno);
        }

        return [$statusCode, $responseBody];
    }

    /**
     * @param string $url
     * @param string $method
     * @param array $params
     */
    private function logRequest($url, $method, $params)
    {
        if (null === $this->logger) {
            return;
        }

        $message = 'Send request: ' . $method . ' ' . $url;

        if (!empty($params)) {
            $message .= ' with params: ' . json_encode($params);
        }

        $this->logger->info($message);
    }

    /**
     * @param string $responseBody
     * @param int $statusCode
     */
    private function logResponse($responseBody, $statusCode)
    {
        if (null === $this->logger) {
            return;
        }

        $message = 'Response with code ' . $statusCode . ' received with body: ' . $responseBody;

        $this->logger->info($message);
    }
}
