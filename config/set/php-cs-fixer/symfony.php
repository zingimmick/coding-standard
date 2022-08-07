<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->rule(\PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer::class, [
        'order' => ['use_trait'],
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer::class, [
        'elements' => [
            'method' => 'one',
        ],
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\NoAlternativeSyntaxFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\ElseifFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\LineEndingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\StringNotation\NoBinaryStringFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Semicolon\NoEmptyStatementFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ControlStructure\NoUnneededCurlyBracesFixer::class, [
        'namespaces' => true,
    ]);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ControlStructure\EmptyLoopBodyFixer::class, [
        'style' => 'braces',
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\NewWithBracesFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class, [
        'single_line' => true,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\SingleTraitInsertPerStatementFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\SingleLineThrowFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\LanguageConstruct\SingleSpaceAfterConstructFixer::class, [
        'constructs' => [
            'abstract',
            'as',
            'attribute',
            'break',
            'case',
            'catch',
            'class',
            'clone',
            'comment',
            'const',
            'const_import',
            'continue',
            'do',
            'echo',
            'else',
            'elseif',
            'enum',
            'extends',
            'final',
            'finally',
            'for',
            'foreach',
            'function',
            'function_import',
            'global',
            'goto',
            'if',
            'implements',
            'include',
            'include_once',
            'instanceof',
            'insteadof',
            'interface',
            'match',
            'named_argument',
            'namespace',
            'new',
            'open_tag_with_echo',
            'php_doc',
            'php_open',
            'print',
            'private',
            'protected',
            'public',
            'readonly',
            'require',
            'require_once',
            'return',
            'static',
            'switch',
            'throw',
            'trait',
            'try',
            'type_colon',
            'use',
            'use_lambda',
            'use_trait',
            'var',
            'while',
            'yield',
            'yield_from',
        ],
    ]);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Basic\BracesFixer::class, [
        'allow_single_line_anonymous_class_with_empty_body' => true,
        'allow_single_line_closure' => true,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\LambdaNotUsedImportFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ArrayNotation\NoMultilineWhitespaceAroundDoubleArrowFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class, [
        'on_multiline' => 'ignore',
    ]);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ControlStructure\NoUnneededControlParenthesesFixer::class, [
        'statements' => [
            'break',
            'clone',
            'continue',
            'echo_print',
            'others',
            'return',
            'switch_case',
            'yield',
            'yield_from',
        ],
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocIndentFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocAnnotationWithoutDotFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocTypesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\StandardizeIncrementFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\IncrementStyleFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\GeneralPhpdocTagRenameFixer::class, [
        'replacements' => [
            'inheritDocs' => 'inheritDoc',
        ],
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoAliasTagFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoAccessFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoPackageFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocReturnSelfReferenceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Import\FullyQualifiedStrictTypesFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\NoSuperfluousPhpdocTagsFixer::class, [
        'allow_mixed' => true,
        'allow_unused_params' => true,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoUselessInheritdocFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\NoEmptyPhpdocFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\NoTrailingCommaInSinglelineFunctionCallFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\NoSpacesInsideParenthesisFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Alias\BacktickToShellExecFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Comment\NoEmptyCommentFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Semicolon\SemicolonAfterInstructionFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\EmptyLoopConditionFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Import\NoUnneededImportAliasFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Comment\SingleLineCommentSpacingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\CompactNullableTypehintFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\CastNotation\LowercaseCastFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\LowercaseStaticReferenceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\ConstantCaseFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\NoBreakCommentFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\NoSpaceAroundDoubleColonFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Comment\NoTrailingWhitespaceInCommentFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\ClassReferenceNameCasingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\NamespaceNotation\CleanNamespaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\ConcatSpaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpTag\EchoTagSyntaxFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\FunctionTypehintSpaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\IncludeFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\IntegerLiteralCaseFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpTag\LinebreakAfterOpeningTagFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\MagicConstantCasingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\MagicMethodCasingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\NativeFunctionCasingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\NativeFunctionTypeDeclarationCasingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Alias\NoAliasLanguageConstructCallFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\NamespaceNotation\NoLeadingNamespaceWhitespaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Semicolon\NoSinglelineWhitespaceBeforeSemicolonsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\NoSpacesAroundOffsetFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\NoTrailingCommaInListCallFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ArrayNotation\NoTrailingCommaInSinglelineArrayFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\CastNotation\NoUnsetCastFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\NoUselessNullsafeOperatorFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ArrayNotation\NormalizeIndexBraceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\ObjectOperatorWithoutWhitespaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitMethodCasingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocInlineTagNormalizerFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocSummaryFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\PhpdocTagTypeFixer::class, [
        'tags' => [
            'inheritDoc' => 'inline',
        ],
    ]);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer::class, [
        'null_adjustment' => 'always_last',
        'sort_algorithm' => 'none',
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocVarWithoutNameFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\StandardizeNotEqualsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchContinueToBreakFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ArrayNotation\TrimArraySpacesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\TypesSpacesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\UnaryOperatorSpacesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ArrayNotation\WhitespaceAfterCommaInArrayFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Semicolon\SpaceAfterSemicolonFixer::class, [
        'remove_in_empty_for_expressions' => true,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocSeparationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocTrimFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\CastNotation\NoShortBoolCastFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitFqcnAnnotationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Alias\NoMixedEchoPrintFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocSingleLineVarSpacingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\StringNotation\SimpleToComplexStringVariableFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Import\NoLeadingImportSlashFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\NoBlankLinesAfterPhpdocFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer::class, [
        'tokens' => [
            'attribute',
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
    $ecsConfig->rule(\PhpCsFixer\Fixer\NamespaceNotation\SingleBlankLineBeforeNamespaceFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Whitespace\BlankLineBeforeStatementFixer::class, [
        'statements' => ['return'],
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Import\OrderedImportsFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer::class, [
        'comment_types' => ['hash'],
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\BlankLineBetweenImportGroupsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocTrimConsecutiveBlankLineSeparationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class);
};
