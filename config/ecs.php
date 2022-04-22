<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
use Zing\CodingStandard\Set\ECSSetList;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->sets([
        SetList::CLEAN_CODE,
        SetList::SYMPLIFY,
        SetList::COMMON,
        SetList::PSR_12,
        ECSSetList::PHP_CODESNIFFER_CUSTOM,
        ECSSetList::SLEVOMAT_CODING_STANDARD_CUSTOM,
        ECSSetList::PHP_CS_FIXER_CUSTOM,
    ]);
};
