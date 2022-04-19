<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $containerConfigurator): void {
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationArrayAssignmentFixer::class, [
        'operator' => ':',
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationBracesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationIndentationFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationSpacesFixer::class, [
        'before_array_assignments_colon' => false,
    ]);
};
