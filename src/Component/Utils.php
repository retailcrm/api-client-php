<?php

/**
 * PHP version 7.3
 *
 * @category Utils
 * @package  RetailCrm\Api\Component
 */

namespace RetailCrm\Api\Component;

use Psr\Http\Message\StreamInterface;

/**
 * Class Utils
 *
 * @category Utils
 * @package  RetailCrm\Api\Component
 */
class Utils
{
    /**
     * Remove version from URI.
     *
     * @param string $uri
     *
     * @return string
     */
    public static function removeVersionFromUri(string $uri): string
    {
        return (string) preg_replace('/\/v\d{1,3}\/?/', '', $uri);
    }

    /**
     * Remove trailing slash from provided text.
     *
     * @param string $text
     *
     * @return string
     */
    public static function removeTrailingSlash(string $text): string
    {
        return (string) preg_replace('/\/$/', '', $text);
    }

    /**
     * Returns body stream data (it should work like that in order to keep compatibility with some implementations).
     *
     * @param \Psr\Http\Message\StreamInterface $stream
     *
     * @return string
     */
    public static function getBodyContents(StreamInterface $stream): string
    {
        return $stream->isSeekable() ? $stream->__toString() : $stream->getContents();
    }

    /**
     * Returns target directory for the model cache.
     *
     * @return string
     */
    public static function getModelsCacheDirectory(): string
    {
        $parentDir = implode(DIRECTORY_SEPARATOR, [__DIR__, '..', '..']);

        return implode(DIRECTORY_SEPARATOR, [realpath($parentDir), 'models']);
    }

    /**
     * Returns models directory.
     *
     * @return string
     */
    public static function getModelsDirectory(): string
    {
        return (string) realpath(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), '..', 'src', 'Model']));
    }
}
