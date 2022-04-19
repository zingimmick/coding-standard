<?php

declare(strict_types=1);

return static function (Symplify\EasyCodingStandard\Config\ECSConfig $containerConfigurator): void {
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitNoExpectationAnnotationFixer::class, [
        'target' => '4.3',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer::class, [
        'target' => '3.5',
    ]);
};
