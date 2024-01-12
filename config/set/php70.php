<?php

declare(strict_types=1);

use PHP_CodeSniffer\Config;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Zing\CodingStandard\PhpVersion;
use Zing\CodingStandard\Set\PhpCsFixerSetList;

return static function (ECSConfig $ecsConfig): void {
    Config::setConfigData('php_version', PhpVersion::PHP_70);
    $ecsConfig->sets([
        PhpCsFixerSetList::PHP70_MIGRATION,
        PhpCsFixerSetList::PHP70_MIGRATION_RISKY,
    ]);
};
