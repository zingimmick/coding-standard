<?php

declare(strict_types=1);

return static function (Symplify\EasyCodingStandard\Config\ECSConfig $containerConfigurator): void {
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\NoPhp4ConstructorFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer::class, [
        'sets' => ['@all'],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\ImplodeCallFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\ModernizeStrposFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\CombineNestedDirnameFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\GetClassToClassKeywordFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\UseArrowFunctionsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Basic\NonPrintableCharacterFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Alias\RandomApiMigrationFixer::class, [
        'replacements' => [
            'mt_rand' => 'random_int',
            'rand' => 'random_int',
        ],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\NoUnneededFinalMethodFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\NoUnreachableDefaultArgumentValueFixer::class);
};
