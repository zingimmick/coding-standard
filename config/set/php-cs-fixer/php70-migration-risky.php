<?php

declare(strict_types=1);

return static function (Symplify\EasyCodingStandard\Config\ECSConfig $containerConfigurator): void {
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\CombineNestedDirnameFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Basic\NonPrintableCharacterFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Alias\RandomApiMigrationFixer::class, [
        'replacements' => [
            'mt_rand' => 'random_int',
            'rand' => 'random_int',
        ],
    ]);
};
