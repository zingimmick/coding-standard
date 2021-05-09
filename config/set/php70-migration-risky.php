<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Alias\RandomApiMigrationFixer;
use PhpCsFixer\Fixer\Basic\NonPrintableCharacterFixer;
use PhpCsFixer\Fixer\FunctionNotation\CombineNestedDirnameFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Zing\CodingStandard\Set\ECSSetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(ECSSetList::PHP56_MIGRATION_RISKY);
    $services = $containerConfigurator->services();
    $services->set(CombineNestedDirnameFixer::class);
    $services->set(DeclareStrictTypesFixer::class);
    $services->set(NonPrintableCharacterFixer::class);
    $services->set(RandomApiMigrationFixer::class)
        ->call('configure', [
            [
                'replacements' => [
                    'mt_rand' => 'random_int',
                    'rand' => 'random_int',
                ],
            ],
        ]);
};
