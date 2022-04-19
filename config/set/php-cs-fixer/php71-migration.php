<?php

declare(strict_types=1);

return static function (Symplify\EasyCodingStandard\Config\ECSConfig $containerConfigurator): void {
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ListNotation\ListSyntaxFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class);
};
