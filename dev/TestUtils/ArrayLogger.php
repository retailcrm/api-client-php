<?php

/**
 * PHP version 7.3
 *
 * @category ArrayLogger
 * @package  RetailCrm\Dev\TestUtils
 */

namespace RetailCrm\Dev\TestUtils;

use Psr\Log\AbstractLogger;

/**
 * Class ArrayLogger
 *
 * @category ArrayLogger
 * @package  RetailCrm\Dev\TestUtils
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
    public function log($level, $message, array $context = array())
    {
        $this->messages[] = [
            'level'   => $level,
            'message' => $message,
            'context' => $context,
        ];
    }
}
