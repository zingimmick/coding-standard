<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer;
use PhpCsFixer\Fixer\FunctionNotation\ImplodeCallFixer;
use PhpCsFixer\Fixer\FunctionNotation\UseArrowFunctionsFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Zing\CodingStandard\Set\ECSSetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(ECSSetList::PHP71_MIGRATION_RISKY);
    $services = $containerConfigurator->services();
    $services->set(ImplodeCallFixer::class);
    $services->set(NoAliasFunctionsFixer::class);
    $services->set(UseArrowFunctionsFixer::class);
};
