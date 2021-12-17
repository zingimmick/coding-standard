<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class)
        ->call('configure', [
            [
                'elements' => ['const', 'property'],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer::class)
        ->call('configure', [
            [
                'elements' => [
                    'const' => 'one',
                    'method' => 'one',
                    'property' => 'one',
                    'trait_import' => 'none',
                ],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\ElseifFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\LineEndingFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer::class);
    $services->set(\PhpCsFixer\Fixer\Semicolon\NoEmptyStatementFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class)
        ->call('configure', [
            [
                'multi_line_extends_each_single_line' => true,
                'single_item_single_line' => true,
                'single_line' => true,
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Basic\BracesFixer::class);
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
                'statements' => ['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield'],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocIndentFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocTypesFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\GeneralPhpdocTagRenameFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoAccessFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoPackageFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\FullyQualifiedStrictTypesFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocNoUselessInheritdocFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\NoEmptyPhpdocFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\NoSpacesInsideParenthesisFixer::class);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)
        ->call('configure', [
            [
                'syntax' => 'short',
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\ConcatSpaceFixer::class)
        ->call('configure', [
            [
                'spacing' => 'none',
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Casing\ConstantCaseFixer::class)
        ->call('configure', [
            [
                'case' => 'lower',
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\FunctionTypehintSpaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\StringNotation\HeredocToNowdocFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\IncludeFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\IncrementStyleFixer::class)
        ->call('configure', [
            [
                'style' => 'post',
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\PhpTag\LinebreakAfterOpeningTagFixer::class);
    $services->set(\PhpCsFixer\Fixer\CastNotation\LowercaseCastFixer::class);
    $services->set(\PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer::class);
    $services->set(\PhpCsFixer\Fixer\Casing\LowercaseStaticReferenceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Casing\MagicMethodCasingFixer::class);
    $services->set(\PhpCsFixer\Fixer\Casing\MagicConstantCasingFixer::class);
    $services->set(\PhpCsFixer\Fixer\Semicolon\MultilineWhitespaceBeforeSemicolonsFixer::class)
        ->call('configure', [
            [
                'strategy' => 'no_multi_line',
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Casing\NativeFunctionCasingFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer::class);
    $services->set(\PhpCsFixer\Fixer\NamespaceNotation\NoLeadingNamespaceWhitespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Semicolon\NoSinglelineWhitespaceBeforeSemicolonsFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\NoSpacesAroundOffsetFixer::class)
        ->call('configure', [
            [
                'positions' => ['inside', 'outside'],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\NoTrailingCommaInListCallFixer::class);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\NoTrailingCommaInSinglelineArrayFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Comment\NoTrailingWhitespaceInCommentFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\NoUnreachableDefaultArgumentValueFixer::class);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixer::class);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\NormalizeIndexBraceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\ObjectOperatorWithoutWhitespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocInlineTagNormalizerFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocTagTypeFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocVarWithoutNameFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\SelfAccessorFixer::class);
    $services->set(\PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer::class);
    $services->set(\PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\StandardizeNotEqualsFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer::class)
        ->call('configure', [
            [
                'elements' => ['arrays'],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\TrimArraySpacesFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\UnaryOperatorSpacesFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class)
        ->call('configure', [
            [
                'elements' => ['method', 'property'],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\WhitespaceAfterCommaInArrayFixer::class);
    $services->set(\PhpCsFixer\Fixer\Semicolon\SpaceAfterSemicolonFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocTrimFixer::class);
    $services->set(\PhpCsFixer\Fixer\CastNotation\NoShortBoolCastFixer::class);
    $services->set(\PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\NoMixedEchoPrintFixer::class)
        ->call('configure', [
            [
                'use' => 'echo',
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Basic\PsrAutoloadingFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocSingleLineVarSpacingFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer::class);
    $services->set(\PhpCsFixer\Fixer\ReturnNotation\NoUselessReturnFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer::class);
    $services->set(\PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer::class)
        ->call('configure', [
            [
                'tokens' => ['extra', 'throw', 'use'],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\NoBlankLinesAfterPhpdocFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\NoLeadingImportSlashFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\BlankLineBeforeStatementFixer::class)
        ->call('configure', [
            [
                'statements' => ['return'],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\NamespaceNotation\SingleBlankLineBeforeNamespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\OrderedImportsFixer::class)
        ->call('configure', [
            [
                'sort_algorithm' => 'alpha',
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer::class)
        ->call('configure', [
            [
                'comment_types' => ['hash'],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer::class)
        ->call('configure', [
            [
                'default' => 'single_space',
                'operators' => [
                    '=>' => null,
                ],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class);
};
