<?php

/**
 * PHP version 7.3
 *
 * @category CompilerPromptCommand
 * @package  RetailCrm\Api\Command
 */

namespace RetailCrm\Api\Command;

use JsonException;
use RetailCrm\Api\Component\ComposerLocator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CompilerPromptCommand
 *
 * @category CompilerPromptCommand
 * @package  RetailCrm\Api\Command
 */
class CompilerPromptCommand extends Command
{
    private const PACKAGE_NAME = 'retailcrm/api-client-php';

    /**
     * Sets description and help for a command.
     */
    protected function configure(): void
    {
        $this->setName('compiler:prompt')
            ->setDescription('Enable or disable composer compiler prompt.')
            ->setHelp('Use this command to suppress the compiler message and enable automatic compilation.')
            ->addOption(
                'deactivate',
                'd',
                InputOption::VALUE_OPTIONAL,
                'Hide compiler prompt and run compiler task automatically. This mode is used by default.',
                false
            )
            ->addOption(
                'activate',
                'a',
                InputOption::VALUE_OPTIONAL,
                'Show compiler prompt and only run compiler task if user allows it.',
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
     *
     * @SuppressWarnings(PHPMD.ElseExpression)
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $composerJson = ComposerLocator::findComposerJson();

        if ('' === $composerJson) {
            $output->writeln('<fg=black;bg=red> ❌ Cannot find composer.json</>');

            return -1;
        }

        try {
            $json = json_decode((string) file_get_contents($composerJson), true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $exception) {
            $output->writeln(sprintf('<fg=black;bg=red> ❌ Invalid JSON: %s</>', $exception->getMessage()));

            return -1;
        }

        $activatePrompt = false !== $input->getOption('activate');

        if ($activatePrompt) {
            static::activatePrompt($json);
        } else {
            static::deactivatePrompt($json);
        }

        try {
            $result = json_encode($json, JSON_THROW_ON_ERROR | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        } catch (JsonException $exception) {
            $output->writeln(sprintf('<fg=black;bg=red> ❌ Cannot encode JSON: %s</>', $exception->getMessage()));

            return -1;
        }

        if (false === file_put_contents($composerJson, $result)) {
            $output->writeln('<fg=black;bg=red> ❌ Cannot write to file.</>');

            return -1;
        }

        $output->writeln(sprintf(
            '<fg=black;bg=green> ✓ Done, generator prompt is now %s.</>',
            $activatePrompt ? 'enabled' : 'disabled'
        ));

        return 0;
    }

    /**
     * Activate prompt in the provided composer.json
     *
     * @param array<string, mixed> $composerJson
     */
    private static function activatePrompt(array &$composerJson): void
    {
        if (!array_key_exists('extra', $composerJson)) {
            $composerJson['extra'] = [];
        }

        if (
            array_key_exists('compile-whitelist', $composerJson['extra']) &&
            is_array($composerJson['extra']['compile-whitelist']) &&
            in_array(static::PACKAGE_NAME, $composerJson['extra']['compile-whitelist'], true)
        ) {
            $composerJson['extra']['compile-whitelist'] = array_filter(
                $composerJson['extra']['compile-whitelist'],
                static function ($value) {
                    return static::PACKAGE_NAME !== $value;
                }
            );
        }

        if (
            empty($composerJson['extra']['compile-whitelist']) &&
            array_key_exists('compile-mode', $composerJson['extra']) &&
            'whitelist' === $composerJson['extra']['compile-mode']
        ) {
            unset($composerJson['extra']['compile-whitelist'], $composerJson['extra']['compile-mode']);
        }

        if (1 === count($composerJson['extra'])) {
            unset($composerJson['extra']);
        }
    }

    /**
     * Deactivate prompt in the provided composer.json
     *
     * @param array<string, mixed> $composerJson
     *
     * @SuppressWarnings(PHPMD.ElseExpression)
     */
    private static function deactivatePrompt(array &$composerJson): void
    {
        if (!array_key_exists('extra', $composerJson)) {
            $composerJson['extra'] = [];
        }

        if (
            array_key_exists('compile-whitelist', $composerJson['extra']) &&
            is_array($composerJson['extra']['compile-whitelist']) &&
            !in_array(static::PACKAGE_NAME, $composerJson['extra']['compile-whitelist'], true)
        ) {
            $composerJson['extra']['compile-whitelist'][] = static::PACKAGE_NAME;
        } else {
            $composerJson['extra']['compile-whitelist'] = [static::PACKAGE_NAME];
        }

        $composerJson['extra']['compile-mode'] = 'whitelist';
    }
}
