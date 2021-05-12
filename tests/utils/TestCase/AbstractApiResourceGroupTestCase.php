<?php

/**
 * PHP version 7.3
 *
 * @category AbstractApiResourceGroupTestCase
 * @package  RetailCrm\TestUtils\TestCase
 */

namespace RetailCrm\TestUtils\TestCase;

use Closure;
use DateTime;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Mock\Client as MockClient;
use InvalidArgumentException;
use Liip\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use RetailCrm\Api\Builder\FormEncoderBuilder;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Factory\SerializerFactory;
use RetailCrm\Api\Interfaces\FormEncoderInterface;
use RetailCrm\Api\Interfaces\RequestInterface as RetailCrmRequestInterface;
use RetailCrm\Api\Interfaces\ResponseInterface as RetailCrmResponseInterface;
use RetailCrm\TestUtils\Exception\MatcherException;
use RetailCrm\TestUtils\RequestMatcher;
use RetailCrm\TestUtils\TestConfig;
use RuntimeException;

/**
 * Class AbstractApiResourceGroupTestCase
 *
 * @category AbstractApiResourceGroupTestCase
 * @package  RetailCrm\TestUtils\TestCase
 */
abstract class AbstractApiResourceGroupTestCase extends TestCase
{
    /** @var SerializerInterface */
    protected static $serializer;

    /** @var \RetailCrm\Api\Interfaces\FormEncoderInterface */
    protected static $formEncoder;

    /** @var ResponseFactoryInterface */
    protected static $responseFactory;

    /** @var StreamFactoryInterface */
    protected static $streamFactory;

    /**
     * @return \Http\Mock\Client
     */
    protected static function getMockClient(): MockClient
    {
        $client = new MockClient();
        $client->setDefaultException(new MatcherException());

        return $client;
    }

    /**
     * @param int                                    $code
     * @param object|mixed[]|string $response
     *
     * @return \Psr\Http\Message\ResponseInterface
     * @throws InvalidArgumentException
     */
    protected static function responseJson(int $code, $response): ResponseInterface
    {
        $data = null;

        switch (gettype($response)) {
            case 'string':
                $data = static::getStreamFactory()->createStream((string) $response);
                break;
            case 'array':
            case 'object':
                $data = static::getStreamFactory()->createStream(static::getSerializer()->serialize($response, 'json'));
                break;
            default:
                throw new InvalidArgumentException(sprintf(
                    'Expected string, object, or array, got "%s"',
                    gettype($response)
                ));
        }

        return static::getResponseFactory()->createResponse($code)
            ->withHeader('Content-Type', 'application/json')
            ->withBody($data);
    }

    /**
     * @param string $path
     * @param bool   $header
     *
     * @return \RetailCrm\TestUtils\RequestMatcher
     */
    protected static function createRequestMatcher(string $path = '', bool $header = true): RequestMatcher
    {
        $url = parse_url(TestConfig::getApiUrl());
        $matcher = RequestMatcher::createMatcher($url['host']);

        if ($header) {
            $matcher->setOptionalHeaders(['X-Api-Key' => [TestConfig::getApiKey()]]);
        } else {
            $matcher->setOptionalQueryParams(['apiKey' => TestConfig::getApiKey()]);
        }

        return $matcher->setPath(static::addTrailingSlash($url['path']) . $path);
    }

    /**
     * @param string $path
     * @param bool   $header
     *
     * @return \RetailCrm\TestUtils\RequestMatcher
     */
    protected static function createUnversionedRequestMatcher(string $path = '', bool $header = true): RequestMatcher
    {
        $url = parse_url(TestConfig::getApiUrl());
        $matcher = RequestMatcher::createMatcher($url['host']);

        if ($header) {
            $matcher->setOptionalHeaders(['X-Api-Key' => [TestConfig::getApiKey()]]);
        } else {
            $matcher->setOptionalQueryParams(['apiKey' => TestConfig::getApiKey()]);
        }

        return $matcher->setPath(static::addTrailingSlash(Utils::removeVersionFromUri($url['path'])) . $path);
    }

    /**
     * @param \RetailCrm\Api\Interfaces\RequestInterface $request
     *
     * @return string
     * @throws \ReflectionException
     */
    public static function encodeForm(RetailCrmRequestInterface $request): string
    {
        return static::getFormEncoder()->encode($request);
    }

    /**
     * @param \RetailCrm\Api\Interfaces\RequestInterface $request
     *
     * @return mixed[]
     * @throws \ReflectionException
     */
    public static function encodeFormArray(RetailCrmRequestInterface $request): array
    {
        return static::clearArray(static::getFormEncoder()->encodeArray($request));
    }

    /**
     * @param mixed $value
     *
     * @return string
     */
    public static function serialize($value): string
    {
        return static::getSerializer()->serialize($value, 'json');
    }

    /**
     * @param mixed $value
     *
     * @return mixed[]
     */
    public static function serializeArray($value): array
    {
        return static::getSerializer()->toArray($value);
    }

    /**
     * Removes all empty fields from arrays, works for nested arrays
     *
     * @param mixed[] $arr
     *
     * @return mixed
     */
    public static function clearArray(array $arr)
    {
        if (!is_array($arr)) {
            return $arr;
        }

        $result = [];

        foreach ($arr as $index => $node) {
            $result[$index] = is_array($node) === true ? static::clearArray($node) : trim($node);

            if (
                '' === $result[$index] ||
                null === $result[$index] ||
                (is_array($result[$index]) && count($result[$index]) < 1)
            ) {
                unset($result[$index]);
            }
        }

        return $result;
    }

    /**
     * @param string                                      $expectedJson
     * @param \RetailCrm\Api\Interfaces\ResponseInterface $response
     * @param bool                                        $stripNilValues
     *
     * @throws \JsonException
     */
    protected static function assertModelEqualsToResponse(
        string $expectedJson,
        RetailCrmResponseInterface $response,
        bool $stripNilValues = false
    ): void {
        $expected = json_decode($expectedJson, true, 512, JSON_THROW_ON_ERROR);
        $actual   = self::getSerializer()->toArray($response);

        if ($stripNilValues) {
            $expected = static::clearArray($expected);
            $actual   = static::clearArray($actual);
        }

        self::assertEquals($expected, $actual);
    }

    /**
     * @param string                                      $expectedJson
     * @param \RetailCrm\Api\Interfaces\ResponseInterface $response
     * @param \Closure                                    $callback
     *
     * @throws \JsonException
     */
    protected static function assertModelsCallback(
        string $expectedJson,
        RetailCrmResponseInterface $response,
        Closure $callback
    ): void {
        $expected = json_decode($expectedJson, true, 512, JSON_THROW_ON_ERROR);
        $actual   = self::getSerializer()->toArray($response);

        $callback($expected, $actual);
    }

    /**
     * @param string $text
     *
     * @return string
     */
    private static function addTrailingSlash(string $text): string
    {
        if ('' === $text) {
            return '';
        }

        if ('/' !== $text[strlen($text) - 1]) {
            return $text . '/';
        }

        return $text;
    }

    /**
     * @return \Psr\Http\Message\StreamFactoryInterface
     */
    protected static function getStreamFactory(): StreamFactoryInterface
    {
        if (null === static::$streamFactory) {
            static::$streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        }

        return static::$streamFactory;
    }

    /**
     * @return \Psr\Http\Message\ResponseFactoryInterface
     */
    protected static function getResponseFactory(): ResponseFactoryInterface
    {
        if (null === static::$responseFactory) {
            static::$responseFactory = Psr17FactoryDiscovery::findResponseFactory();
        }

        return static::$responseFactory;
    }

    /**
     * @return \Liip\Serializer\SerializerInterface
     */
    protected static function getSerializer(): SerializerInterface
    {
        if (null === static::$serializer) {
            static::$serializer = SerializerFactory::create();
        }

        return static::$serializer;
    }

    /**
     * @param string $format
     * @param string $dateTime
     *
     * @return \DateTime
     */
    protected static function dateTimeFromFormat(string $format, string $dateTime): DateTime
    {
        $result = DateTime::createFromFormat($format, $dateTime);

        if (!($result instanceof DateTime)) {
            throw new RuntimeException(sprintf(
                'Cannot create DateTime with data "%s" with format "%s"',
                $format,
                $dateTime
            ));
        }

        return $result;
    }

    /**
     * @return \RetailCrm\Api\Interfaces\FormEncoderInterface
     * @throws \RetailCrm\Api\Exception\BuilderException
     */
    private static function getFormEncoder(): FormEncoderInterface
    {
        if (null === static::$formEncoder) {
            static::$formEncoder = (new FormEncoderBuilder())->build();
        }

        return static::$formEncoder;
    }
}
