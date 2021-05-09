<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Zing\CodingStandard\Set\ECSSetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(ECSSetList::PHP54_MIGRATION);
    $services = $containerConfigurator->services();
    $services->set(TernaryToNullCoalescingFixer::class);
};
