<?php

/**
 * PHP 7.3
 *
 * @category ClientException
 * @package  RetailCrm\Api\Exception
 */

namespace RetailCrm\Api\Exception;

use Exception;
use RetailCrm\Api\Interfaces\ClientExceptionInterface;

/**
 * Class ClientException
 *
 * @category ClientException
 * @package  RetailCrm\Api\Exception
 */
abstract class ClientException extends Exception implements ClientExceptionInterface
{
}
