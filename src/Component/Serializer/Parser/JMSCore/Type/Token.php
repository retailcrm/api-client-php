<?php

declare(strict_types=1);

namespace RetailCrm\Api\Component\Serializer\Parser\JMSCore\Type;

use function in_array;

/**
 * @template T of string|int
 * @template V of string|int
 */
final class Token
{
    public static function fromArray(array $source): Token
    {
        return new self($source['value'] ?? '', $source['type'] ?? '', $source['position'] ?? '');
    }

    public static function fromObject(object $source): Token
    {
        return new self($source->value, $source->type, $source->position);
    }

    /**
     * The string value of the token in the input string
     *
     * @readonly
     * @var string|int
     */
    public $value;

    /**
     * The type of the token (identifier, numeric, string, input parameter, none)
     *
     * @readonly
     * @var T|null
     */
    public $type;

    /**
     * The position of the token in the input string
     *
     * @var int
     *
     * @readonly
     */
    public $position;

    /**
     * @param string|int $value
     * @param string|int $type
     */
    public function __construct($value, $type, int $position)
    {
        $this->value    = $value;
        $this->type     = $type;
        $this->position = $position;
    }

    /** @param T ...$types */
    public function isA(...$types): bool
    {
        return in_array($this->type, $types, true);
    }
}
