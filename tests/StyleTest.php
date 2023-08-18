<?php

declare(strict_types=1);

namespace Zing\CodingStandard\Tests;

use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

/**
 * @internal
 */
final class StyleTest extends TestCase
{
    /**
     * @return \Iterator<\Symfony\Component\Finder\SplFileInfo[]>
     */
    public static function provideFixedCases(): iterable
    {
        $files = Finder::create()->in(__DIR__ . '/../correct')->files();
        foreach ($files as $file) {
            yield [$file];
        }
    }

    /**
     * @dataProvider provideFixedCases
     */
    public function testFixed(SplFileInfo $fileInfo): void
    {
        $path = $fileInfo->getRelativePath() . '/' . $fileInfo->getFilename();
        $this->assertFileEquals(__DIR__ . '/../correct/' . $path, __DIR__ . '/../fixed/' . $path);
    }
}
