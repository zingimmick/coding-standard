<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
use Zing\CodingStandard\Set\ECSSetList;

return ECSConfig::configure()
    ->withSets([
        SetList::PSR_12,
        SetList::COMMON,
        SetList::CLEAN_CODE,
        ECSSetList::PHP_CS_FIXER_CUSTOM,
        ECSSetList::PHP_CODESNIFFER_CUSTOM,
        ECSSetList::SLEVOMAT_CODING_STANDARD_CUSTOM,
    ]);
