<?php

declare(strict_types=1);

return static function (Symplify\EasyCodingStandard\Config\ECSConfig $containerConfigurator): void {
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitNoExpectationAnnotationFixer::class, [
        'target' => '4.3',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitMockFixer::class, [
        'target' => '5.5',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitExpectationFixer::class, [
        'target' => '5.6',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitNamespacedFixer::class, [
        'target' => '4.8',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer::class, [
        'target' => '5.6',
    ]);
};
