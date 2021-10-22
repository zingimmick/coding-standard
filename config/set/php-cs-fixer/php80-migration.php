<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class)
        ->call('configure', [
            [
                'after_heredoc' => true,
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\ListNotation\ListSyntaxFixer::class);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\NormalizeIndexBraceFixer::class);
    $services->set(\PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\HeredocIndentationFixer::class);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixer::class)
        ->call('configure', [
            [
                'after_heredoc' => true,
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer::class)
        ->call('configure', [
            [
                'after_heredoc' => true,
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer::class);
    $services->set(\PhpCsFixer\Fixer\NamespaceNotation\CleanNamespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\CastNotation\NoUnsetCastFixer::class);
};
