<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $containerConfigurator): void {
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitNoExpectationAnnotationFixer::class, [
        'target' => '4.3',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitExpectationFixer::class, [
        'target' => '5.2',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitNamespacedFixer::class, [
        'target' => '4.8',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitMockFixer::class, [
        'target' => '5.4',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer::class, [
        'target' => '5.0',
    ]);
};
