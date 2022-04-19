<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $containerConfigurator): void {
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer::class, [
        'order' => ['use_trait'],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer::class, [
        'elements' => [
            'method' => 'one',
        ],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\NoAlternativeSyntaxFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\ElseifFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\LineEndingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Semicolon\NoEmptyStatementFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ControlStructure\NoUnneededCurlyBracesFixer::class, [
        'namespaces' => true,
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ControlStructure\EmptyLoopBodyFixer::class, [
        'style' => 'braces',
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\NewWithBracesFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class, [
        'single_line' => true,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\SingleTraitInsertPerStatementFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\SingleLineThrowFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\SingleSpaceAfterConstructFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Basic\BracesFixer::class, [
        'allow_single_line_anonymous_class_with_empty_body' => true,
        'allow_single_line_closure' => true,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\NoMultilineWhitespaceAroundDoubleArrowFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class, [
        'on_multiline' => 'ignore',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ControlStructure\NoUnneededControlParenthesesFixer::class, [
        'statements' => [
            'break',
            'clone',
            'continue',
            'echo_print',
            'return',
            'switch_case',
            'yield',
            'yield_from',
        ],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocIndentFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocAnnotationWithoutDotFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocTypesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\GeneralPhpdocTagRenameFixer::class, [
        'replacements' => [
            'inheritDocs' => 'inheritDoc',
        ],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoAliasTagFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoAccessFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoPackageFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocReturnSelfReferenceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\FullyQualifiedStrictTypesFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\NoSuperfluousPhpdocTagsFixer::class, [
        'allow_mixed' => true,
        'allow_unused_params' => true,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoUselessInheritdocFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\LambdaNotUsedImportFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\NoEmptyPhpdocFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\NoTrailingCommaInSinglelineFunctionCallFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\NoSpacesInsideParenthesisFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\BacktickToShellExecFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Comment\NoEmptyCommentFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Semicolon\SemicolonAfterInstructionFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\EmptyLoopConditionFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\NoUnneededImportAliasFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Comment\SingleLineCommentSpacingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\StandardizeIncrementFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\CompactNullableTypehintFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\CastNotation\LowercaseCastFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\LowercaseStaticReferenceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\ConstantCaseFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\NoBreakCommentFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\NoSpaceAroundDoubleColonFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Comment\NoTrailingWhitespaceInCommentFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\ClassReferenceNameCasingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\NamespaceNotation\CleanNamespaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\ConcatSpaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpTag\EchoTagSyntaxFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\FunctionTypehintSpaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\IncludeFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\IncrementStyleFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\IntegerLiteralCaseFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpTag\LinebreakAfterOpeningTagFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\MagicConstantCasingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\MagicMethodCasingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\NativeFunctionCasingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\NativeFunctionTypeDeclarationCasingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\NoAliasLanguageConstructCallFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\StringNotation\NoBinaryStringFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\NamespaceNotation\NoLeadingNamespaceWhitespaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Semicolon\NoSinglelineWhitespaceBeforeSemicolonsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\NoSpacesAroundOffsetFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\NoTrailingCommaInListCallFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\NoTrailingCommaInSinglelineArrayFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\CastNotation\NoUnsetCastFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\NormalizeIndexBraceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\ObjectOperatorWithoutWhitespaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitMethodCasingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocInlineTagNormalizerFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocSummaryFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\PhpdocTagTypeFixer::class, [
        'tags' => [
            'inheritDoc' => 'inline',
        ],
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer::class, [
        'null_adjustment' => 'always_last',
        'sort_algorithm' => 'none',
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocVarWithoutNameFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\StandardizeNotEqualsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchContinueToBreakFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\TrimArraySpacesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\TypesSpacesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\UnaryOperatorSpacesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\WhitespaceAfterCommaInArrayFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Semicolon\SpaceAfterSemicolonFixer::class, [
        'remove_in_empty_for_expressions' => true,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocSeparationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocTrimFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\CastNotation\NoShortBoolCastFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitFqcnAnnotationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\NoMixedEchoPrintFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocSingleLineVarSpacingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\NoLeadingImportSlashFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\NoBlankLinesAfterPhpdocFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer::class, [
        'tokens' => [
            'case',
            'continue',
            'curly_brace_block',
            'default',
            'extra',
            'parenthesis_brace_block',
            'square_brace_block',
            'switch',
            'throw',
            'use',
        ],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\NamespaceNotation\SingleBlankLineBeforeNamespaceFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Whitespace\BlankLineBeforeStatementFixer::class, [
        'statements' => ['return'],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\OrderedImportsFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer::class, [
        'comment_types' => ['hash'],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocTrimConsecutiveBlankLineSeparationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class);
};
