<?php

/**
 * PHP version 7.3
 *
 * @category ModelsChecksumGenerator
 * @package  RetailCrm\Api\Component\Serializer
 */

namespace RetailCrm\Api\Component\Serializer;

use JsonException;
use RetailCrm\Api\Component\Utils as DevUtils;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Component\FilesIteratorChecksumGenerator;
use RetailCrm\Api\Component\PhpFilesIterator;
use RuntimeException;

/**
 * Class ModelsChecksumGenerator
 *
 * @category ModelsChecksumGenerator
 * @package  RetailCrm\Api\Component\Serializer
 * @internal
 */
class ModelsChecksumGenerator
{
    /**
     * Save checksum for models
     *
     * @param array<string, string> $checsums
     */
    public static function saveChecksums(array $checsums = []): void
    {
        try {
            $data = json_encode($checsums, JSON_THROW_ON_ERROR);
        } catch (JsonException $exception) {
            $data = '{}';
        }

        if (false === file_put_contents(static::getChecksumFileName(), $data)) {
            throw new RuntimeException('Cannot save checksums for models.');
        }
    }

    /**
     * Returns true if checksum is correct. Returns false otherwise.
     *
     * @return bool
     */
    public static function verifyChecksum(): bool
    {
        $checksumFile = static::getChecksumFileName();

        if (!file_exists($checksumFile)) {
            return false;
        }

        $oldHashes = static::getStoredChecksums();
        $newHashes = static::generateChecksums();

        foreach ($newHashes as $fileName => $hash) {
            if (!array_key_exists($fileName, $oldHashes)) {
                return false;
            }

            if ($hash !== $oldHashes[$fileName]) {
                return false;
            }
        }

        return true;
    }

    /**
     * @return array<string, string>
     */
    public static function getStoredChecksums(): array
    {
        if (!is_file(static::getChecksumFileName())) {
            return [];
        }

        try {
            return json_decode(
                (string) file_get_contents(static::getChecksumFileName()),
                true,
                512,
                JSON_THROW_ON_ERROR
            );
        } catch (JsonException $exception) {
            return [];
        }
    }

    /**
     * @return array<string, string>
     */
    public static function generateChecksums(): array
    {
        return (new FilesIteratorChecksumGenerator(new PhpFilesIterator(DevUtils::getModelsDirectory())))
            ->setFileNameAccessor(static function (array $item) {
                return $item['file'];
            })->setKeyTransformer(static function (array $item) {
                return $item['fqn'];
            })->generateHashes();
    }

    /**
     * @return string
     */
    private static function getChecksumFileName(): string
    {
        return implode(DIRECTORY_SEPARATOR, [Utils::getModelsCacheDirectory(), 'checksum.json']);
    }
}
