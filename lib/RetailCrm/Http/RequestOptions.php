<?php

/**
 * PHP version 5.4
 *
 * Request options
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */

namespace RetailCrm\Http;

/**
 * PHP version 5.4
 *
 * Request options class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */
class RequestOptions
{
    /** @var array */
    private $headers;

    /** @var int */
    private $clientTimeout;

    /**
     * Init request options.
     *
     * @param array $headers
     * @param int $clientTimeout
     */
    public function __construct($headers = array(), $clientTimeout = 30)
    {
        $this->headers = $headers;
        $this->clientTimeout = $clientTimeout;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @return array
     */
    public function getHttpHeaders()
    {
        $headers = [];

        foreach ($this->headers as $header => $value) {
            $headers[] = sprintf("%s: %s", $header, $value);
        }

        return $headers;
    }

    /**
     * @param array $headers
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * @return int
     */
    public function getClientTimeout()
    {
        return $this->clientTimeout;
    }

    /**
     * @param int $clientTimeout
     *
     * @return self
     */
    public function setClientTimeout($clientTimeout)
    {
        $this->clientTimeout = $clientTimeout;

        return $this;
    }
}
