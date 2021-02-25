<?php

/**
 * PHP version 7.3
 *
 * @category ClearModelsCommand
 * @package  RetailCrm\Api\Command
 */

namespace RetailCrm\Api\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ClearModelsCommand
 *
 * @category ClearModelsCommand
 * @package  RetailCrm\Api\Command
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
            ->setHelp('Use this command if you want to remove existing models.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $target = static::getTargetDirectory();

        $output->writeln(sprintf('Cleaning up <fg=magenta>"%s"</>...', $target));
        static::recursiveRmdir($target);
        static::createDir($target);
        file_put_contents(implode(DIRECTORY_SEPARATOR, [$target, '.gitkeep']), '');
        $output->writeln('<fg=black;bg=green>Done!</>');

        return 0;
    }
}
