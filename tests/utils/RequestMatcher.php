<?php

/**
 * PHP version 7.3
 *
 * @category RequestMatcher
 * @package  RetailCrm\TestUtils
 */

namespace RetailCrm\TestUtils;

use Http\Message\RequestMatcher as RequestMatcherInterface;
use InvalidArgumentException;
use Psr\Http\Message\RequestInterface;
use RetailCrm\Api\Component\Utils;

/**
 * Class RequestMatcher
 *
 * @category RequestMatcher
 * @package  RetailCrm\TestUtils
 */
class RequestMatcher implements RequestMatcherInterface
{
    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $host;

    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $scheme;

    /**
     * @var array[]
     */
    private $headers = [];

    /**
     * @var array[]
     */
    private $optionalHeaders = [];

    /**
     * @var string[][]
     */
    private $queryParams = [];

    /**
     * @var string[][]
     */
    private $optionalQueryParams = [];

    /**
     * @var mixed[][]
     */
    private $optionalPostFields = [];

    /** @var string */
    private $body = '';

    /**
     * RequestMatcher constructor.
     *
     * @param string $host
     */
    private function __construct(string $host)
    {
        $this->host = $host;
    }

    /**
     * @param string $host
     *
     * @return \RetailCrm\TestUtils\Exception\RequestMatcher
     */
    public static function createMatcher(string $host): RequestMatcher
    {
        return new self($host);
    }

    /**
     * @param string $path
     *
     * @return RequestMatcher
     */
    public function setPath(string $path): RequestMatcher
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @param string $host
     *
     * @return RequestMatcher
     */
    public function setHost(string $host): RequestMatcher
    {
        $this->host = $host;
        return $this;
    }

    /**
     * @param string $method
     *
     * @return RequestMatcher
     */
    public function setMethod(string $method): RequestMatcher
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @param string $scheme
     *
     * @return RequestMatcher
     */
    public function setScheme(string $scheme): RequestMatcher
    {
        $this->scheme = $scheme;
        return $this;
    }

    /**
     * @param array[] $headers
     *
     * @return RequestMatcher
     */
    public function setHeaders(array $headers): RequestMatcher
    {
        $this->headers = static::lowercaseKeys($headers);
        return $this;
    }

    /**
     * @param array[] $optionalHeaders
     *
     * @return RequestMatcher
     */
    public function setOptionalHeaders(array $optionalHeaders): RequestMatcher
    {
        $this->optionalHeaders = static::lowercaseKeys($optionalHeaders);
        return $this;
    }

    /**
     * @param string[][] $queryParams
     *
     * @return RequestMatcher
     */
    public function setQueryParams(array $queryParams): RequestMatcher
    {
        $this->queryParams = $queryParams;
        return $this;
    }

    /**
     * @param string[][] $optionalQueryParams
     *
     * @return RequestMatcher
     */
    public function setOptionalQueryParams(array $optionalQueryParams): RequestMatcher
    {
        $this->optionalQueryParams = $optionalQueryParams;
        return $this;
    }

    /**
     * @param mixed[][] $optionalPostFields
     *
     * @return RequestMatcher
     */
    public function setOptionalPostFields(array $optionalPostFields): RequestMatcher
    {
        $this->optionalPostFields = $optionalPostFields;
        return $this;
    }

    /**
     * @param string $body
     *
     * @return RequestMatcher
     */
    public function setBody(string $body): RequestMatcher
    {
        $this->body = $body;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function matches(RequestInterface $request)
    {
        if ($this->scheme && strtoupper($request->getUri()->getScheme()) !== strtoupper($this->scheme)) {
            return false;
        }

        if ($this->method && strtoupper($request->getMethod()) !== strtoupper($this->method)) {
            return false;
        }

        if (null !== $this->path && !preg_match('{' . $this->path . '}', rawurldecode($request->getUri()->getPath()))) {
            return false;
        }

        if (null !== $this->host && $this->host !== $request->getUri()->getHost()) {
            return false;
        }

        if (
            !empty($this->headers) &&
            count(static::arrayDiff($this->headers, static::lowercaseKeys($request->getHeaders()))) > 0
        ) {
            return false;
        }

        if (
            !empty($this->queryParams)
            && count(static::arrayDiff($this->queryParams, $this->getQueryData($request->getUri()->getQuery()))) > 0
        ) {
            return false;
        }

        if (
            !empty($this->optionalHeaders)
            && !$this->firstArrayPresentInSecond($this->optionalHeaders, static::lowercaseKeys($request->getHeaders()))
        ) {
            return false;
        }

        if (
            !empty($this->optionalQueryParams)
            && !$this->firstArrayPresentInSecond(
                $this->optionalQueryParams,
                $this->getQueryData($request->getUri()->getQuery())
            )
        ) {
            return false;
        }

        if (
            !empty($this->optionalPostFields)
            && !$this->firstArrayPresentInSecond(
                $this->optionalPostFields,
                $this->getQueryData(Utils::getBodyContents($request->getBody()))
            )
        ) {
            return false;
        }

        if (!empty($this->body) && Utils::getBodyContents($request->getBody()) !== $this->body) {
            return false;
        }

        return true;
    }

    /**
     * @param mixed[] $first
     * @param mixed[] $second
     *
     * @return bool
     */
    private function firstArrayPresentInSecond(array $first, array $second): bool
    {
        return count(self::arrayDiff($first, self::arrayIntersect($first, $second))) === 0;
    }

    /**
     * Returns an array with the differences between first and second array
     *
     * @param mixed[]|mixed $first
     * @param mixed[]|mixed $second
     *
     * @return mixed[]
     */
    private static function arrayDiff($first, $second): array
    {
        if (!is_array($first)) {
            throw new InvalidArgumentException('$first must be an array!');
        }

        if (!is_array($second)) {
            return $first;
        }

        $result = [];

        foreach ($first as $key => $value) {
            if (!array_key_exists($key, $second)) {
                $result[$key] = $value;
                continue;
            }

            if (is_array($value) && count($value) > 0) {
                $recursiveArrayDiff = static::arrayDiff($value, $second[$key]);

                if (count($recursiveArrayDiff) > 0) {
                    $result[$key] = $recursiveArrayDiff;
                }

                continue;
            }

            $value1 = $value;
            $value2 = $second[$key];

            if (is_float($value1) && is_float($value2)) {
                $value1 = (string) $value1;
                $value2 = (string) $value2;
            }

            if ($value1 !== $value2) {
                $result[$key] = $value;
            }
        }

        return $result;
    }

    /**
     * @param mixed $first
     * @param mixed $second
     *
     * @return mixed[]|bool
     */
    private static function arrayIntersect(&$first, &$second)
    {
        if (!is_array($first) || !is_array($second)) {
            return $first === $second;
        }

        $intersectKeys = array_intersect(array_keys($first), array_keys($second));
        $intersectValues = [];

        foreach ($intersectKeys as $key) {
            if (self::arrayIntersect($first[$key], $second[$key])) {
                $intersectValues[$key] = $first[$key];
            }
        }

        return $intersectValues;
    }

    /**
     * Makes all keys in the array lowercase
     *
     * @param array $items
     *
     * @return array
     */
    private static function lowercaseKeys(array $items): array
    {
        $result = [];

        foreach ($items as $key => $value) {
            $result[strtolower($key)] = $value;
        }

        return $result;
    }

    /**
     * @param string $query
     *
     * @return mixed[]
     */
    private function getQueryData(string $query): array
    {
        $list = [];
        parse_str($query, $list);

        return $list;
    }
}
