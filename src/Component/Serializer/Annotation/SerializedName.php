<?php

declare(strict_types=1);

namespace RetailCrm\Api\Component\Serializer\Annotation;

use RetailCrm\Api\Component\Serializer\Exception\RuntimeException;

/**
 * @Annotation
 * @Target({"PROPERTY","METHOD", "ANNOTATION"})
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @internal
 */
final class SerializedName
{
    /**
     * @var string
     */
    public $name;

    /**
     * SerializedName constructor.
     *
     * @param array<string, string> $values
     */
    public function __construct(array $values)
    {
        if (!isset($values['value']) || !\is_string($values['value'])) {
            throw new RuntimeException(sprintf('"value" must be a string.'));
        }

        $this->name = $values['value'];
    }
}
