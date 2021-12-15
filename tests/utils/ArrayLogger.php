<?php

/**
 * PHP version 7.3
 *
 * @category ArrayLogger
 * @package  RetailCrm\TestUtils
 */

namespace RetailCrm\TestUtils;

use Psr\Log\AbstractLogger;

/**
 * Class ArrayLogger
 *
 * @category ArrayLogger
 * @package  RetailCrm\TestUtils
 */
class ArrayLogger extends AbstractLogger
{
    /** @var string[][] */
    private $messages = [];

    /**
     * @return string[][]
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    /**
     * @return string[]
     */
    public function getLastMessage(): array
    {
        return count($this->messages) > 0 ? end($this->messages) : [];
    }

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed  $level
     * @param string $message
     * @param array  $context
     *
     * @return void
     *
     * @throws \Psr\Log\InvalidArgumentException
     */
    public function log($level, $message, array $context = array()): void
    {
        $this->messages[] = [
            'level'   => $level,
            'message' => $message,
            'context' => $context,
        ];
    }
}
