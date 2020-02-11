<?php

/**
 * PHP version 5.4
 *
 * Response from retailCRM API
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */

namespace RetailCrm\Response;

use RetailCrm\Exception\InvalidJsonException;

/**
 * PHP version 5.4
 *
 * Response from retailCRM API
 *
 * @property mixed success
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */
class ApiResponse implements \ArrayAccess
{
    // HTTP response status code
    protected $statusCode;

    // raw json response
    protected $rawResponse;

    // response assoc array
    protected $response;

    /**
     * ApiResponse constructor.
     *
     * @param int   $statusCode   HTTP status code
     * @param mixed $responseBody HTTP body
     *
     * @throws InvalidJsonException
     */
    public function __construct($statusCode, $responseBody = null)
    {
        $this->statusCode = (int) $statusCode;
        $this->rawResponse = $responseBody;
    }

    /**
     * Deserialize JSON from raw response body
     *
     * @return $this
     */
    public function asJsonResponse()
    {
        if (!empty($this->rawResponse)) {
            $response = json_decode($this->rawResponse, true);

            if (!$response && JSON_ERROR_NONE !== ($error = json_last_error())) {
                throw new InvalidJsonException(
                    "Invalid JSON in the API response body. Error code #$error",
                    $error
                );
            }

            $this->response = $response;
        }

        return $this;
    }

    /**
     * Return HTTP response status code
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Return HTTP response
     *
     * @return array
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Return HTTP raw response body
     *
     * @return string
     */
    public function getResponseBody()
    {
        return $this->rawResponse;
    }

    /**
     * HTTP request was successful
     *
     * @return bool
     */
    public function isSuccessful()
    {
        return $this->statusCode < 400;
    }

    /**
     * Allow to access for the property throw class method
     *
     * @param string $name      method name
     * @param mixed  $arguments method parameters
     *
     * @throws \InvalidArgumentException
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        // convert getSomeProperty to someProperty
        $propertyName = strtolower(substr($name, 3, 1)) . substr($name, 4);

        if (!isset($this->response[$propertyName])) {
            throw new \InvalidArgumentException("Method \"$name\" not found");
        }

        return $this->response[$propertyName];
    }

    /**
     * Allow to access for the property throw object property
     *
     * @param string $name property name
     *
     * @throws \InvalidArgumentException
     *
     * @return mixed
     */
    public function __get($name)
    {
        if (!isset($this->response[$name])) {
            throw new \InvalidArgumentException("Property \"$name\" not found");
        }

        return $this->response[$name];
    }

    /**
     * Allow to check if the property exists through object property
     *
     * @param string $name property name
     *
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->response[$name]);
    }

    /**
     * Offset set
     *
     * @param mixed $offset offset
     * @param mixed $value  value
     *
     * @throws \BadMethodCallException
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        throw new \BadMethodCallException('This activity not allowed');
    }

    /**
     * Offset unset
     *
     * @param mixed $offset offset
     *
     * @throws \BadMethodCallException
     * @return void
     */
    public function offsetUnset($offset)
    {
        throw new \BadMethodCallException('This call not allowed');
    }

    /**
     * Check offset
     *
     * @param mixed $offset offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->response[$offset]);
    }

    /**
     * Get offset
     *
     * @param mixed $offset offset
     *
     * @throws \InvalidArgumentException
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        if (!isset($this->response[$offset])) {
            throw new \InvalidArgumentException("Property \"$offset\" not found");
        }

        return $this->response[$offset];
    }
}

