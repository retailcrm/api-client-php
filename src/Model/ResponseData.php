<?php

/**
 * PHP version 7.3
 *
 * @category ResponseData
 * @package  RetailCrm\Api\Model
 */

namespace RetailCrm\Api\Model;

use Psr\Http\Message\RequestInterface;
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
    /** @var string */
    public $baseUrl;

    /** @var \Psr\Http\Message\RequestInterface */
    public $request;

    /** @var ResponseInterface */
    public $response;

    /** @var string */
    public $type;

    /** @var bool */
    public $custom;

    /** @var \RetailCrm\Api\Interfaces\ResponseInterface */
    public $responseModel;

    /** @var array<int|string, mixed> */
    public $responseArray;

    /**
     * ResponseData constructor.
     *
     * @param string                              $baseUrl
     * @param \Psr\Http\Message\RequestInterface  $request
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param string                              $type
     * @param bool                                $custom
     *
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
     */
    public function __construct(
        string $baseUrl,
        RequestInterface $request,
        ResponseInterface $response,
        string $type,
        bool $custom = false
    ) {
        $this->baseUrl = $baseUrl;
        $this->request = $request;
        $this->response = $response;
        $this->type = $type;
        $this->custom = $custom;
    }
}
