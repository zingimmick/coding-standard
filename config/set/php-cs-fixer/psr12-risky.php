<?php

declare(strict_types=1);

return static function (Symplify\EasyCodingStandard\Config\ECSConfig $containerConfigurator): void {
    $containerConfigurator->rule(\PhpCsFixer\Fixer\StringNotation\NoTrailingWhitespaceInStringFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\NoUnreachableDefaultArgumentValueFixer::class);
};
