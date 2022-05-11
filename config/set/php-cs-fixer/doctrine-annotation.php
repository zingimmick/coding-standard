<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationArrayAssignmentFixer::class, [
        'operator' => ':',
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationBracesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationIndentationFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationSpacesFixer::class, [
        'before_array_assignments_colon' => false,
    ]);
};
