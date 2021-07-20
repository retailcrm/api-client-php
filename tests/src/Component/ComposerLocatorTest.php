<?php

/**
 * PHP version 7.3
 *
 * @category ComposerLocatorTest
 * @package  RetailCrm\Tests\Component
 */

namespace RetailCrm\Tests\Component;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Component\ComposerLocator;

/**
 * Class ComposerLocatorTest
 *
 * @category ComposerLocatorTest
 * @package  RetailCrm\Tests\Component
 */
class ComposerLocatorTest extends TestCase
{
    public function testFindAutoloader(): void
    {
        $file = ComposerLocator::findAutoloader();

        self::assertStringContainsString('autoload.php', $file);
        self::assertFileExists($file);
    }

    public function testFindComposerJson(): void
    {
        $file = ComposerLocator::findComposerJson();

        self::assertEmpty($file);
    }
}
