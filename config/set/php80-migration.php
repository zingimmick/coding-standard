<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\CastNotation\NoUnsetCastFixer;
use PhpCsFixer\Fixer\NamespaceNotation\CleanNamespaceFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Zing\CodingStandard\Set\ECSSetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(ECSSetList::PHP74_MIGRATION);
    $services = $containerConfigurator->services();
    $services->set(CleanNamespaceFixer::class);
    $services->set(NoUnsetCastFixer::class);
};
