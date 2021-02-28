<?php

/**
 * PHP version 7.3
 *
 * @category VerifyModelsCommandTest
 * @package  RetailCrm\DevTests\Command
 */

namespace RetailCrm\DevTests\Command;

use PHPUnit\Framework\TestCase;
use RetailCrm\Dev\Command\VerifyModelsCommand;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * Class VerifyModelsCommandTest
 *
 * @category VerifyModelsCommandTest
 * @package  RetailCrm\DevTests\Command
 */
class VerifyModelsCommandTest extends TestCase
{
    public function testVerifyModelsCommand(): void
    {
        $tester = new CommandTester(new VerifyModelsCommand());
        $tester->execute([]);

        self::assertStringContainsString('Models are up to date.', $tester->getDisplay());
    }
}
