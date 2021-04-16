<?php

/**
 * PHP version 7.3
 *
 * @category ArraySupportDecorator
 * @package  RetailCrm\Api\Component\Serializer
 */

namespace RetailCrm\Api\Component\Serializer;

use JsonException;
use Liip\Serializer\Context;
use Liip\Serializer\Exception\Exception;
use Liip\Serializer\Exception\UnsupportedFormatException;
use Liip\Serializer\SerializerInterface;
use Pnz\JsonException\Json;

/**
 * Class ArraySupportDecorator
 *
 * @category ArraySupportDecorator
 * @package  RetailCrm\Api\Component\Serializer
 */
class ArraySupportDecorator implements SerializerInterface
{
    /** @var \Liip\Serializer\SerializerInterface */
    private $serializer;

    /**
     * ArraySupportDecorator constructor.
     *
     * @param \Liip\Serializer\SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @inheritDoc
     * @throws \JsonException
     */
    public function serialize($data, string $format, ?Context $context = null): string
    {
        if ('json' !== $format) {
            throw new UnsupportedFormatException('Liip serializer only supports JSON for now');
        }

        if (is_array($data)) {
            try {
                return Json::encode($this->encodeArray($data, $context), JSON_UNESCAPED_SLASHES);
            } catch (JsonException $exception) {
                throw new Exception(
                    sprintf(
                        'Failed to JSON encode data for %s. This is not supposed to happen.',
                        // @phpstan-ignore-next-line
                        is_object($data) ? get_class($data) : gettype($data)
                    ),
                    0,
                    $exception
                );
            }
        }

        return $this->serializer->serialize($data, $format, $context);
    }

    /**
     * @inheritDoc
     */
    public function deserialize(string $data, string $type, string $format, ?Context $context = null)
    {
        if ('json' !== $format) {
            throw new UnsupportedFormatException('Liip serializer only supports JSON for now');
        }

        if (static::isArrayType($type)) {
            try {
                $array = Json::decode($data, true);
            } catch (JsonException $exception) {
                throw new Exception('Failed to JSON decode data. This is not supposed to happen.', 0, $exception);
            }

            return $this->serializer->fromArray($this->decodeArray($array, $type, $context), $type, $context);
        }

        return $this->serializer->deserialize($data, $type, $format, $context);
    }

    /**
     * @inheritDoc
     *
     * @return array<int|string, mixed>
     */
    public function toArray($data, ?Context $context = null): array
    {
        if (is_array($data)) {
            return $this->encodeArray($data, $context);
        }

        return $this->serializer->toArray($data, $context);
    }

    /**
     * @inheritDoc
     *
     * @param array<int|string, mixed> $data
     *
     * @return array<int|string, mixed>|object
     */
    public function fromArray(array $data, string $type, ?Context $context = null)
    {
        if (static::isArrayType($type)) {
            return $this->decodeArray($data, $type, $context);
        }

        return $this->serializer->fromArray($data, $type, $context);
    }

    /**
     * Encodes array of objects into simple multidimensional array.
     *
     * @param mixed[]                       $data
     * @param \Liip\Serializer\Context|null $context
     *
     * @return mixed[]
     * @throws \Liip\Serializer\Exception\Exception
     * @throws \Liip\Serializer\Exception\UnsupportedTypeException
     */
    private function encodeArray(array $data, ?Context $context = null): array
    {
        $result = [];

        foreach ($data as $key => $value) {
            switch (gettype($value)) {
                case 'array':
                    $result[$key] = $this->encodeArray($value, $context);
                    break;
                case 'object':
                    $result[$key] = $this->serializer->toArray($value, $context);
                    break;
                default:
                    $result[$key] = $value;
                    break;
            }
        }

        return $result;
    }

    /**
     * Decodes array of arrays to array of objects.
     *
     * @param mixed[]                       $data
     * @param string                        $type
     * @param \Liip\Serializer\Context|null $context
     *
     * @return array<int|string, mixed>
     * @throws \Liip\Serializer\Exception\Exception
     * @throws \Liip\Serializer\Exception\UnsupportedTypeException
     */
    private function decodeArray(array $data, string $type, ?Context $context = null): array
    {
        $result = [];
        $subtype = static::getArrayValueType($type);

        if (class_exists($subtype)) {
            foreach ($data as $key => $item) {
                if (is_array($item)) {
                    $result[$key] = $this->decodeArray($item, $subtype, $context);
                    continue;
                }

                $result[$key] = $item;
            }

            return $result;
        }

        return $data;
    }

    /**
     * Returns true if provided type is an array.
     *
     * @param string $type
     *
     * @return bool
     */
    private static function isArrayType(string $type): bool
    {
        return false !== strpos($type, 'array');
    }

    /**
     * Returns array value type from types like 'array<string|int, Class\Name>' or 'array<string>'.
     *
     * @param string $type
     *
     * @return string
     */
    private static function getArrayValueType(string $type): string
    {
        $matches = [];

        preg_match_all(
            '/array(\s+)?\<([\w\|\\\\]+)\s+\,\s+([\w\|\\\\]+)\>/m',
            $type,
            $matches,
            PREG_SET_ORDER,
            0
        );

        if (count($matches) > 0) {
            return $matches[count($matches) - 1];
        }

        preg_match_all('/array(\s+)?\<([\w\|\\\\]+)\>/m', $type, $matches, PREG_SET_ORDER, 0);

        if (count($matches) > 0) {
            return $matches[count($matches) - 1];
        }

        return 'mixed';
    }
}
