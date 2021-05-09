<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Zing\CodingStandard\Set\ECSSetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(ECSSetList::PHP70_MIGRATION_RISKY);
    $services = $containerConfigurator->services();
    $services->set(VoidReturnFixer::class);
};
