<?php

declare(strict_types=1);

namespace RetailCrm\Api\Component\Serializer\Exception;

use RuntimeException as BaseException;

/**
 * RuntimeException for the Serializer.
 *
 * @category RuntimeException
 * @package  RetailCrm\Api\Component\Serializer\Exception
 * @author   Johannes M. Schmitt <schmittjoh@gmail.com>
 * @internal
 */
class RuntimeException extends BaseException
{
    public static function noMetadataForProperty(string $class, string $prop): self
    {
        return new self(sprintf(
            'You must define a type for %s::$%s.',
            $class,
            $prop
        ));
    }
}
