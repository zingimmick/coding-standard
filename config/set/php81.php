<?php

declare(strict_types=1);

use PHP_CodeSniffer\Config;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Zing\CodingStandard\PhpVersion;
use Zing\CodingStandard\Set\PhpCsFixerSetList;

return static function (ECSConfig $ecsConfig): void {
    Config::setConfigData('php_version', PhpVersion::PHP_81);
    $ecsConfig->sets([
        PhpCsFixerSetList::PHP81_MIGRATION,
        PhpCsFixerSetList::PHP80_MIGRATION_RISKY,
    ]);
};
