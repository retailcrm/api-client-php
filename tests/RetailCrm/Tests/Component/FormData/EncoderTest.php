<?php

/**
 * PHP version 7.3
 *
 * @category EncoderTest
 * @package  Component\FormData
 */

namespace RetailCrm\Tests\Component\FormData;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Builder\FormEncoderBuilder;
use RetailCrm\Test\EncoderTestObject;

/**
 * Class EncoderTest
 *
 * @category EncoderTest
 * @package  Component\FormData
 */
class EncoderTest extends TestCase
{
    /**
     * @dataProvider objectProvider
     */
    public function testEncodeArray(EncoderTestObject $sample): void
    {
        $encoder = (new FormEncoderBuilder())->build();
        $result = $encoder->encodeArray($sample);

        self::assertArrayHasKey('exists', $result);
        self::assertArrayHasKey('filter', $result);
        self::assertArrayHasKey('encodedSelf', $result);
        self::assertEquals('data', $result['exists']);
        self::assertEquals([
            'sites' => [91],
            'first' => 'one',
            'second' => 'two',
        ], $result['filter']);
        self::assertEquals('{"key_exists":"data2"}', $result['encodedSelf']);
    }

    /**
     * @dataProvider objectProvider
     */
    public function testEncode(EncoderTestObject $sample): void
    {
        $result = [];
        $encoder = (new FormEncoderBuilder())->build();

        parse_str($encoder->encode($sample), $result);

        self::assertArrayHasKey('exists', $result);
        self::assertArrayHasKey('filter', $result);
        self::assertArrayHasKey('encodedSelf', $result);
        self::assertEquals('data', $result['exists']);
        self::assertEquals([
            'sites' => [91],
            'first' => 'one',
            'second' => 'two',
        ], $result['filter']);
        self::assertEquals('{"key_exists":"data2"}', $result['encodedSelf']);
    }

    /**
     * @return \RetailCrm\Test\EncoderTestObject[][]
     */
    public function objectProvider(): array
    {
        $testObject            = new EncoderTestObject();
        $testObject->keyExists = 'data';
        $testObject->keyFilter = [
            'sites' => [91],
            'first' => 'one',
            'second' => 'two'
        ];
        $testObject->self = new EncoderTestObject();
        $testObject->self->keyExists = 'data2';

        return [['sample' => $testObject]];
    }
}
