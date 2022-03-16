<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
use Zing\CodingStandard\Set\ECSSetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(SetList::PSR_12);
    $containerConfigurator->import(SetList::SYMPLIFY);
    $containerConfigurator->import(SetList::COMMON);
    $containerConfigurator->import(SetList::CLEAN_CODE);
    $containerConfigurator->import(ECSSetList::PHP_CS_FIXER_CUSTOM);
    $containerConfigurator->import(ECSSetList::PHP_CODESNIFFER_CUSTOM);
    $containerConfigurator->import(ECSSetList::SLEVOMAT_CODING_STANDARD_CUSTOM);

    $services = $containerConfigurator->services();
    $services->remove(\Symplify\CodingStandard\Fixer\Spacing\StandaloneLineConstructorParamFixer::class);
};
