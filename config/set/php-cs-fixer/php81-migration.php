<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class, [
        'after_heredoc' => true,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\NamespaceNotation\CleanNamespaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ListNotation\ListSyntaxFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\CastNotation\NoUnsetCastFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ArrayNotation\NormalizeIndexBraceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixer::class, [
        'after_heredoc' => true,
    ]);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer::class, [
        'after_heredoc' => true,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Basic\OctalNotationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\AssignNullCoalescingToCoalesceEqualFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\HeredocIndentationFixer::class);
};
