<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Zing\CodingStandard\PhpVersion;
use Zing\CodingStandard\Set\PhpCsFixerSetList;
use Zing\CodingStandard\SniffSettingsHelper;

return static function (ECSConfig $ecsConfig): void {
    SniffSettingsHelper::setPhpVersion(PhpVersion::PHP_84);
    $ecsConfig->sets([
        PhpCsFixerSetList::PHP84_MIGRATION,
        PhpCsFixerSetList::PHP82_MIGRATION_RISKY,
    ]);
};
