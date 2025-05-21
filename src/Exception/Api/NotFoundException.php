<?php

namespace RetailCrm\Api\Exception\Api;

use RetailCrm\Api\Exception\ApiException;
use RetailCrm\Api\Model\Entity\Customers\Customer;

/**
 * Class NotFoundException
 *
 * @category NotFoundException
 * @package  RetailCrm\Api\Exception\Api
 */
class NotFoundException extends ApiException
{
    public function getCombinedTo(): ?Customer
    {
        return $this->getErrorResponse()->combinedTo;
    }
}
