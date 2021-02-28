<?php

declare(strict_types=1);

namespace RetailCrm\Api\Component\Serializer\Annotation;

use RetailCrm\Api\Component\Serializer\Exception\RuntimeException;

/**
 * @Annotation
 * @Target("CLASS")
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @internal
 */
final class ExclusionPolicy
{
    public const NONE = 'NONE';
    public const ALL = 'ALL';

    /**
     * @var string
     */
    public $policy;

    /**
     * ExclusionPolicy constructor.
     *
     * @param array<string, string> $values
     */
    public function __construct(array $values)
    {
        $value = self::NONE;

        if (array_key_exists('value', $values)) {
            $value = $values['value'];
        }

        if (array_key_exists('policy', $values)) {
            $value = $values['policy'];
        }

        if (!\is_string($value)) {
            throw new RuntimeException('Exclusion policy value must be of string type.');
        }

        $value = strtoupper($value);

        if (self::NONE !== $value && self::ALL !== $value) {
            throw new RuntimeException('Exclusion policy must either be "ALL", or "NONE".');
        }

        $this->policy = $value;
    }
}
