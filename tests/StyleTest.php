<?php

declare(strict_types=1);

namespace Zing\CodingStandard\Tests;

class StyleTest extends TestCase
{
    public function testFileFixed(): void
    {
        $this->assertFileEquals(__DIR__ . '/correct/file.php', __DIR__ . '/fixed/file.php');
        $this->assertFileEquals(__DIR__ . '/correct/TestClass.php', __DIR__ . '/fixed/TestClass.php');
    }
}
