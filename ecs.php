<?php

declare(strict_types=1);

use PHP_CodeSniffer\Standards\PSR1\Sniffs\Methods\CamelCapsMethodNameSniff;
use SlevomatCodingStandard\Sniffs\Files\FileLengthSniff;
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Zing\CodingStandard\Set\ECSSetList;

return ECSConfig::configure()
    ->withSets([ECSSetList::PHP_80, ECSSetList::CUSTOM])
    ->withParallel()
    ->withSkip([
        CamelCapsMethodNameSniff::class => [__DIR__ . '/src/Printer.php'],
        LineLengthFixer::class => [__DIR__ . '/config'],
        FileLengthSniff::class => [__DIR__ . '/config'],
    ])
    ->withPaths([
        __DIR__ . '/bin',
        __DIR__ . '/config',
        __DIR__ . '/fixed',
        __DIR__ . '/src',
        __DIR__ . '/tests',
        __DIR__ . '/ecs.php',
        __DIR__ . '/rector.php',
    ]);
