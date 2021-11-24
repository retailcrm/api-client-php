<?php

/**
 * PHP version 7.3
 *
 * @category RequestData
 * @package  RetailCrm\Api\Model
 */

namespace RetailCrm\Api\Model;

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

    /** @var \RetailCrm\Api\Interfaces\RequestInterface|null */
    public $requestModel;

    /** @var mixed */
    public $requestJsonModel;

    /** @var ?\Psr\Http\Message\RequestInterface */
    public $request;

    /**
     * RequestData constructor.
     *
     * @param string                                          $method
     * @param string                                          $uri
     * @param \RetailCrm\Api\Interfaces\RequestInterface|null $requestModel
     * @param mixed                                           $requestJsonModel
     */
    public function __construct(string $method, string $uri, ?RequestModel $requestModel, $requestJsonModel = null)
    {
        $this->method = $method;
        $this->uri = $uri;
        $this->requestModel = $requestModel;
        $this->requestJsonModel = $requestJsonModel;
    }
}
