<?php

/**
 * PHP version 7.3
 *
 * @category FilesIteratorChecksumGeneratorTest
 * @package  RetailCrm\Tests\Component
 */

namespace RetailCrm\Tests\Component;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Component\FilesIteratorChecksumGenerator;
use RetailCrm\Api\Component\PhpFilesIterator;

/**
 * Class FilesIteratorChecksumGeneratorTest
 *
 * @category FilesIteratorChecksumGeneratorTest
 * @package  RetailCrm\Tests\Component
 */
class FilesIteratorChecksumGeneratorTest extends TestCase
{
    public function testGenerateHash(): void
    {
        $iterator = new PhpFilesIterator(__DIR__);
        $hashes   = (new FilesIteratorChecksumGenerator($iterator))
            ->setFileNameAccessor(static function (array $item) {
                return $item['file'];
            })->setKeyTransformer(static function (array $item) {
                return $item['fqn'];
            })->generateHashes();

        $iterator->rewind();

        foreach ($iterator as $item) {
            self::assertArrayHasKey($item['fqn'], $hashes);
        }
    }
}
