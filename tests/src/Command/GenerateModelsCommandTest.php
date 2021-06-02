<?php

/**
 * PHP version 7.3
 *
 * @category GenerateModelsCommandTest
 * @package  RetailCrm\Tests\Command
 */

namespace RetailCrm\Tests\Command;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Command\GenerateModelsCommand;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * Class GenerateModelsCommandTest
 *
 * @category GenerateModelsCommandTest
 * @package  RetailCrm\Tests\Command
 */
class GenerateModelsCommandTest extends TestCase
{
    public function testGenerateModelsCommand(): void
    {
        $tester = new CommandTester(new GenerateModelsCommand());
        $tester->execute([]);

        self::assertStringContainsString('Done, generated code for', $tester->getDisplay());
    }
}
