<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Zing\CodingStandard\Set\RectorSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->sets([
        SetList::CODE_QUALITY,
        SetList::DEAD_CODE,
        SetList::PRIVATIZATION,
        SetList::NAMING,
        SetList::TYPE_DECLARATION,
        SetList::INSTANCEOF,
        SetList::EARLY_RETURN,
        SetList::CODING_STYLE,
        SetList::STRICT_BOOLEANS,
        RectorSetList::FAKER_114,
    ]);
};
