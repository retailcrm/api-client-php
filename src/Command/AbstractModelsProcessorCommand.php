<?php

/**
 * PHP version 7.3
 *
 * @category AbstractModelsProcessorCommand
 * @package  RetailCrm\Api\Command
 */

namespace RetailCrm\Api\Command;

use RuntimeException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class AbstractModelsProcessorCommand
 *
 * @category AbstractModelsProcessorCommand
 * @package  RetailCrm\Api\Command
 * @internal
 */
abstract class AbstractModelsProcessorCommand extends Command
{
    /**
     * Returns true if "-v" was provided.
     *
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return bool
     */
    protected static function isVerbose(OutputInterface $output): bool
    {
        return $output->getVerbosity() >= OutputInterface::VERBOSITY_VERBOSE;
    }

    /**
     * Create directory
     *
     * @param string $dir
     *
     * @throws RuntimeException
     */
    protected static function createDir(string $dir): void
    {
        if (is_dir($dir)) {
            return;
        }

        if (false === mkdir($dir, 0777, true) && false === is_dir($dir)) {
            throw new RuntimeException(sprintf('Could not create directory "%s".', $dir));
        }
    }
}
