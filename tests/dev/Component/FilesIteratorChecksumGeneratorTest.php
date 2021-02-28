<?php

/**
 * PHP version 7.3
 *
 * @category FilesIteratorChecksumGeneratorTest
 * @package  RetailCrm\DevTests\Component
 */

namespace RetailCrm\DevTests\Component;

use PHPUnit\Framework\TestCase;
use RetailCrm\Dev\Component\FilesIteratorChecksumGenerator;
use RetailCrm\Dev\Component\PhpFilesIterator;

/**
 * Class FilesIteratorChecksumGeneratorTest
 *
 * @category FilesIteratorChecksumGeneratorTest
 * @package  RetailCrm\DevTests\Component
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
