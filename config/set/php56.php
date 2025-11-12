<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Zing\CodingStandard\PhpVersion;
use Zing\CodingStandard\Set\PhpCsFixerSetList;
use Zing\CodingStandard\SniffSettingsHelper;

return static function (ECSConfig $ecsConfig): void {
    SniffSettingsHelper::setPhpVersion(PhpVersion::PHP_56);
    $ecsConfig->sets([
        PhpCsFixerSetList::PHP54_MIGRATION,
        PhpCsFixerSetList::PHP56_MIGRATION_RISKY,
    ]);
};
