<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\CombineNestedDirnameFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Basic\NonPrintableCharacterFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Alias\RandomApiMigrationFixer::class, [
        'replacements' => [
            'mt_getrandmax' => 'getrandmax',
            'mt_rand' => 'random_int',
            'mt_srand' => 'srand',
            'rand' => 'random_int',
        ],
    ]);
};
