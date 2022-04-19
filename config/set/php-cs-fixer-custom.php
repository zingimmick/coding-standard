<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $containerConfigurator): void {
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\NoPhp4ConstructorFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitInternalClassFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\FinalInternalClassFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer::class, [
        'order' => ['use_trait', 'constant_public', 'constant_protected', 'constant_private'],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\NoAlternativeSyntaxFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\NoUselessSprintfFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Semicolon\NoEmptyStatementFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ControlStructure\NoUnneededCurlyBracesFixer::class, [
        'namespaces' => true,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\ElseifFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\LineEndingFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer::class, [
        'sets' => ['@all'],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\DirConstantFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\EmptyLoopBodyFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\NoSuperfluousElseifFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\NoUselessElseFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\NewWithBracesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\ImplodeCallFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class, [
        'single_line' => true,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\SingleSpaceAfterConstructFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\SingleTraitInsertPerStatementFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Basic\BracesFixer::class, [
        'allow_single_line_anonymous_class_with_empty_body' => true,
        'allow_single_line_closure' => true,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\CombineNestedDirnameFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\NoMultilineWhitespaceAroundDoubleArrowFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Strict\StrictParamFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class, [
        'on_multiline' => 'ensure_fully_multiline',
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
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\AlignMultilineCommentFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Comment\CommentToPhpdocFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\NoUnsetOnPropertyFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveUnsetsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocIndentFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocAnnotationWithoutDotFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocTypesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ReturnNotation\SimplifiedNullReturnFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\GeneralPhpdocTagRenameFixer::class, [
        'replacements' => [
            'inheritDocs' => 'inheritDoc',
        ],
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoAliasTagFixer::class, [
        'replacements' => [
            'type' => 'var',
            'link' => 'see',
        ],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocAddMissingParamAnnotationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoAccessFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoPackageFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocReturnSelfReferenceFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ConstantNotation\NativeConstantInvocationFixer::class, [
        'fix_built_in' => false,
        'include' => ['DIRECTORY_SEPARATOR', 'PHP_INT_SIZE', 'PHP_SAPI', 'PHP_VERSION_ID'],
        'scope' => 'namespaced',
        'strict' => true,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\FullyQualifiedStrictTypesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocLineSpanFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\NoSuperfluousPhpdocTagsFixer::class, [
        'allow_mixed' => true,
        'allow_unused_params' => true,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoUselessInheritdocFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoEmptyReturnFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveIssetsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\LambdaNotUsedImportFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\NoEmptyPhpdocFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\NoTrailingCommaInSinglelineFunctionCallFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\BacktickToShellExecFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Comment\NoEmptyCommentFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Semicolon\SemicolonAfterInstructionFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\NoSpacesInsideParenthesisFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\StringNotation\EscapeImplicitBackslashesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\EmptyLoopConditionFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\NoUnneededImportAliasFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Comment\SingleLineCommentSpacingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\StandardizeIncrementFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\FunctionToConstantFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\IsNullFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer::class, [
        'include' => ['@compiler_optimized'],
        'scope' => 'namespaced',
        'strict' => true,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\StringNotation\StringLengthToEmptyFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\TernaryToElvisOperatorFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\NullableTypeDeclarationForDefaultNullValueFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\SimplifiedIfReturnFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\ExplicitIndirectVariableFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\StringNotation\ExplicitStringVariableFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\StringNotation\HeredocToNowdocFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Comment\MultilineCommentOpeningClosingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Semicolon\MultilineWhitespaceBeforeSemicolonsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\NoNullPropertyInitializationFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Operator\OperatorLinebreakFixer::class, [
        'only_booleans' => true,
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer::class, [
        'null_adjustment' => 'always_last',
        'sort_algorithm' => 'none',
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocVarAnnotationCorrectOrderFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\ClassReferenceNameCasingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\NamespaceNotation\CleanNamespaceFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Operator\ConcatSpaceFixer::class, [
        'spacing' => 'one',
    ]);
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
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocVarWithoutNameFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\StandardizeNotEqualsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchContinueToBreakFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\TrimArraySpacesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\TypesSpacesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\UnaryOperatorSpacesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ArrayNotation\WhitespaceAfterCommaInArrayFixer::class);
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
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\NoUnreachableDefaultArgumentValueFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitStrictFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitTestCaseStaticMethodCallsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Strict\StrictComparisonFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\ArrayPushFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\EregToPregFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\ErrorSuppressionFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\FopenFlagOrderFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\FopenFlagsFixer::class, [
        'b_mode' => false,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\LogicalOperatorsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\CastNotation\ModernizeTypesCastingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Naming\NoHomoglyphNamesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\NoUnneededFinalMethodFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Basic\NonPrintableCharacterFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\OrderedTraitsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitMockShortWillReturnFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitSetUpTearDownVisibilityFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\SelfAccessorFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\SetTypeToCastFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\StringNotation\StringLineEndingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\StringNotation\NoTrailingWhitespaceInStringFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\ControlStructureContinuationPositionFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\DeclareParenthesesFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Semicolon\SpaceAfterSemicolonFixer::class, [
        'remove_in_empty_for_expressions' => true,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocOrderFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocSeparationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocTrimFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitConstructFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\CastNotation\NoShortBoolCastFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitFqcnAnnotationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocOrderByValueFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\StringNotation\SimpleToComplexStringVariableFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\NoMixedEchoPrintFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocSingleLineVarSpacingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Basic\PsrAutoloadingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\SelfStaticAccessorFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ReturnNotation\ReturnAssignmentFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ReturnNotation\NoUselessReturnFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer::class, [
        'tokens' => [
            'break',
            'case',
            'continue',
            'curly_brace_block',
            'default',
            'extra',
            'parenthesis_brace_block',
            'return',
            'square_brace_block',
            'switch',
            'throw',
            'use',
        ],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\NoBlankLinesAfterPhpdocFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\NoLeadingImportSlashFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Whitespace\BlankLineBeforeStatementFixer::class, [
        'statements' => [
            'break',
            'case',
            'continue',
            'declare',
            'default',
            'exit',
            'goto',
            'include',
            'include_once',
            'phpdoc',
            'require',
            'require_once',
            'return',
            'switch',
            'throw',
            'try',
            'yield',
        ],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\NamespaceNotation\SingleBlankLineBeforeNamespaceFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Import\OrderedImportsFixer::class, [
        'imports_order' => ['class', 'function', 'const'],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocTrimConsecutiveBlankLineSeparationFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer::class, [
        'align' => 'left',
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class);
};
