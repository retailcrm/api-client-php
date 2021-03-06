<?php

/**
 * PHP version 7.3
 *
 * @category MatcherException
 * @package  RetailCrm\TestUtils\Exception
 */

namespace RetailCrm\TestUtils\Exception;

use Exception;
use Throwable;

/**
 * Class MatcherException
 *
 * @category MatcherException
 * @package  RetailCrm\TestUtils\Exception
 */
class MatcherException extends Exception
{
    /**
     * MatcherException constructor.
     *
     * @param string          $message
     * @param int             $code
     * @param \Throwable|null $previous
     */
    public function __construct($message = "Cannot match any request", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
