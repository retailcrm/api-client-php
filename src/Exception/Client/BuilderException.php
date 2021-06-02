<?php

/**
 * PHP version 7.3
 *
 * @category BuilderException
 * @package  RetailCrm\Api\Exception
 */

namespace RetailCrm\Api\Exception\Client;

use RetailCrm\Api\Exception\ClientException;
use Throwable;

/**
 * Class BuilderException
 *
 * @category BuilderException
 * @package  RetailCrm\Api\Exception
 */
class BuilderException extends ClientException
{
    /** @var string[] */
    private $invalidArguments;

    /**
     * BuilderException constructor.
     *
     * @param string          $message
     * @param string[]        $invalidArguments
     * @param int             $code
     * @param \Throwable|null $previous
     */
    public function __construct($message = '', array $invalidArguments = [], $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->invalidArguments = $invalidArguments;
    }

    /**
     * Returns invalid arguments list.
     *
     * @return string[]
     */
    public function getInvalidArgument(): array
    {
        return $this->invalidArguments;
    }
}
