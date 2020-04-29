<?php

declare(strict_types=1);

namespace Zing\CodingStandard\Tests\Config;

use Zing\CodingStandard\Tests\TestCase;

class ConfigTest extends TestCase
{
    public function test(): void
    {
        $this->doTestFiles(
            [
                [__DIR__ . '/wrong/wrong.php.inc', __DIR__ . '/fixed/fixed.php.inc'],
            ]
        );
    }

    protected function provideConfig(): string
    {
        return __DIR__ . '/../../config/config.yaml';
    }
}
