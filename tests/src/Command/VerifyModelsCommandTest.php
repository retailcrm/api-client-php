<?php

/**
 * PHP version 7.3
 *
 * @category VerifyModelsCommandTest
 * @package  RetailCrm\Tests\Command
 */

namespace RetailCrm\Tests\Command;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Command\VerifyModelsCommand;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * Class VerifyModelsCommandTest
 *
 * @category VerifyModelsCommandTest
 * @package  RetailCrm\Tests\Command
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
