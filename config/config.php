<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer;
use PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer;
use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\Operator\ConcatSpaceFixer;
use PhpCsFixer\Fixer\Operator\IncrementStyleFixer;
use PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer;
use PhpCsFixer\Fixer\ReturnNotation\SimplifiedNullReturnFixer;
use PhpCsFixer\Fixer\Semicolon\MultilineWhitespaceBeforeSemicolonsFixer;

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
};
