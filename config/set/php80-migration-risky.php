<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer;
use PhpCsFixer\Fixer\ClassNotation\NoPhp4ConstructorFixer;
use PhpCsFixer\Fixer\ClassNotation\NoUnneededFinalMethodFixer;
use PhpCsFixer\Fixer\FunctionNotation\NoUnreachableDefaultArgumentValueFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Zing\CodingStandard\Set\ECSSetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(ECSSetList::PHP74_MIGRATION_RISKY);
    $services = $containerConfigurator->services();
    $services->set(NoAliasFunctionsFixer::class)
        ->call('configure', [
            [
                'sets' => ['@all'],
            ],
        ]);
    $services->set(NoPhp4ConstructorFixer::class);
    $services->set(NoUnneededFinalMethodFixer::class);
    $services->set(NoUnreachableDefaultArgumentValueFixer::class);
};
