<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $containerConfigurator): void {
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer::class, [
        'target' => '3.0',
    ]);
};
