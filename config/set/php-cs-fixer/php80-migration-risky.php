<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ClassNotation\NoPhp4ConstructorFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer::class)
        ->call('configure', [
            [
                'sets' => ['@all'],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\ImplodeCallFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\CombineNestedDirnameFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer::class);
    $services->set(\PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\UseArrowFunctionsFixer::class);
    $services->set(\PhpCsFixer\Fixer\Basic\NonPrintableCharacterFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\RandomApiMigrationFixer::class)
        ->call('configure', [
            [
                'replacements' => [
                    'mt_rand' => 'random_int',
                    'rand' => 'random_int',
                ],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\NoUnneededFinalMethodFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\NoUnreachableDefaultArgumentValueFixer::class);
};
