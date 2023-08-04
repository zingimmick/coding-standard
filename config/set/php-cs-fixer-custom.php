<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->rule(\PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\NoPhp4ConstructorFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitInternalClassFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\FinalInternalClassFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer::class, [
        'order' => ['use_trait', 'constant_public', 'constant_protected', 'constant_private'],
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\NoAlternativeSyntaxFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\NoUselessSprintfFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\ElseifFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\StringNotation\NoBinaryStringFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Semicolon\NoEmptyStatementFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ControlStructure\NoUnneededCurlyBracesFixer::class, [
        'namespaces' => true,
    ]);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer::class, [
        'sets' => ['@all'],
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\LanguageConstruct\DirConstantFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\EmptyLoopBodyFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\NoSuperfluousElseifFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\NoUselessElseFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Strict\StrictComparisonFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\NewWithBracesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\ImplodeCallFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class, [
        'single_line' => true,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\SingleTraitInsertPerStatementFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\LanguageConstruct\SingleSpaceAroundConstructFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\CombineNestedDirnameFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\LambdaNotUsedImportFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ArrayNotation\NoMultilineWhitespaceAroundDoubleArrowFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Strict\StrictParamFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\CastNotation\ModernizeTypesCastingFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class, [
        'on_multiline' => 'ensure_fully_multiline',
    ]);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ControlStructure\NoUnneededControlParenthesesFixer::class, [
        'statements' => [
            'break',
            'clone',
            'continue',
            'echo_print',
            'negative_instanceof',
            'others',
            'return',
            'switch_case',
            'yield',
            'yield_from',
        ],
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\AlignMultilineCommentFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Comment\CommentToPhpdocFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\LanguageConstruct\NoUnsetOnPropertyFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveUnsetsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocIndentFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Alias\BacktickToShellExecFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocAnnotationWithoutDotFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocTypesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\StandardizeIncrementFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ReturnNotation\SimplifiedNullReturnFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\StringNotation\EscapeImplicitBackslashesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\IncrementStyleFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\GeneralPhpdocTagRenameFixer::class, [
        'replacements' => [
            'inheritDocs' => 'inheritDoc',
        ],
    ]);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoAliasTagFixer::class, [
        'replacements' => [
            'type' => 'var',
            'link' => 'see',
        ],
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocAddMissingParamAnnotationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoAccessFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoPackageFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocReturnSelfReferenceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ConstantNotation\NativeConstantInvocationFixer::class, [
        'fix_built_in' => false,
        'include' => ['DIRECTORY_SEPARATOR', 'PHP_INT_SIZE', 'PHP_SAPI', 'PHP_VERSION_ID'],
        'scope' => 'namespaced',
        'strict' => true,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Import\FullyQualifiedStrictTypesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocLineSpanFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\NoSuperfluousPhpdocTagsFixer::class, [
        'allow_mixed' => true,
        'remove_inheritdoc' => true,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoUselessInheritdocFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Operator\NoUselessConcatOperatorFixer::class, [
        'juggle_simple_strings' => true,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoEmptyReturnFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveIssetsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\NullableTypeDeclarationForDefaultNullValueFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\NoEmptyPhpdocFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\NoSpacesInsideParenthesisFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Comment\NoEmptyCommentFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Semicolon\SemicolonAfterInstructionFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\LanguageConstruct\NullableTypeDeclarationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\ControlStructureBracesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\NamespaceNotation\CleanNamespaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\EmptyLoopConditionFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Import\NoUnneededImportAliasFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Comment\SingleLineCommentSpacingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\LanguageConstruct\FunctionToConstantFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\LanguageConstruct\IsNullFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer::class, [
        'include' => ['@compiler_optimized'],
        'scope' => 'namespaced',
        'strict' => true,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\StringNotation\StringLengthToEmptyFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\TernaryToElvisOperatorFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\SimplifiedIfReturnFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\LanguageConstruct\ExplicitIndirectVariableFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\StringNotation\ExplicitStringVariableFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\StringNotation\HeredocToNowdocFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Comment\MultilineCommentOpeningClosingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Semicolon\MultilineWhitespaceBeforeSemicolonsFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer::class, [
        'null_adjustment' => 'always_last',
        'sort_algorithm' => 'none',
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocVarAnnotationCorrectOrderFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ArrayNotation\WhitespaceAfterCommaInArrayFixer::class, [
        'ensure_single_space' => true,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\NamespaceNotation\BlankLinesBeforeNamespaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\CompactNullableTypehintFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\CastNotation\LowercaseCastFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\LowercaseStaticReferenceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\ConstantCaseFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\ControlStructureContinuationPositionFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\LineEndingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\NoBreakCommentFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\NoSpaceAroundDoubleColonFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Comment\NoTrailingWhitespaceInCommentFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\ClassReferenceNameCasingFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Operator\ConcatSpaceFixer::class, [
        'spacing' => 'one',
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\LanguageConstruct\DeclareParenthesesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpTag\EchoTagSyntaxFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Import\GlobalNamespaceImportFixer::class, [
        'import_classes' => false,
        'import_constants' => false,
        'import_functions' => false,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\IncludeFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\IntegerLiteralCaseFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpTag\LinebreakAfterOpeningTagFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\MagicConstantCasingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\MagicMethodCasingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\NativeFunctionCasingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\NativeFunctionTypeDeclarationCasingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Alias\NoAliasLanguageConstructCallFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\NamespaceNotation\NoLeadingNamespaceWhitespaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\NoNullPropertyInitializationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Semicolon\NoSinglelineWhitespaceBeforeSemicolonsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\NoSpacesAroundOffsetFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Basic\NoTrailingCommaInSinglelineFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\CastNotation\NoUnsetCastFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\NoUselessNullsafeOperatorFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ArrayNotation\NormalizeIndexBraceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\ObjectOperatorWithoutWhitespaceFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Operator\OperatorLinebreakFixer::class, [
        'only_booleans' => true,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitMethodCasingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocInlineTagNormalizerFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocSummaryFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\PhpdocTagTypeFixer::class, [
        'tags' => [
            'inheritDoc' => 'inline',
        ],
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocVarWithoutNameFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\StandardizeNotEqualsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchContinueToBreakFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ArrayNotation\TrimArraySpacesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\TypeDeclarationSpacesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\UnaryOperatorSpacesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\NoUnreachableDefaultArgumentValueFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitDataProviderNameFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitStrictFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitTestCaseStaticMethodCallsFixer::class, [
        'call_type' => 'self',
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\StringNotation\NoTrailingWhitespaceInStringFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Alias\ArrayPushFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Alias\EregToPregFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\LanguageConstruct\ErrorSuppressionFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\FopenFlagOrderFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\FopenFlagsFixer::class, [
        'b_mode' => true,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\LogicalOperatorsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Naming\NoHomoglyphNamesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\NoUnneededFinalMethodFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Basic\NonPrintableCharacterFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\OrderedTraitsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitMockShortWillReturnFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitSetUpTearDownVisibilityFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Alias\SetTypeToCastFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\StringNotation\StringLineEndingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ArrayNotation\YieldFromArrayToYieldsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\OrderedTypesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocParamOrderFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Basic\NoMultipleStatementsPerLineFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Semicolon\SpaceAfterSemicolonFixer::class, [
        'remove_in_empty_for_expressions' => true,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\TypesSpacesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Basic\CurlyBracesPositionFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\PhpdocOrderFixer::class, [
        'order' => ['param', 'return', 'throws'],
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\StatementIndentationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocSeparationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocTrimFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitConstructFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\CastNotation\NoShortBoolCastFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitFqcnAnnotationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocOrderByValueFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\SelfStaticAccessorFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Alias\NoMixedEchoPrintFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocSingleLineVarSpacingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\StringNotation\SimpleToComplexStringVariableFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Basic\PsrAutoloadingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\SelfAccessorFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ReturnNotation\ReturnAssignmentFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ReturnNotation\NoUselessReturnFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer::class, [
        'tokens' => [
            'attribute',
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
    $ecsConfig->rule(\PhpCsFixer\Fixer\Import\NoLeadingImportSlashFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\NoBlankLinesAfterPhpdocFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Whitespace\BlankLineBeforeStatementFixer::class, [
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
            'yield_from',
        ],
    ]);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Import\OrderedImportsFixer::class, [
        'imports_order' => ['class', 'function', 'const'],
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\BlankLineBetweenImportGroupsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocTrimConsecutiveBlankLineSeparationFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer::class, [
        'align' => 'left',
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class);
};
