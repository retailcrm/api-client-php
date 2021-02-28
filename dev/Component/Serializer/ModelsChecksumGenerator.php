<?php

/**
 * PHP version 7.3
 *
 * @category ModelsChecksumGenerator
 * @package  RetailCrm\Dev\Component\Serializer
 */

namespace RetailCrm\Dev\Component\Serializer;

use JsonException;
use RetailCrm\Dev\Component\Utils as DevUtils;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Dev\Component\FilesIteratorChecksumGenerator;
use RetailCrm\Dev\Component\PhpFilesIterator;
use RuntimeException;

/**
 * Class ModelsChecksumGenerator
 *
 * @category ModelsChecksumGenerator
 * @package  RetailCrm\Dev\Component\Serializer
 * @internal
 */
class ModelsChecksumGenerator
{
    /**
     * Generate checksum for models
     *
     * @throws RuntimeException|JsonException
     */
    public static function generateChecksum(): void
    {
        $data = json_encode(static::getModelsHashes(), JSON_THROW_ON_ERROR);

        if (false === file_put_contents(static::getChecksumFileName(), $data)) {
            throw new RuntimeException('Cannot generate checksum for models.');
        }
    }

    /**
     * Returns true if checksum is correct. Returns false otherwise.
     *
     * @return bool
     * @throws JsonException
     */
    public static function verifyChecksum(): bool
    {
        $checksumFile = static::getChecksumFileName();

        if (!file_exists($checksumFile)) {
            return false;
        }

        $oldHashes = json_decode(
            (string) file_get_contents($checksumFile),
            true,
            512,
            JSON_THROW_ON_ERROR
        );
        $newHashes = static::getModelsHashes();

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
    private static function getModelsHashes(): array
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
