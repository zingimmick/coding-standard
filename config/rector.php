<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Zing\CodingStandard\Set\RectorSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->sets([
        RectorSetList::FAKER_114,
        SetList::CODE_QUALITY,
        SetList::DEAD_CODE,
        SetList::PRIVATIZATION,
        SetList::NAMING,
        SetList::TYPE_DECLARATION,
        SetList::EARLY_RETURN,
        SetList::TYPE_DECLARATION_STRICT,
        SetList::CODING_STYLE,
    ]);
};
