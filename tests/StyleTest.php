<?php

declare(strict_types=1);

namespace Zing\CodingStandard\Tests;

use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

/**
 * @internal
 * @coversNothing
 */
final class StyleTest extends TestCase
{
    /**
     * @return \Iterator<\Symfony\Component\Finder\SplFileInfo[]>
     */
    public function provideFiles(): \Iterator
    {
        $files = Finder::create()->in(__DIR__ . '/../correct')->files();
        foreach ($files as $file) {
            yield [$file];
        }
    }

    /**
     * @dataProvider provideFiles
     */
    public function testFixed(SplFileInfo $fileInfo): void
    {
        $path = $fileInfo->getRelativePath() . '/' . $fileInfo->getFilename();
        self::assertFileEquals(__DIR__ . '/../correct/' . $path, __DIR__ . '/../fixed/' . $path);
    }
}
