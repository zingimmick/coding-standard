<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer::class)
        ->call('configure', [
            [
                'order' => ['use_trait'],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer::class)
        ->call('configure', [
            [
                'elements' => [
                    'method' => 'one',
                ],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\NoAlternativeSyntaxFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\ElseifFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\LineEndingFixer::class);
    $services->set(\PhpCsFixer\Fixer\Semicolon\NoEmptyStatementFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\NoUnneededCurlyBracesFixer::class)
        ->call('configure', [
            [
                'namespaces' => true,
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\EmptyLoopBodyFixer::class)
        ->call('configure', [
            [
                'style' => 'braces',
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Operator\NewWithBracesFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class)
        ->call('configure', [
            [
                'single_line' => true,
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\SingleTraitInsertPerStatementFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\SingleLineThrowFixer::class);
    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\SingleSpaceAfterConstructFixer::class);
    $services->set(\PhpCsFixer\Fixer\Basic\BracesFixer::class)
        ->call('configure', [
            [
                'allow_single_line_anonymous_class_with_empty_body' => true,
                'allow_single_line_closure' => true,
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer::class);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\NoMultilineWhitespaceAroundDoubleArrowFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class)
        ->call('configure', [
            [
                'on_multiline' => 'ignore',
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\NoUnneededControlParenthesesFixer::class)
        ->call('configure', [
            [
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
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocIndentFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocAnnotationWithoutDotFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocTypesFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\GeneralPhpdocTagRenameFixer::class)
        ->call('configure', [
            [
                'replacements' => [
                    'inheritDocs' => 'inheritDoc',
                ],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoAliasTagFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoAccessFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoPackageFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocReturnSelfReferenceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\FullyQualifiedStrictTypesFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\NoSuperfluousPhpdocTagsFixer::class)
        ->call('configure', [
            [
                'allow_mixed' => true,
                'allow_unused_params' => true,
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoUselessInheritdocFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\LambdaNotUsedImportFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\NoEmptyPhpdocFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\NoSpacesInsideParenthesisFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\BacktickToShellExecFixer::class);
    $services->set(\PhpCsFixer\Fixer\Comment\NoEmptyCommentFixer::class);
    $services->set(\PhpCsFixer\Fixer\Semicolon\SemicolonAfterInstructionFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\EmptyLoopConditionFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\StandardizeIncrementFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\CompactNullableTypehintFixer::class);
    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer::class);
    $services->set(\PhpCsFixer\Fixer\CastNotation\LowercaseCastFixer::class);
    $services->set(\PhpCsFixer\Fixer\Casing\LowercaseStaticReferenceFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer::class);
    $services->set(\PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class);
    $services->set(\PhpCsFixer\Fixer\Casing\ConstantCaseFixer::class);
    $services->set(\PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\NoBreakCommentFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\NoSpaceAroundDoubleColonFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Comment\NoTrailingWhitespaceInCommentFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\NamespaceNotation\CleanNamespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\ConcatSpaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpTag\EchoTagSyntaxFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\FunctionTypehintSpaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\IncludeFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\IncrementStyleFixer::class);
    $services->set(\PhpCsFixer\Fixer\Casing\IntegerLiteralCaseFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpTag\LinebreakAfterOpeningTagFixer::class);
    $services->set(\PhpCsFixer\Fixer\Casing\MagicConstantCasingFixer::class);
    $services->set(\PhpCsFixer\Fixer\Casing\MagicMethodCasingFixer::class);
    $services->set(\PhpCsFixer\Fixer\Casing\NativeFunctionCasingFixer::class);
    $services->set(\PhpCsFixer\Fixer\Casing\NativeFunctionTypeDeclarationCasingFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\NoAliasLanguageConstructCallFixer::class);
    $services->set(\PhpCsFixer\Fixer\StringNotation\NoBinaryStringFixer::class);
    $services->set(\PhpCsFixer\Fixer\NamespaceNotation\NoLeadingNamespaceWhitespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Semicolon\NoSinglelineWhitespaceBeforeSemicolonsFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\NoSpacesAroundOffsetFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\NoTrailingCommaInListCallFixer::class);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\NoTrailingCommaInSinglelineArrayFixer::class);
    $services->set(\PhpCsFixer\Fixer\CastNotation\NoUnsetCastFixer::class);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixer::class);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\NormalizeIndexBraceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\ObjectOperatorWithoutWhitespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitMethodCasingFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocInlineTagNormalizerFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocSummaryFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocTagTypeFixer::class)
        ->call('configure', [
            [
                'tags' => [
                    'inheritDoc' => 'inline',
                ],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer::class)
        ->call('configure', [
            [
                'null_adjustment' => 'always_last',
                'sort_algorithm' => 'none',
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocVarWithoutNameFixer::class);
    $services->set(\PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\StandardizeNotEqualsFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\SwitchContinueToBreakFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer::class);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\TrimArraySpacesFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\TypesSpacesFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\UnaryOperatorSpacesFixer::class);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\WhitespaceAfterCommaInArrayFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer::class);
    $services->set(\PhpCsFixer\Fixer\Semicolon\SpaceAfterSemicolonFixer::class)
        ->call('configure', [
            [
                'remove_in_empty_for_expressions' => true,
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocSeparationFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocTrimFixer::class);
    $services->set(\PhpCsFixer\Fixer\CastNotation\NoShortBoolCastFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitFqcnAnnotationFixer::class);
    $services->set(\PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\NoMixedEchoPrintFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocSingleLineVarSpacingFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\NoLeadingImportSlashFixer::class);
    $services->set(\PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\NoBlankLinesAfterPhpdocFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer::class)
        ->call('configure', [
            [
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
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\NamespaceNotation\SingleBlankLineBeforeNamespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\BlankLineBeforeStatementFixer::class)
        ->call('configure', [
            [
                'statements' => ['return'],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Import\OrderedImportsFixer::class);
    $services->set(\PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer::class)
        ->call('configure', [
            [
                'comment_types' => ['hash'],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocTrimConsecutiveBlankLineSeparationFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class);
};
