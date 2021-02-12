<?php

/**
 * PHP version 7.3
 *
 * @category RequestData
 * @package  RetailCrm\Api\Model
 */

namespace RetailCrm\Api\Model;

use Psr\Http\Message\RequestInterface;
use RetailCrm\Api\Interfaces\RequestInterface as RequestModel;

/**
 * Class RequestData
 *
 * @category RequestData
 * @package  RetailCrm\Api\Model
 */
class RequestData
{
    /** @var string */
    public $method;

    /** @var string */
    public $uri;

    /** @var ?\RetailCrm\Api\Interfaces\RequestInterface */
    public $requestModel;

    /** @var ?\Psr\Http\Message\RequestInterface */
    public $request;

    /**
     * RequestData constructor.
     *
     * @param string                                          $method
     * @param string                                          $uri
     * @param \RetailCrm\Api\Interfaces\RequestInterface|null $requestModel
     */
    public function __construct(string $method, string $uri, ?RequestModel $requestModel)
    {
        $this->method       = $method;
        $this->uri          = $uri;
        $this->requestModel = $requestModel;
    }
}
