<?php

/**
 * PHP version 7.3
 *
 * @category ValidationException
 * @package  RetailCrm\Api\Component\Exception
 */

namespace RetailCrm\Api\Component\Exception;

use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Throwable;

/**
 * Class ValidationException
 *
 * @category ValidationException
 * @package  RetailCrm\Component\Exception
 */
class ValidationException extends \Exception
{
    /**
     * @var ConstraintViolationListInterface<ConstraintViolation>|null
     */
    private $violations;

    /**
     * ValidationException constructor.
     *
     * @param string                                                     $message
     * @param ConstraintViolationListInterface<ConstraintViolation>|null $violations
     * @param int                                                        $code
     * @param \Throwable|null                                            $previous
     */
    public function __construct(
        $message = "",
        ?ConstraintViolationListInterface $violations = null,
        $code = 0,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);

        $this->violations = $violations;
    }

    /**
     * @return ConstraintViolationListInterface<ConstraintViolation>|null
     */
    public function getViolations(): ?ConstraintViolationListInterface
    {
        return $this->violations;
    }
}
