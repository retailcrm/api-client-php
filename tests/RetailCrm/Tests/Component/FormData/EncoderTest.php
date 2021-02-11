<?php

/**
 * PHP version 7.3
 *
 * @category EncoderTest
 * @package  Component\FormData
 */

namespace RetailCrm\Tests\Component\FormData;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Component\FormData\FormEncoder;
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
        $encoder = new FormEncoder();
        $result = $encoder->encodeArray($sample);

        self::assertArrayHasKey('exists', $result);
        self::assertArrayHasKey('filter', $result);
        self::assertEquals('data', $result['exists']);
    }

    /**
     * @dataProvider objectProvider
     */
    public function testEncode(EncoderTestObject $sample): void
    {
        $encoder = new FormEncoder();
        $result = $encoder->encode($sample);

        print_r($result);
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
