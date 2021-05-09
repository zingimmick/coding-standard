<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixer;
use PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer;
use PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer;
use PhpCsFixer\Fixer\Whitespace\HeredocIndentationFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Zing\CodingStandard\Set\ECSSetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(ECSSetList::PHP71_MIGRATION);
    $services = $containerConfigurator->services();
    $services->set(HeredocIndentationFixer::class);
    $services->set(MethodArgumentSpaceFixer::class)
        ->call('configure', [
            [
                'after_heredoc' => true,
            ],
        ]);
    $services->set(NoWhitespaceBeforeCommaInArrayFixer::class)
        ->call('configure', [
            [
                'after_heredoc' => true,
            ],
        ]);
    $services->set(TrailingCommaInMultilineFixer::class)
        ->call('configure', [
            [
                'after_heredoc' => true,
            ],
        ]);
};
