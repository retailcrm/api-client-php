<?php

namespace RetailCrm\Response;

use RetailCrm\Exception\InvalidJsonException;

/**
 * Response from retailCRM API
 */
class ApiResponse implements \ArrayAccess
{
    // HTTP response status code
    protected $statusCode;

    // response assoc array
    protected $response;

    public function __construct($statusCode, $responseBody = null)
    {
        $this->statusCode = (int) $statusCode;

        if (!empty($responseBody)) {
            $response = json_decode($responseBody, true);

            if (!$response && JSON_ERROR_NONE !== ($error = json_last_error())) {
                throw new InvalidJsonException(
                    "Invalid JSON in the API response body. Error code #$error",
                    $error
                );
            }

            $this->response = $response;
        }
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
     * @param  string $name
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
     * @param  string $name
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
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        throw new \BadMethodCallException('This activity not allowed');
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        throw new \BadMethodCallException('This call not allowed');
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->response[$offset]);
    }

    /**
     * @param mixed $offset
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
