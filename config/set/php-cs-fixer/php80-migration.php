<?php

declare(strict_types=1);

return static function (Symplify\EasyCodingStandard\Config\ECSConfig $containerConfigurator): void {
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class, [
        'after_heredoc' => true,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ListNotation\ListSyntaxFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\NormalizeIndexBraceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\HeredocIndentationFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixer::class, [
        'after_heredoc' => true,
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer::class, [
        'after_heredoc' => true,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\NamespaceNotation\CleanNamespaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\CastNotation\NoUnsetCastFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\AssignNullCoalescingToCoalesceEqualFixer::class);
};
