<?php

/**
 * PHP version 7.3
 *
 * @category ResponseData
 * @package  RetailCrm\Api\Model
 */

namespace RetailCrm\Api\Model;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

/**
 * Class ResponseData
 *
 * @category ResponseData
 * @package  RetailCrm\Api\Model
 */
class ResponseData
{
    /** @var \Psr\Http\Message\UriInterface */
    public $uri;

    /** @var string */
    public $method;

    /** @var ResponseInterface */
    public $response;

    /** @var string */
    public $type;

    /** @var \RetailCrm\Api\Interfaces\ResponseInterface */
    public $responseModel;

    /**
     * ResponseData constructor.
     *
     * @param \Psr\Http\Message\UriInterface      $uri
     * @param string                              $method
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param string                              $type
     */
    public function __construct(string $method, UriInterface $uri, ResponseInterface $response, string $type)
    {
        $this->method   = $method;
        $this->uri      = $uri;
        $this->response = $response;
        $this->type     = $type;
    }
}
