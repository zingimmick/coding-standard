<?php

declare(strict_types=1);

use PHP_CodeSniffer\Standards\PSR1\Sniffs\Methods\CamelCapsMethodNameSniff;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Zing\CodingStandard\Set\ECSSetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    \PHP_CodeSniffer\Config::setConfigData('php_version', 70200);
    $containerConfigurator->import(ECSSetList::PHP71_MIGRATION);
    $containerConfigurator->import(ECSSetList::PHP71_MIGRATION_RISKY);
    $containerConfigurator->import(ECSSetList::CUSTOM);

    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::PARALLEL, true);
    $parameters->set(Option::SKIP, [
        CamelCapsMethodNameSniff::class => [__DIR__ . '/src/Printer.php'],
        \Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer::class => [__DIR__ . '/config'],
    ]);
    $parameters->set(
        Option::PATHS,
        [
            __DIR__ . '/bin',
            __DIR__ . '/config',
            __DIR__ . '/fixed',
            __DIR__ . '/src',
            __DIR__ . '/tests',
            __DIR__ . '/ecs.php',
            __DIR__ . '/rector.php',
        ]
    );
};
