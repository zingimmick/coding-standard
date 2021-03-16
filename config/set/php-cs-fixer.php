<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer;
use PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer;
use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\Import\OrderedImportsFixer;
use PhpCsFixer\Fixer\Operator\ConcatSpaceFixer;
use PhpCsFixer\Fixer\Operator\IncrementStyleFixer;
use PhpCsFixer\Fixer\Operator\LogicalOperatorsFixer;
use PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocNoAliasTagFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer;
use PhpCsFixer\Fixer\ReturnNotation\SimplifiedNullReturnFixer;
use PhpCsFixer\Fixer\Semicolon\MultilineWhitespaceBeforeSemicolonsFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '/../../vendor/symplify/easy-coding-standard/config/set/php-cs-fixer.php', null, true);

    $containerConfigurator->import(__DIR__ . '/../../vendor/symplify/easy-coding-standard-prefixed/config/set/php-cs-fixer.php', null, true);

    $containerConfigurator->import(__DIR__ . '/../../../../symplify/easy-coding-standard/config/set/php-cs-fixer.php', null, true);

    $services = $containerConfigurator->services();
    $services->set(ArraySyntaxFixer::class)
        ->call(
            'configure',
            [
                [
                    'syntax' => 'short',
                ],
            ]
        );
    $services->set(ClassAttributesSeparationFixer::class);
    $services->set(ConcatSpaceFixer::class)
        ->call(
            'configure',
            [
                [
                    'spacing' => 'one',
                ],
            ]
        );
    $services->set(IncrementStyleFixer::class)
        ->call(
            'configure',
            [
                [
                    'style' => 'post',
                ],
            ]
        );
    $services->set(LogicalOperatorsFixer::class);
    $services->set(MultilineWhitespaceBeforeSemicolonsFixer::class);
    $services->set(NotOperatorWithSuccessorSpaceFixer::class);
    $services->set(OrderedClassElementsFixer::class)
        ->call(
            'configure',
            [
                [
                    'order' => ['use_trait', 'constant_public', 'constant_protected', 'constant_private'],
                ],
            ]
        );
    $services->set(OrderedImportsFixer::class)
        ->call(
            'configure',
            [
                [
                    'importsOrder' => ['class', 'function', 'const'],
                ],
            ]
        );
    $services->set(PhpdocAlignFixer::class)
        ->call(
            'configure',
            [
                [
                    'align' => 'left',
                ],
            ]
        );
    $services->set(PhpdocNoAliasTagFixer::class)
        ->call(
            'configure',
            [
                [
                    'replacements' => [
                        'type' => 'var',
                        'link' => 'see',
                    ],
                ],
            ]
        );

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
    $services->set(SimplifiedNullReturnFixer::class);

    $services->set(VisibilityRequiredFixer::class)
        ->call(
            'configure',
            [
                [
                    'elements' => ['property', 'method', 'const'],
                ],
            ]
        );
};
