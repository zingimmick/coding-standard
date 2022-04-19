<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $containerConfigurator): void {
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitNoExpectationAnnotationFixer::class, [
        'target' => '4.3',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitNamespacedFixer::class, [
        'target' => '6.0',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitExpectationFixer::class, [
        'target' => '8.4',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitMockFixer::class, [
        'target' => '5.5',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer::class, [
        'target' => '5.6',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertInternalTypeFixer::class, [
        'target' => '7.5',
    ]);
};
