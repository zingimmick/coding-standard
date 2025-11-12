<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Zing\CodingStandard\PhpVersion;
use Zing\CodingStandard\Set\PhpCsFixerSetList;
use Zing\CodingStandard\SniffSettingsHelper;

return static function (ECSConfig $ecsConfig): void {
    SniffSettingsHelper::setPhpVersion(PhpVersion::PHP_80);
    $ecsConfig->sets([
        PhpCsFixerSetList::PHP80_MIGRATION,
        PhpCsFixerSetList::PHP80_MIGRATION_RISKY,
    ]);
};
