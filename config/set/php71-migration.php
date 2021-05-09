<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\ListNotation\ListSyntaxFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Zing\CodingStandard\Set\ECSSetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(ECSSetList::PHP70_MIGRATION);
    $services = $containerConfigurator->services();
    $services->set(ListSyntaxFixer::class);
    $services->set(VisibilityRequiredFixer::class)
        ->call('configure', [
            [
                'elements' => ['const', 'property', 'method'],
            ],
        ]);
};
