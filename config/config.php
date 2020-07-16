<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use PHP_CodeSniffer\Standards\PSR12\Sniffs\Files\FileHeaderSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\Arrays\ArrayDeclarationSniff;
use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer;
use PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer;
use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use PhpCsFixer\Fixer\Operator\ConcatSpaceFixer;
use PhpCsFixer\Fixer\Operator\IncrementStyleFixer;
use PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer;
use PhpCsFixer\Fixer\Phpdoc\NoSuperfluousPhpdocTagsFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocNoAliasTagFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocNoEmptyReturnFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocSummaryFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitInternalClassFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitTestClassRequiresCoversFixer;
use PhpCsFixer\Fixer\ReturnNotation\SimplifiedNullReturnFixer;
use PhpCsFixer\Fixer\Semicolon\MultilineWhitespaceBeforeSemicolonsFixer;
use SlevomatCodingStandard\Sniffs\Commenting\DisallowCommentAfterCodeSniff;
use SlevomatCodingStandard\Sniffs\Commenting\InlineDocCommentDeclarationSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\ParameterTypeHintSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\PropertyTypeHintSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSniff;
use Symplify\EasyCodingStandard\Configuration\Option;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '/set/php-cs-fixer/php-cs-fixer.php');
    $containerConfigurator->import(__DIR__ . '/set/php_codesniffer.php');
    $services = $containerConfigurator->services();
    $services->set(ClassAttributesSeparationFixer::class);
    $services->set(MultilineWhitespaceBeforeSemicolonsFixer::class);
    $services->set(SimplifiedNullReturnFixer::class);
    $services->set(NotOperatorWithSuccessorSpaceFixer::class);
    $services->set(ConcatSpaceFixer::class)
        ->call('configure', [['spacing' => 'one']]);
    $services->set(PhpdocAlignFixer::class)
        ->call('configure', [['align' => 'left']]);
    $services->set(ArraySyntaxFixer::class)
        ->call('configure', [['syntax' => 'short']]);
    $services->set(VisibilityRequiredFixer::class)
        ->call('configure', [['elements' => ['property', 'method', 'const']]]);

    $services->set(OrderedClassElementsFixer::class)
        ->call('configure', [['order' => ['use_trait', 'constant_public', 'constant_protected', 'constant_private']]]);

    $services->set(IncrementStyleFixer::class)
        ->call('configure', [['style' => 'post']]);
    $parameters = $containerConfigurator->parameters();
    $parameters->set(
        Option::SKIP,
        [
            PhpdocSummaryFixer::class => null,
            PhpdocToCommentFixer::class => null,
            PhpdocNoEmptyReturnFixer::class => null,
            PhpdocNoAliasTagFixer::class => null,
            YodaStyleFixer::class => null,
            PhpdocTypesOrderFixer::class => null,
            PhpUnitTestClassRequiresCoversFixer::class => null,
            PhpUnitInternalClassFixer::class => null,
            NoSuperfluousPhpdocTagsFixer::class => null,
            DisallowCommentAfterCodeSniff::class . '.DisallowedCommentAfterCode' => null,
            FileHeaderSniff::class => null,
            FileHeaderSniff::class . '.SpacingAfterBlock' => null,
            FileHeaderSniff::class . '.IncorrectOrder' => null,
            FileHeaderSniff::class . '.IncorrectGrouping' => null,
            InlineDocCommentDeclarationSniff::class . '.MissingVariable' => null,
            InlineDocCommentDeclarationSniff::class . '.NoAssignment' => null,
            ParameterTypeHintSniff::class . '.MissingTraversableTypeHintSpecification' => null,
            ParameterTypeHintSniff::class . '.MissingAnyTypeHint' => null,
            ParameterTypeHintSniff::class . '.MissingNativeTypeHint' => null,
            ParameterTypeHintSniff::class . '.UselessAnnotation' => null,
            ReturnTypeHintSniff::class . '.MissingTraversableTypeHintSpecification' => null,
            ReturnTypeHintSniff::class . '.MissingAnyTypeHint' => null,
            ReturnTypeHintSniff::class . '.MissingNativeTypeHint' => null,
            ReturnTypeHintSniff::class . '.UselessAnnotation' => null,
            ReturnTypeHintSniff::class . '.SlevomatCodingStandard.TypeHints.ReturnTypeHint.MissingNativeTypeHint' => null,
            PropertyTypeHintSniff::class . '.MissingTraversableTypeHintSpecification' => null,
            PropertyTypeHintSniff::class . '.MissingAnyTypeHint' => null,
            PropertyTypeHintSniff::class . '.MissingNativeTypeHint' => null,
            PropertyTypeHintSniff::class . '.UselessAnnotation' => null,
            ArrayDeclarationSniff::class . '.DoubleArrowNotAligned' => null,
            ArrayDeclarationSniff::class . '.NoKeySpecified' => null,
            ArrayDeclarationSniff::class . '.KeySpecified' => null,
            ArrayDeclarationSniff::class . '.SingleLineNotAllowed' => null,
            ArrayDeclarationSniff::class . '.KeyNotAligned' => null,
            ArrayDeclarationSniff::class . '.ValueNotAligned' => null,
            ArrayDeclarationSniff::class . '.CloseBraceNotAligned' => null,
            ArrayDeclarationSniff::class . '.CloseBraceNewLine' => null,
            ArrayDeclarationSniff::class . '.MultiLineNotAllowed' => null,
        ]
    );
};
