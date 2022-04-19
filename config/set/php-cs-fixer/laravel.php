<?php

declare(strict_types=1);

return static function (Symplify\EasyCodingStandard\Config\ECSConfig $containerConfigurator): void {
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class, [
        'elements' => ['const', 'property'],
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer::class, [
        'elements' => [
            'const' => 'one',
            'method' => 'one',
            'property' => 'one',
            'trait_import' => 'none',
        ],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\ElseifFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\LineEndingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Semicolon\NoEmptyStatementFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class, [
        'multi_line_extends_each_single_line' => true,
        'single_item_single_line' => true,
        'single_line' => true,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Basic\BracesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\NoMultilineWhitespaceAroundDoubleArrowFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class, [
        'on_multiline' => 'ignore',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ControlStructure\NoUnneededControlParenthesesFixer::class, [
        'statements' => ['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield'],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocIndentFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocTypesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\GeneralPhpdocTagRenameFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoAccessFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoPackageFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\FullyQualifiedStrictTypesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoUselessInheritdocFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\NoEmptyPhpdocFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\NoSpacesInsideParenthesisFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class, [
        'syntax' => 'short',
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Operator\ConcatSpaceFixer::class, [
        'spacing' => 'none',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Casing\ConstantCaseFixer::class, [
        'case' => 'lower',
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\FunctionTypehintSpaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\StringNotation\HeredocToNowdocFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\IncludeFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Operator\IncrementStyleFixer::class, [
        'style' => 'post',
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpTag\LinebreakAfterOpeningTagFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\CastNotation\LowercaseCastFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\LowercaseStaticReferenceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\MagicMethodCasingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\MagicConstantCasingFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Semicolon\MultilineWhitespaceBeforeSemicolonsFixer::class, [
        'strategy' => 'no_multi_line',
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\NativeFunctionCasingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\NamespaceNotation\NoLeadingNamespaceWhitespaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Semicolon\NoSinglelineWhitespaceBeforeSemicolonsFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Whitespace\NoSpacesAroundOffsetFixer::class, [
        'positions' => ['inside', 'outside'],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\NoTrailingCommaInListCallFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\NoTrailingCommaInSinglelineArrayFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Comment\NoTrailingWhitespaceInCommentFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\NoUnreachableDefaultArgumentValueFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\NormalizeIndexBraceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\ObjectOperatorWithoutWhitespaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocInlineTagNormalizerFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocTagTypeFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocVarWithoutNameFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\SelfAccessorFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\StandardizeNotEqualsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer::class, [
        'elements' => ['arrays'],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\TrimArraySpacesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\UnaryOperatorSpacesFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class, [
        'elements' => ['method', 'property'],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\WhitespaceAfterCommaInArrayFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Semicolon\SpaceAfterSemicolonFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocTrimFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\CastNotation\NoShortBoolCastFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Alias\NoMixedEchoPrintFixer::class, [
        'use' => 'echo',
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Basic\PsrAutoloadingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocSingleLineVarSpacingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ReturnNotation\NoUselessReturnFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer::class, [
        'tokens' => ['extra', 'throw', 'use'],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\NoBlankLinesAfterPhpdocFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\NoLeadingImportSlashFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Whitespace\BlankLineBeforeStatementFixer::class, [
        'statements' => ['return'],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\NamespaceNotation\SingleBlankLineBeforeNamespaceFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Import\OrderedImportsFixer::class, [
        'sort_algorithm' => 'alpha',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer::class, [
        'comment_types' => ['hash'],
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer::class, [
        'default' => 'single_space',
        'operators' => [
            '=>' => null,
        ],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class);
};
