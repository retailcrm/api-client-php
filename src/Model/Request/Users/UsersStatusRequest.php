<?php

/**
 * PHP version 7.3
 *
 * @category UsersStatusRequest
 * @package  RetailCrm\Api\Model\Request\Users
 */

namespace RetailCrm\Api\Model\Request\Users;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class UsersStatusRequest
 *
 * @category UsersStatusRequest
 * @package  RetailCrm\Api\Model\Request\Users
 */
class UsersStatusRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("status")
     */
    public $status;

    /**
     * UsersStatusRequest constructor.
     *
     * @param string $status
     */
    public function __construct(string $status = '')
    {
        if ('' !== $status) {
            $this->status = $status;
        }
    }
}
