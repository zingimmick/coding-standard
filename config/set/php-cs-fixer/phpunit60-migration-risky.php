<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitNoExpectationAnnotationFixer::class)
        ->call('configure', [
            [
                'target' => '4.3',
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitNamespacedFixer::class)
        ->call('configure', [
            [
                'target' => '6.0',
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitExpectationFixer::class)
        ->call('configure', [
            [
                'target' => '5.6',
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitMockFixer::class)
        ->call('configure', [
            [
                'target' => '5.5',
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer::class)
        ->call('configure', [
            [
                'target' => '5.6',
            ],
        ]);
};
