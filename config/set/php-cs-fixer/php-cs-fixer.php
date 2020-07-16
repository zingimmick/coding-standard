<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use PhpCsFixer\Fixer\CastNotation\NoUnsetCastFixer;
use PhpCsFixer\Fixer\ClassNotation\NoNullPropertyInitializationFixer;
use PhpCsFixer\Fixer\ClassNotation\NoUnneededFinalMethodFixer;
use PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer;
use PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer;
use PhpCsFixer\Fixer\Comment\MultilineCommentOpeningClosingFixer;
use PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer;
use PhpCsFixer\Fixer\ControlStructure\NoAlternativeSyntaxFixer;
use PhpCsFixer\Fixer\ControlStructure\NoSuperfluousElseifFixer;
use PhpCsFixer\Fixer\ControlStructure\NoUnneededCurlyBracesFixer;
use PhpCsFixer\Fixer\ControlStructure\NoUselessElseFixer;
use PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer;
use PhpCsFixer\Fixer\Import\FullyQualifiedStrictTypesFixer;
use PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveIssetsFixer;
use PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveUnsetsFixer;
use PhpCsFixer\Fixer\LanguageConstruct\ExplicitIndirectVariableFixer;
use PhpCsFixer\Fixer\Phpdoc\AlignMultilineCommentFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocAddMissingParamAnnotationFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocNoEmptyReturnFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocOrderFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocVarAnnotationCorrectOrderFixer;
use PhpCsFixer\Fixer\PhpTag\NoShortEchoTagFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitInternalClassFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitMethodCasingFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitOrderedCoversFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitTestClassRequiresCoversFixer;
use PhpCsFixer\Fixer\ReturnNotation\NoUselessReturnFixer;
use PhpCsFixer\Fixer\ReturnNotation\ReturnAssignmentFixer;
use PhpCsFixer\Fixer\Semicolon\MultilineWhitespaceBeforeSemicolonsFixer;
use PhpCsFixer\Fixer\StringNotation\EscapeImplicitBackslashesFixer;
use PhpCsFixer\Fixer\StringNotation\ExplicitStringVariableFixer;
use PhpCsFixer\Fixer\StringNotation\HeredocToNowdocFixer;
use PhpCsFixer\Fixer\StringNotation\NoBinaryStringFixer;
use PhpCsFixer\Fixer\StringNotation\SimpleToComplexStringVariableFixer;
use PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer;
use PhpCsFixer\Fixer\Whitespace\BlankLineBeforeStatementFixer;
use PhpCsFixer\Fixer\Whitespace\CompactNullableTypehintFixer;
use PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer;
use PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '../../../vendor/symplify/easy-coding-standard/config/set/symfony.php', null, true);
    $containerConfigurator->import(__DIR__ . '../../../../../symplify/easy-coding-standard/config/set/symfony.php', null, true);
    $services = $containerConfigurator->services();
    $services->set(AlignMultilineCommentFixer::class);
    $services->set(ArrayIndentationFixer::class);
    $services->set(BlankLineBeforeStatementFixer::class);
    $services->set(CombineConsecutiveIssetsFixer::class);
    $services->set(CombineConsecutiveUnsetsFixer::class);
    $services->set(CompactNullableTypehintFixer::class);
    $services->set(EscapeImplicitBackslashesFixer::class);
    $services->set(ExplicitIndirectVariableFixer::class);
    $services->set(ExplicitStringVariableFixer::class);
    $services->set(FullyQualifiedStrictTypesFixer::class);
    $services->set(HeredocToNowdocFixer::class);
    $services->set(MethodArgumentSpaceFixer::class)
        ->call('configure', [['on_multiline' => 'ensure_fully_multiline']]);
    $services->set(MethodChainingIndentationFixer::class);
    $services->set(MultilineCommentOpeningClosingFixer::class);
    $services->set(MultilineWhitespaceBeforeSemicolonsFixer::class)
        ->call('configure', [['strategy' => 'new_line_for_chained_calls']]);

    $services->set(NoAlternativeSyntaxFixer::class);
    $services->set(NoBinaryStringFixer::class);
    $services->set(NoExtraBlankLinesFixer::class)
        ->call(
            'configure',
            [
                [
                    'tokens' => [
                        'break',
                        'continue',
                        'curly_brace_block',
                        'extra',
                        'parenthesis_brace_block',
                        'return',
                        'square_brace_block',
                        'throw',
                        'use',
                    ],
                ],
            ]
        );

    $services->set(NoNullPropertyInitializationFixer::class);
    $services->set(NoShortEchoTagFixer::class);
    $services->set(NoSuperfluousElseifFixer::class);
    $services->set(NoUnneededCurlyBracesFixer::class);
    $services->set(NoUnneededFinalMethodFixer::class);
    $services->set(NoUnsetCastFixer::class);
    $services->set(NoUselessElseFixer::class);
    $services->set(NoUselessReturnFixer::class);
    $services->set(OrderedClassElementsFixer::class);
    $services->set(PhpUnitInternalClassFixer::class);
    $services->set(PhpUnitMethodCasingFixer::class);
    $services->set(PhpUnitOrderedCoversFixer::class);
    $services->set(PhpUnitTestClassRequiresCoversFixer::class);
    $services->set(PhpdocAddMissingParamAnnotationFixer::class);
    $services->set(PhpdocNoEmptyReturnFixer::class);
    $services->set(PhpdocOrderFixer::class);
    $services->set(PhpdocTypesOrderFixer::class);
    $services->set(PhpdocVarAnnotationCorrectOrderFixer::class);
    $services->set(ProtectedToPrivateFixer::class);
    $services->set(ReturnAssignmentFixer::class);
    $services->set(SimpleToComplexStringVariableFixer::class);
    $services->set(SingleLineCommentStyleFixer::class);
};
