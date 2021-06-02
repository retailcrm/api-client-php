<?php

/**
 * PHP version 7.3
 *
 * @category FilesIteratorChecksumGenerator
 * @package  RetailCrm\Api\Component
 */

namespace RetailCrm\Api\Component;

use Iterator;

/**
 * Class FilesIteratorChecksumGenerator
 *
 * @category FilesIteratorChecksumGenerator
 * @package  RetailCrm\Api\Component
 * @internal
 */
class FilesIteratorChecksumGenerator
{
    /** @var Iterator<mixed> */
    private $iterator;

    /** @var callable */
    private $fileNameAccessor;

    /** @var callable */
    private $keyTransformer;

    /** @var callable */
    private $hashFunc;

    /**
     * FilesIteratorChecksumGenerator constructor.
     *
     * @param Iterator<mixed> $iterator
     */
    public function __construct(Iterator $iterator)
    {
        $this->iterator = $iterator;
    }

    /**
     * @return callable
     */
    public function getFileNameAccessor(): callable
    {
        return $this->fileNameAccessor ?? static function ($fileName) {
            return (string) $fileName;
        };
    }

    /**
     * @param callable $fileNameAccessor
     *
     * @return FilesIteratorChecksumGenerator
     */
    public function setFileNameAccessor(callable $fileNameAccessor): FilesIteratorChecksumGenerator
    {
        $this->fileNameAccessor = $fileNameAccessor;
        return $this;
    }

    /**
     * @return callable
     */
    public function getKeyTransformer(): callable
    {
        return $this->keyTransformer ?? static function ($fileName) {
            return (string) $fileName;
        };
    }

    /**
     * This callable will be used to provide key for the hashes array.
     *
     * @param callable $keyTransformer
     *
     * @return FilesIteratorChecksumGenerator
     */
    public function setKeyTransformer(callable $keyTransformer): FilesIteratorChecksumGenerator
    {
        $this->keyTransformer = $keyTransformer;
        return $this;
    }

    /**
     * @return callable
     */
    public function getHashFunc(): callable
    {
        return $this->hashFunc ?? static function ($fileName) {
            $contents = preg_replace('/\r|\n|\r\n/m', "\n", (string) file_get_contents($fileName));
            return md5($contents ?? '');
        };
    }

    /**
     * This function will receive file name and should return file hash.
     *
     * @param callable $hashFunc
     *
     * @return FilesIteratorChecksumGenerator
     */
    public function setHashFunc(callable $hashFunc): FilesIteratorChecksumGenerator
    {
        $this->hashFunc = $hashFunc;
        return $this;
    }


    /**
     * Generate hash string from the contents of a directory.
     *
     * @return array<string, string>
     */
    public function generateHashes(): array
    {
        $hashes = [];

        foreach ($this->iterator as $item) {
            $fileName = $this->getFileNameAccessor()($item);
            $hashes[(string) $this->getKeyTransformer()($item)] = $this->getHashFunc()($fileName);
        }

        return $hashes;
    }
}
