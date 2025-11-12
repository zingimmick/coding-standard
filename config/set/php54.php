<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Zing\CodingStandard\PhpVersion;
use Zing\CodingStandard\Set\PhpCsFixerSetList;
use Zing\CodingStandard\SniffSettingsHelper;

return static function (ECSConfig $ecsConfig): void {
    SniffSettingsHelper::setPhpVersion(PhpVersion::PHP_54);
    $ecsConfig->sets([
        PhpCsFixerSetList::PHP54_MIGRATION,
    ]);
};
