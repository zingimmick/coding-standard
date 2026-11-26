<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\If_\SimplifyIfNotNullReturnRector;
use Rector\Config\RectorConfig;
use Rector\PHPUnit\Set\PHPUnitSetList;
use Rector\Privatization\Rector\MethodCall\PrivatizeLocalGetterToPropertyRector;
use Rector\Set\ValueObject\LevelSetList;
use Zing\CodingStandard\Set\RectorSetList;

return RectorConfig::configure()
    ->withPhpSets()
    ->withSets([RectorSetList::CUSTOM, PHPUnitSetList::PHPUNIT_CODE_QUALITY])
    ->withParallel()
    ->withBootstrapFiles([
        __DIR__ . '/vendor/squizlabs/php_codesniffer/autoload.php',
        __DIR__ . '/vendor/symplify/easy-coding-standard/vendor/autoload.php',
    ])
    ->withSkip([
        PrivatizeLocalGetterToPropertyRector::class,
        SimplifyIfNotNullReturnRector::class,
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
