<?php

/**
 * PHP version 7.3
 *
 * @category ClearModelsCommand
 * @package  RetailCrm\Api\Command
 */

namespace RetailCrm\Api\Command;

use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Component\PhpFilesIterator;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ClearModelsCommand
 *
 * @category ClearModelsCommand
 * @package  RetailCrm\Api\Command
 * @internal
 *
 * @SuppressWarnings(PHPMD.UnusedFormalParameter)
 */
class ClearModelsCommand extends AbstractModelsProcessorCommand
{
    /**
     * Sets description and help for a command.
     */
    protected function configure(): void
    {
        $this->setName('models:clear')
            ->setDescription('Removes all generated models, leaves only empty directory behind.')
            ->setHelp('Use this command if you want to remove existing model cache.');
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $target = Utils::getModelsCacheDirectory();

        if (!is_dir($target)) {
            $output->writeln('<error>The target directory does not exist.</error>');
            $output->writeln('<info>You can safely use "bin/console models:generate" to generate models.</info>');

            return -1;
        }

        $output->writeln(sprintf('Cleaning up <fg=magenta>"%s"</>...', $target));

        if (self::isVerbose($output)) {
            $output->writeln('');
        }

        $checksumFile = implode(DIRECTORY_SEPARATOR, [$target, 'checksum.json']);
        $models       = new PhpFilesIterator($target);

        foreach ($models as $model) {
            if (file_exists($model['file'])) {
                unlink($model['file']);

                if (self::isVerbose($output)) {
                    $output->writeln(sprintf('- Removed <fg=magenta>"%s"</>', $model['file']));
                }
            }
        }

        if (file_exists($checksumFile)) {
            unlink($checksumFile);
        }

        if (self::isVerbose($output)) {
            $output->writeln('');
        }

        $output->writeln('<fg=black;bg=green> ✓ Done!</>');

        return 0;
    }
}
