<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationArrayAssignmentFixer::class)
        ->call('configure', [
            [
                'operator' => ':',
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationBracesFixer::class);
    $services->set(\PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationIndentationFixer::class);
    $services->set(\PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationSpacesFixer::class)
        ->call('configure', [
            [
                'before_array_assignments_colon' => false,
            ],
        ]);
};
