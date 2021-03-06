<?php

/**
 * PHP version 7.3
 *
 * @category PhpFilesIterator
 * @package  RetailCrm\Tests\Component
 */

namespace RetailCrm\Tests\Component;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Component\PhpFilesIterator;

/**
 * Class PhpFilesIterator
 *
 * @category PhpFilesIterator
 * @package  RetailCrm\Tests\Component
 */
class PhpFilesIteratorTest extends TestCase
{
    public function testIterate(): void
    {
        $iterator = new PhpFilesIterator(__DIR__);

        foreach ($iterator as $item) {
            self::assertArrayHasKey('file', $item);
            self::assertArrayHasKey('namespace', $item);
            self::assertArrayHasKey('fqn', $item);
            self::assertTrue(class_exists($item['fqn']));
        }
    }
}
