<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ArrayNotation\NormalizeIndexBraceFixer;
use PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer;
use PhpCsFixer\Fixer\Whitespace\HeredocIndentationFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Zing\CodingStandard\Set\ECSSetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(ECSSetList::PHP73_MIGRATION);
    $services = $containerConfigurator->services();
    $services->set(HeredocIndentationFixer::class);
    $services->set(NormalizeIndexBraceFixer::class);
    $services->set(ShortScalarCastFixer::class);
};
