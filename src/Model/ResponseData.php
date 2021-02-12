<?php

/**
 * PHP version 7.3
 *
 * @category ResponseData
 * @package  RetailCrm\Api\Model
 */

namespace RetailCrm\Api\Model;

use Psr\Http\Message\ResponseInterface;

/**
 * Class ResponseData
 *
 * @category ResponseData
 * @package  RetailCrm\Api\Model
 */
class ResponseData
{
    /** @var ResponseInterface */
    public $response;

    /** @var string */
    public $type;

    /** @var \RetailCrm\Api\Interfaces\ResponseInterface */
    public $responseModel;

    /**
     * ResponseData constructor.
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param string                              $type
     */
    public function __construct(ResponseInterface $response, string $type)
    {
        $this->response = $response;
        $this->type     = $type;
    }
}
