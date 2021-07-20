<?php

/**
 * PHP version 7.3
 *
 * @category CompilerPromptCommandTest
 * @package  RetailCrm\Tests\Command
 */

namespace RetailCrm\Tests\Command;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Command\CompilerPromptCommand;
use RetailCrm\Api\Component\ComposerLocator;
use RuntimeException;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * Class CompilerPromptCommandTest
 *
 * @category CompilerPromptCommandTest
 * @package  RetailCrm\Tests\Command
 */
class CompilerPromptCommandTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        $packageComposerJson = implode(DIRECTORY_SEPARATOR, [static::getBaseDirectory(), 'composer.json']);
        $fileName = implode(DIRECTORY_SEPARATOR, [static::getBaseDirectory(), '..', 'composer.json']);

        if (!file_exists($packageComposerJson)) {
            self::fail(sprintf('%s does not exist which should not happen at all. Aborting.', $packageComposerJson));
        }

        if (
            file_exists(($fileName)) &&
            (
                filesize($fileName) !== filesize($packageComposerJson) ||
                md5_file($fileName) !== md5_file($packageComposerJson)
            )
        ) {
            self::fail(sprintf('%s exists, cannot proceed with tests.', (string) realpath($fileName)));
        }

        copy($packageComposerJson, $fileName);
    }

    public static function tearDownAfterClass(): void
    {
        $fileName = implode(DIRECTORY_SEPARATOR, [static::getBaseDirectory(), '..', 'composer.json']);

        if (file_exists(($fileName))) {
            unlink($fileName);
        }
    }

    public function testDeactivate(): void
    {
        $tester = new CommandTester(new CompilerPromptCommand());
        $tester->execute([]);

        self::assertStringContainsString('Done, generator prompt is now disabled', $tester->getDisplay());

        $composerJson = static::getComposerJson();

        self::assertArrayHasKey('extra', $composerJson);
        self::assertArrayHasKey('compile-mode', $composerJson['extra']);
        self::assertArrayHasKey('compile-whitelist', $composerJson['extra']);
        self::assertEquals('whitelist', $composerJson['extra']['compile-mode']);
        self::assertEquals(['retailcrm/api-client-php'], $composerJson['extra']['compile-whitelist']);
    }

    public function testActivate(): void
    {
        $tester = new CommandTester(new CompilerPromptCommand());
        $tester->execute(['--activate' => '']);

        self::assertStringContainsString('Done, generator prompt is now enabled', $tester->getDisplay());

        $composerJson = static::getComposerJson();

        self::assertArrayHasKey('extra', $composerJson);
        self::assertArrayNotHasKey('compile-mode', $composerJson['extra']);
        self::assertArrayNotHasKey('compile-whitelist', $composerJson['extra']);
    }

    /**
     * @return array<string, mixed>
     * @throws \JsonException
     */
    private static function getComposerJson(): array
    {
        $composerJson = ComposerLocator::findComposerJson();

        if ('' === $composerJson) {
            throw new RuntimeException('composer.json not found');
        }

        return json_decode((string) file_get_contents($composerJson), true, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @return string
     */
    private static function getBaseDirectory(): string
    {
        return (string) realpath(implode(DIRECTORY_SEPARATOR, [__DIR__, '..', '..', '..']));
    }
}
