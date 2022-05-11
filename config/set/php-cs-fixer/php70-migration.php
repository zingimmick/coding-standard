<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->rule(\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer::class);
};
