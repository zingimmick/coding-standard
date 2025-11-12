<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Zing\CodingStandard\PhpVersion;
use Zing\CodingStandard\Set\PhpCsFixerSetList;
use Zing\CodingStandard\SniffSettingsHelper;

return static function (ECSConfig $ecsConfig): void {
    SniffSettingsHelper::setPhpVersion(PhpVersion::PHP_70);
    $ecsConfig->sets([
        PhpCsFixerSetList::PHP70_MIGRATION,
        PhpCsFixerSetList::PHP70_MIGRATION_RISKY,
    ]);
};
