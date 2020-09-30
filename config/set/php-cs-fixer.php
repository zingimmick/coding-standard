<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer;
use PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer;
use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use PhpCsFixer\Fixer\FunctionNotation\SingleLineThrowFixer;
use PhpCsFixer\Fixer\Import\OrderedImportsFixer;
use PhpCsFixer\Fixer\Operator\ConcatSpaceFixer;
use PhpCsFixer\Fixer\Operator\IncrementStyleFixer;
use PhpCsFixer\Fixer\Operator\LogicalOperatorsFixer;
use PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer;
use PhpCsFixer\Fixer\Operator\UnaryOperatorSpacesFixer;
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
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\Configuration\Option;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '/../../vendor/symplify/easy-coding-standard/config/set/php-cs-fixer.php', null, true);

    $containerConfigurator->import(__DIR__ . '/../../../../symplify/easy-coding-standard/config/set/php-cs-fixer.php', null, true);

    $services = $containerConfigurator->services();
    $services->set(ClassAttributesSeparationFixer::class);
    $services->set(MultilineWhitespaceBeforeSemicolonsFixer::class);
    $services->set(SimplifiedNullReturnFixer::class);
    $services->set(NotOperatorWithSuccessorSpaceFixer::class);
    $services->set(LogicalOperatorsFixer::class);
    $services->set(OrderedImportsFixer::class)
        ->call(
            'configure',
            [
                [
                    'importsOrder' => ['class', 'function', 'const'],
                ],
            ]
        );
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
    $services->set(PhpdocTypesOrderFixer::class)
        ->call(
            'configure',
            [
                [
                    'null_adjustment' => 'always_last',
                    'sort_algorithm' => 'none',
                ],
            ]
        );
    $parameters = $containerConfigurator->parameters();
    $parameters->set(
        Option::SKIP,
        [
            UnaryOperatorSpacesFixer::class => null,
            SingleLineThrowFixer::class => null,
            PhpdocSummaryFixer::class => null,
            PhpdocToCommentFixer::class => null,
            PhpdocNoEmptyReturnFixer::class => null,
            PhpdocNoAliasTagFixer::class => null,
            PhpdocTypesOrderFixer::class => null,
            PhpUnitTestClassRequiresCoversFixer::class => null,
            PhpUnitInternalClassFixer::class => null,
            NoSuperfluousPhpdocTagsFixer::class => null,
            YodaStyleFixer::class => null,
        ]
    );
};
