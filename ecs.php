<?php

declare(strict_types=1);

use PHP_CodeSniffer\Standards\PSR1\Sniffs\Methods\CamelCapsMethodNameSniff;
use SlevomatCodingStandard\Sniffs\Files\FileLengthSniff;
use Symplify\CodingStandard\Fixer\LineLength\DocBlockLineLengthFixer;
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Zing\CodingStandard\Set\ECSSetList;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->sets([ECSSetList::PHP_72, ECSSetList::CUSTOM]);
    $ecsConfig->parallel();
    $ecsConfig->skip([
        CamelCapsMethodNameSniff::class => [__DIR__ . '/src/Printer.php'],
        LineLengthFixer::class => [__DIR__ . '/config'],
        FileLengthSniff::class => [__DIR__ . '/config'],
        DocBlockLineLengthFixer::class,
    ]);

    $ecsConfig->paths([
        __DIR__ . '/bin',
        __DIR__ . '/config',
        __DIR__ . '/fixed',
        __DIR__ . '/src',
        __DIR__ . '/tests',
        __DIR__ . '/ecs.php',
        __DIR__ . '/rector.php',
    ]);
};
