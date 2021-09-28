<?php

/**
 * PHP version 7.3
 *
 * @category JsonFormFieldMatcher
 * @package  RetailCrm\TestUtils
 */

namespace RetailCrm\TestUtils;

use Pock\Comparator\ComparatorLocator;
use Pock\Comparator\RecursiveArrayComparator;
use Pock\Exception\JsonException;
use Pock\Matchers\QueryMatcher;
use Pock\Traits\JsonDecoderTrait;
use Pock\Traits\SeekableStreamDataExtractor;
use Psr\Http\Message\RequestInterface;

/**
 * Class JsonFormFieldMatcher
 *
 * @category JsonFormFieldMatcher
 * @package  RetailCrm\TestUtils
 */
class JsonFormFieldMatcher extends QueryMatcher
{
    use JsonDecoderTrait;
    use SeekableStreamDataExtractor;

    /** @var string */
    private $key;

    /**
     * @param string                      $key
     * @param string|array<string, mixed> $value
     *
     * @throws \Pock\Exception\JsonException
     */
    public function __construct(string $key, $value)
    {
        $this->key = $key;

        if (is_string($value)) {
            parent::__construct(self::jsonDecode($value, true));
        } else {
            parent::__construct($value);
        }
    }

    /**
     * @inheritDoc
     */
    public function matches(RequestInterface $request): bool
    {
        $query = static::parseQuery(static::getStreamData($request->getBody()));

        if (empty($query) || !array_key_exists($this->key, $query)) {
            return false;
        }

        try {
            $actual = self::jsonDecode($query[$this->key], true);
        } catch (JsonException $exception) {
            return false;
        }

        if (null === $actual) {
            return false;
        }

        return ComparatorLocator::get(RecursiveArrayComparator::class)->compare($actual, $this->query);
    }
}
