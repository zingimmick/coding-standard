<?php

declare(strict_types=1);

use PHP_CodeSniffer\Config;
use Rector\Core\ValueObject\PhpVersion;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Zing\CodingStandard\Set\PhpCsFixerSetList;

return static function (ECSConfig $ecsConfig): void {
    Config::setConfigData('php_version', PhpVersion::PHP_80);
    $ecsConfig->sets([
        PhpCsFixerSetList::PHP80_MIGRATION,
        PhpCsFixerSetList::PHP80_MIGRATION_RISKY,
    ]);
};
