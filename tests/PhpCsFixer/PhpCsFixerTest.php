<?php

declare(strict_types=1);

namespace Zing\CodingStandard\Tests\PhpCsFixer;

use Zing\CodingStandard\Tests\TestCase;

/**
 * @internal
 * @coversNothing
 */
class PhpCsFixerTest extends TestCase
{
    public function test(): void
    {
        $this->doTestFiles(
            [
                [__DIR__ . '/wrong/wrong.php.inc', __DIR__ . '/fixed/fixed.php.inc'],
            // 2 items in array → wrong to fixed
            ]
        );
    }

    protected function provideConfig(): string
    {
        return __DIR__ . '/../../config/set/php-cs-fixer/php-cs-fixer.yaml';
    }
}
