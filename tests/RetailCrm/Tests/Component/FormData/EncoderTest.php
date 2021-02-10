<?php

/**
 * PHP version 7.3
 *
 * @category EncoderTest
 * @package  Component\FormData
 */

namespace RetailCrm\Tests\Component\FormData;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Component\FormData\Encoder;
use RetailCrm\Test\EncoderTestObject;

/**
 * Class EncoderTest
 *
 * @category EncoderTest
 * @package  Component\FormData
 */
class EncoderTest extends TestCase
{
    public function testEncodeArray(): void
    {
        $testObject            = new EncoderTestObject();
        $testObject->keyExists = 'data';
        $testObject->self = new EncoderTestObject();
        $testObject->self->keyExists = 'data2';

        $encoder = new Encoder();
        $result = $encoder->encodeArray($testObject);

        print_r($result);
        self::assertArrayHasKey('exists', $result);
        self::assertEquals('data', $result['exists']);
    }
}
