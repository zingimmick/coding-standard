<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Zing\CodingStandard\PhpVersion;
use Zing\CodingStandard\Set\PhpCsFixerSetList;
use Zing\CodingStandard\SniffSettingsHelper;

return static function (ECSConfig $ecsConfig): void {
    SniffSettingsHelper::setPhpVersion(PhpVersion::PHP_83);
    $ecsConfig->sets([
        PhpCsFixerSetList::PHP83_MIGRATION,
        PhpCsFixerSetList::PHP83_MIGRATION_RISKY,
    ]);
};
