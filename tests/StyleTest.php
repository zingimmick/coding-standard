<?php

declare(strict_types=1);

namespace Zing\CodingStandard\Tests;

final class StyleTest extends TestCase
{
    public function testFileFixed(): void
    {
        $this->assertFileEquals(__DIR__ . '/../correct/file.php', __DIR__ . '/../fixed/file.php');
    }

    public function testClassFixed(): void
    {
        $this->assertFileEquals(__DIR__ . '/../correct/TestClass.php', __DIR__ . '/../fixed/TestClass.php');
    }

    public function testTraitFixed(): void
    {
        $this->assertFileEquals(__DIR__ . '/../correct/Concerns/Testable.php', __DIR__ . '/../fixed/Concerns/Testable.php');
    }

    public function testInterfaceFixed(): void
    {
        $this->assertFileEquals(__DIR__ . '/../correct/TestableContract.php', __DIR__ . '/../fixed/TestableContract.php');
    }
}
