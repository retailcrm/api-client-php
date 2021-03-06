<?php

/**
 * PHP version 7.3
 *
 * @category GenerateModelsCommand
 * @package  RetailCrm\Api\Command
 */

namespace RetailCrm\Api\Command;

use RetailCrm\Api\Component\ModelsGenerator;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class GenerateModelsCommand
 *
 * @category GenerateModelsCommand
 * @package  RetailCrm\Api\Command
 * @internal
 *
 * @SuppressWarnings(PHPMD.UnusedFormalParameter)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 *
 * @see There is no need to refactor generator into separate service. Its logic won't be used anywhere else.
 */
class GenerateModelsCommand extends AbstractModelsProcessorCommand
{
    /**
     * Sets description and help for a command.
     */
    protected function configure(): void
    {
        $this->setName('models:generate')
            ->setDescription('Converts all JMS models to static (de)serialization code.')
            ->setHelp('Use this command after making any changes to the models.')
            ->addOption(
                'all',
                'a',
                InputOption::VALUE_OPTIONAL,
                'Generate cache for all models instead of changed models only.',
                false
            );
    }

    /**
     * Execute the command.
     *
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $verbose   = static::isVerbose($output);
        $generator = new ModelsGenerator(false !== $input->getOption('all'));

        $output->writeln('Preparing a list of models to generate cache files...');
        $output->writeln(
            '<options=bold>Note:</> Request models will be omitted ' .
            'because they are being handled by FormEncoder.'
        );
        $output->writeln('');

        $generator->loadModelsList();

        if ($verbose) {
            foreach ($generator->getModels() as $model) {
                $output->writeln(sprintf('- Added <fg=magenta>%s</>', $model));
            }
        }

        if ($verbose && count($generator->getModels()) > 0) {
            $output->writeln('');
        }

        if (count($generator->getModels()) === 0) {
            $output->writeln('<info>No changes were found; skipping generation...</info>');
            $output->writeln('');
        }

        $generator->generate();

        $output->writeln(sprintf(
            '<fg=black;bg=green> ✓ Done, generated code for %d models.</>',
            count($generator->getModels())
        ));

        return 0;
    }
}
