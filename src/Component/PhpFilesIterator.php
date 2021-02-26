<?php

/**
 * PHP version 7.3
 *
 * @category PhpFilesIterator
 * @package  RetailCrm\Api\Component
 */

namespace RetailCrm\Api\Component;

use Iterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveRegexIterator;
use RegexIterator;

/**
 * Class PhpFilesIterator
 *
 * @category   PhpFilesIterator
 * @package    RetailCrm\Api\Component
 * @implements Iterator<string|int, array<string, string>>
 */
class PhpFilesIterator implements Iterator
{
    private const NAMESPACE_MATCHER = '/namespace\s+((?:\\\\{1,2}\w+|\w+\\\\{1,2})(?:\w+\\\\{0,2})+)/m';

    /** @var Iterator<string|int, string|array> */
    private $parent;

    /**
     * PhpFilesIterator constructor.
     *
     * @param string $directory
     */
    public function __construct(string $directory)
    {
        $this->parent = new RegexIterator(
            new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory)),
            '/^.+\.php$/i',
            RecursiveRegexIterator::GET_MATCH
        );
    }

    /**
     * @inheritDoc
     *
     * @return array<string, string>
     */
    public function current(): array
    {
        $matches = [];
        $file    = $this->parent->current();

        if (is_array($file) && count($file) > 0) {
            $file = $file[0];
        }

        if (empty($file)) {
            return [];
        }

        $result = ['file' => $file];

        preg_match(static::NAMESPACE_MATCHER, (string) file_get_contents($file), $matches);

        if (count($matches) >= 2) {
            $result['namespace'] = $matches[1];
            $result['fqn'] = sprintf('%s\\%s', $matches[1], str_ireplace('.php', '', basename($file)));
        }

        return $result;
    }

    /**
     * @inheritDoc
     */
    public function next(): void
    {
        $this->parent->next();
    }

    /**
     * @inheritDoc
     *
     * @return int|string
     */
    public function key()
    {
        return $this->parent->key();
    }

    /**
     * @inheritDoc
     */
    public function valid(): bool
    {
        return $this->parent->valid();
    }

    /**
     * @inheritDoc
     */
    public function rewind(): void
    {
        $this->parent->rewind();
    }
}
