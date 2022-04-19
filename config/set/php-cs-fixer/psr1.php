<?php

declare(strict_types=1);

return static function (Symplify\EasyCodingStandard\Config\ECSConfig $containerConfigurator): void {
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
};
